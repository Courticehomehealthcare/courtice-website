<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Thank You - {{ config('app.name') }}</title>
    <style>
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            color: #ffffff;
            padding: 40px 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
            letter-spacing: -0.025em;
        }

        .content {
            padding: 40px 30px;
        }

        .content p {
            margin-bottom: 20px;
            font-size: 16px;
        }

        .content .thank-you-msg {
            font-size: 18px;
            font-weight: 600;
            color: #1e3a8a;
        }

        .footer {
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #64748b;
            background-color: #f1f5f9;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #3b82f6;
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>{{ config('app.name') }}</h1>
        </div>
        <div class="content">
            <p class="thank-you-msg">Hello {{ $data['first_name'] }},</p>
            <p>Thank you for reaching out to us. We have received your message and will get back to you as soon as
                possible.</p>
            <p>Our team is reviewing your inquiry, and you can expect a response within 24-48 business hours.</p>
            <a href="{{ config('app.url') }}" class="btn">Visit Our Website</a>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </div>
    </div>
</body>

</html>