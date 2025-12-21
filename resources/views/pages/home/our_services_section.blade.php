<!-- Our Services -->
<div class="our-services mt-100 section-padding">
    <div class="container">
        <div class="section-headings section-headings-horizontal">
            <div class="section-headings-left">
                <div class="subheading text-20 subheading-bg" data-aos="fade-right" data-aos-delay="10">
                    <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_9088_4143)">
                            <path
                                d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                fill="CurrentColor" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="14" height="14" fill="CurrentColor" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span>Our Services</span>
                    <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_9088_4143)">
                            <path
                                d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                                fill="CurrentColor" />
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="14" height="14" fill="CurrentColor" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <h2 class="heading text-50" data-aos="fade-right" data-aos-delay="20">
                    Technology that adapts to your vision and drives your growth.
                </h2>
            </div>

            <div class="section-headings-right buttons" data-aos="fade-left" data-aos-delay="20">
                <a href="{{ route('services.index') }}" class="button button--secondary" aria-label="hero button">
                    More Services
                    <span class="svg-wrapper">
                        <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>

        <div class="section-content" data-aos="fade-up">
            <accordion-horizontal class="accordion-horizontal">
                <ul class="service-list list-unstyled radius18">

                    <!-- Service -->
                    @foreach ($services as $service)
                        <li class="accordion-li">
                            <div class="accordion-title">
                                <div class="accordion-title-icon">
                                    <div
                                        class="card-icon icon-wrapper icon-wrapper--dark icon-wrapper--rounded icon-wrapper--fixed">
                                        @php
                                            $icon_path = app('App\Http\Controllers\ServiceController')->getServiceIcon(
                                                $service['id'],
                                            );
                                        @endphp

                                        @if ($icon_path && file_exists(public_path($icon_path)))
                                            <img src="{{ asset($icon_path) }}" alt="Service Icon"
                                                class="service-icon-small icon-invert icon-fixed">
                                        @else
                                            <!-- Fallback icon -->
                                            <img src="{{ asset('assets/svg/default-icon.svg') }}" alt="Service Icon"
                                                class="service-icon-small icon-invert icon-fixed">
                                        @endif
                                    </div>

                                    <h2 class="heading text-24 text-rotate">{{ $service['title'] }}</h2>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1" stroke="currentColor" class="icon icon-plus-circle">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1" stroke="currentColor" class="icon icon-minus-circle">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </div>
                            <div class="accordion-content">
                                <div class="service-content-inner">
                                    <div>
                                        <div class="service-icon d-none d-lg-block">
                                            <div
                                                class="card-icon icon-wrapper icon-wrapper--dark icon-wrapper--rounded icon-wrapper--fixed">
                                                @php
                                                    $icon_path = app(
                                                        'App\Http\Controllers\ServiceController',
                                                    )->getServiceIcon($service['id']);
                                                @endphp

                                                @if ($icon_path && file_exists(public_path($icon_path)))
                                                    <img src="{{ asset($icon_path) }}" alt="Service Icon"
                                                        class="service-icon-small icon-invert icon-fixed">
                                                @else
                                                    <!-- Fallback icon -->
                                                    <img src="{{ asset('assets/svg/default-icon.svg') }}"
                                                        alt="Service Icon"
                                                        class="service-icon-small icon-invert icon-fixed">
                                                @endif
                                            </div>
                                        </div>
                                        <h2 class="heading text-24">{{ $service['title'] }}</h2>
                                        <p class="text text-16">{{ $service['description'] }}</p>
                                    </div>
                                    <div class="service-button">
                                        <a href="{{ route('services.show', $service['id']) }}"
                                            class="button button--primary">+ View Details</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </accordion-horizontal>
        </div>
    </div>
</div>
