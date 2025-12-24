@extends('layouts.app')

@section('content')
<main>
    @include('components.page_banner',['title'=>'Session Expired','banner_image'=>'assets/img/banner/error-banner.png'])
    
    <div class="section-error section-padding">
        <div class="container">
            <div class="section-headings text-center">
                <h1 class="heading text-80 fw-700" data-aos="fade-up">419</h1>
                <h2 class="heading text-48 fw-600 mt-3" data-aos="fade-up" data-aos-delay="100">
                    Page Expired
                </h2>
                <p class="text text-18 mt-3" data-aos="fade-up" data-aos-delay="150">
                    Your session has expired. Please refresh the page and try again.
                </p>
                <div class="buttons mt-5" data-aos="fade-up" data-aos-delay="200">
                    <button onclick="location.reload()" class="button button--primary">
                        Refresh Page
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection