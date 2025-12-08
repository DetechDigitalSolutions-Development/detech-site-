@extends('layouts.app')

@section('content')
    <main>
        <!-- Page Banner -->
        @include('components.page_banner', [
            'title' => 'FAQ',
            'banner_image' => 'assets/img/banner/page-banner.png',
        ])

        <!-- FAQ -->
        <div class="faq mt-100">
            <div class="container">
                <div class="row">
                    <div class="">
                        <div class="section-headings">
                            
                            <h2 class="heading text-50" data-aos="fade-up" data-aos-delay="50">
                                Apply for this position
                            </h2>
                            <div class="text text-16" data-aos="fade-up" data-aos-delay="80">
                                Fill the following fields and we will get back to you soon.
                            </div>
                            <div class="faq-form-wrap radius18" data-aos="fade-up">
                                <form action="#" class="faq-form form contact-form">
                                    <div class="field" data-aos="fade-up">
                                        <label for="FaqForm-name" class="visually-hidden">
                                            Your Name
                                        </label>
                                        <input id="FaqForm-name" class="text text-16" type="text" placeholder="Your Name"
                                            name="name" required>
                                    </div>
                                    <div class="field" data-aos="fade-up">
                                        <label for="FaqForm-email" class="visually-hidden">
                                            Your E-mail
                                        </label>
                                        <input id="FaqForm-email" class="text text-16" type="Email"
                                            placeholder="Your Email" name="email" required>
                                    </div>
                                    <div class="field" data-aos="fade-up">
                                        <label for="FaqForm-pno" class="visually-hidden">
                                            Your Phone Number
                                        </label>
                                        <input id="FaqForm-pno" class="text text-16" type="text"
                                            placeholder="Your Phone Number" name="phone_number" required>
                                    </div>

                                    <div class="field" data-aos="fade-up" data-aos-delay="50">
                                        <label for="FaqForm-body" class="visually-hidden">
                                            Why do you want to join Detech?
                                        </label>
                                        <textarea id="FaqForm-body" class="text text-16" rows="4" placeholder="Why do you want to join Detech?"
                                            name="Message" required></textarea>
                                    </div>
                                    <div class="field" data-aos="fade-up">
                                        <label for="FaqForm-upload" class="visually-hidden">
                                            Upload CV/Resume
                                        </label>

                                        <!-- Custom file upload container -->
                                        <div class="file-upload-container">
                                            <!-- Hidden file input -->
                                            <input id="FaqForm-upload" type="file" name="cv_resume" accept=".pdf"
                                                required>

                                            <!-- Upload box content -->
                                            <div class="upload-box">
                                                <div class="upload-icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2">
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <polyline points="17 8 12 3 7 8"></polyline>
                                                        <line x1="12" y1="3" x2="12" y2="15">
                                                        </line>
                                                    </svg>
                                                </div>

                                                <div class="upload-text">
                                                    <div class="upload-title">Upload CV/Resume</div>
                                                    <div class="upload-info">
                                                        <span class="info-item">Maximum file size 10 MB.</span>
                                                        <span class="info-item">Supports: PDF</span>
                                                    </div>
                                                </div>

                                                <div class="browse-button">Browse your files</div>
                                            </div>

                                            <!-- Selected file display (hidden by default) -->
                                            <div class="selected-file" id="selected-file-display">
                                                <span class="file-name"></span>
                                                <button type="button" class="remove-file"
                                                    aria-label="Remove file">×</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button data-aos="fade-up" data-aos-delay="50" class="button button--primary"
                                        aria-label="Ask Your Question">
                                        Submit Application
                                        <span class="svg-wrapper">
                                            <svg class="icon-20" width="20" height="20" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.55664 2.88281L6.77097 3.66848L9.54875 6.44625H2.55664V7.55736H9.54875L6.77097 10.3351L7.55664 11.1208L11.6756 7.0018L7.55664 2.88281Z"
                                                    fill="CurrentColor" />
                                            </svg>
                                        </span>
                                        </a>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
