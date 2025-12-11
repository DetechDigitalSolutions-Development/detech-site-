@extends('layouts.app')

@section('content')
    <main>
        <!-- Page Banner -->
        @include('components.page_banner', [
            'title' => 'Our Blogs',
            'title_route' => 'blogs',
            'sub_title' => $blog->title,
            'banner_image' => 'assets/img/banner/page-banner.png',
        ])

        <div class="page-blog-details mt-100">
            <div class="container">
                <!-- Mobile Filter Opener -->
                <drawer-opener class="open-sidebar svg-wrapper text text-20 fw-500 d-lg-none"
                    data-drawer=".drawer-blog-sidebar" data-aos="fade-up">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                    </svg>
                    Filter
                </drawer-opener>

                <div class="row">
                    <!-- Main Content -->
                    <div class="col-12 col-lg-7">
                        <!-- Blog Content -->
                        <div class="blog-details">
                            <div class="card-blog-list" data-aos="fade-up">
                                <div class="card-blog-list-media radius18">
                                    <img src="{{ Storage::disk(config('public'))->url($blog->featured_img ?? null) }}"
                                        alt="blog image" width="1000" height="707" loading="lazy">
                                </div>

                                <div class="card-blog-content">
                                    <div class="card-blog-meta">
                                        <div class="card-blog-meta-item text text-18">
                                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none">
                                                <path
                                                    d="M9.00098 0.650391C11.499 0.650391 13.5437 2.69437 13.5439 5.19238C13.5439 7.69056 11.4992 9.73535 9.00098 9.73535C6.50299 9.73517 4.45898 7.69045 4.45898 5.19238C4.45919 2.69448 6.50308 0.650569 9.00098 0.650391Z"
                                                    stroke="currentColor" stroke-width="1.3" />
                                                <path
                                                    d="M5.2041 11.4092C5.22954 11.4041 5.2933 11.4126 5.34375 11.4502L5.34863 11.4531C6.41552 12.2405 7.68474 12.6464 8.99902 12.6465C10.3135 12.6465 11.5834 12.2407 12.6504 11.4531L12.6553 11.4502C12.6717 11.4383 12.7412 11.4086 12.8506 11.418C14.4691 11.6454 15.9118 12.559 16.8516 13.9482L16.8555 13.9531C17.0155 14.1843 17.152 14.4246 17.2607 14.6719C17.1428 14.8756 17.0147 15.073 16.8711 15.2705L16.7158 15.4775L16.708 15.4883C16.4195 15.8798 16.0836 16.2387 15.7285 16.5938C15.4317 16.8905 15.0922 17.1871 14.7559 17.4395C13.0785 18.6922 11.0607 19.3506 8.97656 19.3506C6.89732 19.3505 4.88498 18.6944 3.20996 17.4473C2.84577 17.1514 2.51261 16.8807 2.22559 16.5938L2.21875 16.5859L2.21094 16.5801L1.95215 16.3242C1.69963 16.0639 1.46736 15.7886 1.24609 15.4883L1.24316 15.4834L0.944336 15.0703C0.86428 14.9535 0.788425 14.8348 0.71875 14.7178C0.835661 14.4569 0.982086 14.185 1.14258 13.9531L1.14355 13.9541L1.15137 13.9424C2.06835 12.5567 3.53571 11.6401 5.16504 11.416L5.18457 11.4131L5.2041 11.4092Z"
                                                    stroke="currentColor" stroke-width="1.3" />
                                            </svg>
                                            Admin
                                        </div>
                                        <div class="card-blog-meta-item text text-18">
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none">
                                                <path d="M1.125 1.25H16.875V11.375H9L4.5 15.3125V11.375H1.125V1.25Z"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            {{ $blog->created_at->format('jS M, Y') }}
                                        </div>
                                        <a class="card-blog-meta-item text text-18" href="#blog-comments">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                <path
                                                    d="M16.1251 3H14.5001V4H16.0001V15H2.00013V4H3.50013V3H1.87513C1.75825 3.00195 1.6429 3.02691 1.53566 3.07345C1.42843 3.11999 1.33141 3.1872 1.25016 3.27125C1.1689 3.35529 1.105 3.45451 1.0621 3.56325C1.0192 3.67199 0.998142 3.78812 1.00013 3.905V15.095C0.998142 15.2119 1.0192 15.328 1.0621 15.4367C1.105 15.5455 1.1689 15.6447 1.25016 15.7288C1.33141 15.8128 1.42843 15.88 1.53566 15.9265C1.6429 15.9731 1.75825 15.998 1.87513 16H16.1251C16.242 15.998 16.3574 15.9731 16.4646 15.9265C16.5718 15.88 16.6688 15.8128 16.7501 15.7288C16.8314 15.6447 16.8953 15.5455 16.9382 15.4367C16.9811 15.328 17.0021 15.2119 17.0001 15.095V3.905C17.0021 3.78812 16.9811 3.67199 16.9382 3.56325C16.8953 3.45451 16.8314 3.35529 16.7501 3.27125C16.6688 3.1872 16.5718 3.11999 16.4646 3.07345C16.3574 3.02691 16.242 3.00195 16.1251 3Z"
                                                    fill="currentColor" />
                                                <path d="M4 7H5V8H4V7Z" fill="currentColor" />
                                                <path d="M7 7H8V8H7V7Z" fill="currentColor" />
                                                <path d="M10 7H11V8H10V7Z" fill="currentColor" />
                                                <path d="M13 7H14V8H13V7Z" fill="currentColor" />
                                                <path d="M4 9.5H5V10.5H4V9.5Z" fill="currentColor" />
                                                <path d="M7 9.5H8V10.5H7V9.5Z" fill="currentColor" />
                                                <path d="M10 9.5H11V10.5H10V9.5Z" fill="currentColor" />
                                                <path d="M13 9.5H14V10.5H13V9.5Z" fill="currentColor" />
                                                <path d="M4 12H5V13H4V12Z" fill="currentColor" />
                                                <path d="M7 12H8V13H7V12Z" fill="currentColor" />
                                                <path d="M10 12H11V13H10V12Z" fill="currentColor" />
                                                <path d="M13 12H14V13H13V12Z" fill="currentColor" />
                                                <path
                                                    d="M5 5C5.13261 5 5.25979 4.94732 5.35355 4.85355C5.44732 4.75979 5.5 4.63261 5.5 4.5V1.5C5.5 1.36739 5.44732 1.24021 5.35355 1.14645C5.25979 1.05268 5.13261 1 5 1C4.86739 1 4.74021 1.05268 4.64645 1.14645C4.55268 1.24021 4.5 1.36739 4.5 1.5V4.5C4.5 4.63261 4.55268 4.75979 4.64645 4.85355C4.74021 4.94732 4.86739 5 5 5Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M13 5C13.1326 5 13.2598 4.94732 13.3536 4.85355C13.4473 4.75979 13.5 4.63261 13.5 4.5V1.5C13.5 1.36739 13.4473 1.24021 13.3536 1.14645C13.2598 1.05268 13.1326 1 13 1C12.8674 1 12.7402 1.05268 12.6464 1.14645C12.5527 1.24021 12.5 1.36739 12.5 1.5V4.5C12.5 4.63261 12.5527 4.75979 12.6464 4.85355C12.7402 4.94732 12.8674 5 13 5Z"
                                                    fill="currentColor" />
                                                <path d="M6.5 3H11.5V4H6.5V3Z" fill="currentColor" />
                                            </svg>
                                            {{ $comments->count() }} Comments
                                        </a>
                                    </div>

                                    <h2 class="card-blog-heading heading text-50">{{ $blog->title }}</h2>

                                    <div class="blog-description">
                                        {!! $blog->content_section_1 !!}
                                        @if (!empty($blog->blog_imgs) && is_array($blog->blog_imgs))
                                            <div class="blog-paired-image">
                                                @foreach ($blog->blog_imgs as $img)
                                                    <img src="{{ Storage::disk(config('public'))->url($img) }}"
                                                        alt="blog image" width="768" height="700" loading="lazy">
                                                @endforeach
                                            </div>
                                        @endif
                                        
                                        @if($blog->quote_text)
                                            <blockquote> {!! $blog->quote_text !!}</blockquote>
                                        @endif
                                        {!! $blog->content_section_2 !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Share Section -->
                        <div class="blog-share" data-aos="fade-up">
                            <div class="blog-share-item">
                                <h2 class="label heading text-16 fw-500">Tags:</h2>
                                <ul class="sidebar-tags list-unstyled">
                                    @foreach ($blog->tags as $tag)
                                        <li><a class="subheading subheading-bg text-18">{{ $tag }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="blog-share-item">
                                <h2 class="label heading text-16 fw-500">Share:</h2>
                                <ul class="social-icons list-unstyled">
                                    @php
                                        $shareUrl = url()->current();
                                        $shareTitle = $blog->title;

                                        // For WhatsApp, include both title and URL
                                        $whatsappText = $shareUrl;

                                        // Instagram doesn't have a direct share URL for web, so we use a custom approach
                                        // Users can copy the link and share manually

                                        $socialLinks = [
                                            'facebook' => [
                                                'url' =>
                                                    'https://www.facebook.com/sharer/sharer.php?u=' .
                                                    urlencode($shareUrl) .
                                                    '&quote=' .
                                                    urlencode($shareTitle),
                                                'icon' => 'facebook',
                                            ],
                                            'linkedin' => [
                                                'url' =>
                                                    'https://www.linkedin.com/sharing/share-offsite/?url=' .
                                                    urlencode($shareUrl),
                                                'icon' => 'linkedin',
                                            ],
                                            'twitter' => [
                                                'url' =>
                                                    'https://twitter.com/intent/tweet?text=' .
                                                    urlencode($shareTitle) .
                                                    '&url=' .
                                                    urlencode($shareUrl),
                                                'icon' => 'twitter',
                                            ],
                                            'whatsapp' => [
                                                'url' =>
                                                    'https://api.whatsapp.com/send?text=' . urlencode($whatsappText),
                                                'icon' => 'whatsapp',
                                            ],
                                            'instagram' => [
                                                'url' => 'javascript:void(0);',
                                                'icon' => 'instagram',
                                                'custom' => true,
                                                'title' => 'Copy link to share ',
                                            ],
                                        ];
                                    @endphp

                                    @foreach ($socialLinks as $platform => $data)
                                        <li>
                                            @if (isset($data['custom']) && $data['custom'])
                                                <a class="social-link text instagram-share" href="{{ $data['url'] }}"
                                                    title="{{ $data['title'] }}"
                                                    onclick="copyToClipboard('{{ $shareUrl }}', this)">
                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.59961 11.3974C6.59961 8.67119 6.59961 7.3081 7.44314 6.46118C8.28667 5.61426 9.64432 5.61426 12.3596 5.61426H15.2396C17.9549 5.61426 19.3125 5.61426 20.1561 6.46118C20.9996 7.3081 20.9996 8.6712 20.9996 11.3974V16.2167C20.9996 18.9429 20.9996 20.306 20.1561 21.1529C19.3125 21.9998 17.9549 21.9998 15.2396 21.9998H12.3596C9.64432 21.9998 8.28667 21.9998 7.44314 21.1529C6.59961 20.306 6.59961 18.9429 6.59961 16.2167V11.3974Z"
                                                            fill="#1C274C" />
                                                        <path opacity="0.5"
                                                            d="M4.17157 3.17157C3 4.34315 3 6.22876 3 10V12C3 15.7712 3 17.6569 4.17157 18.8284C4.78913 19.446 5.6051 19.738 6.79105 19.8761C6.59961 19.0353 6.59961 17.8796 6.59961 16.2167V11.3974C6.59961 8.6712 6.59961 7.3081 7.44314 6.46118C8.28667 5.61426 9.64432 5.61426 12.3596 5.61426H15.2396C16.8915 5.61426 18.0409 5.61426 18.8777 5.80494C18.7403 4.61146 18.4484 3.79154 17.8284 3.17157C16.6569 2 14.7712 2 11 2C7.22876 2 5.34315 2 4.17157 3.17157Z"
                                                            fill="#1C274C" />
                                                    </svg>
                                                </a>
                                            @else
                                                <a class="social-link text" href="{{ $data['url'] }}" target="_blank"
                                                    rel="noopener noreferrer">
                                                    @if ($data['icon'] === 'facebook')
                                                        <svg width="10" height="18" viewBox="0 0 10 18"
                                                            fill="none">
                                                            <path
                                                                d="M6.66634 10.2552H8.74967L9.58301 6.92188H6.66634V5.25521C6.66634 4.39739 6.66634 3.58854 8.33301 3.58854H9.58301V0.788625C9.31159 0.752583 8.28551 0.671875 7.20209 0.671875C4.94001 0.671875 3.33301 2.05259 3.33301 4.5883V6.92188H0.833008V10.2552H3.33301V17.3385H6.66634V10.2552Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    @elseif($data['icon'] === 'linkedin')
                                                        <svg width="17" height="16" viewBox="0 0 17 16"
                                                            fill="none">
                                                            <path
                                                                d="M3.78357 2.16742C3.78326 2.84601 3.37157 3.45666 2.74262 3.71142C2.11367 3.96619 1.39306 3.81419 0.920587 3.32711C0.448112 2.84001 0.318129 2.11511 0.59192 1.49421C0.86572 0.873305 1.48862 0.480397 2.1669 0.500755C3.0678 0.527797 3.78398 1.26612 3.78357 2.16742ZM3.83357 5.06742H0.500237V15.5007H3.83357V5.06742ZM9.10025 5.06742H5.78357V15.5007H9.06692V10.0257C9.06692 6.97573 13.0419 6.6924 13.0419 10.0257V15.5007H16.3336V8.8924C16.3336 3.75075 10.4503 3.94242 9.06692 6.4674L9.10025 5.06742Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    @elseif($data['icon'] === 'twitter')
                                                        <svg width="18" height="14" viewBox="0 0 18 14"
                                                            fill="none">
                                                            <path
                                                                d="M17.5104 1.71289C16.8743 1.9943 16.1996 2.17914 15.5088 2.26127C16.2366 1.82561 16.7812 1.14026 17.0411 0.332886C16.3573 0.739186 15.6088 1.02515 14.8282 1.17835C14.1693 0.475394 13.2483 0.0770356 12.2848 0.0781272C10.3605 0.0781272 8.79975 1.63835 8.79975 3.56354C8.79975 3.83666 8.83109 4.10153 8.88967 4.35709C5.99206 4.21121 3.42506 2.82455 1.70565 0.715686C1.39608 1.24757 1.23338 1.85216 1.2342 2.46757C1.2342 3.67667 1.84967 4.74388 2.78458 5.36868C2.23115 5.35118 1.6899 5.20171 1.20599 4.93262C1.20545 4.94726 1.20545 4.9619 1.20545 4.97574C1.20545 6.66484 2.40683 8.07384 4.00166 8.39376C3.70234 8.47476 3.3936 8.51568 3.08352 8.51543C2.85831 8.51543 2.63976 8.49468 2.42733 8.45393C2.8711 9.83826 4.15739 10.8461 5.683 10.8738C4.44845 11.8427 2.92391 12.3683 1.35453 12.3661C1.07677 12.3663 0.799246 12.3499 0.523438 12.3171C2.1167 13.3413 3.97127 13.8849 5.86535 13.8829C12.2763 13.8829 15.7817 8.57243 15.7817 3.9671C15.7817 3.81643 15.778 3.66523 15.7713 3.51615C16.4536 3.02322 17.0425 2.41257 17.5104 1.71289Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    @elseif($data['icon'] === 'whatsapp')
                                                        <svg width="18" height="18" viewBox="0 0 32 32"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none">
                                                            <path
                                                                d="M26.576 5.363c-2.69-2.69-6.406-4.354-10.511-4.354-8.209 0-14.865 6.655-14.865 14.865 0 2.732 0.737 5.291 2.022 7.491l-0.038-0.070-2.109 7.702 7.879-2.067c2.051 1.139 4.498 1.809 7.102 1.809h0.006c8.209-0.003 14.862-6.659 14.862-14.868 0-4.103-1.662-7.817-4.349-10.507l0 0zM16.062 28.228h-0.005c-0 0-0.001 0-0.001 0-2.319 0-4.489-0.64-6.342-1.753l0.056 0.031-0.451-0.267-4.675 1.227 1.247-4.559-0.294-0.467c-1.185-1.862-1.889-4.131-1.889-6.565 0-6.822 5.531-12.353 12.353-12.353s12.353 5.531 12.353 12.353c0 6.822-5.53 12.353-12.353 12.353h-0zM22.838 18.977c-0.371-0.186-2.197-1.083-2.537-1.208-0.341-0.124-0.589-0.185-0.837 0.187-0.246 0.371-0.958 1.207-1.175 1.455-0.216 0.249-0.434 0.279-0.805 0.094-1.15-0.466-2.138-1.087-2.997-1.852l0.010 0.009c-0.799-0.74-1.484-1.587-2.037-2.521l-0.028-0.052c-0.216-0.371-0.023-0.572 0.162-0.757 0.167-0.166 0.372-0.434 0.557-0.65 0.146-0.179 0.271-0.384 0.366-0.604l0.006-0.017c0.043-0.087 0.068-0.188 0.068-0.296 0-0.131-0.037-0.253-0.101-0.357l0.002 0.003c-0.094-0.186-0.836-2.014-1.145-2.758-0.302-0.724-0.609-0.625-0.836-0.637-0.216-0.010-0.464-0.012-0.712-0.012-0.395 0.010-0.746 0.188-0.988 0.463l-0.001 0.002c-0.802 0.761-1.3 1.834-1.3 3.023 0 0.026 0 0.053 0.001 0.079l-0-0.004c0.131 1.467 0.681 2.784 1.527 3.857l-0.012-0.015c1.604 2.379 3.742 4.282 6.251 5.564l0.094 0.043c0.548 0.248 1.25 0.513 1.968 0.74l0.149 0.041c0.442 0.14 0.951 0.221 1.479 0.221 0.303 0 0.601-0.027 0.889-0.078l-0.031 0.004c1.069-0.223 1.956-0.868 2.497-1.749l0.009-0.017c0.165-0.366 0.261-0.793 0.261-1.242 0-0.185-0.016-0.366-0.047-0.542l0.003 0.019c-0.092-0.155-0.34-0.247-0.712-0.434z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    @endif
                                                </a>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <script>
                            function copyToClipboard(text, element) {
                                // Create a temporary textarea
                                const textarea = document.createElement('textarea');
                                textarea.value = text;
                                textarea.style.position = 'fixed';
                                textarea.style.opacity = '0';
                                document.body.appendChild(textarea);

                                // Select and copy
                                textarea.select();
                                textarea.setSelectionRange(0, 99999); // For mobile devices

                                try {
                                    const successful = document.execCommand('copy');

                                    // Show feedback
                                    const originalTitle = element.title;
                                    element.title = 'Link copied!';
                                    element.classList.add('copied');

                                    // Reset after 2 seconds
                                    setTimeout(() => {
                                        element.title = originalTitle;
                                        element.classList.remove('copied');
                                    }, 2000);

                                    console.log('Link copied to clipboard: ' + text);
                                } catch (err) {
                                    console.error('Failed to copy: ', err);
                                    // Fallback: Open Instagram in new tab with message
                                    window.open('https://www.instagram.com/', '_blank');
                                }

                                // Clean up
                                document.body.removeChild(textarea);
                            }
                        </script>

                        <style>
                            .instagram-share {
                                cursor: pointer;
                            }

                            .instagram-share.copied {
                                color: #E4405F;
                                /* Instagram color */
                            }

                            .social-link {
                                transition: all 0.3s ease;
                            }

                            .social-link:hover {
                                transform: translateY(-3px);
                            }

                            /* Social media brand colors on hover */
                            .social-link[href*="facebook.com"]:hover {
                                color: #1877F2;
                            }

                            .social-link[href*="linkedin.com"]:hover {
                                color: #0A66C2;
                            }

                            .social-link[href*="twitter.com"]:hover {
                                color: #1DA1F2;
                            }

                            .social-link[href*="whatsapp.com"]:hover {
                                color: #25D366;
                            }

                            .instagram-share:hover {
                                color: #E4405F;
                            }
                        </style>

                        <!-- include('pages.blogs.comment_section') -->
                        @livewire('comment-section', ['blog' => $blog])
                    </div>
                    @include(
                        'pages.blogs.sidebar_section',
                        ['tags' => $blog->tags],
                        ['latestBlogs' => $latestBlogs]
                    )
                </div>
            </div>
        </div>
    </main>
@endsection
