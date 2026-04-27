@extends('layouts.layout3')
@section('title', 'About Us || Courtice Home Health Care')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
@endphp
@php
    $title = 'About Us';
    $subtitle = 'About Us';
@endphp
@section('content')

    <style>
        .page-header__bg::before {
            background: linear-gradient(90deg, #bee1e691 0%, rgba(190, 225, 230, 0) 100%) !important;
        }

        .page-header__inner {
            text-align: left;
        }

        .thm-breadcrumb {
            justify-content: flex-start !important;
        }

        .counter-one__count-list {
            justify-content: center;
        }

        .counter-one__count-list li {
            flex: 0 0 33.333%;
            max-width: 33.333%;
        }

        @media (max-width: 991px) {
            .counter-one__count-list li {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (max-width: 767px) {
            .counter-one__count-list li {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>

    <x-strickyHeaderThree />

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('assets/images/banner/about_banner.png') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h3>About Us</h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span class="icon-arrow-left"></span></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Premium About Six Styling */
        .about-six {
            position: relative;
            padding: 60px 0;
            background-color: #fbfdfe;
            overflow: hidden;
        }

        .about-six__wrapper {
            display: flex;
            align-items: center;
            gap: 60px;
            position: relative;
        }

        .about-six__img-column {
            flex: 1;
            position: relative;
            z-index: 1;
        }

        .about-six__content-column {
            flex: 1.2;
            z-index: 2;
        }

        .about-six__img-box-inner {
            position: relative;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.12);
        }

        .about-six__img-box-inner img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.8s ease;
        }

        .about-six__img-box-inner:hover img {
            transform: scale(1.05);
        }

        .about-six__shape-1 {
            position: absolute;
            top: -30px;
            left: -30px;
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, rgba(0, 189, 214, 0.1) 0%, rgba(0, 120, 160, 0.1) 100%);
            border-radius: 50px;
            z-index: -1;
            animation: float-bob-y 4s infinite ease-in-out;
        }

        .about-six__shape-2 {
            position: absolute;
            bottom: -40px;
            right: -20px;
            width: 150px;
            height: 150px;
            background: rgba(var(--careon-base-rgb), 0.05);
            border-radius: 50%;
            z-index: -1;
            animation: float-bob-x 5s infinite ease-in-out;
        }

        .about-six__tagline {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(0, 189, 214, 0.08);
            color: var(--careon-base);
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 25px;
        }

        .about-six__title {
            font-size: 48px;
            font-weight: 800;
            line-height: 1.15;
            color: #0d1e3b;
            margin-bottom: 30px;
        }

        .about-six__title span {
            color: var(--careon-base);
        }

        .about-six__text {
            font-size: 17px;
            line-height: 1.8;
            color: #5a6a7e;
            margin-bottom: 25px;
            text-align: justify;
        }

        .about-six__features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 35px;
        }

        .about-six__feature-item {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 600;
            color: #1a2b4a;
        }

        .about-six__feature-item i {
            color: var(--careon-base);
            font-size: 18px;
        }

        /* Premium Services Styling */
        .services-custom {
            padding: 120px 0;
            background-color: #ffffff;
            position: relative;
        }

        .services-custom__grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 50px;
        }

        .service-card {
            background: #fbfdfe;
            border-radius: 20px;
            padding: 40px;
            border: 1px solid rgba(0, 189, 214, 0.1);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 189, 214, 0.1);
            border-color: var(--careon-base);
        }

        .service-card__icon {
            width: 60px;
            height: 60px;
            background: rgba(0, 189, 214, 0.1);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s ease;
        }

        .service-card:hover .service-card__icon {
            background: var(--careon-base);
            color: white;
        }

        .service-card__icon span {
            font-size: 24px;
            color: var(--careon-base);
        }

        .service-card:hover .service-card__icon span {
            color: white;
        }

        .service-card__title {
            font-size: 22px;
            font-weight: 700;
            color: #0d1e3b;
        }

        .service-card__text {
            font-size: 16px;
            line-height: 1.6;
            color: #5a6a7e;
        }

        .service-card__arrow {
            position: absolute;
            bottom: 30px;
            right: 30px;
            font-size: 14px;
            color: var(--careon-base);
            opacity: 0;
            transform: translateX(-10px);
            transition: all 0.4s ease;
        }

        .service-card:hover .service-card__arrow {
            opacity: 1;
            transform: translateX(0);
        }

        @media (max-width: 1200px) {
            .services-custom__grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 767px) {
            .services-custom__grid {
                grid-template-columns: 1fr;
            }
        }

        /* Flyer Section Redesign */
        .flyer-cta {
            padding: 120px 0;
            background: linear-gradient(135deg, #f0faff 0%, #e0f2f7 100%);
            position: relative;
            overflow: hidden;
        }

        .flyer-cta__inner {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 40px;
            padding: 80px 60px;
            box-shadow: 0 40px 100px rgba(0, 189, 214, 0.08);
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .flyer-cta__content {
            flex: 1.5;
        }

        .flyer-cta__image-box {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .flyer-cta__icon-circle {
            width: 250px;
            height: 250px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 20px 50px rgba(0, 189, 214, 0.15);
            animation: float-bob-y 6s infinite ease-in-out;
            position: relative;
        }

        .flyer-cta__icon-circle i {
            font-size: 100px;
            color: var(--careon-base);
        }

        .flyer-cta__shape {
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(0, 189, 214, 0.05);
            border-radius: 50%;
            z-index: -1;
            animation: rotate-infinite 20s linear infinite;
        }

        @keyframes rotate-infinite {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .flyer-cta__tagline {
            display: inline-block;
            color: var(--careon-base);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .flyer-cta__title {
            font-size: 42px;
            font-weight: 800;
            line-height: 1.2;
            color: #0d1e3b;
            margin-bottom: 25px;
        }

        .flyer-cta__text {
            font-size: 18px;
            line-height: 1.7;
            color: #5a6a7e;
            margin-bottom: 35px;
        }

        .flyer-cta__btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: var(--careon-base);
            color: white;
            padding: 18px 40px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0, 189, 214, 0.3);
        }

        .flyer-cta__btn:hover {
            background: #0d1e3b;
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(13, 30, 59, 0.25);
        }

        @media (max-width: 991px) {
            .flyer-cta__inner {
                flex-direction: column;
                padding: 60px 40px;
                text-align: center;
            }

            .flyer-cta__title {
                font-size: 32px;
            }

            .flyer-cta__img-box {
                order: -1;
            }
        }

        @media (max-width: 991px) {
            .about-six__wrapper {
                flex-direction: column;
                gap: 50px;
            }

            .about-six__title {
                font-size: 36px;
            }
        }

    </style>

    <section class="about-six">
        <div class="container">
            <div class="about-six__wrapper">
                <div class="about-six__img-column wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="about-six__img-box">
                        <div class="about-six__shape-1"></div>
                        <div class="about-six__shape-2"></div>
                        <div class="about-six__img-box-inner">
                            <img src="{{ asset("/assets/images/aboutus_2.png") }}" alt="Courtice Home Health Care team">
                        </div>
                    </div>
                </div>
                <div class="about-six__content-column wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="about-six__content">
                        <div class="about-six__tagline">
                            <span class="icon-broken-bone"></span>
                            Who We Are
                        </div>
                        <h3 class="about-six__title">
                            Your Trusted <span>Home Health Care</span> Partner in Durham Region
                        </h3>
                        <p class="about-six__text">
                            Courtice Home Health Care is a locally owned and operated store proudly serving Courtice,
                            Oshawa, Bowmanville, and the greater Durham Region. We specialize in mobility aids, home safety
                            equipment, and wellness products designed to help you live safely and independently at home.
                        </p>
                        <p class="about-six__text">
                            Whether recovering from surgery or supporting a loved one, our knowledgeable team provides
                            personalized guidance every step of the way. We believe aging well and living well go hand in
                            hand, and it starts right here, close to home.
                        </p>

                        <div class="about-six__features">
                            <div class="about-six__feature-item">
                                <i class="fa fa-check-circle"></i> Locally Owned & Operated
                            </div>
                            <div class="about-six__feature-item">
                                <i class="fa fa-check-circle"></i> Expert Mobility Advice
                            </div>
                            <div class="about-six__feature-item">
                                <i class="fa fa-check-circle"></i> Home Safety Specialists
                            </div>
                            <div class="about-six__feature-item">
                                <i class="fa fa-check-circle"></i> Community Rooted Care
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter-one">
        <div class="container">
            <div class="counter-one__inner">
                <ul class="counter-one__count-list list-unstyled">
                    <li>
                        <div class="counter-one__count-single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="1000">00</h3>
                                <span>+</span>
                            </div>
                            <p class="counter-one__count-text">Families<br>Supported</p>
                        </div>
                    </li>
                    <li>
                        <div class="counter-one__count-single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="15">00</h3>
                                <span>+</span>
                            </div>
                            <p class="counter-one__count-text">Years in the<br>Community</p>
                        </div>
                    </li>
                    <li>
                        <div class="counter-one__count-single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="200">00</h3>
                                <span>+</span>
                            </div>
                            <p class="counter-one__count-text">Products<br>Available</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="why-choose-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="why-choose-one__left">
                        <div class="section-title-two text-left sec-title-animation animation-style2">
                            <h6 class="section-title-two__tagline">What We Stand For</h6>
                            <h3 class="section-title-two__title title-animation">Independence. Dignity. Community.</h3>
                        </div>
                        <ul class="about-one__points-box list-unstyled">
                            <li>
                                <div class="icon"><span class="icon-left-arrows"></span></div>
                                <p><strong>Independence at Home:</strong> We believe everyone deserves to live on their own
                                    terms. Our products, from grab bars and bath safety aids to walkers, rollators, and lift
                                    chairs, are designed to keep you safe and confident at home.</p>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-left-arrows"></span></div>
                                <p><strong>Dignity in Every Stage of Life:</strong> Aging and recovery are personal. We
                                    treat every customer and caregiver with respect, patience, and empathy, with no rush and
                                    no pressure.</p>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-left-arrows"></span></div>
                                <p><strong>Rooted in Our Community:</strong> As a Durham Region home health care provider,
                                    we are invested in our neighbors and proud to be a trusted resource for families,
                                    caregivers, and healthcare professionals.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="why-choose-one__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="why-choose-one__img" style="border-radius: 30px; overflow: hidden; ">
                            <img src="{{ asset("/assets/images/aboutus_1.png") }}" alt="Courtice Home Health Care values"
                                style="width: 100%;height:500px; border-radius: 0;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-one">
        <div class="container">
            <div class="feature-one__inner">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <h6 class="section-title__tagline"><span class="icon-broken-bone"></span>Our Features</h6>
                    <h3 class="section-title__title title-animation">Local Expertise. Personalized Care. Real Advice.</h3>
                </div>
                <ul class="feature-one__feature-list list-unstyled">
                    <li>
                        <div class="feature-one__feature-list-left">
                            <div class="feature-one__feature-list-icon"><span class="icon-quaity-care"></span></div>
                            <h3 class="feature-one__feature-list-title">Expert Product Knowledge</h3>
                        </div>
                        <div class="feature-one__feature-list-right">
                            <p class="feature-one__feature-list-sub-title">Clear guidance tailored to your needs</p>
                        </div>
                    </li>
                    <li>
                        <div class="feature-one__feature-list-left">
                            <div class="feature-one__feature-list-icon"><span class="icon-quaity-care-2"></span></div>
                            <h3 class="feature-one__feature-list-title">Hands-On Product Experience</h3>
                        </div>
                        <div class="feature-one__feature-list-right">
                            <p class="feature-one__feature-list-sub-title">See, touch, and try before you buy</p>
                        </div>
                    </li>
                    <li>
                        <div class="feature-one__feature-list-left">
                            <div class="feature-one__feature-list-icon"><span class="icon-quaity-care-3"></span></div>
                            <h3 class="feature-one__feature-list-title">Personalized Fittings &amp; Consultations</h3>
                        </div>
                        <div class="feature-one__feature-list-right">
                            <p class="feature-one__feature-list-sub-title">Custom compression and mobility assessments</p>
                        </div>
                    </li>
                    <li>
                        <div class="feature-one__feature-list-left">
                            <div class="feature-one__feature-list-icon"><span class="icon-quaity-care-4"></span></div>
                            <h3 class="feature-one__feature-list-title">Local, Accessible, Responsive</h3>
                        </div>
                        <div class="feature-one__feature-list-right">
                            <p class="feature-one__feature-list-sub-title">No call centres, just your local team</p>
                        </div>
                    </li>
                    <li>
                        <div class="feature-one__feature-list-left">
                            <div class="feature-one__feature-list-icon"><span class="icon-quaity-care"></span></div>
                            <h3 class="feature-one__feature-list-title">Competitive Pricing &amp; Insurance Support</h3>
                        </div>
                        <div class="feature-one__feature-list-right">
                            <p class="feature-one__feature-list-sub-title">Help with ADP funding, claims, and third-party
                                billing</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="services-custom">
        <div class="container">
            <div class="section-title text-left sec-title-animation animation-style2">
                <h6 class="section-title__tagline"><span class="icon-broken-bone"></span>Our Services</h6>
                <h3 class="section-title__title title-animation">Support That Meets You Where You Are</h3>
            </div>
            <p class="about-one__text">We provide practical, everyday home health support for individuals, families, and
                caregivers across Courtice and Durham Region:</p>

            <div class="services-custom__grid">
                <!-- Service 1 -->
                <div class="service-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="service-card__icon">
                        <span class="icon-call"></span>
                    </div>
                    <h4 class="service-card__title">Customer Service</h4>
                    <p class="service-card__text">
                        Excellent customer service is what makes Courtice Home Healthcare the preferred medical supply store
                        among our clients.</p>
                    <div class="service-card__arrow"><span class="icon-arrow-right"></span></div>
                </div>

                <!-- Service 2 -->
                <div class="service-card wow fadeInUp" data-wow-delay="200ms">
                    <div class="service-card__icon">
                        <span class="icon-certification"></span>
                    </div>
                    <h4 class="service-card__title">Training</h4>
                    <p class="service-card__text">
                        Educate client in need of mobility aids such as walker or wheelchair both powered and manual.</p>
                    <div class="service-card__arrow"><span class="icon-arrow-right"></span></div>
                </div>

                <!-- Service 3 -->
                <div class="service-card wow fadeInUp" data-wow-delay="300ms">
                    <div class="service-card__icon">
                        <span class="fas fa-handshake"></span>
                    </div>
                    <h4 class="service-card__title">Partner</h4>
                    <p class="service-card__text">
                        Registered vendor of Assistive Devices Program (ADP)</p>
                    <div class="service-card__arrow"><span class="icon-arrow-right"></span></div>
                </div>

                <!-- Service 4 -->
                <div class="service-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="service-card__icon">
                        <span class="icon-hour"></span>
                    </div>
                    <h4 class="service-card__title">Availability</h4>
                    <p class="service-card__text">

                        If you are looking for an item that is not in stock, we will try to get it for you the next business
                        day.</p>
                    <div class="service-card__arrow"><span class="icon-arrow-right"></span></div>
                </div>

                <!-- Service 5 -->
                <div class="service-card wow fadeInUp" data-wow-delay="500ms">
                    <div class="service-card__icon">
                        <span class="icon-quaity-care-3"></span>
                    </div>
                    <h4 class="service-card__title">Braces & Supports Fittings</h4>
                    <p class="service-card__text">
                        Expert measurement and adjustment of orthopedic supports to ensure maximum comfort and effectiveness
                        for your recovery.</p>
                    <div class="service-card__arrow"><span class="icon-arrow-right"></span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="flyer-cta">
        <div class="container">
            <div class="flyer-cta__inner wow fadeInUp" data-wow-delay="100ms">
                <div class="flyer-cta__content">
                    <span class="flyer-cta__tagline">Exclusive Savings</span>
                    <h3 class="flyer-cta__title">Check Our Monthly Flyer for Exceptional Deals</h3>
                    <p class="flyer-cta__text">
                        Stay up to date with Courtice Home Health Care's monthly flyer, featuring exclusive discounts on
                        mobility aids, home safety essentials, and daily living products. New deals drop every month,
                        curated to help you live better for less.
                    </p>
                    <a href="{{ url('products') }}" class="flyer-cta__btn">
                        View This Month's Flyer <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="flyer-cta__image-box">
                    <div class="flyer-cta__shape"></div>
                    <div class="flyer-cta__icon-circle">
                        <i class="icon-broken-bone"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footerThree />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection