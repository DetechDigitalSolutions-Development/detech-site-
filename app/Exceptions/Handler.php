<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Support\Facades\Log;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \PsrLogLogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            // You can add custom reporting logic here
        });

        // Custom exception handling
        $this->renderable(function (Throwable $exception, $request) {
            return $this->handleException($exception, $request);
        });
    }

    /**
     * Convert an authentication exception into a response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthenticated. Please login to access this resource.',
                'redirect' => route('login')
            ], 401);
        }

        return redirect()->guest(route('login'))->with('error', 'Please login to access this page.');
    }

    /**
     * Convert a validation exception into a response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Validation\ValidationException  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function invalid($request, ValidationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed.',
                'errors' => $exception->errors(),
            ], 422);
        }

        return parent::invalid($request, $exception);
    }

    /**
     * Custom exception handler
     *
     * @param \Throwable $exception
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    private function handleException(Throwable $exception, $request)
    {
        // Handle 404 - Not Found
        if ($exception instanceof NotFoundHttpException) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'The requested resource was not found.',
                    'path' => $request->path()
                ], 404);
            }

            return response()->view('errors.404', [
                'exception' => $exception,
                'requestedUrl' => $request->fullUrl()
            ], 404);
        }

        // Handle 403 - Forbidden
        if ($exception instanceof HttpException && $exception->getStatusCode() == 403) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'You do not have permission to access this resource.',
                ], 403);
            }

            return response()->view('errors.403', [
                'exception' => $exception
            ], 403);
        }

        // Handle 405 - Method Not Allowed
        if ($exception instanceof MethodNotAllowedHttpException) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'The requested method is not allowed for this endpoint.',
                    'allowed_methods' => $exception->getHeaders()['Allow'] ?? []
                ], 405);
            }

            return response()->view('errors.405', [
                'exception' => $exception
            ], 405);
        }

        // Handle 419 - Page Expired (CSRF token mismatch)
        if ($exception instanceof HttpException && $exception->getStatusCode() == 419) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Your session has expired. Please refresh the page and try again.',
                ], 419);
            }

            return response()->view('errors.419', [
                'exception' => $exception
            ], 419);
        }

        // Handle 500 - Internal Server Error
        if ($exception instanceof HttpException && $exception->getStatusCode() == 500) {
            // Log the error for debugging (but don't show details to users)
            Log::error('500 Error: ' . $exception->getMessage(), [
                'exception' => $exception,
                'url' => $request->fullUrl(),
                'user_id' => auth()->id() ?? 'guest'
            ]);

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => config('app.debug') 
                        ? $exception->getMessage() 
                        : 'An internal server error occurred. Please try again later.',
                ], 500);
            }

            return response()->view('errors.500', [
                'exception' => $exception,
                'showDetails' => config('app.debug')
            ], 500);
        }

        // Handle other HTTP exceptions
        if ($exception instanceof HttpException) {
            $statusCode = $exception->getStatusCode();
            
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => $exception->getMessage() ?: 'An error occurred.',
                ], $statusCode);
            }

            // Check if a specific error view exists
            $viewName = "errors.{$statusCode}";
            if (view()->exists($viewName)) {
                return response()->view($viewName, [
                    'exception' => $exception
                ], $statusCode);
            }
        }

        // Default handling for other exceptions
        return null;
    }

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        // Log exceptions based on environment
        if (app()->environment('production')) {
            // Only log serious errors in production
            if ($exception instanceof HttpException && $exception->getStatusCode() >= 500) {
                Log::error('Server Error', [
                    'message' => $exception->getMessage(),
                    'file' => $exception->getFile(),
                    'line' => $exception->getLine(),
                    'url' => request()->fullUrl(),
                    'user_agent' => request()->userAgent(),
                ]);
            }
        } else {
            // Log all exceptions in development
            parent::report($exception);
        }
    }

    /**
     * Determine if the exception should be reported.
     *
     * @param  \Throwable  $exception
     * @return bool
     */
    public function shouldReport(Throwable $exception)
    {
        // Don't report certain exceptions
        if ($exception instanceof NotFoundHttpException) {
            return false; // Don't log 404 errors
        }

        return true;
    }
}