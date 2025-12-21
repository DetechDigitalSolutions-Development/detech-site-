<!DOCTYPE html>
<html>
<head>
    <title>New Career Application</title>
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
            background-color: #1c2539;
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
            background-color: #f5f5f5;
            border-left: 4px solid #1c2539;
        }
        .field-label {
            font-weight: bold;
            color: #1c2539;
        }
        .field-value {
            margin-bottom: 10px;
        }
        .message-box {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            border: 1px solid #dee2e6;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Career Application Received</h2>
        </div>
        
        <div class="content">
            <h3>Application Details</h3>
            
            <div class="info-section">
                <div class="field-value">
                    <span class="field-label">Position Applied:</span><br>
                    {{ $applicationData['position'] }}
                </div>
                
                <div class="field-value">
                    <span class="field-label">Applicant Name:</span><br>
                    {{ $applicationData['name'] }}
                </div>
                
                <div class="field-value">
                    <span class="field-label">Email Address:</span><br>
                    {{ $applicationData['email'] }}
                </div>
                
                <div class="field-value">
                    <span class="field-label">Phone Number:</span><br>
                    {{ $applicationData['phone_number'] }}
                </div>
            </div>
            
            <div class="message-box">
                <h4>Applicant's Message:</h4>
                <p>{{ $applicationData['message'] }}</p>
            </div>
            
            <p style="margin-top: 20px; padding-top: 20px; border-top: 1px solid #dee2e6;">
                <strong>Note:</strong> The applicant's CV/Resume is attached to this email.
            </p>
        </div>
    </div>
</body>
</html>