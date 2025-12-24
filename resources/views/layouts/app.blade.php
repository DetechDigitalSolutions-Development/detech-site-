<!doctype html>
<html lang="en" class="no-js">

<head>
    <title>
        @hasSection('title')
            @yield('title') | Detech
        @else
            Detech - Digital Excellence
        @endif
    </title>
    
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    {!! seo() !!}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="app-url" content="{{ config('app.url') }}">
    <meta name="view-transition" content="same-origin">
    <meta name="theme-color" content="#000000"> <meta name="description" content="Detech is a leading digital agency providing innovative tech solutions, professional consulting, and digital excellence for modern businesses.">
    <meta name="keywords" content="Detech, Digital Excellence, Tech Consulting, Web Development, Digital Solutions">
    <link rel="canonical" href="https://detech.live">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Detech">
    <meta property="og:url" content="https://detech.live">
    <meta property="og:title" content="Detech - Digital Excellence">
    <meta property="og:description" content="Empowering businesses with cutting-edge digital solutions and professional tech consulting.">
    <meta property="og:image" content="{{ asset('assets/img/og-image.jpg') }}"> <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://detech.live">
    <meta property="twitter:title" content="Detech - Digital Excellence">
    <meta property="twitter:description" content="Empowering businesses with cutting-edge digital solutions and professional tech consulting.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @livewireStyles
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
      
</head>

<body>
    @include('components.header.index')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    @include('pages.others.cookie')

    @livewireScripts

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('assets/js/vendor.js') }}" defer></script>
    <script src="{{ asset('assets/js/main.js') }}" defer></script>
    <script src="{{ asset('assets/js/custom.js') }}" defer></script>
</body>

</html>