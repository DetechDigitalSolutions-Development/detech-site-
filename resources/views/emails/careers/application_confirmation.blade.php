<!DOCTYPE html>
<html>
<head>
    <title>Application Confirmation</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
        }
        .header {
            background: linear-gradient(135deg, #1c2539 0%, #2c3e50 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }
        .content {
            padding: 40px 30px;
        }
        .success-icon {
            text-align: center;
            margin-bottom: 30px;
        }
        .success-icon img {
            width: 80px;
            height: 80px;
        }
        .info-box {
            background-color: #f5f5f5;
            border-left: 4px solid #1c2539;
            padding: 25px;
            margin: 25px 0;
            border-radius: 0 8px 8px 0;
        }
        .details-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 25px 0;
        }
        .detail-item {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #e9ecef;
        }
        .field-label {
            font-weight: bold;
            color: #1c2539;
            display: block;
            margin-bottom: 5px;
        }
        .field-value {
            color: #555;
            line-height: 1.5;
        }
        .message-box {
            background-color: #e8f4fd;
            border: 1px solid #b6d4fe;
            border-radius: 8px;
            padding: 20px;
            margin: 25px 0;
        }
        .next-steps {
            background-color: #f0f9ff;
            border-left: 4px solid #0ea5e9;
            padding: 20px;
            margin: 25px 0;
            border-radius: 0 8px 8px 0;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 30px;
            text-align: center;
            border-top: 1px solid #e9ecef;
            border-radius: 0 0 8px 8px;
        }
        .contact-info {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 20px 0;
            flex-wrap: wrap;
        }
        .contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .application-id {
            background-color: #1c2539;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            display: inline-block;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .timeline {
            margin: 30px 0;
        }
        .timeline-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            gap: 15px;
        }
        .timeline-number {
            background-color: #1c2539;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            flex-shrink: 0;
        }
        .timeline-content {
            flex: 1;
        }
        @media (max-width: 600px) {
            .container {
                border-radius: 0;
            }
            .header, .content {
                padding: 20px 15px;
            }
            .contact-info {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 style="margin: 0; font-size: 28px; font-weight: 600;">Application Received ✅</h1>
            <p style="opacity: 0.9; margin-top: 10px; font-size: 16px;">Thank you for applying to {{ $careerDetails['company_name'] ?? 'Our Company' }}</p>
        </div>
        
        <div class="content">
            <div class="success-icon">
                <span style="font-size: 60px;">✅</span>
            </div>
            
            <div style="text-align: center; margin-bottom: 30px;">
                <div class="application-id">
                    Application ID: {{ $careerDetails['application_id'] ?? 'N/A' }}
                </div>
                <h2 style="color: #1c2539; margin: 15px 0;">Hi {{ $applicationData['name'] }},</h2>
                <p style="font-size: 18px; color: #555; max-width: 500px; margin: 0 auto;">
                    We've successfully received your application for 
                    <strong>{{ $applicationData['position'] }}</strong>.
                </p>
            </div>
            
            <div class="info-box">
                <h3 style="color: #1c2539; margin-top: 0;">📋 Application Summary</h3>
                
                <div class="details-grid">
                    <div class="detail-item">
                        <span class="field-label">Position Applied</span>
                        <span class="field-value">{{ $applicationData['position'] }}</span>
                    </div>
                    
                    <div class="detail-item">
                        <span class="field-label">Application Date</span>
                        <span class="field-value">{{ $careerDetails['application_date'] ?? date('F j, Y') }}</span>
                    </div>
                    
                    <div class="detail-item">
                        <span class="field-label">Job Type</span>
                        <span class="field-value">{{ $careerDetails['job_type'] ?? 'Not specified' }}</span>
                    </div>
                    
                    <div class="detail-item">
                        <span class="field-label">Location</span>
                        <span class="field-value">{{ $careerDetails['job_location'] ?? 'Not specified' }}</span>
                    </div>
                </div>
                
                <div style="margin-top: 20px;">
                    <span class="field-label">Your Contact Information:</span>
                    <div style="margin-top: 10px; padding: 15px; background-color: white; border-radius: 6px;">
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
                            <div>
                                <span style="color: #666; font-size: 14px;">Email:</span>
                                <div style="font-weight: 500;">{{ $applicationData['email'] }}</div>
                            </div>
                            <div>
                                <span style="color: #666; font-size: 14px;">Phone:</span>
                                <div style="font-weight: 500;">{{ $applicationData['phone_number'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @if(!empty($applicationData['message']))
            <div class="message-box">
                <h4 style="color: #0c63e4; margin-top: 0;">📝 Your Message:</h4>
                <p style="background-color: white; padding: 15px; border-radius: 6px; border: 1px solid #dee2e6;">
                    {{ $applicationData['message'] }}
                </p>
            </div>
            @endif
            
            <div class="next-steps">
                <h3 style="color: #0ea5e9; margin-top: 0;">🚀 What Happens Next?</h3>
                
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <div class="timeline-content">
                            <strong style="color: #1c2539;">Application Review</strong>
                            <p style="margin: 5px 0 0 0; color: #666;">
                                Our hiring team will review your application and CV within 3-5 business days.
                            </p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-number">2</div>
                        <div class="timeline-content">
                            <strong style="color: #1c2539;">Screening Call (If Shortlisted)</strong>
                            <p style="margin: 5px 0 0 0; color: #666;">
                                If your application matches our requirements, we'll contact you for an initial screening call.
                            </p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-number">3</div>
                        <div class="timeline-content">
                            <strong style="color: #1c2539;">Interview Process</strong>
                            <p style="margin: 5px 0 0 0; color: #666;">
                                Successful candidates will proceed to one or more interviews with our team.
                            </p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <div class="timeline-content">
                            <strong style="color: #1c2539;">Final Decision</strong>
                            <p style="margin: 5px 0 0 0; color: #666;">
                                We aim to complete the hiring process within 2-3 weeks from application date.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin: 30px 0; padding: 20px; background-color: #f8f9fa; border-radius: 8px;">
                <h4 style="color: #1c2539; margin-top: 0;">⏳ Expected Timeline</h4>
                <p style="margin: 10px 0;">
                    We typically respond to all applications within <strong>5-7 business days</strong>.
                </p>
                <p style="margin: 10px 0; color: #666;">
                    If you haven't heard from us within this timeframe, please check your spam folder or contact us.
                </p>
            </div>
        </div>
        
        <div class="footer">
            <h3 style="color: #1c2539; margin-top: 0;">Need to Contact Us?</h3>
            
            <div class="contact-info">
                <div class="contact-item">
                    <span style="color: #666;">📧</span>
                    <div>
                        <div style="font-size: 14px; color: #666;">Email</div>
                        <div style="font-weight: 500;">{{ $careerDetails['company_email'] ?? 'careers@example.com' }}</div>
                    </div>
                </div>
                
                <div class="contact-item">
                    <span style="color: #666;">📞</span>
                    <div>
                        <div style="font-size: 14px; color: #666;">Phone</div>
                        <div style="font-weight: 500;">{{ $careerDetails['company_phone'] ?? '+1 (234) 567-8900' }}</div>
                    </div>
                </div>
            </div>
            
            <p style="margin: 20px 0 0 0; color: #666; font-size: 14px;">
                <strong>Note:</strong> This is an automated message. Please do not reply to this email.
            </p>
            
            <p style="margin: 10px 0 0 0; color: #666; font-size: 14px;">
                © {{ date('Y') }} {{ $careerDetails['company_name'] ?? 'Our Company' }}. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>