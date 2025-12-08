<?php

return [
    'menuItems' => [
        [
            'title' => 'Home',
            'url' => '/',
            'route' => 'home',
            'submenu' => null
        ],
        [
            'title' => 'About Us',
            'url' => '/about',
            'route' => 'about',
            'submenu' => null
        ],
        [
            'title' => 'Services',
            'url' => '/services',
            'route' => 'services.index',
            'submenu' => '
                <ul class="list-unstyled">
                    <li class="nav-item">
                        <a class="menu-link heading fw-300" href="">
                            WHY DETECH
                        </a>
                        <ul class="reset-submenu list-unstyled submenu-color">
                            <li class="nav-item">
                                <a class="menu-link" href="/services">
                                    <div class="heading text-20">Partner With Us</div>
                                    <div class="text text-14">Collaborate with Detech to deliver powerful digital solutions and create long-term value for your clients.</div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="menu-link" href="/projects">
                                    <div class="heading text-20">Our Success Stories</div>
                                    <div class="text text-14">See how businesses achieved growth and efficiency through Detech’s technology and expertise.</div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="menu-link" href="/products">
                                    <div class="heading text-20">Build With Confidence</div>
                                    <div class="text text-14">Accelerate your product journey—from concept to launch—with our expert development support.</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="menu-link heading fw-300" href="{{ route(\'projects.show\', 1) }}">
                            FEATURED SUCCESS STORY
                        </a>
                        <ul class="reset-submenu list-unstyled submenu-color">
                            <li class="nav-item">
                                <a class="menu-link megamenu-image-wrap" href="/projects/">
                                    <picture>
                                        <source media="(max-width: 575px)" srcset="assets/img/menu/575.jpg">
                                        <img src="assets/img/menu/1.jpg" width="1000" height="668" loading="lazy" alt="Hero Image">
                                    </picture>
                                    <div class="content">
                                        <div class="heading text-20">Detech Subscriptions</div>
                                        <div class="text text-14">Hundreds of emerging brands thrive with Detech. Discover their journeys.</div>
                                        <div class="button button--primary">
                                            <span class="svg-wrapper">
                                                <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--<li class="nav-item megamenu-links">
                        <a class="menu-link text-14 fw-300" href="{{ route(\'contact\') }}">
                            <svg class="icon-18" width="20px" height="20px" viewBox="0 0 24 24" fill="none">
                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z" stroke="currentColor" stroke-width="1.5"/>
                                <path opacity="0.5" d="M8 10.5H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                <path opacity="0.5" d="M8 14H13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                            Contact Sales
                        </a>
                        <a class="menu-link text-14 fw-300" href="{{ route(\'projects.show\', 1) }}">
                            <svg class="icon-18" width="20px" height="20px" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M15.4137 10.941C16.1954 11.4026 16.1954 12.5974 15.4137 13.059L10.6935 15.8458C9.93371 16.2944 9 15.7105 9 14.7868L9 9.21316C9 8.28947 9.93371 7.70561 10.6935 8.15419L15.4137 10.941Z" stroke="currentColor" stroke-width="1.5"/>
                            </svg>
                            Watch Demo
                        </a>
                        <a class="menu-link text-14 fw-300" href="{{ route(\'teams\') }}">
                            <svg class="icon-18" width="20px" height="20px" viewBox="0 0 24 24" fill="none">
                                <circle cx="9" cy="9" r="2" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M13 15C13 16.1046 13 17 9 17C5 17 5 16.1046 5 15C5 13.8954 6.79086 13 9 13C11.2091 13 13 13.8954 13 15Z" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C21.298 5.64118 21.5794 6.2255 21.748 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M19 12H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M19 9H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M19 15H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                            Webinars
                        </a>
                    </li>-->
                </ul>
            ',
            'menu_type' => 'header-megamenu header-submenu'
        ],
        [
            'title' => 'Blog',
            'url' => '/blogs',
            'route' => 'blogs',
            'submenu' => null
        ],
        [
            'title' => 'Contact',
            'url' => '/contact',
            'route' => 'contact',
            'submenu' => null
        ],
        // [
        //     'title' => 'Careers',
        //     'url' => '/careers',
        //     'route' => 'careers',
        //     'submenu' => null
        // ]
    ],
    'servicesMenu' => [
        'title' => 'Our Services',
        'items' => app('App\Http\Controllers\ServiceController')->getServicesData()['services'] ?? []
    ]
];