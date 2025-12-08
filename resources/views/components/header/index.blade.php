<sticky-header data-sticky-type="always">
    <header class="header-2 header-floating">
        <div class="container-fluid">
            <div class="header-grid">
                <a class="header-logo" href="/" aria-label="Consulo">
                    <img src="{{ asset('assets/img/logo-dark.png')}}" alt="Consulo Logo" width="189" height="32">
                </a>
                
                <drawer-menu>
                    <nav class="header-nav drawer-menu">
                        <div class="d-lg-none header-nav-headings">
                            <a class="header-logo" href="/" aria-label="Consulo">
                                <img src="{{ asset('assets/img/logo-dark.png')}}" alt="Consulo Logo" width="189" height="32" loading="lazy">
                            </a>
                            <drawer-opener class="svg-wrapper menu-close" data-drawer=".drawer-menu">
                                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none">
                                    <path d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z" fill="currentColor"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z" fill="currentColor"/>
                                </svg>
                            </drawer-opener>
                        </div>
                        @php
                            $menuItems = getMenuItems();
                        @endphp
                        <ul class="header-menu list-unstyled">
                            @foreach($menuItems as $item)
                            <li class="nav-item {{ isset($item['submenu']) ? 'nav-item-static' : '' }}">
                                <a class="menu-link menu-link-main {{ isset($item['submenu']) ? 'menu-accrodion' : '' }}" 
                                   href="{{ $item['url'] }}">
                                    {{ $item['title'] }}
                                    @if(isset($item['submenu']))
                                    <svg width="10" height="5" viewBox="0 0 10 5" fill="none">
                                        <path d="M5 5L0 0H10L5 5Z" fill="currentColor"/>
                                    </svg>
                                    @endif
                                </a>
                                
                                @if(isset($item['submenu']))
                                <div class="{{ $item['menu_type'] ?? 'header-submenu' }} menu-absolute submenu-color">
                                    {!! $item['submenu'] !!}
                                </div>
                                @endif
                            </li>
                            @endforeach
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
                                <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"/>
                            </svg>
                        </span>
                    </a>
                    
                    <drawer-opener class="svg-wrapper menu-open d-lg-none" data-drawer=".drawer-menu">
                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none">
                            <circle cx="26" cy="26" r="25.5" fill="white" stroke="currentColor"/>
                            <path d="M32.5 18.2857C32.5 17.5757 31.9179 17 31.2 17H14.3C13.5821 17 13 17.5757 13 18.2857C13 18.9958 13.5821 19.5714 14.3 19.5714H31.2C31.9179 19.5714 32.5 18.9957 32.5 18.2857ZM14.3 24.7143H37.7C38.4179 24.7143 39 25.29 39 26C39 26.7101 38.4179 27.2857 37.7 27.2857H14.3C13.5821 27.2857 13 26.7101 13 26C13 25.29 13.5821 24.7143 14.3 24.7143ZM14.3 32.4286H26C26.7179 32.4286 27.3 33.0042 27.3 33.7143C27.3 34.4243 26.7179 35 26 35H14.3C13.5821 35 13 34.4243 13 33.7143C13 33.0042 13.5821 32.4286 14.3 32.4286Z" fill="currentColor"/>
                        </svg>
                    </drawer-opener>
                    
                    <drawer-opener class="svg-wrapper menu-open d-none d-lg-flex" data-drawer=".drawer-additional">
                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none">
                            <circle cx="26" cy="26" r="25.5" fill="white" stroke="currentColor"/>
                            <path d="M32.5 18.2857C32.5 17.5757 31.9179 17 31.2 17H14.3C13.5821 17 13 17.5757 13 18.2857C13 18.9958 13.5821 19.5714 14.3 19.5714H31.2C31.9179 19.5714 32.5 18.9957 32.5 18.2857ZM14.3 24.7143H37.7C38.4179 24.7143 39 25.29 39 26C39 26.7101 38.4179 27.2857 37.7 27.2857H14.3C13.5821 27.2857 13 26.7101 13 26C13 25.29 13.5821 24.7143 14.3 24.7143ZM14.3 32.4286H26C26.7179 32.4286 27.3 33.0042 27.3 33.7143C27.3 34.4243 26.7179 35 26 35H14.3C13.5821 35 13 34.4243 13 33.7143C13 33.0042 13.5821 32.4286 14.3 32.4286Z" fill="currentColor"/>
                        </svg>
                    </drawer-opener>
                </div>
            </div>
        </div>
    </header>
</sticky-header>

<div class="theme-drawer drawer-additional" data-position="right">
    <div class="drawer-headings">
        <a class="header-logo" href="/" aria-label="Consulo">
            <img src="{{ asset('assets/img/logo-dark.png')}}" alt="Consulo Logo" width="189" height="32" loading="lazy">
        </a>
        <drawer-opener class="svg-wrapper menu-close" data-drawer=".drawer-additional">
            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none">
                <path d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z" fill="currentColor"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z" fill="currentColor"/>
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
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5"/>
        </svg>
    </div>
</scroll-top>