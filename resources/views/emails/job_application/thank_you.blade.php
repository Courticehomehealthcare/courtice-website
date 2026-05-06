<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { width: 80%; margin: 20px auto; padding: 20px; border: 1px solid #eee; border-radius: 10px; }
        .header { text-align: center; margin-bottom: 30px; }
        .footer { margin-top: 30px; font-size: 0.8em; color: #777; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Courtice Home Healthcare</h2>
        </div>
        
        <p>Dear {{ $application->candidateName }},</p>

        <p>Thank you for applying for the position of <strong>{{ $application->jobPosting ? $application->jobPosting->title : $application->appliedforposition }}</strong> at Courtice Home Healthcare.</p>

        <p>We have received your application and resume. Our team will review your profile and get back to you soon if your qualifications match our requirements.</p>

        <p>Thank you for your interest in joining our team!</p>

        <div class="footer">
            <p>Best Regards,<br>
            The HR Team<br>
            Courtice Home Healthcare</p>
        </div>
    </div>
</body>
</html>
