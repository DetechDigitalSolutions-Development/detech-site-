@extends('layouts.app')

@section('content')
    <main>
        <!-- Page Banner -->
        @include('components.page_banner', [
            'title' => 'Our Products',
            'title_route' => 'products',
            'sub_title' => $product->title,
            'banner_image' => 'assets/img/banner/page-banner.png',
        ])

        <!-- Project Details -->
        <div class="page-project-details mt-100">
            <div class="container">
                <div class="project-media radius18" data-aos="fade-up">
                    <img src="{{ Storage::disk(config('public'))->url($product->featured_img ?? null) }}" width="1400"
                        height="637" loading="lazy" alt="Image">
                </div>
            </div>
            <div class="container">
                <div class="project-details-content">
                    <div class="row">
                        <div class="col-lg-7 col-12">
                            <div class="content-details-inner" data-aos="fade-up">
                                <h2 class="heading text-50" data-aos="fade-up">{{ $product->title }}</h2>
                                <div class="mt-4" data-aos="fade-up">
                                    <p class="text text-18" data-aos="fade-up">{!! $product->content_section_1 !!}</p>
                                </div>

                                <div class="project-image-block">
                                    <div class="row product-grid">
                                        @if (!empty($product->product_imgs) && is_array($product->product_imgs))
                                            @foreach ($product->product_imgs as $index => $img)
                                                <div class="col-md-6 col-12">
                                                    <div class="project-img radius18" data-aos="fade-up"
                                                        @if ($index > 0) data-aos-delay="{{ $index * 100 }}" @endif>

                                                        <img src="{{ Storage::disk(config('public'))->url($img) }}"
                                                            width="800" height="791" loading="lazy"
                                                            alt="Product Image {{ $index + 1 }}">
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>

                                <div class="mt-4" data-aos="fade-up">
                                    <p class="text text-18" data-aos="fade-up">{!! $product->content_section_2 !!}</p>
                                </div>

                            </div>
                            <div class="project-challenge">
                                <h2 class="heading text-36" data-aos="fade-up">The Challenge Of Project</h2>
                                <ul class="challenge-list list-unstyled">
                                    @foreach ($product->challenge_points as $point)
                                        <li class="challenge-item" data-aos="fade-up">
                                            <svg class="icon-24" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.9999 6.99486L16.5899 5.58594L10.2499 11.9211L11.6599 13.33L17.9999 6.99486ZM22.2399 5.58594L11.6599 16.1578L7.47991 11.991L6.06991 13.3999L11.6599 18.9857L23.6599 6.99486L22.2399 5.58594ZM0.409912 13.3999L5.99991 18.9857L7.40991 17.5767L1.82991 11.991L0.409912 13.3999Z"
                                                    fill="CurrentColor" />
                                            </svg>
                                            {{ $point }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12">
                            <div class="project-sidebar">
                                <div class="sidebar-widget project-info radius18" data-aos="fade-up">
                                    <h2 class="heading text-24">Project Information</h2>
                                    <ul class="project-info-list list-unstyled">
                                        <li class="project-info-item">
                                            <div class="info-title heading text-18">Clients:</div>
                                            <div class="info-data text text-16">{{ $product->client_name }}</div>
                                        </li>
                                        <li class="project-info-item">
                                            <div class="info-title heading text-18">Start Date:</div>
                                            <div class="info-data text text-16">{{ $product->start_date }}</div>
                                        </li>
                                        <li class="project-info-item">
                                            <div class="info-title heading text-18">End Date:</div>
                                            <div class="info-data text text-16">{{ $product->end_date }}</div>
                                        </li>
                                        <li class="project-info-item">
                                            <div class="info-title heading text-18">Owner:</div>
                                            <div class="info-data text text-16">{{ $product->owner }}</div>
                                        </li>
                                        <li class="project-info-item">
                                            <div class="info-title heading text-18">Categories:</div>
                                            <div class="info-data text text-16">{{ implode(', ', $product->categories) }}
                                            </div>
                                        </li>
                                        <li class="project-info-item">
                                            <div class="info-title heading text-18">Website:</div>
                                            <a href="{{ $product->website }}"
                                                class="info-data text text-16">{{ str_replace(['http://', 'https://'], '', $product->website) }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar-widget service-contact radius18" data-aos="fade-up">
                                    <div class="media media-bg overlay">
                                        <img src="{{ asset('assets/img/service/service-contact.png') }}" width="1000"
                                            height="929" loading="lazy" alt="image">
                                    </div>
                                    <div class="service-contact-content">
                                        <h2 class="heading text-36">
                                            Contact with us <br>
                                            for any advice
                                        </h2>
                                        <a class="icon-contact" href="tel:{{setting('company_tel_no', $default = null)}}"
                                            aria-label="Call us at {{setting('company_tel_no', $default = null)}} number">
                                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.8337 3.67188C28.2097 3.67188 32.4066 5.41026 35.5009 8.50461C38.5953 11.599 40.3337 15.7958 40.3337 20.1719M23.8337 11.0052C26.2648 11.0052 28.5964 11.971 30.3155 13.6901C32.0346 15.4091 33.0003 17.7407 33.0003 20.1719M25.359 30.3799C25.7376 30.5538 26.1642 30.5935 26.5684 30.4925C26.9727 30.3915 27.3304 30.1559 27.5828 29.8244L28.2337 28.9719C28.5752 28.5165 29.0181 28.1469 29.5272 27.8923C30.0363 27.6377 30.5978 27.5052 31.167 27.5052H36.667C37.6395 27.5052 38.5721 27.8915 39.2597 28.5791C39.9473 29.2668 40.3337 30.1994 40.3337 31.1719V36.6719C40.3337 37.6443 39.9473 38.577 39.2597 39.2646C38.5721 39.9522 37.6395 40.3385 36.667 40.3385C27.9148 40.3385 19.5212 36.8618 13.3325 30.6731C7.14377 24.4844 3.66699 16.0907 3.66699 7.33854C3.66699 6.36608 4.0533 5.43345 4.74093 4.74582C5.42857 4.05818 6.3612 3.67188 7.33366 3.67188H12.8337C13.8061 3.67188 14.7387 4.05818 15.4264 4.74582C16.114 5.43345 16.5003 6.36608 16.5003 7.33854V12.8385C16.5003 13.4078 16.3678 13.9692 16.1132 14.4783C15.8587 14.9875 15.489 15.4303 15.0337 15.7719L14.1757 16.4154C13.8391 16.6724 13.6019 17.0379 13.5043 17.45C13.4067 17.8621 13.4548 18.2952 13.6403 18.6759C16.1459 23.765 20.2668 27.8807 25.359 30.3799Z"
                                                    stroke="#20282D" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <span class="visually-hidden">Call us at {{setting('company_tel_no', $default = null)}} number</span>
                                        </a>
                                        <div class="contact-text text text-16">
                                            Need help? Talk to an expert
                                        </div>
                                        <a class="contact-number heading text-24" href="tel:{{setting('company_tel_no', $default = null)}}"
                                            aria-label="Call us at {{setting('company_tel_no', $default = null)}} number">
                                            {{setting('company_tel_no', $default = null)}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
