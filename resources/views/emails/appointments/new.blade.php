<!DOCTYPE html>
<html>

<head>
    <title>New Appointment Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9f9f9;
        }

        .header {
            background-color: #4CAF50;
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        .content {
            padding: 30px;
            background-color: white;
        }

        .info-section {
            margin: 25px 0;
            padding: 20px;
            background-color: #f5f5f5;
            border-left: 4px solid #4CAF50;
            border-radius: 0 5px 5px 0;
        }

        .field-label {
            font-weight: bold;
            color: #4CAF50;
            display: block;
            margin-top: 15px;
        }

        .field-label:first-child {
            margin-top: 0;
        }

        .field-value {
            margin-bottom: 15px;
            padding-left: 5px;
        }

        .field-value:last-child {
            margin-bottom: 0;
        }

        .message-box {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin-top: 25px;
            border: 1px solid #dee2e6;
        }

        .stats-box {
            background-color: #e8f5e9;
            padding: 20px;
            border-radius: 5px;
            margin: 25px 0;
            border: 1px solid #c8e6c9;
        }

        .resources-box {
            background-color: #e3f2fd;
            padding: 20px;
            border-radius: 5px;
            margin: 25px 0;
            border: 1px solid #bbdefb;
        }

        .stats-item {
            display: flex;
            justify-content: space-between;
            margin: 8px 0;
            padding: 5px 0;
        }

        .resource-item {
            background-color: white;
            padding: 12px 15px;
            margin: 8px 0;
            border-radius: 4px;
            border-left: 3px solid #2196F3;
        }

        .action-button {
            display: inline-block;
            padding: 12px 30px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .action-button:hover {
            background-color: #3d8b40;
        }

        h2,
        h3,
        h4 {
            margin-top: 0;
        }

        .highlight {
            background-color: #fff3cd;
            padding: 3px 6px;
            border-radius: 3px;
            font-weight: bold;
        }

        .timestamp {
            color: #666;
            font-size: 0.9em;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>
                @if ($appointment->service === 'Outsource Resource')
                    📦 New Outsourcing Inquiry
                @else
                    📅 New Appointment Request
                @endif
            </h2>
        </div>
        @if ($appointment->service !== 'Outsource Resource')
        <div class="resources-box">
            <h3>Appointment Details</h3>
            
            <div class="info-section">
                <div class="field-value">
                    <span class="field-label">Service Requested:</span><br>
                    {{ $appointment->service }}
                </div>
                
                <div class="field-value">
                    <span class="field-label">Client Name:</span><br>
                    {{ $appointment->name }}
                </div>
                
                <div class="field-value">
                    <span class="field-label">Email Address:</span><br>
                    <a href="mailto:{{ $appointment->email }}">{{ $appointment->email }}</a>
                </div>
                
                <div class="field-value">
                    <span class="field-label">Submitted:</span><br>
                    {{ date('F j, Y \a\t g:i A', strtotime($appointment->created_at)) }}
                </div>
            </div>
            
            <div class="message-box">
                <h4>Client's Message:</h4>
                <p>{{ $appointment->message }}</p>
            </div>
        </div>
        
        @endif

        @if ($appointment->service === 'Outsource Resource' && $selectedResources && is_array($selectedResources))
            <div class="resources-box">
                <h4>📋 Requested Resources</h4>
                @foreach ($selectedResources as $index => $resource)
                    <div class="resource-item">
                        <strong>Resource {{ $index + 1 }}</strong>

                        @if (is_array($resource))
                            {{-- Handle array format --}}
                            @if (isset($resource['name']))
                                <div>Name: {{ $resource['name'] }}</div>
                            @endif
                            @if (isset($resource['category']))
                                <div>Category: {{ $resource['category'] }}</div>
                            @endif
                            @if (isset($resource['skills']))
                                <div>Skills: {{ $resource['skills'] }}</div>
                            @endif
                            @if (isset($resource['experience']))
                                <div>Experience: {{ $resource['experience'] }}</div>
                            @endif
                        @else
                            {{-- Handle string format --}}
                            <div>{{ $resource }}</div>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
        <div class="stats-box">
                <h4>📊 Appointment Statistics</h4>
                <div class="stats-item">
                    <span>Unread Appointments:</span>
                    <strong>{{ $unreadCount }}</strong>
                </div>
                <div class="stats-item">
                    <span>Today's Appointments:</span>
                    <strong>{{ $todaysCount }}</strong>
                </div>
                <div class="stats-item">
                    <span>Total Appointments:</span>
                    <strong>{{ $totalCount }}</strong> <!-- Use passed variable instead of Appointment::count() -->
                </div>
            </div>
            
            <p style="text-align: center;">
                <a href="{{ url('/dt_admin/appointments') }}" class="action-button">
                    View All Appointments
                </a>
            </p>
        </div>
    </div>
</body>

</html>
