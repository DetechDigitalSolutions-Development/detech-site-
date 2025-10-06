@extends('layouts.app')

@section('content')
<main>
    <!-- Page Banner -->
    @include('components.page_banner',['title'=>'Pricing Plan'])

    <!-- Pricing Plan -->
    @include('components.pricing_plan')

    <!-- Why Choose Us -->
    @include('components.why_choose_us')

    <!-- FAQ -->
    @include('components.faq')


</main>

@endsection