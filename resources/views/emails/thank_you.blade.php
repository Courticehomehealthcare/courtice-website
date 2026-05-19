<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Courtice Home Healthcare</title>
</head>
<body style="margin:0; padding:0; background-color:#f0f4f8; font-family: 'Segoe UI', Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f0f4f8; padding: 40px 20px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px; width:100%; background:#ffffff; border-radius:12px; overflow:hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">

                    <!-- Header -->
                    <tr>
                        <td style="background-color:#0D2137; padding: 35px 40px; text-align:center;">
                            <img src="https://courticehomehealthcare.com/assets/images/logo.png"
                                alt="Courtice Home Healthcare"
                                style="max-height:60px; max-width:200px; object-fit:contain;"
                                onerror="this.style.display='none'">
                            <h1 style="margin:15px 0 0; color:#ffffff; font-size:20px; font-weight:600; letter-spacing:0.5px;">
                                Courtice Home Healthcare
                            </h1>
                            <p style="margin:5px 0 0; color:#DDE8F0; font-size:13px;">
                                Always Here For You
                            </p>
                        </td>
                    </tr>

                    <!-- Orange accent bar -->
                    <tr>
                        <td style="background-color:#D4581A; height:4px; font-size:0; line-height:0;">&nbsp;</td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 45px 40px 35px;">

                            <p style="margin:0 0 8px; font-size:22px; font-weight:700; color:#0D2137;">
                                Hi {{ $data['first_name'] }}! 👋
                            </p>
                            <p style="margin:0 0 25px; font-size:15px; color:#555;">
                                Thank you for reaching out to <strong style="color:#0D2137;">Courtice Home Healthcare</strong>.
                                We've received your message and our team will get back to you within <strong style="color:#D4581A;">1 business day</strong>.
                            </p>

                            <!-- Message box -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="background:#f7f9fc; border-left:4px solid #D4581A; border-radius:0 8px 8px 0; padding:20px 25px; margin-bottom:25px;">
                                        <p style="margin:0 0 8px; font-size:13px; font-weight:600; color:#888; text-transform:uppercase; letter-spacing:0.5px;">Your Message</p>
                                        <p style="margin:0; font-size:15px; color:#333; line-height:1.6;">{{ $data['message'] }}</p>
                                    </td>
                                </tr>
                            </table>

                            <p style="margin:25px 0 20px; font-size:15px; color:#555; line-height:1.7;">
                                In the meantime, feel free to visit our store or browse our products online.
                                We're located at <strong style="color:#0D2137;">1423 King St E, Unit 5, Courtice, ON</strong> —
                                Monday to Friday 9am–5pm, Saturday 11am–2pm.
                            </p>

                            <!-- CTA Button -->
                            <table cellpadding="0" cellspacing="0" style="margin: 10px 0 30px;">
                                <tr>
                                    <td style="border-radius:6px; background-color:#0D2137;">
                                        <a href="https://courticehomehealthcare.com"
                                           style="display:inline-block; padding:14px 32px; color:#ffffff; font-size:14px; font-weight:600; text-decoration:none; letter-spacing:0.3px;">
                                            Visit Our Website →
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            <!-- Contact info -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="border-top:1px solid #eee; padding-top:25px; margin-top:10px;">
                                <tr>
                                    <td style="padding-right:20px;">
                                        <p style="margin:0 0 5px; font-size:12px; color:#999; text-transform:uppercase; letter-spacing:0.5px;">Phone</p>
                                        <p style="margin:0; font-size:14px; color:#0D2137; font-weight:600;">+1 (905) 721-0004</p>
                                    </td>
                                    <td>
                                        <p style="margin:0 0 5px; font-size:12px; color:#999; text-transform:uppercase; letter-spacing:0.5px;">Email</p>
                                        <p style="margin:0; font-size:14px; color:#D4581A; font-weight:600;">info@courticehomehealthcare.com</p>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color:#0D2137; padding:25px 40px; text-align:center;">
                            <p style="margin:0 0 10px; color:#DDE8F0; font-size:13px;">
                                © {{ date('Y') }} Courtice Home Healthcare. All rights reserved.
                            </p>
                            <p style="margin:0 0 12px; color:#8aa0b8; font-size:12px;">
                                1423 King St E, Unit 5, Courtice, ON L1E 2J6, Canada
                            </p>
                            <p style="margin:0;">
                                <a href="https://courticehomehealthcare.com/privacy-policy"
                                   style="color:#D4581A; font-size:12px; text-decoration:none;">Privacy Policy</a>
                                &nbsp;·&nbsp;
                                <a href="https://courticehomehealthcare.com/terms-conditions"
                                   style="color:#D4581A; font-size:12px; text-decoration:none;">Terms & Conditions</a>
                                &nbsp;·&nbsp;
                                <a href="https://courticehomehealthcare.com/accessibility"
                                   style="color:#D4581A; font-size:12px; text-decoration:none;">Accessibility</a>
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>