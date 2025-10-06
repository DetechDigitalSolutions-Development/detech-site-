@extends('layouts.app')

@section('content')
<main>
    <!-- Page Banner -->
    @include('components.page_banner', ['title' => 'Privacy Policy'])

    <!-- Blog List -->
    <div class="page-blog mt-100">
        <div class="container container-narrow">
            <div class="blog-details">
                <div class="card-blog-list" data-aos="fade-up">
                    <div class="card-blog-content">
                        <h2 class="card-blog-heading heading text-50 text-center">
                            Our Privacy Policy
                        </h2>

                        <div class="blog-description">
                            <p>
                                This website is operated by Consulo. Throughout the site,
                                the terms “we”, “us” and “our” refer to Consulo. Consulo
                                offers this website, including all information, tools and
                                services available from this site to you, the user,
                                conditioned upon your acceptance of all terms, conditions,
                                policies and notices stated here.
                            </p>

                            <p>
                                Please read this Privacy Policy carefully before accessing or using our website. By accessing or using any part of the site, you agree to be bound by this Privacy Policy. If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any services. If this Privacy Policy is considered an offer, acceptance is expressly limited to this Privacy Policy.
                            </p>

                            <h3>What information do we collect?</h3>
                            <p>
                                We collect various types of information in connection with the services we provide, including:
                            </p>
                            <ul>
                                <li>Personal identification information (Name, email address, phone number, etc.)</li>
                                <li>Usage data (IP address, browser type, pages visited, etc.)</li>
                                <li>Cookies and tracking technologies</li>
                            </ul>

                            <h3>How do we use your information?</h3>
                            <p>
                                We use the collected information for various purposes, including:
                            </p>
                            <ul>
                                <li>To provide and maintain our services</li>
                                <li>To improve our website and services</li>
                                <li>To communicate with you</li>
                                <li>To comply with legal obligations</li>
                            </ul>

                            <h3>Your rights</h3>
                            <p>
                                You have certain rights regarding your personal
    
@endsection