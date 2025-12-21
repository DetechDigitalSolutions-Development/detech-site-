@extends('layouts.app')

@section('title', 'Our Projects')

@section('content')
<main>
    <!-- Page Banner -->
    @include('components.page_banner', [
        'title' => 'Our Projects',
        'sub_title' => 'Explore our portfolio of successful projects',
        'banner_image' => 'assets/img/banner/Portfolio.png',
    ])

    <!-- Projects Filter Component -->
    <div class="page-projects mt-100">
        {{-- <div class="container"> --}}
            @livewire('projects-filter')
        {{-- </div> --}}
    </div>
</main>
@endsection