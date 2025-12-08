@extends('layouts.app')

@section('content')
    <main>
        <!-- Page Banner -->
        @include('components.page_banner', [
            'title' => 'Careers',
            'title_route' => 'careers',
            'sub_title' => $career->job_title,
            'banner_image' => 'assets/img/banner/page-banner.png',
        ])

        <!-- Blog List -->
        <div class="page-blog mt-100">
            <h2 class="heading text-50 container" data-aos="fade-up">
                {{ $career->job_title }}
            </h2>
            <div class="container" data-aos="fade-up">
                <div class="subheading text-20 subheading-bg">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2C8.13 2 5 5.13 5 9C5 13.17 9.42 18.92 11.24 21.11C11.64 21.59 12.37 21.59 12.77 21.11C14.58 18.92 19 13.17 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9C9.5 7.62 10.62 6.5 12 6.5C13.38 6.5 14.5 7.62 14.5 9C14.5 10.38 13.38 11.5 12 11.5Z"
                            fill="currentColor" />
                    </svg>
                    <span>{{$career->job_location}}</span>
                </div>
                <div class="subheading text-20 subheading-bg">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20 6H16V4C16 2.89 15.11 2 14 2H10C8.89 2 8 2.89 8 4V6H4C2.89 6 2 6.89 2 8V19C2 20.11 2.89 21 4 21H20C21.11 21 22 20.11 22 19V8C22 6.89 21.11 6 20 6ZM10 4H14V6H10V4ZM20 19H4V8H20V19Z"
                            fill="currentColor" />
                    </svg>
                    <span> {{ $career->job_type }}</span>
                </div>
            </div>

            <div class="container ">
                <div class="blog-details">
                    <div class="card-blog-list" data-aos="fade-up">
                        <div class="card-blog-content">


                            <div class="blog-description">
                                {{-- Job description content goes here --}}
                                 {!! $career->job_content !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field buttons mt-4" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('careers.apply', $career->id) }}" class="button button--primary" aria-label="hero button">
                        Apply Now
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
        </div>
    </main>
@endsection
