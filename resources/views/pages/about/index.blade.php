@extends('layouts.app')

@section('content')
<main>
      <!-- Page Banner -->
      @include('components.page_banner',['title'=>'About Us','banner_image'=>'assets/img/banner/AboutUs.png'])

      <!-- Our Company -->
       @include('pages.about.our_company_section')

      <!-- Brand Logo -->     
      @include('pages.about.brand_logos_section')

      <!-- Why Choose Us -->
      @include('components.why_choose_us')

      <!-- Our Team -->
      @include('components.our_team',['teams'=>$teams])

      <!-- Testimonial -->
      @include('pages.home.testimonials_section',['testimonials' => $testimonials])            
      {{-- <!-- Testimonial -->
      @include('pages.about.testimonials_section',['testimonials' => $testimonials]) --}}
      
      <!-- FAQ -->
      @include('components.faq')
    </main>
@endsection