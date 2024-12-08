<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Medical Record - My Dental System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            border-bottom: 2px solid #0066cc;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .header h1 {
            color: #0066cc;
            margin: 0;
        }

        .header p {
            margin: 5px 0;
            color: #666;
        }

        .medical-record {
            background-color: #f9f9f9;
            border: 1px solid #e0e0e0;
            padding: 20px;
            border-radius: 5px;
        }

        .record-section {
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e0e0e0;
        }

        .record-section:last-child {
            border-bottom: none;
        }

        .record-label {
            font-weight: bold;
            color: #0066cc;
            margin-bottom: 5px;
        }

        .record-value {
            margin-left: 20px;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.8em;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>My Dental System</h1>
        <p>Medical Record Document</p>
        <p>{{ now()->format('F d, Y') }}</p>
    </div>

    <div class="medical-record">
        <div class="record-section">
            <div class="record-label">Patient Name</div>
            <div class="record-value">{{ $medicalHistory->patient->full_name }}</div>
        </div>

        <div class="record-section">
            <div class="record-label">Doctor Name</div>
            <div class="record-value">{{ $medicalHistory->dentist->full_name }}</div>
        </div>

        <div class="record-section">
            <div class="record-label">Patient Concern</div>
            <div class="record-value">{{ $medicalHistory->concern }}</div>
        </div>

        <div class="record-section">
            <div class="record-label">Treatment Plan</div>
            <div class="record-value">{{ $medicalHistory->treatment }}</div>
        </div>

        <div class="record-section">
            <div class="record-label">Remarks</div>
            <div class="record-value">{{ $medicalHistory->remarks }}</div>
        </div>
    </div>

    <div class="footer">
        <p>© {{ now()->year }} My Dental System. All Rights Reserved.</p>
        <p>Generated on: {{ now()->format('F d, Y H:i A') }}</p>
    </div>
</body>

</html>