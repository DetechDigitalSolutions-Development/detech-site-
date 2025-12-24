@extends('layouts.app')

@section('content')
<main>
    <!-- Page Banner -->
    @include('components.page_banner',['title'=>'403 Forbidden','banner_image'=>'assets/img/banner/error-banner.png'])

    <!-- 403 Error Section -->
    <div class="section-error section-padding">
        <div class="container">
            <div class="section-headings text-center">
                <div class="error-media" data-aos="zoom-in-up">
                    <img src="{{ asset('assets/img/error/403.png') }}" 
                         alt="403 Forbidden" 
                         width="658" 
                         height="277" 
                         loading="lazy">
                </div>

                <h2 class="heading text-48 fw-700 mt-4" data-aos="fade-up">
                    Access Denied
                </h2>
                
                <p class="text text-18 mt-3" data-aos="fade-up" data-aos-delay="100">
                    You don't have permission to access this page. This might be because:
                </p>
                
                <ul class="text text-16 mt-3 text-left d-inline-block" data-aos="fade-up" data-aos-delay="150">
                    <li class="mb-2">• Your account doesn't have the required privileges</li>
                    <li class="mb-2">• You're trying to access restricted content</li>
                    <li class="mb-2">• The page requires authentication</li>
                </ul>

                <div class="buttons mt-5" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ url('/') }}" class="button button--primary me-3" aria-label="Back to Home">
                        Back to Home
                        <span class="svg-wrapper">
                            <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="CurrentColor"/>
                            </svg>
                        </span>
                    </a>
                    
                    @auth
                        <a href="{{ url('/dashboard') }}" class="button button--secondary" aria-label="Go to Dashboard">
                            Go to Dashboard
                            <span class="svg-wrapper">
                                <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 3L3 7V17H17V7L10 3Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 17V10H5V17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="button button--secondary" aria-label="Login">
                            Login
                            <span class="svg-wrapper">
                                <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 6V4C7 2.89543 7.89543 2 9 2H16C17.1046 2 18 2.89543 18 4V16C18 17.1046 17.1046 18 16 18H9C7.89543 18 7 17.1046 7 16V14" stroke="currentColor" stroke-width="1.5"/>
                                    <path d="M12 11H2M2 11L5 8M2 11L5 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </a>
                    @endauth
                </div>
                
                @if(auth()->check())
                    <div class="mt-4" data-aos="fade-up" data-aos-delay="250">
                        <p class="text text-14">
                            Logged in as: <strong>{{ auth()->user()->email }}</strong>
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</main>
@endsection

@push('styles')
<style>
    .section-error {
        min-height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .error-media img {
        max-width: 100%;
        height: auto;
    }
    
    .text-left {
        text-align: left;
    }
    
    @media (max-width: 768px) {
        .buttons {
            flex-direction: column;
            gap: 15px;
        }
        
        .buttons .button {
            width: 100%;
            justify-content: center;
        }
    }
</style>
@endpush