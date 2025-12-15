@extends('layouts.app')

@section('content')
    <main>
        <!-- Page Banner -->
        @include('components.page_banner', [
            'title' => 'Our Team',
            'title_route' => 'teams',
            'sub_title' => $team->name,
            'banner_image' => 'assets/img/banner/page-banner.png',
        ])
        <!-- Team Details -->
        <div class="team-details mt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-12 td-column">
                        <div class="td-media-wrap" data-aos="fade-up">
                            <div class="td-media radius18">
                                <img src="{{ Storage::disk(config('public'))->url($team->profile_img) ?? null }}"
                                    width="1000" height="1133" loading="lazy" alt="Image">
                            </div>
                            <div class="text-absolute heading text-24">
                                {{ $team->year_of_exp }} years of experience
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="content-info">
                            <h2 class="heading text-50" data-aos="fade-up">
                                {{ $team->name }}
                            </h2>
                            <div class="info-desig heading text-22" data-aos="fade-up" data-aos-delay="50">
                                {{ $team->designation }}
                            </div>
                            <p class="info-desc text text-18" data-aos="fade-up" data-aos-delay="100">
                                {{ $team->summery }}
                            </p>
                            <div class="phn-number text text-18" data-aos="fade-up" data-aos-delay="150">
                                <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.625 17.5C14.8889 17.5 13.1701 17.125 11.4688 16.375C9.76736 15.625 8.22222 14.5556 6.83333 13.1667C5.44444 11.7778 4.375 10.2361 3.625 8.54167C2.875 6.84722 2.5 5.125 2.5 3.375V2.5H7.41667L8.1875 6.6875L5.8125 9.08333C6.11806 9.625 6.45833 10.1389 6.83333 10.625C7.20833 11.1111 7.61111 11.5625 8.04167 11.9792C8.44444 12.3819 8.88542 12.7674 9.36458 13.1354C9.84375 13.5035 10.3611 13.8472 10.9167 14.1667L13.3333 11.75L17.5 12.6042V17.5H16.625Z"
                                        fill="CurrentColor" />
                                </svg>
                                {{ $team->tel_no }}
                            </div>
                            <div class="email text text-18" data-aos="fade-up" data-aos-delay="200">
                                <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.66797 16.6693V3.33594H18.3346V16.6693H1.66797ZM10.0013 10.8359L16.668 6.66927V5.0026L10.0013 9.16927L3.33464 5.0026V6.66927L10.0013 10.8359Z"
                                        fill="CurrentColor" />
                                </svg>

                                {{ $team->e_mail }}
                            </div>
                            <ul class="social-icons list-unstyled">
                                @if ($team->fb_url)
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <a class="social-link text" href="{{ $team->fb_url }}">
                                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.66634 10.2552H8.74967L9.58301 6.92188H6.66634V5.25521C6.66634 4.39739 6.66634 3.58854 8.33301 3.58854H9.58301V0.788625C9.31159 0.752583 8.28551 0.671875 7.20209 0.671875C4.94001 0.671875 3.33301 2.05259 3.33301 4.5883V6.92188H0.833008V10.2552H3.33301V17.3385H6.66634V10.2552Z"
                                                fill="currentColor" />
                                        </svg>
                                        <span class="visually-hidden">Facebook</span>
                                    </a>
                                </li>
                                @endif
                                @if ($team->linkedin_url)
                                <li data-aos="fade-up" data-aos-delay="200">
                                    <a class="social-link text" href="{{ $team->linkedin_url }}">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.78357 2.16742C3.78326 2.84601 3.37157 3.45666 2.74262 3.71142C2.11367 3.96619 1.39306 3.81419 0.920587 3.32711C0.448112 2.84001 0.318129 2.11511 0.59192 1.49421C0.86572 0.873305 1.48862 0.480397 2.1669 0.500755C3.0678 0.527797 3.78398 1.26612 3.78357 2.16742ZM3.83357 5.06742H0.500237V15.5007H3.83357V5.06742ZM9.10025 5.06742H5.78357V15.5007H9.06692V10.0257C9.06692 6.97573 13.0419 6.6924 13.0419 10.0257V15.5007H16.3336V8.8924C16.3336 3.75075 10.4503 3.94242 9.06692 6.4674L9.10025 5.06742Z"
                                                fill="currentColor" />
                                        </svg>
                                        <span class="visually-hidden">Linkedin</span>
                                    </a>
                                </li>
                                @endif
                                @if ($team->x_url)
                                <li data-aos="fade-up" data-aos-delay="300">
                                    <a class="social-link text" href="{{ $team->x_url }}">
                                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5104 1.71289C16.8743 1.9943 16.1996 2.17914 15.5088 2.26127C16.2366 1.82561 16.7812 1.14026 17.0411 0.332886C16.3573 0.739186 15.6088 1.02515 14.8282 1.17835C14.1693 0.475394 13.2483 0.0770356 12.2848 0.0781272C10.3605 0.0781272 8.79975 1.63835 8.79975 3.56354C8.79975 3.83666 8.83109 4.10153 8.88967 4.35709C5.99206 4.21121 3.42506 2.82455 1.70565 0.715686C1.39608 1.24757 1.23338 1.85216 1.2342 2.46757C1.2342 3.67667 1.84967 4.74388 2.78458 5.36868C2.23115 5.35118 1.6899 5.20171 1.20599 4.93262C1.20545 4.94726 1.20545 4.9619 1.20545 4.97574C1.20545 6.66484 2.40683 8.07384 4.00166 8.39376C3.70234 8.47476 3.3936 8.51568 3.08352 8.51543C2.85831 8.51543 2.63976 8.49468 2.42733 8.45393C2.8711 9.83826 4.15739 10.8461 5.683 10.8738C4.44845 11.8427 2.92391 12.3683 1.35453 12.3661C1.07677 12.3663 0.799246 12.3499 0.523438 12.3171C2.1167 13.3413 3.97127 13.8849 5.86535 13.8829C12.2763 13.8829 15.7817 8.57243 15.7817 3.9671C15.7817 3.81643 15.778 3.66523 15.7713 3.51615C16.4536 3.02322 17.0425 2.41257 17.5104 1.71289Z"
                                                fill="currentColor" />
                                        </svg>
                                        <span class="visually-hidden">Twitter</span>
                                    </a>
                                </li>
                                @endif
                                @if ($team->insta_url)
                                <li data-aos="fade-up" data-aos-delay="400">
                                    <a class="social-link text" href="{{ $team->insta_url }}">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.85724 0.671875C10.7951 0.673425 11.2703 0.678392 11.681 0.690617L11.8427 0.6959C12.0296 0.702542 12.2139 0.710875 12.4362 0.721292C13.3229 0.762267 13.9278 0.902542 14.4591 1.10879C15.0083 1.3206 15.4722 1.60671 15.9354 2.06991C16.3979 2.5331 16.6841 2.99837 16.8966 3.54629C17.1021 4.07685 17.2424 4.68241 17.2841 5.56921C17.294 5.79143 17.302 5.97577 17.3086 6.16263L17.3138 6.32437C17.326 6.73499 17.3316 7.21032 17.3333 8.14818L17.334 8.76952C17.3341 8.84543 17.3341 8.92377 17.3341 9.0046L17.334 9.23968L17.3335 9.8611C17.3319 10.7989 17.327 11.2743 17.3147 11.6848L17.3094 11.8466C17.3028 12.0335 17.2945 12.2178 17.2841 12.44C17.2431 13.3268 17.1021 13.9317 16.8966 14.4629C16.6847 15.0123 16.3979 15.4762 15.9354 15.9393C15.4722 16.4018 15.0062 16.6879 14.4591 16.9004C13.9278 17.106 13.3229 17.2463 12.4362 17.2879C12.2139 17.2978 12.0296 17.3059 11.8427 17.3124L11.681 17.3177C11.2703 17.3299 10.7951 17.3354 9.85724 17.3373L9.23582 17.3379C9.1599 17.3379 9.08157 17.3379 9.00074 17.3379H8.76565L8.14424 17.3373C7.2064 17.3358 6.73109 17.3309 6.32046 17.3186L6.15873 17.3134C5.97185 17.3067 5.78752 17.2983 5.5653 17.2879C4.67849 17.247 4.07433 17.106 3.54239 16.9004C2.99377 16.6887 2.52919 16.4018 2.06599 15.9393C1.6028 15.4762 1.31739 15.0102 1.10489 14.4629C0.898636 13.9317 0.759052 13.3268 0.717386 12.44C0.707486 12.2178 0.69941 12.0335 0.692869 11.8466L0.687627 11.6848C0.675435 11.2743 0.669877 10.7989 0.668077 9.8611L0.667969 8.14818C0.669519 7.21032 0.674477 6.73499 0.686702 6.32437L0.691994 6.16263C0.698635 5.97577 0.706969 5.79143 0.717386 5.56921C0.758352 4.68171 0.898636 4.07754 1.10489 3.54629C1.31669 2.99768 1.6028 2.5331 2.06599 2.06991C2.52919 1.60671 2.99447 1.32129 3.54239 1.10879C4.07364 0.902542 4.6778 0.762958 5.5653 0.721292C5.78752 0.7114 5.97185 0.703325 6.15873 0.696783L6.32046 0.691542C6.73109 0.679342 7.2064 0.673783 8.14424 0.671983L9.85724 0.671875ZM9.00074 4.83796C6.6983 4.83796 4.83405 6.70423 4.83405 9.0046C4.83405 11.307 6.70033 13.1713 9.00074 13.1713C11.3032 13.1713 13.1674 11.305 13.1674 9.0046C13.1674 6.70221 11.3011 4.83796 9.00074 4.83796ZM9.00074 6.50462C10.3815 6.50462 11.5007 7.62352 11.5007 9.0046C11.5007 10.3853 10.3818 11.5046 9.00074 11.5046C7.61999 11.5046 6.50072 10.3858 6.50072 9.0046C6.50072 7.62385 7.61957 6.50462 9.00074 6.50462ZM13.3757 3.58796C12.8013 3.58796 12.3341 4.05455 12.3341 4.62892C12.3341 5.20329 12.8007 5.6706 13.3757 5.6706C13.9501 5.6706 14.4174 5.20402 14.4174 4.62892C14.4174 4.05455 13.9493 3.58724 13.3757 3.58796Z"
                                                fill="currentColor" />
                                        </svg>
                                        <span class="visually-hidden">Instagram</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="team-bio mt-100">
                    <h2 class="heading text-36" data-aos="fade-up">Short Biography</h2>
                    <p class="text text-18" data-aos="fade-up" data-aos-delay="50">
                        {{ $team->short_bio }}
                    </p>
                </div>
            </div>
            <div class="container mt-100">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="team-about">
                            <h2 class="heading text-36" data-aos="fade-up">About Me</h2>
                            <p class="text text-18" data-aos="fade-up" data-aos-delay="50">
                                {!! $team->about_me !!}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="team-progress">
                            <h2 class="heading text-36" data-aos="fade-up">
                                Professional skills
                            </h2>
                            <p class="text text-18" data-aos="fade-up">
                                {{ $team->skill_summary }}
                            </p>
                        </div>
                        <progress-bar>
                            <div class="progress-wrap">
                                @foreach ($team->skills as $skill => $value)
                                    <div class="progress-item" data-progress="{{ $value }}" data-aos="fade-up">
                                        <div class="heading text-16">{{ $skill }}</div>
                                        <div class="progress-container">
                                            <div class="progress--bar"></div>
                                            <div class="progress-number heading text-16">{{ $value }}%</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </progress-bar>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
