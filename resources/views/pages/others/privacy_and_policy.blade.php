@extends('layouts.app')

@section('content')
<main>
    <!-- Page Banner -->
    @include('components.page_banner', ['title' => 'Privacy Policy','banner_image'=>'assets/img/banner/page-banner.png'])

    <!-- Blog List -->
    <div class="page-blog mt-100">
        <div class="container container-narrow">
            <div class="blog-details">
                <div class="card-blog-list" data-aos="fade-up">
                    <div class="card-blog-content">
                        <h2 class="card-blog-heading heading text-50 text-center">
                            Privacy Policy – Detech
                        </h2>
                        
                        <div class="text-center text-gray-600 mb-8">
                            <p><strong>Effective Date:</strong> 01/10/2025</p>
                            <p><strong>Last Updated:</strong> 14/12/2025</p>
                        </div>

                        <div class="blog-description">
                            <p class="lead">
                                At Detech, protecting your privacy and personal data is a top priority. We are committed to respecting your rights and handling personal data in accordance with the General Data Protection Regulation (GDPR) and other applicable data protection laws.
                            </p>
                            
                            <p>
                                By accessing our website or using our services, you acknowledge that you have read and understood this Privacy Policy.
                            </p>

                            <h3>1. Definitions</h3>
                            <ul>
                                <li><strong>"We", "Us", "Our"</strong> refer to Detech.</li>
                                <li><strong>"You", "Your"</strong> refer to any individual whose personal data we process.</li>
                            </ul>

                            <h3>2. Data Controller Information</h3>
                            <p>
                                The data controller responsible for processing your personal data is:
                            </p>
                            <ul>
                                <li><strong>Detech</strong></li>
                                <li><strong>Email:</strong> hello@detech.live</li>
                                <li><strong>Phone:</strong> +94 71 571 8361</li>
                            </ul>
                            <p>
                                If you have any questions about this Privacy Policy or our data processing practices, please contact us using the details above.
                            </p>

                            <h3>3. Types of Personal Data We Collect</h3>
                            <p>
                                We may collect and process the following categories of personal data:
                            </p>
                            <ul>
                                <li><strong>Contact Information:</strong> Full name, email address, telephone number.</li>
                                <li><strong>Business Information:</strong> Company name, job title, business website URL.</li>
                                <li><strong>Recruitment Data:</strong> CVs, LinkedIn profiles, NIC numbers, educational qualifications, and employment history.</li>
                                <li><strong>Event Participation Data:</strong> Name, university or organization details, and contact information related to events (e.g., Tech Triathlon, AI Meetups).</li>
                                <li><strong>Voluntary Information:</strong> Any additional information you choose to provide via forms, emails, or other communications.</li>
                            </ul>
                            <p>
                                Personal data is collected only when you voluntarily submit it through our website or related communication channels.
                            </p>

                            <h3>4. Lawful Basis for Processing</h3>
                            <p>
                                We process personal data under one or more of the following lawful bases defined by the GDPR:
                            </p>
                            <ul>
                                <li><strong>Contractual Necessity:</strong> To provide services, respond to inquiries, or manage event participation.</li>
                                <li><strong>Legitimate Interests:</strong> For business operations, recruitment, service improvement, and internal administration.</li>
                                <li><strong>Legal Obligation:</strong> To comply with applicable legal and regulatory requirements.</li>
                                <li><strong>Consent:</strong> For marketing communications or other optional data processing activities.</li>
                            </ul>

                            <h3>5. Purposes of Processing</h3>
                            <p>
                                Your personal data may be used for the following purposes:
                            </p>
                            <ul>
                                <li><strong>Service Delivery:</strong> To operate, maintain, and improve our services.</li>
                                <li><strong>Communication:</strong> To respond to inquiries and share relevant updates.</li>
                                <li><strong>Recruitment:</strong> To assess applications and manage hiring processes.</li>
                                <li><strong>Event Management:</strong> To organize, administer, and follow up on events or collaborations.</li>
                                <li><strong>Marketing (with consent):</strong> To send newsletters, announcements, or promotional communications.</li>
                            </ul>

                            <h3>6. Data Retention</h3>
                            <p>
                                We retain personal data only for as long as necessary to fulfill the purposes outlined in this Policy or to meet legal obligations:
                            </p>
                            <ul>
                                <li><strong>General inquiries:</strong> Up to 12 months.</li>
                                <li><strong>Recruitment data:</strong> Up to 24 months.</li>
                                <li><strong>Event participation data:</strong> Up to 12 months after the event.</li>
                                <li><strong>Legal and regulatory data:</strong> Retained as required by applicable law.</li>
                            </ul>
                            <p>
                                After the applicable retention period, personal data will be securely deleted or anonymized.
                            </p>

                            <h3>7. Sharing of Personal Data</h3>
                            <p>
                                We may share your personal data only in the following circumstances:
                            </p>
                            <ul>
                                <li><strong>Service Providers:</strong> Trusted third parties, agents, or subcontractors acting on our behalf under strict confidentiality obligations.</li>
                                <li><strong>Legal Requirements:</strong> Regulatory authorities or law enforcement agencies where required by law.</li>
                                <li><strong>Affiliated Websites:</strong> Detech-affiliated platforms operating under appropriate data protection agreements, including: connect-www.detech.live</li>
                            </ul>
                            <p><strong>We do not sell or rent your personal data to third parties.</strong></p>

                            <h3>8. Your Rights Under GDPR</h3>
                            <p>
                                Where applicable, you have the following rights under the GDPR:
                            </p>
                            <ul>
                                <li>Right of access to your personal data.</li>
                                <li>Right to rectification of inaccurate or incomplete data.</li>
                                <li>Right to erasure ("right to be forgotten").</li>
                                <li>Right to restrict processing in certain circumstances.</li>
                                <li>Right to data portability.</li>
                                <li>Right to object to processing based on legitimate interests or direct marketing.</li>
                                <li>Right to withdraw consent at any time where processing is based on consent.</li>
                            </ul>
                            <p>
                                To exercise these rights, please contact <a href="mailto:hello@detech.live">hello@detech.live</a>
                            </p>

                            <h3>9. Data Security</h3>
                            <p>
                                We implement appropriate technical and organizational measures to protect personal data, including:
                            </p>
                            <ul>
                                <li>SSL encryption for data transmission.</li>
                                <li>Access controls and role-based permissions.</li>
                                <li>Ongoing monitoring to identify and mitigate security risks.</li>
                            </ul>
                            <p>
                                Despite these measures, no internet-based system can be guaranteed to be completely secure. Please take care when sharing personal information online.
                            </p>

                            <h3>10. Cookies and Tracking Technologies</h3>
                            <p>
                                We use cookies to improve website functionality and performance:
                            </p>
                            <ul>
                                <li><strong>Necessary Cookies:</strong> Essential for website operation.</li>
                                <li><strong>Analytical Cookies:</strong> Help us understand user interactions and improve our services.</li>
                            </ul>
                            <p>
                                You can manage or disable cookies through your browser settings.
                            </p>

                            <h3>11. Data Breach Notification</h3>
                            <p>
                                In the event of a personal data breach that poses a risk to your rights and freedoms, we will:
                            </p>
                            <ul>
                                <li>Notify affected individuals without undue delay.</li>
                                <li>Provide relevant information and mitigation guidance.</li>
                                <li>Notify the appropriate supervisory authority within 72 hours, where required.</li>
                            </ul>

                            <h3>12. Third-Party Links</h3>
                            <p>
                                Our website may include links to third-party websites. We are not responsible for their content or privacy practices. Please review their privacy policies before providing personal data.
                            </p>

                            <h3>13. Changes to This Policy</h3>
                            <p>
                                We may update this Privacy Policy from time to time. Any changes will be published on this page with a revised "Last Updated" date. We encourage regular review of this Policy.
                            </p>

                            <h3>14. Governing Law</h3>
                            <p>
                                This Privacy Policy is governed by the GDPR and applicable data protection laws of Sri Lanka. Where GDPR applies, it covers the processing of personal data of individuals located in the European Union (EU) or European Economic Area (EEA).
                            </p>

                            <h3>Contact Information</h3>
                            <p>
                                For questions or concerns regarding this Privacy Policy or personal data processing:
                            </p>
                            <ul>
                                <li><strong>Information Security Officer (ISO)</strong></li>
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