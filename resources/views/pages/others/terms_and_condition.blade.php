@extends('layouts.app')

@section('content')
<main>
    <!-- Page Banner -->
    @include('components.page_banner',['title'=>'Terms and Conditions','banner_image'=>'assets/img/banner/page-banner.png'])

    <!-- Blog List -->
    <div class="page-blog mt-100">
        <div class="container container-narrow">
            <div class="blog-details">
                <div class="card-blog-list" data-aos="fade-up">
                    <div class="card-blog-content">
                        <h2 class="card-blog-heading heading text-50 text-center">
                            Terms and Conditions – Detech
                        </h2>

                        <div class="blog-description">
                            <p>
                                Welcome to Detech! These Terms and Conditions outline the rules and regulations for the use of Detech's website, accessible at https://www.detech.live.
                            </p>
                            
                            <p>
                                By accessing or using this website, you agree to be bound by these Terms and Conditions. If you do not agree with any part of these terms, you must not continue to use the Detech website.
                            </p>

                            <h4>1. Definitions</h4>
                            <p>
                                For the purposes of these Terms and Conditions, the following terminology applies:
                            </p>
                            <ul>
                                <li><strong>"Client", "You", "Your"</strong> refers to the user accessing this website and accepting the Company's terms.</li>
                                <li><strong>"The Company", "We", "Our", "Us"</strong> refers to Detech.</li>
                                <li><strong>"Party", "Parties"</strong> refers to both the Client and the Company.</li>
                            </ul>
                            <p>All terminology applies interchangeably in singular or plural form and regardless of capitalization or gender.</p>

                            <h4>2. Cookies</h4>
                            <p>
                                We use cookies to enhance your experience on our website. By accessing Detech, you agree to the use of cookies in accordance with our <a href="{{ route('privacy') }}">Privacy Policy</a>.
                            </p>
                            <p>Cookies help us:</p>
                            <ul>
                                <li>Enable essential website functionality</li>
                                <li>Understand user behavior and improve performance</li>
                            </ul>
                            <p>Some affiliate or analytics partners may also use cookies.</p>

                            <h4>3. Intellectual Property Rights</h4>
                            <p>
                                Unless otherwise stated, Detech and/or its licensors own all intellectual property rights for the content published on this website. All rights are reserved.
                            </p>
                            <p>You may access the website for personal, non-commercial use only, subject to the following restrictions. You must not:</p>
                            <ul>
                                <li>Republish material from Detech</li>
                                <li>Sell, rent, or sub-license material from Detech</li>
                                <li>Reproduce, duplicate, or copy material from Detech</li>
                                <li>Redistribute content from Detech without prior written consent</li>
                            </ul>

                            <h4>4. User Comments and Content</h4>
                            <p>
                                Certain parts of this website may allow users to post comments or content. Detech does not pre-screen or review comments before they appear on the website.
                            </p>
                            <p>
                                Comments represent the views of the individual who posts them and do not reflect the views of Detech, its employees, or affiliates.
                            </p>
                            <p>
                                To the extent permitted by law, Detech shall not be liable for any comments or damages resulting from their use or publication.
                            </p>
                            <p>
                                Detech reserves the right to monitor and remove comments that are inappropriate, offensive, or in breach of these Terms.
                            </p>
                            <p>You warrant that:</p>
                            <ul>
                                <li>You have the right and necessary permissions to post the content</li>
                                <li>Your content does not infringe intellectual property rights</li>
                                <li>Your content is not defamatory, offensive, unlawful, or invasive of privacy</li>
                                <li>Your content will not be used for solicitation or unlawful activities</li>
                            </ul>
                            <p>
                                By posting content, you grant Detech a non-exclusive license to use, reproduce, edit, and distribute such content in any media.
                            </p>

                            <h4>5. Hyperlinking to Our Website</h4>
                            <p>
                                The following organizations may link to our website without prior written approval:
                            </p>
                            <ul>
                                <li>Government agencies</li>
                                <li>Search engines</li>
                                <li>News organizations</li>
                                <li>Online directory distributors</li>
                                <li>System-wide accredited businesses (excluding non-profit fundraising organizations)</li>
                            </ul>
                            <p>Links must:</p>
                            <ul>
                                <li>Not be misleading or deceptive</li>
                                <li>Not falsely imply sponsorship or endorsement</li>
                                <li>Fit naturally within the context of the linking website</li>
                            </ul>
                            <p>We may approve additional link requests from:</p>
                            <ul>
                                <li>Business and consumer information sources</li>
                                <li>Community websites</li>
                                <li>Educational institutions and trade associations</li>
                                <li>Professional service firms (legal, accounting, consulting)</li>
                            </ul>
                            <p>
                                To request approval, contact us via email with your organization details and intended URLs. Please allow up to 2–3 weeks for a response.
                            </p>
                            <p>Approved organizations may link using:</p>
                            <ul>
                                <li>Our company name</li>
                                <li>The website URL</li>
                                <li>A relevant description consistent with the linking site's content</li>
                            </ul>
                            <p>Use of Detech's logo or branding requires a prior trademark license agreement.</p>

                            <h4>6. iFrames</h4>
                            <p>
                                You may not create frames around our web pages that alter the visual appearance or presentation of our website without prior written permission.
                            </p>

                            <h4>7. Content Liability</h4>
                            <p>
                                We are not responsible for content that appears on third-party websites linking to us. You agree to indemnify and defend Detech against all claims arising from your website.
                            </p>
                            <p>No links should appear on websites containing unlawful, offensive, or rights-infringing material.</p>

                            <h4>8. Privacy</h4>
                            <p>
                                Your use of this website is also governed by our <a href="{{ route('privacy') }}">Privacy Policy</a>. Please review it to understand how we collect and process personal data.
                            </p>

                            <h4>9. Reservation of Rights</h4>
                            <p>
                                We reserve the right to request the removal of any links to our website. You agree to remove such links immediately upon request.
                            </p>
                            <p>
                                We may amend these Terms and Conditions at any time. Continued use of the website signifies acceptance of the updated terms.
                            </p>

                            <h4>10. Disclaimer</h4>
                            <p>
                                To the maximum extent permitted by applicable law, Detech excludes all representations, warranties, and conditions relating to the website and its use.
                            </p>
                            <p>Nothing in this disclaimer shall:</p>
                            <ul>
                                <li>Limit or exclude liability for death or personal injury</li>
                                <li>Limit or exclude liability for fraud or fraudulent misrepresentation</li>
                                <li>Exclude liabilities that cannot be excluded under applicable law</li>
                            </ul>
                            <p>
                                As long as the website and its services are provided free of charge, Detech shall not be liable for any loss or damage of any nature.
                            </p>

                            <h4>11. Governing Law</h4>
                            <p>
                                These Terms and Conditions are governed by and construed in accordance with the applicable laws of Sri Lanka, and any disputes shall be subject to the jurisdiction of Sri Lankan courts.
                            </p>

                            <h4>Contact Us</h4>
                            <p>If you have any questions about these Terms and Conditions, please contact us:</p>
                            <ul>
                                <li><strong>Detech</strong></li>
                                <li><strong>Email:</strong> <a href="mailto:hello@detech.live">hello@detech.live</a></li>
                                <li><strong>Phone:</strong> +94 71 571 8361</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection