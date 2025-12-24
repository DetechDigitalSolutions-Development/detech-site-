@extends('layouts.app')

@section('content')
    <main>
        @include('components.page_banner', [
            'title' => 'Server Error',
            'banner_image' => 'assets/img/banner/error-banner.png',
        ])

        <div class="section-error section-padding">
            <div class="container">
                <div class="section-headings text-center">
                    <h1 class="heading text-80 fw-700" data-aos="fade-up">500</h1>
                    <h2 class="heading text-48 fw-600 mt-3" data-aos="fade-up" data-aos-delay="100">
                        Internal Server Error
                    </h2>
                    <p class="text text-18 mt-3" data-aos="fade-up" data-aos-delay="150">
                        Something went wrong on our end. Our team has been notified.
                    </p>

                    @if ($showDetails ?? false)
                        <div class="mt-4 p-3 bg-light rounded" data-aos="fade-up" data-aos-delay="200">
                            <p class="text text-14 mb-1"><strong>Error:</strong> {{ $exception->getMessage() }}</p>
                            <p class="text text-12 mb-0">
                                <strong>File:</strong> {{ $exception->getFile() }}:{{ $exception->getLine() }}
                            </p>
                        </div>
                    @endif

                    <div class="buttons mt-5" data-aos="fade-up" data-aos-delay="250">
                        <a href="{{ url('/') }}" class="button button--primary me-3">
                            Go to Homepage
                            <span class="svg-wrapper">
                                <svg class="icon-20" width="20" height="20" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.55664 2.88281L6.77097 3.66848L9.54875 6.44625H2.55664V7.55736H9.54875L6.77097 10.3351L7.55664 11.1208L11.6756 7.0018L7.55664 2.88281Z"
                                        fill="CurrentColor" />
                                </svg>
                            </span>
                        </a>
                        <button onclick="location.reload()" class="button button--primary" type="submit">
                            Try Again
                            <span class="svg-wrapper">
                                <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 3.5V7.5H13.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.5 16.5V12.5H6.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M3.015 7.5C3.635 5.39 5.53 3.5 7.985 3.5C9.695 3.5 11.215 4.305 12.21 5.5L17.5 7.5M2.5 12.5L7.79 14.5C8.785 15.695 10.305 16.5 12.015 16.5C14.47 16.5 16.365 14.61 16.985 12.5"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </button>
                    </div>

                    <div class="mt-5 pt-4 border-top" data-aos="fade-up" data-aos-delay="300">
                        <p class="text text-14">
                            If the problem persists, please contact our support team.
                        </p>
                        <a href="{{ route('contact') }}" class="text text-16 link">
                            Contact Support →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
