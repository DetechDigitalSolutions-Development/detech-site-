@extends('layouts.app')

@section('content')
<main>
    <!-- Page Banner -->
    @include('components.page_banner',['title'=>'Pricing Plan','banner_image'=>'assets/img/banner/page-banner.png'])

    <!-- Pricing Plan -->
    @include('components.pricing_plan')

    <!-- Why Choose Us -->
    @include('components.why_choose_us')

    <!-- FAQ -->
    @include('components.faq')


</main>

@endsection