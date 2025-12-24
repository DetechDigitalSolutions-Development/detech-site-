@extends('layouts.app')

@section('content')
    <main>
        <!-- Page Banner -->
        @include('components.page_banner', [
            'title' => '404 Not Found',
            'banner_image' => 'assets/img/banner/error-banner.png',
        ])

        <!-- 404 Error Section -->
        <div class="section-error section-padding">
            <div class="container">
                <div class="section-headings text-center">
                    {{-- <div class="error-media" data-aos="zoom-in-up">
                        <img src="{{ asset('assets/img/error/404.png') }}" alt="404 Not Found" 
                            loading="lazy">
                    </div> --}}

                    <h2 class="heading text-48 fw-700 mt-4" data-aos="fade-up">
                        Page Not Found
                    </h2>

                    <p class="text text-18 mt-3" data-aos="fade-up" data-aos-delay="100">
                        The page you are looking for might have been removed, had its name changed,
                        or is temporarily unavailable.
                    </p>

                    <div class="mt-4" data-aos="fade-up" data-aos-delay="150">
                        <p class="text text-16">
                            You tried to access: <code class="bg-light p-2 rounded">{{ url()->current() }}</code>
                        </p>
                    </div>

                    <div class="buttons" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ url('/') }}" class="button button--primary" aria-label="Back to Home">
                            Back to Home
                            <span class="svg-wrapper">
                                <svg class="icon-20" width="20" height="20" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.55664 2.88281L6.77097 3.66848L9.54875 6.44625H2.55664V7.55736H9.54875L6.77097 10.3351L7.55664 11.1208L11.6756 7.0018L7.55664 2.88281Z"
                                        fill="CurrentColor" />
                                </svg>
                            </span>
                        </a>

                        <button onclick="history.back()" class="button button--primary" aria-label="Go Back">
                            Go Back
                            <span class="svg-wrapper">
                                <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 10H5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M10 5L5 10L10 15" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>

                        </button>

                        <a href="{{ route('contact') }}" class="button button--primary" aria-label="Contact Support">
                            Contact Support
                            <span class="svg-wrapper">
                                <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 6H17V14C17 14.5523 16.5523 15 16 15H4C3.44772 15 3 14.5523 3 14V6Z"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <path d="M3 6L10 11L17 6" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>

                        </a>
                    </div>

                    <!-- Search Form -->
                    {{-- <div class="mt-5 pt-4 border-top" data-aos="fade-up" data-aos-delay="250">
                    <h3 class="heading text-24 fw-600 mb-4">Search Our Site</h3>
                    <form action="{{ route('search') }}" method="GET" class="d-flex gap-3 justify-content-center">
                        <div class="form-group" style="max-width: 400px; width: 100%;">
                            <input type="text" 
                                   name="q" 
                                   class="form-control p-3" 
                                   placeholder="What are you looking for?"
                                   aria-label="Search">
                        </div>
                        <button type="submit" class="button button--primary" aria-label="Search">
                            <span class="svg-wrapper">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.7104 20.2875L18.0004 16.6075C19.4405 14.8119 20.1379 12.5328 19.9492 10.2388C19.7605 7.94476 18.7001 5.81025 16.9859 4.27411C15.2718 2.73797 13.0342 1.91697 10.7333 1.97993C8.43243 2.04289 6.24311 2.98502 4.61553 4.6126C2.98795 6.24018 2.04582 8.4295 1.98286 10.7304C1.9199 13.0313 2.7409 15.2688 4.27704 16.983C5.81318 18.6971 7.94769 19.7576 10.2417 19.9463C12.5357 20.135 14.8148 19.4376 16.6104 17.9975L20.2904 21.6775C20.3834 21.7712 20.494 21.8456 20.6158 21.8964C20.7377 21.9471 20.8684 21.9733 21.0004 21.9733C21.1324 21.9733 21.2631 21.9471 21.385 21.8964C21.5068 21.8456 21.6174 21.7712 21.7104 21.6775C21.8906 21.491 21.9914 21.2418 21.9914 20.9825C21.9914 20.7231 21.8906 20.4739 21.7104 20.2875Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </button>
                    </form>
                </div> --}}

                    <!-- Quick Links -->
                    <div class="mt-5" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="heading text-24 fw-600 mb-4">Popular Pages</h3>
                        <div class="row justify-content-center">
                            <div class="col-md-3 col-sm-6 mb-3">
                                <a href="{{ route('services.index') }}"
                                    class="text text-16 link d-block p-3 border rounded text-center">
                                    <svg class="icon-24 mb-2" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 8L10 13L21 3M21 8V17C21 18.1046 20.1046 19 19 19H5C3.89543 19 3 18.1046 3 17V7C3 5.89543 3.89543 5 5 5H14"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <div>Services</div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-3">
                                <a href="{{ route('about') }}"
                                    class="text text-16 link d-block p-3 border rounded text-center">
                                    <svg class="icon-24 mb-2" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15Z"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <path
                                            d="M2.90527 20.2491C3.82736 18.6531 5.15322 17.3278 6.74966 16.4064C8.34611 15.485 10.1569 15 12 15C13.8432 15 15.654 15.4851 17.2505 16.4065C18.8469 17.3279 20.1728 18.6533 21.0949 20.2493"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                    <div>About Us</div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-3">
                                <a href="{{ route('contact') }}"
                                    class="text text-16 link d-block p-3 border rounded text-center">
                                    <svg class="icon-24 mb-2" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4 21C3.44772 21 3 20.5523 3 20V10C3 9.44772 3.44772 9 4 9H20C20.5523 9 21 9.44772 21 10V20C21 20.5523 20.5523 21 20 21H4Z"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <path d="M3 10L10 15L21 10" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div>Contact</div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-3">
                                <a href="{{ route('blogs') }}"
                                    class="text text-16 link d-block p-3 border rounded text-center">
                                    <svg class="icon-24 mb-2" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <path d="M8 10H16" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path d="M8 14H13" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                    </svg>
                                    <div>Blog</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('styles')
    <style>
        .section-error {
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .error-media img {
            max-width: 1%;
            /* height: auto; */
        }

        code {
            font-family: 'Courier New', monospace;
            color: #e83e8c;
            word-break: break-all;
        }

        .link:hover {
            background-color: rgba(28, 37, 57, 0.05);
            transition: background-color 0.3s ease;
        }

        /* @media (max-width: 768px) {
                    .buttons {
                        flex-direction: column;
                        gap: 15px;
                    }

                    .buttons .button {
                        width: 100%;
                        justify-content: center;
                    }

                    .form-group {
                        max-width: 100% !important;
                    }
                } */
    </style>
@endpush
