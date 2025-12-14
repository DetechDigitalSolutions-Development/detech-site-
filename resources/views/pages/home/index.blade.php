@extends('layouts.app')

@section('content')
    <!-- Main -->
    <main>
      <!-- Hero Section -->
      @include('pages.home.hero_section')

      <!-- Capabilities Section -->
      @include('pages.home.capabilities_section')

      <!-- Our Services -->
      @include('pages.home.our_services_section', ['services' => $services])
      
      <!-- Recent Projects -->
      @include('pages.home.recent_projects_section',['recentProjects' => $recentProjects])

      <!-- Why Choose Us -->
      @include('components.why_choose_us')

      <!-- Pricing Plan -->
      @include('components.pricing_plan')

      <!-- Testimonial -->
      @include('pages.home.testimonials_section',['testimonials' => $testimonials])

      <!-- Featured Blog -->
      @include('pages.home.featured_blogs_section',['blogs' => $latestBlogs])
      
      <!-- FAQ -->
      @include('components.faq')

      
    </main>
@endsection