<!DOCTYPE html>
<html>
<head>
    <title>Appointment Request Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .header {
            background-color: #2196F3;
            color: white;
            padding: 20px;
            border-radius: 5px 5px 0 0;
            text-align: center;
        }
        .content {
            padding: 20px;
            background-color: white;
        }
        .info-section {
            margin: 20px 0;
            padding: 15px;
            background-color: #e3f2fd;
            border-left: 4px solid #2196F3;
        }
        .field-label {
            font-weight: bold;
            color: #2196F3;
        }
        .field-value {
            margin-bottom: 15px;
        }
        .message-box {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            border: 1px solid #dee2e6;
        }
        .contact-info {
            background-color: #e8f5e9;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>✅ Appointment Request Received</h2>
        </div>
        
        <div class="content">
            <p>Dear <strong>{{ $appointment->name }}</strong>,</p>
            
            <p>Thank you for requesting an appointment with us. We have received your request and will get back to you shortly.</p>
            
            <div class="info-section">
                <h3>Your Appointment Details:</h3>
                
                <div class="field-value">
                    <span class="field-label">Reference ID:</span><br>
                    #APP{{ str_pad($appointment->id, 6, '0', STR_PAD_LEFT) }}
                </div>
                
                <div class="field-value">
                    <span class="field-label">Service Requested:</span><br>
                    {{ $appointment->service }}
                </div>
                
                <div class="field-value">
                    <span class="field-label">Submitted Date:</span><br>
                    {{ $appointment->created_at->format('F j, Y \a\t g:i A') }}
                </div>
                
                <div class="field-value">
                    <span class="field-label">Your Message:</span><br>
                    {{ $appointment->message }}
                </div>
            </div>
            
            <div class="message-box">
                <h4>What happens next?</h4>
                <ol>
                    <li>Our team will review your request within 24 hours</li>
                    <li>We will contact you at <strong>{{ $appointment->email }}</strong> to confirm your appointment</li>
                    <li>You'll receive further details about the appointment</li>
                </ol>
            </div>
            
            <div class="contact-info">
                <h4>Need immediate assistance?</h4>
                <p>
                    📞 Call us: {{ config('app.phone', '+1 (234) 567-8900') }}<br>
                    📧 Email: {{ config('mail.from.address', 'support@example.com') }}
                </p>
            </div>
            
            <div class="footer">
                <p>Best regards,<br>
                <strong>{{ config('app.name', 'Our Team') }}</strong></p>
                
                <p style="font-size: 0.8em; color: #888;">
                    This is an automated message. Please do not reply to this email.
                </p>
            </div>
        </div>
    </div>
</body>
</html>