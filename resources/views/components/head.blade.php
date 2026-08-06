@props(['css' => '', 'seo' => null])
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ isset($seo) && $seo->meta_title ? $seo->meta_title : config('app.name', 'Courtice Home Health Care') }}</title>
    <meta name="description" content="{{ isset($seo) && $seo->meta_description ? $seo->meta_description : '' }}" />
    @if(isset($seo) && $seo->meta_keywords)
        <meta name="keywords" content="{{ $seo->meta_keywords }}" />
    @endif
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ isset($seo) && $seo->og_title ? $seo->og_title : config('app.name', 'Courtice Home Health Care') }}" />
    <meta property="og:description" content="{{ isset($seo) && $seo->og_description ? $seo->og_description : '' }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    @if(isset($seo) && $seo->og_image)
        <meta property="og:image" content="{{ asset($seo->og_image) }}" />
    @endif
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ isset($seo) && $seo->og_title ? $seo->og_title : config('app.name') }}" />
    <meta name="twitter:description" content="{{ isset($seo) && $seo->og_description ? $seo->og_description : '' }}" />
    @if(isset($seo) && $seo->canonical_url)
        <link rel="canonical" href="{{ $seo->canonical_url }}" />
    @else
        <link rel="canonical" href="{{ url()->current() }}" />
    @endif
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-all.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/timePicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/banner.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/feature.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/about.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/brand.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/service.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/project.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/team.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/faq.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/testimonial.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/blog.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}" />
    <?php echo (isset($css) ? $css : '')?>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <?php echo (isset($dark) ? $dark : '')?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-808RXWWR12"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag("js", new Date());
      gtag("config", "G-808RXWWR12");
    </script>
    <!-- Phone click tracker -->
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll("a[href^=tel]").forEach(function(el) {
          el.addEventListener("click", function() {
            if (typeof gtag !== "undefined") {
              gtag("event", "phone_call_click", {"event_category": "Engagement", "event_label": el.getAttribute("href"), "value": 1.00});
            }
          });
        });
      });
    </script>
    <!-- LocalBusiness Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalBusiness",
      "name": "Courtice Home Healthcare",
      "url": "https://courticehomehealthcare.com/",
      "telephone": "+1-905-721-0004",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1423 King St E Unit 5",
        "addressLocality": "Courtice",
        "addressRegion": "ON",
        "postalCode": "L1E 2J6",
        "addressCountry": "CA"
      },
      "openingHoursSpecification": [
        {"@type": "OpeningHoursSpecification", "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"], "opens": "09:00", "closes": "17:00"},
        {"@type": "OpeningHoursSpecification", "dayOfWeek": "Saturday", "opens": "11:00", "closes": "14:00"}
      ],
      "areaServed": ["Courtice","Oshawa","Whitby","Clarington","Durham Region"]
    }
    </script>
</head>
