{{-- resources/views/components/header/header.blade.php --}}
{{-- {{ print_r(getRandomProduct()) }} --}}
<sticky-header data-sticky-type="always">
    <header class="header-2 header-floating">
        <div class="container-fluid">
            <div class="header-grid">
                <a class="header-logo" href="{{ route('home') }}" aria-label="Detech">
                    <img src="{{ asset('assets/img/logo-dark.png') }}" alt="Detech Logo" width="189" height="32">
                </a>

                <drawer-menu>
                    <nav class="header-nav drawer-menu">
                        <div class="d-lg-none header-nav-headings">
                            <a class="header-logo" href="{{ route('home') }}" aria-label="Detech">
                                <img src="{{ asset('assets/img/logo-dark.png') }}" alt="Detech Logo" width="189"
                                    height="32" loading="lazy">
                            </a>
                            <drawer-opener class="svg-wrapper menu-close" data-drawer=".drawer-menu">
                                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
                                        fill="currentColor" />
                                </svg>
                            </drawer-opener>
                        </div>

                        <ul class="header-menu list-unstyled">
                            {{-- Home --}}
                            <li class="nav-item">
                                <a class="menu-link menu-link-main {{ request()->routeIs('home') ? 'active' : '' }}"
                                    href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>

                            {{-- About Us --}}
                            <li class="nav-item">
                                <a class="menu-link menu-link-main {{ request()->routeIs('about*') ? 'active' : '' }}"
                                    href="{{ route('about') }}">
                                    About Us
                                </a>
                            </li>

                            {{-- Services with Megamenu --}}
                            <li class="nav-item nav-item-static">
                                <a class="menu-link menu-link-main menu-accrodion {{ request()->routeIs('services*') ? 'active' : '' }}"
                                    href="{{ route('services.index') }}">
                                    Services
                                    <svg width="10" height="5" viewBox="0 0 10 5" fill="none">
                                        <path d="M5 5L0 0H10L5 5Z" fill="currentColor" />
                                    </svg>
                                </a>

                                {{-- Services Megamenu --}}
                                <div class="header-megamenu header-submenu menu-absolute submenu-color">
                                    <ul class="list-unstyled">
                                        <li class="nav-item">
                                            <a class="menu-link heading fw-300" href="{{ route('services.index') }}">
                                                WHY DETECH
                                            </a>
                                            <ul class="reset-submenu list-unstyled submenu-color">
                                                <li class="nav-item">
                                                    <a class="menu-link" href="{{ route('services.index') }}">
                                                        <div class="heading text-20">Our services</div>
                                                        <div class="text text-14">Collaborate with Detech to deliver
                                                            powerful digital solutions and create long-term value for
                                                            your clients.</div>
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="menu-link" href="{{ route('projects') }}">
                                                        <div class="heading text-20">Our Success Client Projects</div>
                                                        <div class="text text-14">See how businesses achieved growth and
                                                            efficiency through Detech's technology and expertise.</div>
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="menu-link" href="{{ route('products') }}">
                                                        <div class="heading text-20">Our Products</div>
                                                        <div class="text text-14">Accelerate your product journey—from
                                                            concept to launch—with our expert development support.</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            @php
                                                $product = getRandomProduct();
                                                // Safely get the site slug with fallback
                                                $siteSlug = $product->site_slug ?? null;
                                                $productUrl = $siteSlug ? route('product.site', $siteSlug) : '#';
                                            @endphp
                                            <a class="menu-link heading fw-300" href="{{ $productUrl }}">
                                                FEATURED PRODUCT
                                            </a>

                                            <ul class="reset-submenu list-unstyled submenu-color">
                                                <li class="nav-item">
                                                    <a class="menu-link megamenu-image-wrap"
                                                        href="{{ $productUrl }}">
                                                        <picture>
                                                            <source media="(max-width: 575px)"
                                                                srcset="{{ asset('assets/img/menu/575.jpg') }}">
                                                            <img src="{{ Storage::disk(config('public'))->url($product->featured_img ?? null )}}"
                                                                width="1000" height="668" loading="lazy"
                                                                alt="Hero Image">
                                                        </picture>
                                                        <div class="content">
                                                            <div class="heading text-20">{{ $product->product_title ?? null }}
                                                            </div>
                                                            <div class="text text-14">
                                                                {{ $product->short_description ?? null }}</div>
                                                            <div class="button button--primary">
                                                                <span class="svg-wrapper">
                                                                    <svg class="icon-20" width="20" height="20"
                                                                        viewBox="0 0 20 20" fill="none">
                                                                        <path
                                                                            d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="nav-item megamenu-links">
                                            {{-- <a class="menu-link text-14 fw-300" href="contact.html">
                                                <svg class="icon-18" width="20px" height="20px" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                    <path opacity="0.5" d="M8 10.5H16" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round" />
                                                    <path opacity="0.5" d="M8 14H13.5" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round" />
                                                </svg>
                                                Contact Sales
                                            </a>
                                            <a class="menu-link text-14 fw-300" href="project-details.html">
                                                <svg class="icon-18" width="20px" height="20px"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12" cy="12" r="10"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                    <path
                                                        d="M15.4137 10.941C16.1954 11.4026 16.1954 12.5974 15.4137 13.059L10.6935 15.8458C9.93371 16.2944 9 15.7105 9 14.7868L9 9.21316C9 8.28947 9.93371 7.70561 10.6935 8.15419L15.4137 10.941Z"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                </svg>
                                                Watch Demo
                                            </a>
                                            <a class="menu-link text-14 fw-300" href="team.html">
                                                <svg class="icon-18" width="20px" height="20px"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9" cy="9" r="2" stroke="currentColor"
                                                        stroke-width="1.5" />
                                                    <path
                                                        d="M13 15C13 16.1046 13 17 9 17C5 17 5 16.1046 5 15C5 13.8954 6.79086 13 9 13C11.2091 13 13 13.8954 13 15Z"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                    <path
                                                        d="M22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C21.298 5.64118 21.5794 6.2255 21.748 7"
                                                        stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path d="M19 12H15" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path d="M19 9H14" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path d="M19 15H16" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                </svg>
                                                Webinars
                                            </a> --}}
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- Blog --}}
                            <li class="nav-item">
                                <a class="menu-link menu-link-main {{ request()->routeIs('blogs*') ? 'active' : '' }}"
                                    href="{{ route('blogs') }}">
                                    Blog
                                </a>
                            </li>

                            {{-- Contact --}}
                            <li class="nav-item">
                                <a class="menu-link menu-link-main {{ request()->routeIs('contact*') ? 'active' : '' }}"
                                    href="{{ route('contact') }}">
                                    Contact
                                </a>
                            </li>

                            {{-- Careers (Conditional) --}}
                            @if (setting_bool('career_page_enabled'))
                                <li class="nav-item">
                                    <a class="menu-link menu-link-main {{ request()->routeIs('careers*') ? 'active' : '' }}"
                                        href="{{ route('careers') }}">
                                        Careers
                                    </a>
                                </li>
                            @endif
                        </ul>

                        <div class="drawer-content d-lg-none">
                            @include('components.header.mobile-menu-content')
                        </div>
                    </nav>
                </drawer-menu>

                <div class="header-actions d-flex align-items-center">
                    <a href="https://cal.com/detech-company" class="button button--primary button--slim">
                        Get in Touch
                        <span class="svg-wrapper">
                            <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                    </a>

                    <drawer-opener class="svg-wrapper menu-open d-lg-none" data-drawer=".drawer-menu">
                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none">
                            <circle cx="26" cy="26" r="25.5" fill="white" stroke="currentColor" />
                            <path
                                d="M32.5 18.2857C32.5 17.5757 31.9179 17 31.2 17H14.3C13.5821 17 13 17.5757 13 18.2857C13 18.9958 13.5821 19.5714 14.3 19.5714H31.2C31.9179 19.5714 32.5 18.9957 32.5 18.2857ZM14.3 24.7143H37.7C38.4179 24.7143 39 25.29 39 26C39 26.7101 38.4179 27.2857 37.7 27.2857H14.3C13.5821 27.2857 13 26.7101 13 26C13 25.29 13.5821 24.7143 14.3 24.7143ZM14.3 32.4286H26C26.7179 32.4286 27.3 33.0042 27.3 33.7143C27.3 34.4243 26.7179 35 26 35H14.3C13.5821 35 13 34.4243 13 33.7143C13 33.0042 13.5821 32.4286 14.3 32.4286Z"
                                fill="currentColor" />
                        </svg>
                    </drawer-opener>

                    <drawer-opener class="svg-wrapper menu-open d-none d-lg-flex" data-drawer=".drawer-additional">
                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none">
                            <circle cx="26" cy="26" r="25.5" fill="white" stroke="currentColor" />
                            <path
                                d="M32.5 18.2857C32.5 17.5757 31.9179 17 31.2 17H14.3C13.5821 17 13 17.5757 13 18.2857C13 18.9958 13.5821 19.5714 14.3 19.5714H31.2C31.9179 19.5714 32.5 18.9957 32.5 18.2857ZM14.3 24.7143H37.7C38.4179 24.7143 39 25.29 39 26C39 26.7101 38.4179 27.2857 37.7 27.2857H14.3C13.5821 27.2857 13 26.7101 13 26C13 25.29 13.5821 24.7143 14.3 24.7143ZM14.3 32.4286H26C26.7179 32.4286 27.3 33.0042 27.3 33.7143C27.3 34.4243 26.7179 35 26 35H14.3C13.5821 35 13 34.4243 13 33.7143C13 33.0042 13.5821 32.4286 14.3 32.4286Z"
                                fill="currentColor" />
                        </svg>
                    </drawer-opener>
                </div>
            </div>
        </div>
    </header>
</sticky-header>

<div class="theme-drawer drawer-additional" data-position="right">
    <div class="drawer-headings">
        <a class="header-logo" href="{{ route('home') }}" aria-label="Detech">
            <img src="{{ asset('assets/img/logo-dark.png') }}" alt="Detech Logo" width="189" height="32"
                loading="lazy">
        </a>
        <drawer-opener class="svg-wrapper menu-close" data-drawer=".drawer-additional">
            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none">
                <path
                    d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
                    fill="currentColor" />
            </svg>
        </drawer-opener>
    </div>
    <div class="drawer-content">
        @include('components.header.drawer-content')
    </div>
</div>

<drawer-opener id="drawer-overlay"></drawer-opener>

<scroll-top>
    <div class="scroll-to-top">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg>
    </div>
</scroll-top>
