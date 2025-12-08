{{-- resources/views/careers.blade.php --}}
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
                        <!-- Livewire Component -->
                        <livewire:careers-component />
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

