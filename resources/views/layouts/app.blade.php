<!doctype html>
<html lang="en" class="no-js">

<head>
    <title>Detech | </title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="app-url" content="{{ config('app.url') }}">
    <meta name="view-transition" content="same-origin">
    <meta name="theme-color" content="Red">
    <meta property="og:site_name" content="Consulo">
    <meta property="og:url" content="https://themeforest.net/user/spreethemes/portfolio">
    <meta property="og:title" content="Creative Business Consulting Template">
    <meta property="og:description"
        content="A versatile HTML template designed for corporate entities and professional businesses.">
    <meta name="description"
        content="Consulo is a creative business consulting Bootstrap 5 template designed for corporate entities and professional businesses.">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}"/>
    
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- all css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">

    @livewireStyles
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <style>
        
    </style>

    <script>
       
    </script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    @include('components.header.index')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    @livewireScripts

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- all js -->
    <script src="{{ asset('assets/js/vendor.js') }}" defer></script>
    <script src="{{ asset('assets/js/main.js') }}" defer></script>
    <script src="{{ asset('assets/js/custom.js') }}" defer></script>
</body>

</html>
