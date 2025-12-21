@extends('layouts.app')

@section('content')
<main>
    <!-- Page Banner -->
    @include('components.page_banner',['title'=>'Our Working Process','banner_image'=>'assets/img/banner/page-banner.png'])

    <!-- Content Section -->
    <div class="page-blog mt-100">
        <div class="container container-narrow">
            <div class="blog-details">
                <div class="card-blog-list" data-aos="fade-up">
                    <div class="card-blog-content">
                        <h2 class="card-blog-heading heading text-50 text-center">
                            Our Working Process
                        </h2>

                        <div class="blog-description">
                            <p>
                                At Detech, we follow a clear and systematic working process to deliver reliable, scalable, and high-quality digital solutions. Our approach ensures transparency, efficiency, and consistent results at every stage of the project lifecycle.
                            </p>

                            <h3>Step 1: Requirement Gathering & Discovery</h3>
                            <p>
                                We start by understanding your business objectives, target users, and technical requirements. Through discussions and analysis, we identify challenges, define goals, and document clear project requirements to avoid ambiguity later in the process.
                            </p>
                            <p><strong>Outcome:</strong></p>
                            <ul>
                                <li>Clear understanding of business needs</li>
                                <li>Defined project scope and expectations</li>
                            </ul>

                            <h3>Step 2: Planning & Strategy</h3>
                            <p>
                                Once requirements are finalized, we create a detailed project roadmap. This includes timelines, milestones, resource allocation, and technical architecture. Our planning phase ensures smooth execution and timely delivery.
                            </p>
                            <p><strong>Outcome:</strong></p>
                            <ul>
                                <li>Project timeline and milestones</li>
                                <li>Technical and functional strategy</li>
                            </ul>

                            <h3>Step 3: UI/UX Design</h3>
                            <p>
                                Our design team creates intuitive, user-friendly, and visually appealing interfaces. We focus on usability, accessibility, and consistency to ensure a seamless user experience across all devices.
                            </p>
                            <p><strong>Outcome:</strong></p>
                            <ul>
                                <li>Wireframes and design prototypes</li>
                                <li>Responsive and user-centric designs</li>
                            </ul>

                            <h3>Step 4: Development & Implementation</h3>
                            <p>
                                Our developers bring the designs to life using modern technologies and best coding practices. We ensure scalability, performance, and security throughout the development process.
                            </p>
                            <p><strong>Outcome:</strong></p>
                            <ul>
                                <li>Functional and scalable application</li>
                                <li>Clean, maintainable codebase</li>
                            </ul>

                            <h3>Step 5: Testing & Quality Assurance</h3>
                            <p>
                                Quality is a priority at Detech. Our QA team conducts comprehensive testing, including functional, usability, performance, and security testing, to ensure the solution meets all requirements.
                            </p>
                            <p><strong>Outcome:</strong></p>
                            <ul>
                                <li>Bug-free and stable product</li>
                                <li>Verified functionality and performance</li>
                            </ul>

                            <h3>Step 6: Deployment & Launch</h3>
                            <p>
                                After successful testing, we deploy the solution to the production environment. We ensure a smooth launch with proper configuration, monitoring, and documentation.
                            </p>
                            <p><strong>Outcome:</strong></p>
                            <ul>
                                <li>Live and operational product</li>
                                <li>Smooth and secure deployment</li>
                            </ul>

                            <h3>Step 7: Support & Maintenance</h3>
                            <p>
                                Our work doesn't end at launch. We provide ongoing support, maintenance, and enhancements to ensure long-term success and adaptability to future business needs.
                            </p>
                            <p><strong>Outcome:</strong></p>
                            <ul>
                                <li>Continuous improvements</li>
                                <li>Reliable post-launch support</li>
                            </ul>

                            <h3>Why Our Process Works</h3>
                            <ul>
                                <li>Transparent and structured workflow</li>
                                <li>Client involvement at every key stage</li>
                                <li>High-quality, tested deliverables</li>
                                <li>On-time and cost-effective solutions</li>
                            </ul>

                            <div class="cta-section mt-60 text-center" data-aos="fade-up">
                                <h3 class="heading text-32 mb-30">Ready to Start Your Project?</h3>
                                <p class="text text-18 mb-40">
                                    Let's turn your ideas into impactful digital solutions.<br>
                                    Contact Detech today and let's build something great together.
                                </p>
                                <a href="{{ route('contact') }}" class="button button--primary mt-4">
                                    Contact Us
                                    <span class="svg-wrapper">
                                        <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                                                fill="CurrentColor" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection