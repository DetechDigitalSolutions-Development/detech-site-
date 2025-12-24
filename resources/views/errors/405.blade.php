@extends('layouts.app')

@section('content')
<main>
    @include('components.page_banner',['title'=>'Method Not Allowed','banner_image'=>'assets/img/banner/error-banner.png'])
    
    <div class="section-error section-padding">
        <div class="container">
            <div class="section-headings text-center">
                <h1 class="heading text-80 fw-700" data-aos="fade-up">405</h1>
                <h2 class="heading text-48 fw-600 mt-3" data-aos="fade-up" data-aos-delay="100">
                    Method Not Allowed
                </h2>
                <p class="text text-18 mt-3" data-aos="fade-up" data-aos-delay="150">
                    The request method is not supported for this resource.
                </p>
                <div class="buttons mt-5" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ url('/') }}" class="button button--primary">
                        Go to Homepage
                        <span class="svg-wrapper">
                                            <svg class="icon-20" width="20" height="20" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.55664 2.88281L6.77097 3.66848L9.54875 6.44625H2.55664V7.55736H9.54875L6.77097 10.3351L7.55664 11.1208L11.6756 7.0018L7.55664 2.88281Z"
                                                    fill="CurrentColor" />
                                            </svg>
                                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection