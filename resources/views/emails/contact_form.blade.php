<!DOCTYPE html>
<html>

<head>
    <title>New Contact Form Submission</title>
</head>

<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; border-radius: 10px;">
        <h2 style="color: #00bdd6; border-bottom: 2px solid #00bdd6; padding-bottom: 10px;">New Contact Inquiry</h2>

        <p><strong>Name:</strong> {{ $data['first_name'] }} {{ $data['last_name'] ?? '' }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        <p><strong>Subject:</strong> {{ $data['subject'] ?? 'Contact Request' }}</p>

        <div style="margin-top: 20px; padding: 15px; background-color: #f9f9f9; border-left: 4px solid #00bdd6;">
            <p><strong>Message:</strong></p>
            <p>{{ $data['message'] ?? 'No message provided.' }}</p>
        </div>

        <p style="margin-top: 30px; font-size: 12px; color: #777; border-top: 1px solid #eee; padding-top: 10px;">
            This email was sent from the contact form on {{ config('app.name') }}.
        </p>
    </div>
</body>

</html>