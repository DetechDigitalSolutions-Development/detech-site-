@extends('layouts.app')

@section('content')
    <main>
      <!-- Page Banner -->
      @include('components.page_banner',['title'=>'Our Services','banner_image'=>'assets/img/banner/Service.png'])

      <!-- services card -->
      @include('pages.services.services_cards_section')

      <!-- Pricing Plan -->
      @include('components.pricing_plan')

      <!-- Our Team -->
      @include('components.our_team')
    </main>
@endsection