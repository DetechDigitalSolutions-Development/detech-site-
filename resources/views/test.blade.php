@extends('layouts.app')

@section('content')
    <main>
        <!-- Page Banner -->
        @include('components.page_banner', [
            'title' => 'Careers',
            'banner_image' => 'assets/img/banner/page-banner.png',
        ])



        <div class="faq mt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 form">
                        <!-- Search Widget -->
                        <div class="field" data-aos="fade-up">
                            <form action="#" class="form-blog-search">
                                <input type="text" id="blog-search-input" name="blog-search" placeholder="Search here"
                                    class="text-18">

                                <!-- Custom select dropdown for full styling control -->
                                <div class="custom-select field text-18" role="combobox" aria-expanded="false"
                                    aria-haspopup="listbox">
                                    <div class="custom-select__trigger text-18" tabindex="0" aria-label="Select job type">
                                        <span>Select a service</span>
                                    </div>
                                    <div class="custom-select__options" role="listbox">
                                        <div class="custom-select__option" role="option" data-value="" tabindex="0">
                                            Select a Job Type</div>
                                        <div class="custom-select__option" role="option" data-value="online"
                                            tabindex="0">Online</div>
                                        <div class="custom-select__option" role="option" data-value="onsite"
                                            tabindex="0">Onsite</div>
                                        <div class="custom-select__option" role="option" data-value="hybrid"
                                            tabindex="0">Hybrid</div>
                                    </div>
                                </div>

                                <button type="submit" class="button button--primary">
                                    Reset
                                </button>
                            </form>
                        </div>
                        <div class="field buttons" data-aos="fade-up" data-aos-delay="200">
                            <button class="button button--primary" aria-label="hero button">
                                All
                                <span class="svg-wrapper">2</span>
                            </button>
                            <button class="button button--primary" aria-label="hero button">
                                Software Engineering
                                <span class="svg-wrapper">2</span>
                            </button>
                        </div>
                        <div class="accordion-list " data-aos="fade-up" data-aos-delay="400">
                            <div class="accordion-block hover" data-aos="fade-up">
                                <div class="accordion-opener heading text-22">
                                    Full-Stack Software Engineer (In House)
                                    <div class="">
                                        <div class="subheading text-20 subheading-bg">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 2C8.13 2 5 5.13 5 9C5 13.17 9.42 18.92 11.24 21.11C11.64 21.59 12.37 21.59 12.77 21.11C14.58 18.92 19 13.17 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9C9.5 7.62 10.62 6.5 12 6.5C13.38 6.5 14.5 7.62 14.5 9C14.5 10.38 13.38 11.5 12 11.5Z"
                                                    fill="currentColor" />
                                            </svg>
                                            <span>Jaffna</span>
                                        </div>
                                        <div class="subheading text-20 subheading-bg">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M20 6H16V4C16 2.89 15.11 2 14 2H10C8.89 2 8 2.89 8 4V6H4C2.89 6 2 6.89 2 8V19C2 20.11 2.89 21 4 21H20C21.11 21 22 20.11 22 19V8C22 6.89 21.11 6 20 6ZM10 4H14V6H10V4ZM20 19H4V8H20V19Z"
                                                    fill="currentColor" />
                                            </svg>
                                            <span> Onsite</span>
                                        </div>
                                        <div class="subheading text-20 subheading-bg">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 16V4H3V16H21ZM21 2C22.1 2 23 2.9 23 4V16C23 17.1 22.1 18 21 18H14V20H16V22H8V20H10V18H3C1.9 18 1 17.1 1 16V4C1 2.9 1.9 2 3 2H21Z"
                                                    fill="currentColor" />
                                                <path d="M5 6H19V12H5V6Z" fill="currentColor" />
                                                <path d="M7 14H9V16H7V14Z" fill="currentColor" />
                                            </svg>
                                            <span> Hybrid</span>
                                        </div>
                                        <div class="subheading text-20 subheading-bg">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="2" y="3" width="20" height="14" rx="1"
                                                    stroke="currentColor" stroke-width="1.5" />
                                                <path d="M8 21H16" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                            </svg>
                                            <span> Online</span>
                                        </div>
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
