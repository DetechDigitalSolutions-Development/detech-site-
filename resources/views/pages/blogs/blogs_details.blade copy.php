@extends('layouts.app')

@section('content')
<main>
    <!-- Page Banner -->
    @include('components.page_banner',['title'=>'Blogs Details'])
    
    <div class="page-blog-details mt-100">
        <div class="container">
            <!-- Mobile Filter Opener -->
            <drawer-opener class="open-sidebar svg-wrapper text text-20 fw-500 d-lg-none" data-drawer=".drawer-blog-sidebar" data-aos="fade-up">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z"/>
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
                                <img src="assets/img/blog/1.jpg" alt="blog image" width="1000" height="707" loading="lazy">
                            </div>

                            <div class="card-blog-content">
                                <div class="card-blog-meta">
                                    <div class="card-blog-meta-item text text-18">
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none"><path d="M9.00098 0.650391C11.499 0.650391 13.5437 2.69437 13.5439 5.19238C13.5439 7.69056 11.4992 9.73535 9.00098 9.73535C6.50299 9.73517 4.45898 7.69045 4.45898 5.19238C4.45919 2.69448 6.50308 0.650569 9.00098 0.650391Z" stroke="currentColor" stroke-width="1.3"/><path d="M5.2041 11.4092C5.22954 11.4041 5.2933 11.4126 5.34375 11.4502L5.34863 11.4531C6.41552 12.2405 7.68474 12.6464 8.99902 12.6465C10.3135 12.6465 11.5834 12.2407 12.6504 11.4531L12.6553 11.4502C12.6717 11.4383 12.7412 11.4086 12.8506 11.418C14.4691 11.6454 15.9118 12.559 16.8516 13.9482L16.8555 13.9531C17.0155 14.1843 17.152 14.4246 17.2607 14.6719C17.1428 14.8756 17.0147 15.073 16.8711 15.2705L16.7158 15.4775L16.708 15.4883C16.4195 15.8798 16.0836 16.2387 15.7285 16.5938C15.4317 16.8905 15.0922 17.1871 14.7559 17.4395C13.0785 18.6922 11.0607 19.3506 8.97656 19.3506C6.89732 19.3505 4.88498 18.6944 3.20996 17.4473C2.84577 17.1514 2.51261 16.8807 2.22559 16.5938L2.21875 16.5859L2.21094 16.5801L1.95215 16.3242C1.69963 16.0639 1.46736 15.7886 1.24609 15.4883L1.24316 15.4834L0.944336 15.0703C0.86428 14.9535 0.788425 14.8348 0.71875 14.7178C0.835661 14.4569 0.982086 14.185 1.14258 13.9531L1.14355 13.9541L1.15137 13.9424C2.06835 12.5567 3.53571 11.6401 5.16504 11.416L5.18457 11.4131L5.2041 11.4092Z" stroke="currentColor" stroke-width="1.3"/></svg>
                                        Admin
                                    </div>
                                    <div class="card-blog-meta-item text text-18">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none"><path d="M1.125 1.25H16.875V11.375H9L4.5 15.3125V11.375H1.125V1.25Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        October 2, 2025
                                    </div>
                                    <a class="card-blog-meta-item text text-18" href="#blog-comments">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M16.1251 3H14.5001V4H16.0001V15H2.00013V4H3.50013V3H1.87513C1.75825 3.00195 1.6429 3.02691 1.53566 3.07345C1.42843 3.11999 1.33141 3.1872 1.25016 3.27125C1.1689 3.35529 1.105 3.45451 1.0621 3.56325C1.0192 3.67199 0.998142 3.78812 1.00013 3.905V15.095C0.998142 15.2119 1.0192 15.328 1.0621 15.4367C1.105 15.5455 1.1689 15.6447 1.25016 15.7288C1.33141 15.8128 1.42843 15.88 1.53566 15.9265C1.6429 15.9731 1.75825 15.998 1.87513 16H16.1251C16.242 15.998 16.3574 15.9731 16.4646 15.9265C16.5718 15.88 16.6688 15.8128 16.7501 15.7288C16.8314 15.6447 16.8953 15.5455 16.9382 15.4367C16.9811 15.328 17.0021 15.2119 17.0001 15.095V3.905C17.0021 3.78812 16.9811 3.67199 16.9382 3.56325C16.8953 3.45451 16.8314 3.35529 16.7501 3.27125C16.6688 3.1872 16.5718 3.11999 16.4646 3.07345C16.3574 3.02691 16.242 3.00195 16.1251 3Z" fill="currentColor"/><path d="M4 7H5V8H4V7Z" fill="currentColor"/><path d="M7 7H8V8H7V7Z" fill="currentColor"/><path d="M10 7H11V8H10V7Z" fill="currentColor"/><path d="M13 7H14V8H13V7Z" fill="currentColor"/><path d="M4 9.5H5V10.5H4V9.5Z" fill="currentColor"/><path d="M7 9.5H8V10.5H7V9.5Z" fill="currentColor"/><path d="M10 9.5H11V10.5H10V9.5Z" fill="currentColor"/><path d="M13 9.5H14V10.5H13V9.5Z" fill="currentColor"/><path d="M4 12H5V13H4V12Z" fill="currentColor"/><path d="M7 12H8V13H7V12Z" fill="currentColor"/><path d="M10 12H11V13H10V12Z" fill="currentColor"/><path d="M13 12H14V13H13V12Z" fill="currentColor"/><path d="M5 5C5.13261 5 5.25979 4.94732 5.35355 4.85355C5.44732 4.75979 5.5 4.63261 5.5 4.5V1.5C5.5 1.36739 5.44732 1.24021 5.35355 1.14645C5.25979 1.05268 5.13261 1 5 1C4.86739 1 4.74021 1.05268 4.64645 1.14645C4.55268 1.24021 4.5 1.36739 4.5 1.5V4.5C4.5 4.63261 4.55268 4.75979 4.64645 4.85355C4.74021 4.94732 4.86739 5 5 5Z" fill="currentColor"/><path d="M13 5C13.1326 5 13.2598 4.94732 13.3536 4.85355C13.4473 4.75979 13.5 4.63261 13.5 4.5V1.5C13.5 1.36739 13.4473 1.24021 13.3536 1.14645C13.2598 1.05268 13.1326 1 13 1C12.8674 1 12.7402 1.05268 12.6464 1.14645C12.5527 1.24021 12.5 1.36739 12.5 1.5V4.5C12.5 4.63261 12.5527 4.75979 12.6464 4.85355C12.7402 4.94732 12.8674 5 13 5Z" fill="currentColor"/><path d="M6.5 3H11.5V4H6.5V3Z" fill="currentColor"/></svg>
                                        02 Comments
                                    </a>
                                </div>

                                <h2 class="card-blog-heading heading text-50">Empowering entrepreneu fueling growth knowledge</h2>

                                <div class="blog-description">
                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat.</p>
                                    <p>Use both direct conversations and indirect observations to get visibility into employees challenges and concerns.</p>

                                    <div class="blog-paired-image">
                                        <img src="assets/img/blog/d1.jpg" alt="blog image" width="768" height="700" loading="lazy">
                                        <img src="assets/img/blog/d2.jpg" alt="blog image" width="768" height="700" loading="lazy">
                                    </div>

                                    <blockquote>We appreciate the consistent high-quality service provided by their team goes above and beyond concerns promptly</blockquote>

                                    <p>The third Monday of January is supposed to be the most depressing day of the year. Whether you believe that or not, the long nights, cold weather make matters worse.</p>
                                    <p>Vast numbers of employees now work remotely, and it's too late to develop a set of remote-work policies if you didn't already have one.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Share Section -->
                    <div class="blog-share" data-aos="fade-up">
                        <div class="blog-share-item">
                            <h2 class="label heading text-16 fw-500">Tags:</h2>
                            <ul class="sidebar-tags list-unstyled">
                                <li><a class="subheading subheading-bg text-18" href="blog-details.html">Agency</a></li>
                                <li><a class="subheading subheading-bg text-18" href="blog-details.html">Business</a></li>
                                <li><a class="subheading subheading-bg text-18" href="blog-details.html">Design</a></li>
                            </ul>
                        </div>
                        <div class="blog-share-item">
                            <h2 class="label heading text-16 fw-500">Share:</h2>
                            <ul class="social-icons list-unstyled">
                                <li><a class="social-link text" href="https://web.facebook.com"><svg width="10" height="18" viewBox="0 0 10 18" fill="none"><path d="M6.66634 10.2552H8.74967L9.58301 6.92188H6.66634V5.25521C6.66634 4.39739 6.66634 3.58854 8.33301 3.58854H9.58301V0.788625C9.31159 0.752583 8.28551 0.671875 7.20209 0.671875C4.94001 0.671875 3.33301 2.05259 3.33301 4.5883V6.92188H0.833008V10.2552H3.33301V17.3385H6.66634V10.2552Z" fill="currentColor"/></svg></a></li>
                                <li><a class="social-link text" href="https://www.linkedin.com/"><svg width="17" height="16" viewBox="0 0 17 16" fill="none"><path d="M3.78357 2.16742C3.78326 2.84601 3.37157 3.45666 2.74262 3.71142C2.11367 3.96619 1.39306 3.81419 0.920587 3.32711C0.448112 2.84001 0.318129 2.11511 0.59192 1.49421C0.86572 0.873305 1.48862 0.480397 2.1669 0.500755C3.0678 0.527797 3.78398 1.26612 3.78357 2.16742ZM3.83357 5.06742H0.500237V15.5007H3.83357V5.06742ZM9.10025 5.06742H5.78357V15.5007H9.06692V10.0257C9.06692 6.97573 13.0419 6.6924 13.0419 10.0257V15.5007H16.3336V8.8924C16.3336 3.75075 10.4503 3.94242 9.06692 6.4674L9.10025 5.06742Z" fill="currentColor"/></svg></a></li>
                                <li><a class="social-link text" href="https://x.com/"><svg width="18" height="14" viewBox="0 0 18 14" fill="none"><path d="M17.5104 1.71289C16.8743 1.9943 16.1996 2.17914 15.5088 2.26127C16.2366 1.82561 16.7812 1.14026 17.0411 0.332886C16.3573 0.739186 15.6088 1.02515 14.8282 1.17835C14.1693 0.475394 13.2483 0.0770356 12.2848 0.0781272C10.3605 0.0781272 8.79975 1.63835 8.79975 3.56354C8.79975 3.83666 8.83109 4.10153 8.88967 4.35709C5.99206 4.21121 3.42506 2.82455 1.70565 0.715686C1.39608 1.24757 1.23338 1.85216 1.2342 2.46757C1.2342 3.67667 1.84967 4.74388 2.78458 5.36868C2.23115 5.35118 1.6899 5.20171 1.20599 4.93262C1.20545 4.94726 1.20545 4.9619 1.20545 4.97574C1.20545 6.66484 2.40683 8.07384 4.00166 8.39376C3.70234 8.47476 3.3936 8.51568 3.08352 8.51543C2.85831 8.51543 2.63976 8.49468 2.42733 8.45393C2.8711 9.83826 4.15739 10.8461 5.683 10.8738C4.44845 11.8427 2.92391 12.3683 1.35453 12.3661C1.07677 12.3663 0.799246 12.3499 0.523438 12.3171C2.1167 13.3413 3.97127 13.8849 5.86535 13.8829C12.2763 13.8829 15.7817 8.57243 15.7817 3.9671C15.7817 3.81643 15.778 3.66523 15.7713 3.51615C16.4536 3.02322 17.0425 2.41257 17.5104 1.71289Z" fill="currentColor"/></svg></a></li>
                                <li><a class="social-link text" href="https://www.instagram.com/"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9.85724 0.671875C10.7951 0.673425 11.2703 0.678392 11.681 0.690617L11.8427 0.6959C12.0296 0.702542 12.2139 0.710875 12.4362 0.721292C13.3229 0.762267 13.9278 0.902542 14.4591 1.10879C15.0083 1.3206 15.4722 1.60671 15.9354 2.06991C16.3979 2.5331 16.6841 2.99837 16.8966 3.54629C17.1021 4.07685 17.2424 4.68241 17.2841 5.56921C17.294 5.79143 17.302 5.97577 17.3086 6.16263L17.3138 6.32437C17.326 6.73499 17.3316 7.21032 17.3333 8.14818L17.334 8.76952C17.3341 8.84543 17.3341 8.92377 17.3341 9.0046L17.334 9.23968L17.3335 9.8611C17.3319 10.7989 17.327 11.2743 17.3147 11.6848L17.3094 11.8466C17.3028 12.0335 17.2945 12.2178 17.2841 12.44C17.2431 13.3268 17.1021 13.9317 16.8966 14.4629C16.6847 15.0123 16.3979 15.4762 15.9354 15.9393C15.4722 16.4018 15.0062 16.6879 14.4591 16.9004C13.9278 17.106 13.3229 17.2463 12.4362 17.2879C12.2139 17.2978 12.0296 17.3059 11.8427 17.3124L11.681 17.3177C11.2703 17.3299 10.7951 17.3354 9.85724 17.3373L9.23582 17.3379C9.1599 17.3379 9.08157 17.3379 9.00074 17.3379H8.76565L8.14424 17.3373C7.2064 17.3358 6.73109 17.3309 6.32046 17.3186L6.15873 17.3134C5.97185 17.3067 5.78752 17.2983 5.5653 17.2879C4.67849 17.247 4.07433 17.106 3.54239 16.9004C2.99377 16.6887 2.52919 16.4018 2.06599 15.9393C1.6028 15.4762 1.31739 15.0102 1.10489 14.4629C0.898636 13.9317 0.759052 13.3268 0.717386 12.44C0.707486 12.2178 0.69941 12.0335 0.692869 11.8466L0.687627 11.6848C0.675435 11.2743 0.669877 10.7989 0.668077 9.8611L0.667969 8.14818C0.669519 7.21032 0.674477 6.73499 0.686702 6.32437L0.691994 6.16263C0.698635 5.97577 0.706969 5.79143 0.717386 5.56921C0.758352 4.68171 0.898636 4.07754 1.10489 3.54629C1.31669 2.99768 1.6028 2.5331 2.06599 2.06991C2.52919 1.60671 2.99447 1.32129 3.54239 1.10879C4.07364 0.902542 4.6778 0.762958 5.5653 0.721292C5.78752 0.7114 5.97185 0.703325 6.15873 0.696783L6.32046 0.691542C6.73109 0.679342 7.2064 0.673783 8.14424 0.671983L9.85724 0.671875ZM9.00074 4.83796C6.6983 4.83796 4.83405 6.70423 4.83405 9.0046C4.83405 11.307 6.70033 13.1713 9.00074 13.1713C11.3032 13.1713 13.1674 11.305 13.1674 9.0046C13.1674 6.70221 11.3011 4.83796 9.00074 4.83796ZM9.00074 6.50462C10.3815 6.50462 11.5007 7.62352 11.5007 9.0046C11.5007 10.3853 10.3818 11.5046 9.00074 11.5046C7.61999 11.5046 6.50072 10.3858 6.50072 9.0046C6.50072 7.62385 7.61957 6.50462 9.00074 6.50462ZM13.3757 3.58796C12.8013 3.58796 12.3341 4.05455 12.3341 4.62892C12.3341 5.20329 12.8007 5.6706 13.3757 5.6706C13.9501 5.6706 14.4174 5.20402 14.4174 4.62892C14.4174 4.05455 13.9493 3.58724 13.3757 3.58796Z" fill="currentColor"/></svg></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Comments Section -->
                    <div class="comments-section scroll-margin" id="blog-comments">
                        <h2 class="comment-section-heading heading text-36" data-aos="fade-up">2 Comments</h2>
                        <ul class="comments-area list-unstyled">
                            @foreach([['c1.jpg', 'Ralph Edwards'], ['c2.jpg', 'Sara Joseph'], ['c3.jpg', 'Andrew Naeem']] as $comment)
                            <li class="comments-item {{ $loop->index == 1 ? 'replied-item' : '' }}" data-aos="fade-up">
                                <div class="commentator-img">
                                    <img src="assets/img/blog/{{ $comment[0] }}" alt="image" width="110" height="110" loading="lazy">
                                </div>
                                <div class="comment-details">
                                    <div class="comments-top">
                                        <div class="comments-meta">
                                            <div class="comment-date text text-16">Aug 28, 2025</div>
                                            <h2 class="commentator-name heading text-22">{{ $comment[1] }}</h2>
                                        </div>
                                        <div class="button-reply text text-16 fw-500">
                                            <svg viewBox="0 0 18 14" fill="none"><path d="M9.16927 13.6615L0.835938 6.99479L9.16927 0.328125V4.49479C13.7716 4.49479 17.5026 8.22579 17.5026 12.8281C17.5026 13.0555 17.4935 13.2809 17.4756 13.5037C16.2197 11.12 13.7176 9.49479 10.8359 9.49479H9.16927V13.6615Z" fill="currentColor"/></svg>
                                            Reply
                                        </div>
                                    </div>
                                    <p class="comment-bottom text text-16">Our advanced energy storage solutions allow you to store excess energy generated from renewable sources like solar and wind.</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Comment Form -->
                    <div class="comments-form">
                        <div class="comments-form-headings">
                            <h2 class="heading text-36" data-aos="fade-up">Leave a reply</h2>
                            <p class="text text-16" data-aos="fade-up">Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <form action="#" class="form contact-form">
                            <div class="field w-half" data-aos="fade-up">
                                <input id="CommentFormname" class="text text-16" type="text" placeholder="Your Name*" name="name" required>
                            </div>
                            <div class="field w-half" data-aos="fade-up">
                                <input id="CommentFormemail" class="text text-16" type="text" placeholder="Your Email*" name="email" required>
                            </div>
                            <div class="field" data-aos="fade-up">
                                <input id="CommentFormWebsite" class="text text-16" type="text" placeholder="Your Website*" name="website">
                            </div>
                            <div class="field" data-aos="fade-up">
                                <textarea id="CommentFormbody" class="text text-16" rows="4" placeholder="Type your message" name="message" required></textarea>
                            </div>
                            <div class="form-button" data-aos="fade-up">
                                <button type="submit" class="button button--primary">Post Comment
                                    <span class="svg-wrapper">
                                        <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path></svg>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-12 col-lg-5">
                    <div class="sidebar-filter drawer-blog-sidebar">
                        <div class="drawer-headings d-lg-none" data-aos="fade-up">
                            <div class="heading text-24">Filter</div>
                            <drawer-opener class="svg-wrapper menu-close" data-drawer=".drawer-blog-sidebar">
                                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"><path d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z" fill="currentColor"></path></svg>
                            </drawer-opener>
                        </div>
                        
                        <aside class="blog-sidebar">
                            <!-- Search Widget -->
                            <div class="sidebar-widget radius18" data-aos="fade-up">
                                <h2 class="sidebar-heading heading text-24">Search Here</h2>
                                <form action="#" class="form-blog-search">
                                    <input type="text" id="blog-search-input" name="blog-search" placeholder="Search here" class="text-18">
                                    <button type="submit" class="button button--primary">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M2.5 8.33333C2.5 9.09938 2.65088 9.85792 2.94404 10.5657C3.23719 11.2734 3.66687 11.9164 4.20854 12.4581C4.75022 12.9998 5.39328 13.4295 6.10101 13.7226C6.80875 14.0158 7.56729 14.1667 8.33333 14.1667C9.09938 14.1667 9.85792 14.0158 10.5657 13.7226C11.2734 13.4295 11.9164 12.9998 12.4581 12.4581C12.9998 11.9164 13.4295 11.2734 13.7226 10.5657C14.0158 9.85792 14.1667 9.09938 14.1667 8.33333C14.1667 7.56729 14.0158 6.80875 13.7226 6.10101C13.4295 5.39328 12.9998 4.75022 12.4581 4.20854C11.9164 3.66687 11.2734 3.23719 10.5657 2.94404C9.85792 2.65088 9.09938 2.5 8.33333 2.5C7.56729 2.5 6.80875 2.65088 6.10101 2.94404C5.39328 3.23719 4.75022 3.66687 4.20854 4.20854C3.66687 4.75022 3.23719 5.39328 2.94404 6.10101C2.65088 6.80875 2.5 7.56729 2.5 8.33333Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="M17.5 17.5L12.5 12.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                </form>
                            </div>

                            <!-- Categories Widget -->
                            <div class="sidebar-widget radius18" data-aos="fade-up">
                                <h2 class="sidebar-heading heading text-24">Categories</h2>
                                <ul class="blog-categories list-unstyled">
                                    @foreach(['Branding', 'Consulting', 'Innovations', 'Managements', 'Marketing'] as $category)
                                    <li>
                                        <a class="blog-category subheading subheading-bg text-18 fw-400" href="blog.html">
                                            {{ $category }}
                                            <svg viewBox="0 0 18 16" fill="none"><path d="M14.6895 7.25095H0.75C0.551088 7.25095 0.360322 7.32997 0.21967 7.47062C0.0790178 7.61127 0 7.80203 0 8.00095C0 8.19986 0.0790178 8.39063 0.21967 8.53128C0.360322 8.67193 0.551088 8.75095 0.75 8.75095H14.6895L9.219 14.2199C9.07817 14.3608 8.99905 14.5518 8.99905 14.7509C8.99905 14.9501 9.07817 15.1411 9.219 15.2819C9.35983 15.4228 9.55084 15.5019 9.75 15.5019C9.94916 15.5019 10.1402 15.4228 10.281 15.2819L17.031 8.53195C17.1008 8.46228 17.1563 8.37951 17.1941 8.2884C17.2319 8.19728 17.2513 8.0996 17.2513 8.00095C17.2513 7.9023 17.2319 7.80462 17.1941 7.7135C17.1563 7.62238 17.1008 7.53962 17.031 7.46995L10.281 0.719947C10.1402 0.579117 9.94916 0.5 9.75 0.5C9.55084 0.5 9.35983 0.579117 9.219 0.719947C9.07817 0.860777 8.99905 1.05178 8.99905 1.25095C8.99905 1.45011 9.07817 1.64112 9.219 1.78195L14.6895 7.25095Z" fill="currentColor"/></svg>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- Recent Posts Widget -->
                            <div class="sidebar-widget radius18" data-aos="fade-up">
                                <h2 class="sidebar-heading heading text-24">Recent Post</h2>
                                <ul class="recent-post list-unstyled">
                                    @foreach([['1.jpg', 'October 12, 2025', 'Empowering entrepreneu fueling growth knowledge'], ['2.jpg', 'October 15, 2025', 'Grow Your Business, Cut Office Costs by 70%'], ['3.jpg', 'October 15, 2025', 'Powering Business—Always On, Always Ready.']] as $post)
                                    <li>
                                        <div class="card-blog-list">
                                            <div class="card-blog-list-media">
                                                <img src="assets/img/blog/{{ $post[0] }}" alt="blog image" width="1000" height="707" loading="lazy">
                                            </div>
                                            <div class="card-blog-content">
                                                <div class="card-blog-meta">
                                                    <div class="card-blog-meta-item text text-16">{{ $post[1] }}</div>
                                                </div>
                                                <h2 class="card-blog-heading heading text-20">
                                                    <a href="blog-details.html">{{ $post[2] }}</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- Tags Widget -->
                            <div class="sidebar-widget radius18" data-aos="fade-up">
                                <h2 class="sidebar-heading heading text-24">Tags</h2>
                                <ul class="sidebar-tags list-unstyled">
                                    @foreach(['Agency', 'Business', 'Design', 'Marketing', 'Planting', 'Trend', 'Mobile', 'All Project'] as $tag)
                                    <li><a class="subheading subheading-bg text-18" href="blog-details.html">{{ $tag }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection