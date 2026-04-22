<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{-- ── SEO Meta Tags (managed from Admin → SEO Pages) ──────────────────── --}}
    <title>{{ isset($seo) && $seo->meta_title ? $seo->meta_title : config('app.name', 'Courtice Home Health Care') }}
    </title>

    <meta name="description" content="{{ isset($seo) && $seo->meta_description ? $seo->meta_description : '' }}" />

    @if(isset($seo) && $seo->meta_keywords)
        <meta name="keywords" content="{{ $seo->meta_keywords }}" />
    @endif

    {{-- Open Graph --}}
    <meta property="og:type" content="website" />
    <meta property="og:title"
        content="{{ isset($seo) && $seo->og_title ? $seo->og_title : (isset($seo) && $seo->meta_title ? $seo->meta_title : config('app.name', 'Courtice Home Health Care')) }}" />
    <meta property="og:description"
        content="{{ isset($seo) && $seo->og_description ? $seo->og_description : (isset($seo) && $seo->meta_description ? $seo->meta_description : '') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    @if(isset($seo) && $seo->og_image)
        <meta property="og:image" content="{{ asset($seo->og_image) }}" />
    @endif

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title"
        content="{{ isset($seo) && $seo->og_title ? $seo->og_title : (isset($seo) && $seo->meta_title ? $seo->meta_title : config('app.name')) }}" />
    <meta name="twitter:description"
        content="{{ isset($seo) && $seo->og_description ? $seo->og_description : (isset($seo) && $seo->meta_description ? $seo->meta_description : '') }}" />
    @if(isset($seo) && $seo->og_image)
        <meta name="twitter:image" content="{{ asset($seo->og_image) }}" />
    @endif

    {{-- Canonical URL --}}
    @if(isset($seo) && $seo->canonical_url)
        <link rel="canonical" href="{{ $seo->canonical_url }}" />
    @else
        <link rel="canonical" href="{{ url()->current() }}" />
    @endif
    {{-- ─────────────────────────────────────────────────────────────────────── --}}

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ (isset($siteSettings) && $siteSettings->favicon) ? asset($siteSettings->favicon) : asset('assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ (isset($siteSettings) && $siteSettings->favicon) ? asset($siteSettings->favicon) : asset('assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ (isset($siteSettings) && $siteSettings->favicon) ? asset($siteSettings->favicon) : asset('assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- stylesheets -->
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

    <!-- module styles -->
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

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

    <?php echo (isset($dark) ? $dark : '')?>
</head>