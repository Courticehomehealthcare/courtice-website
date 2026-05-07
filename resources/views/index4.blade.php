@extends('layouts.layout3')
@section('title', 'Home Four || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
                                                                                                                                    <link rel="stylesheet" href="' . asset('assets/css/twentytwenty.css') . '"/>
                                                                                                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
                                                                                                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
                                                                                                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
                                                                                                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/video.css') . '"/>
                                                                                                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/before-and-after.css') . '"/>
                                                                                                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
                                                                                                                                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@21.0.8/build/css/intlTelInput.css"/>';

@endphp
@section('content')
    <style>
        .icon-arrow-left:before {
            content: "\e929" !important;
        }

        .image_c {
            height: 280px;
            object-fit: cover;
            width: 100%;
        }

        .banner-two__img {
            position: relative;
            height: 650px;
            width: 100%;
            border-radius: 20px;
            overflow: hidden;
            background-color: #f8f8f8;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .banner-two__img img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* All images will fill the fixed box perfectly */
            object-position: center;
        }

        /* Banner Carousel Dots & Arrows */
        .banner-two__carousel.owl-carousel {
            padding-bottom: 50px; /* Space for dots below */
        }

        .banner-two__carousel.owl-carousel .owl-nav {
            position: absolute;
            top: 50%;
            width: calc(100% + 40px);
            left: -20px;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            pointer-events: none;
            z-index: 10;
        }

        .banner-two__carousel.owl-carousel .owl-nav button.owl-prev,
        .banner-two__carousel.owl-carousel .owl-nav button.owl-next {
            width: 44px;
            height: 44px;
            background-color: #ffffff !important;
            color: #00bdd6 !important;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            pointer-events: all;
            opacity: 0.9;
        }

        .banner-two__carousel.owl-carousel .owl-nav button.owl-prev:hover,
        .banner-two__carousel.owl-carousel .owl-nav button.owl-next:hover {
            background-color: #00bdd6 !important;
            color: #ffffff !important;
            opacity: 1;
            transform: scale(1.1);
        }

        .banner-two__carousel.owl-carousel .owl-dots {
            position: absolute;
            bottom: 0px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 12px;
            z-index: 10;
        }

        .banner-two__carousel.owl-carousel .owl-dots .owl-dot span {
            width: 10px;
            height: 10px;
            background-color: #d1d9e6 !important;
            border-radius: 50%;
            transition: all 0.3s ease;
            display: block;
            margin: 0 !important;
        }

        .banner-two__carousel.owl-carousel .owl-dots .owl-dot.active span {
            background-color: #00bdd6 !important;
            width: 25px;
            border-radius: 5px;
        }

        .form-submit-spinner {
            width: 16px;
            height: 16px;
            border: 2px solid rgba(255, 255, 255, 0.35);
            border-top-color: #fff;
            border-radius: 50%;
            display: inline-block;
            vertical-align: middle;
            margin-right: 8px;
            animation: formSpin 0.8s linear infinite;
        }

        @keyframes formSpin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Brand Logos Styling */
        .brand-two__img {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px;
            width: 100%;
            padding: 0 15px;
        }
        .brand-two__img img {
            max-width: 150px;
            max-height: 80px;
            width: auto;
            height: auto;
            object-fit: contain;
            transition: all 0.4s ease-in-out;
            /* filter: grayscale(100%); */
            /* opacity: 0.6; */
        }
        .brand-two__img:hover img {
            transform: scale(1.1) translateY(-5px);
            filter: grayscale(0%);
            opacity: 1;
        }
        .brand-two__single {
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        .brand-two__single:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        /* intl-tel-input custom styles */
        .iti {
            width: 100%;
            display: block;
        }

        .iti__selected-dial-code {
            font-size: 14px;
            color: var(--careon-gray);
        }

        .iti--separate-dial-code .iti__selected-flag {
            background: transparent !important;
            padding-left: 0;
        }

        .contact-two__input-box .iti input[type="tel"] {
            height: 60px;
            width: 100%;
            padding-left: 55px !important;
            padding-right: 30px;
            outline: none;
            font-size: 14px;
            font-weight: 400;
            background-color: transparent;
            border: 1px solid var(--careon-bdr-color);
            color: var(--careon-gray);
            display: block;
            border-radius: var(--careon-bdr-radius);
            transition: all 500ms ease;
        }

        .contact-two__input-box .iti input[type="tel"]:focus {
            border-color: var(--careon-base);
        }

        /* FAQ Contact Info Fix */
        .faq-three__contact-info {
            max-width: 350px !important;
            width: auto !important;
        }

        .faq-three__contact-info-number p {
            font-size: 16px !important;
            line-height: 1.4 !important;
        }

        .faq-three__contact-info-number p a {
            word-break: break-all;
        }

        @media (max-width: 480px) {
            .faq-three__contact-info {
                max-width: 280px !important;
            }
            .faq-three__contact-info-number p {
                font-size: 14px !important;
            }
        }
    </style>
    <x-strickyHeaderThree />


    <!--Banner Two Start -->
    <section class="banner-two">
        <div class="banner-two__shape-bg" style="background-image: url(assets/images/shapes/banner-two-shape-bg.png);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="banner-two__left sec-title-animation animation-style2">
                       
                        <h2 class="banner-two__title title-animation">Better Home Care <span>Starts With the Right
                                Products</span> </h2>
                        <p class="banner-two__text">Find mobility aids, incontinence supplies, home safety equipment,
                            compression, braces, and daily living essentials — with expert guidance from real people you can
                            call or visit today. </p>
                        <div class="banner-two__btn-box">
                            <a href="{{ route('collections') }}" class="thm-btn">Shop our Products<span
                                    class="icon-arrow-right"></span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="banner-two__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms" style="padding-top:20px
                                                                                        ">
                        <div class="banner-two__carousel owl-theme owl-carousel">
                            @forelse($carousels as $carousel)
                                <div class="item">
                                    <div class="banner-two__img" style="background-image: url('{{ asset($carousel->image_url) }}');">
                                        <img src="{{ asset($carousel->image_url) }}" alt="{{ $carousel->title }}" width="650" height="650">
                                    </div>
                                </div>
                            @empty
                                <div class="item">
                                    <div class="banner-two__img" style="background-image: url('{{ asset("/assets/images/home.png") }}');">
                                        <img src="{{ asset("/assets/images/home.png") }}" alt="" width="650" height="650">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="banner-two__img" style="background-image: url('{{ asset("/assets/images/resources/main-slider-img-1.jpg") }}');">
                                        <img src="{{ asset("/assets/images/resources/main-slider-img-1.jpg") }}" alt="" width="650" height="650">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="banner-two__img" style="background-image: url('{{ asset("/assets/images/resources/main-slider-img-2.jpg") }}');">
                                        <img src="{{ asset("/assets/images/resources/main-slider-img-2.jpg") }}" alt="" width="650" height="650">
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Counter Box (Full Width) -->
            <style>
                .hc-counter-box {
                    margin-top: 50px;
                    width: 100%;
                }

                .hc-counter-list {
                    display: flex;
                    flex-wrap: wrap;
                    gap: 0;
                    padding: 0;
                    margin: 0;
                    list-style: none;
                    background: linear-gradient(135deg, rgba(0, 189, 214, 0.08) 0%, rgba(0, 120, 160, 0.12) 100%);
                    border-radius: 20px;
                    border: 1px solid rgba(0, 189, 214, 0.18);
                    backdrop-filter: blur(8px);
                    overflow: hidden;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
                }

                .hc-counter-list>li {
                    flex: 1 1 25%;
                    position: relative;
                    border-right: 1px solid rgba(0, 189, 214, 0.15);
                }

                .hc-counter-list>li:last-child {
                    border-right: none;
                }

                .hc-counter-item {
                    display: flex;
                    align-items: center;
                    gap: 16px;
                    padding: 30px 25px;
                    transition: all 0.3s ease;
                    cursor: default;
                    height: 100%;
                }

                .hc-counter-item:hover {
                    background: rgba(0, 189, 214, 0.06);
                }

                .hc-counter-icon-wrap {
                    flex-shrink: 0;
                    width: 54px;
                    height: 54px;
                    border-radius: 14px;
                    background: linear-gradient(135deg, #00bdd680, #fff);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    box-shadow: 0 4px 14px rgba(0, 189, 214, 0.25);
                    transition: all 0.3s ease;
                }

                .hc-counter-item:hover .hc-counter-icon-wrap {
                    transform: translateY(-3px) scale(1.05);
                    box-shadow: 0 8px 20px rgba(0, 189, 214, 0.35);
                }

                .hc-counter-icon-wrap img {
                    max-width: 28px;
                    max-height: 28px;
                    object-fit: contain;
                }

                .hc-counter-body {
                    display: flex;
                    flex-direction: column;
                    min-width: 0;
                }

                .hc-counter-label {
                    margin: 0;
                    font-size: 14px;
                    font-weight: 600;
                    color: #0d1e3b;
                    line-height: 1.3;
                }

                /* Responsive Adjustments */
                @media (max-width: 1199px) {
                    .hc-counter-list>li {
                        flex: 1 1 50%;
                    }
                    .hc-counter-list>li:nth-child(2n) {
                        border-right: none;
                    }
                    .hc-counter-list>li:nth-child(1), 
                    .hc-counter-list>li:nth-child(2) {
                        border-bottom: 1px solid rgba(0, 189, 214, 0.15);
                    }
                }

                @media (max-width: 767px) {
                    .hc-counter-list>li {
                        flex: 1 1 100%;
                        border-right: none;
                        border-bottom: 1px solid rgba(0, 189, 214, 0.15);
                    }
                    .hc-counter-list>li:last-child {
                        border-bottom: none;
                    }
                    .hc-counter-item {
                        padding: 20px;
                    }
                }

                /* About Carousel Navigation Styling */
                .about-four__carousel.owl-carousel .owl-nav {
                    position: absolute;
                    top: 50%;
                    width: 100%;
                    transform: translateY(-50%);
                    display: flex;
                    justify-content: space-between;
                    padding: 0 20px;
                    pointer-events: none;
                    z-index: 10;
                }

                .about-four__carousel.owl-carousel .owl-nav button {
                    width: 48px;
                    height: 48px;
                    background-color: #fff !important;
                    color: #00bdd6 !important;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 16px;
                    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
                    pointer-events: all;
                    transition: all 0.3s ease;
                    opacity: 0.9;
                }

                .about-four__carousel.owl-carousel .owl-nav button:hover {
                    background-color: #00bdd6 !important;
                    color: #fff !important;
                    transform: scale(1.1);
                    opacity: 1;
                }

                .about-four__carousel.owl-carousel .owl-dots {
                    position: absolute;
                    bottom: 15px;
                    left: 50%;
                    transform: translateX(-50%);
                    display: flex;
                    gap: 10px;
                    z-index: 10;
                }

                .about-four__carousel.owl-carousel .owl-dots .owl-dot span {
                    width: 12px;
                    height: 12px;
                    background: rgba(255, 255, 255, 0.5) !important;
                    border-radius: 50%;
                    display: block;
                    margin: 0 !important;
                    transition: all 0.3s ease;
                    border: 1px solid rgba(255,255,255,0.3);
                }

                .about-four__carousel.owl-carousel .owl-dots .owl-dot.active span {
                    background: #fff !important;
                    transform: scale(1.2);
                    border-color: #fff;
                }

                /* Keep Featured dots consistent */
                .featured-products__carousel.owl-carousel .owl-dots,
                .featured-services__carousel.owl-carousel .owl-dots {
                    display: flex;
                    justify-content: center;
                    gap: 8px;
                    margin-top: 30px;
                }

                .featured-products__carousel.owl-carousel .owl-dots .owl-dot span,
                .featured-services__carousel.owl-carousel .owl-dots .owl-dot span {
                    width: 10px;
                    height: 10px;
                    background: #d1d9e6;
                    border-radius: 50%;
                    display: block;
                    transition: all 0.3s ease;
                }

                .featured-products__carousel.owl-carousel .owl-dots .owl-dot.active span,
                .featured-services__carousel.owl-carousel .owl-dots .owl-dot.active span {
                    background: #00bdd6;
                    width: 25px;
                    border-radius: 5px;
                }
            </style>

            <div class="hc-counter-box">
                <ul class="hc-counter-list">
                    <!-- Card 1: ADP Authorized Vendor -->
                    <li>
                        <div class="hc-counter-item">
                            <div class="hc-counter-icon-wrap">
                                <img src="{{ asset('assets/images/ontario-logo--desktop.png') }}" alt="ADP Authorized">
                            </div>
                            <div class="hc-counter-body">
                                <p class="hc-counter-label">Assistive Devices Program Authorized Vendor</p>
                            </div>
                        </div>
                    </li>
                    <!-- Card 2: Direct Billing Green Shield -->
                    <li>
                        <div class="hc-counter-item">
                            <div class="hc-counter-icon-wrap">
                                <img src="{{ asset('assets/images/greenshield.png') }}" alt="Direct Billing">
                            </div>
                            <div class="hc-counter-body">
                                <p class="hc-counter-label">Direct Billing: Green Shield Canada</p>
                            </div>
                        </div>
                    </li>
                    <!-- Card 3: WSIB & Veterans -->
                    <li>
                        <div class="hc-counter-item">
                            <div class="hc-counter-icon-wrap">
                                <img src="{{ asset('assets/images/wsib_favicon.png') }}" alt="WSIB & Veterans">
                            </div>
                            <div class="hc-counter-body">
                                <p class="hc-counter-label">WSIB &amp; Veterans Affairs Support</p>
                            </div>
                        </div>
                    </li>
                    <!-- Card 4: Local Store Same-Day -->
                    <li>
                        <div class="hc-counter-item">
                            <div class="hc-counter-icon-wrap">
                                <img src="{{ asset('assets/images/canada.png') }}" alt="Local Store">
                            </div>
                            <div class="hc-counter-body">
                                <p class="hc-counter-label">Local Store — Same-Day Availability</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Banner Two End -->

    <!--Sliding Text Start-->
    <section class="sliding-text">
        <div class="sliding-text__inner">
            <ul class="sliding-text__list marquee_mode-1 list-unstyled">
                @forelse ($slidingTexts as $item)
                    <li>
                        <p>{{ $item->text }}</p>
                    </li>
                @empty
                    <li>
                        <p>Get 20% off your first healthcare service.</p>
                    </li>
                    <li>
                        <p>Take advantage of a 20% discount on your first treatment.</p>
                    </li>
                    <li>
                        <p>Unlock a 20% savings on your first medical service.</p>
                    </li>
                    <li>
                        <p>Enjoy a 20% reduction on your first healthcare appointment.</p>
                    </li>
                    <li>
                        <p>Receive a 20% discount on your first visit to our medical facility.</p>
                    </li>
                @endforelse
            </ul>
        </div>
    </section>
    <!--Sliding Text End-->

    <!--new service added -->

    <!--Blog Five Start -->
    <section class="blog-five">
        <div class="container">
            <div class="section-title-three text-center sec-title-animation animation-style2">
                <!--<h6 class="section-title-three__tagline">Our Blog and news</h6>-->
                <h3 class="section-title-three__title title-animation">Explore Featured Products.

                </h3>
            </div>
            <div class="featured-products__carousel owl-theme owl-carousel">
                @forelse ($featuredProducts as $index => $product)
                    @php
                        $animations = ['fadeInLeft', 'fadeInUp', 'fadeInRight'];
                        $delays = ['100ms', '200ms', '300ms'];
                        $animationClass = $animations[$index % 3];
                        $animationDelay = $delays[$index % 3];
                        $productLink = route('product-details', $product->slug);
                        $productImage = $product->main_image ?? asset('assets/images/resources/no-image.jpg');
                    @endphp
                    <div class="wow {{ $animationClass }}" data-wow-delay="{{ $animationDelay }}">
                        <div class="blog-five__single">
                            <div class="blog-five__img">
                                <img class="image_c" src="{{ $productImage }}" alt="{{ $product->name }}">
                                <div class="blog-five__plus">
                                    <a href="{{ $productLink }}"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="blog-five__content">
                                <h3 class="blog-five__title">
                                    <a href="{{ $productLink }}">{{ $product->name }}</a>
                                </h3>
                                <p class="blog-five__text">
                                    ${{ number_format($product->price, 2) }}
                                </p>
                                <div class="blog-five__read-more">
                                    <a href="{{ $productLink }}">Shop Now <span class="icon-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center">
                        <p>No featured products found.</p>
                    </div>
                @endforelse
            </div>

            <!--<div class="row">-->
            <!--Blog Five Single Start-->
            <!--    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">-->
            <!--        <div class="blog-five__single">-->
            <!--            <div class="blog-five__img-box">-->
            <!--                <div class="blog-five__img">-->
            <!--                    <img src="{{ asset("/assets/images/blog/blog-5-1.jpg") }}" alt="">-->
            <!--                    <div class="blog-five__plus">-->
            <!--                        <a href="{{ url("blog-details") }}"><i class="fa fa-plus"></i></a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="blog-five__content">-->
            <!--                <ul class="blog-five__meta list-unstyled">-->
            <!--                    <li>-->
            <!--                        <div class="icon">-->
            <!--                            <span class="icon-user"></span>-->
            <!--                        </div>-->
            <!--                        <p>By admin</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                        <div class="icon">-->
            <!--                            <span class="icon-calender"></span>-->
            <!--                        </div>-->
            <!--                        <p>20, june 2024</p>-->
            <!--                    </li>-->
            <!--                </ul>-->
            <!--                <h3 class="blog-five__title"><a href="{{ url("blog-details") }}">Fresh Breath Dental Spa</a>-->
            <!--                </h3>-->
            <!--                <p class="blog-five__text">Dental care is essential for maintaining health and overall-->
            <!--                    well-being Regular </p>-->
            <!--                <div class="blog-five__read-more">-->
            <!--                    <a href="{{ url("blog-details") }}">Read More <span class="icon-arrow-right"></span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--Blog Five Single End-->
            <!--Blog Five Single Start-->
            <!--    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">-->
            <!--        <div class="blog-five__single">-->
            <!--            <div class="blog-five__img-box">-->
            <!--                <div class="blog-five__img">-->
            <!--                    <img src="{{ asset("/assets/images/blog/blog-5-2.jpg") }}" alt="">-->
            <!--                    <div class="blog-five__plus">-->
            <!--                        <a href="{{ url("blog-details") }}"><i class="fa fa-plus"></i></a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="blog-five__content">-->
            <!--                <ul class="blog-five__meta list-unstyled">-->
            <!--                    <li>-->
            <!--                        <div class="icon">-->
            <!--                            <span class="icon-user"></span>-->
            <!--                        </div>-->
            <!--                        <p>By admin</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                        <div class="icon">-->
            <!--                            <span class="icon-calender"></span>-->
            <!--                        </div>-->
            <!--                        <p>20, june 2024</p>-->
            <!--                    </li>-->
            <!--                </ul>-->
            <!--                <h3 class="blog-five__title"><a href="{{ url("blog-details") }}">Gentle Touch Dental Care</a>-->
            <!--                </h3>-->
            <!--                <p class="blog-five__text">Dental care is essential for maintaining health and overall-->
            <!--                    well-being Regular </p>-->
            <!--                <div class="blog-five__read-more">-->
            <!--                    <a href="{{ url("blog-details") }}">Read More <span class="icon-arrow-right"></span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--Blog Five Single End-->
            <!--Blog Five Single Start-->
            <!--    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">-->
            <!--        <div class="blog-five__single">-->
            <!--            <div class="blog-five__img-box">-->
            <!--                <div class="blog-five__img">-->
            <!--                    <img src="{{ asset("/assets/images/blog/blog-5-3.jpg") }}" alt="">-->
            <!--                    <div class="blog-five__plus">-->
            <!--                        <a href="{{ url("blog-details") }}"><i class="fa fa-plus"></i></a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="blog-five__content">-->
            <!--                <ul class="blog-five__meta list-unstyled">-->
            <!--                    <li>-->
            <!--                        <div class="icon">-->
            <!--                            <span class="icon-user"></span>-->
            <!--                        </div>-->
            <!--                        <p>By admin</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                        <div class="icon">-->
            <!--                            <span class="icon-calender"></span>-->
            <!--                        </div>-->
            <!--                        <p>20, june 2024</p>-->
            <!--                    </li>-->
            <!--                </ul>-->
            <!--                <h3 class="blog-five__title"><a href="{{ url("blog-details") }}">White Pearl Dentistry teeth</a>-->
            <!--                </h3>-->
            <!--                <p class="blog-five__text">Dental care is essential for maintaining health and overall-->
            <!--                    well-being Regular </p>-->
            <!--                <div class="blog-five__read-more">-->
            <!--                    <a href="{{ url("blog-details") }}">Read More <span class="icon-arrow-right"></span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--Blog Five Single End-->
            <!--</div>-->
        </div>
    </section>
    <!--Blog Five End -->


    <!--Services Four Start -->
    <!--<section class="services-four">-->
    <!--    <div class="container">-->
    <!--        <div class="section-title text-center sec-title-animation animation-style1">-->
    <!--            <h6 class="section-title__tagline">Our Services</h6>-->
    <!--            <h3 class="section-title__title title-animation">Health Products-->
    <!--            </h3>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <!--Services Four Single Start -->
    <!--            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">-->
    <!--                <div class="services-four__single">-->
    <!--                    <div class="services-four__icon">-->
    <!--                        <span class="icon-teeth"></span>-->
    <!--                    </div>-->
    <!--                    <h3 class="services-four__title"><a href="{{ url("vitality-health-solutions") }}">Oral Cancer</a>-->
    <!--                    </h3>-->
    <!--                    <p class="services-four__text">Dental care is essential for maintaining oral health and-->
    <!--                        overall well-being</p>-->
    <!--                    <div class="services-four__btn-box">-->
    <!--                        <a href="{{ url("vitality-health-solutions") }}" class="thm-btn">Read More <span-->
    <!--                                class="icon-arrow-right"></span>-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--Services Four Single End -->
    <!--Services Four Single Start -->
    <!--            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">-->
    <!--                <div class="services-four__single">-->
    <!--                    <div class="services-four__icon">-->
    <!--                        <span class="icon-teeth-4"></span>-->
    <!--                    </div>-->
    <!--                    <h3 class="services-four__title"><a href="{{ url("wellSpring-wellness-center") }}">Dental-->
    <!--                            Implants</a></h3>-->
    <!--                    <p class="services-four__text">Dental care is essential for maintaining oral health and-->
    <!--                        overall well-being</p>-->
    <!--                    <div class="services-four__btn-box">-->
    <!--                        <a href="{{ url("wellSpring-wellness-center") }}" class="thm-btn">Read More <span-->
    <!--                                class="icon-arrow-right"></span>-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--Services Four Single End -->
    <!--Services Four Single Start -->
    <!--            <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">-->
    <!--                <div class="services-four__single">-->
    <!--                    <div class="services-four__icon">-->
    <!--                        <span class="icon-teeth-5"></span>-->
    <!--                    </div>-->
    <!--                    <h3 class="services-four__title"><a href="{{ url("evergreen-medical-center") }}">Orthodontics</a>-->
    <!--                    </h3>-->
    <!--                    <p class="services-four__text">Dental care is essential for maintaining oral health and-->
    <!--                        overall well-being</p>-->
    <!--                    <div class="services-four__btn-box">-->
    <!--                        <a href="{{ url("evergreen-medical-center") }}" class="thm-btn">Read More <span-->
    <!--                                class="icon-arrow-right"></span>-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--Services Four Single End -->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--Services Four End -->

    <!--About Four Start -->
    <section class="about-four">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-four__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-four__img-box">
                            <div class="about-four__carousel owl-theme owl-carousel">
                                @forelse($aboutCarousels as $carousel)
                                    <div class="item">
                                        <div class="about-four__img" style="padding-top:100px">
                                            <img src="{{ asset($carousel->image_url) }}" alt="{{ $carousel->title }}">
                                        </div>
                                    </div>
                                @empty
                                    <div class="item">
                                        <div class="about-four__img" style="padding-top:100px">
                                            <img src="{{ asset("/assets/images/main.png") }}" alt="Courtice Home Health Care Storefront">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="about-four__img" style="padding-top:100px">
                                            <img src="{{ asset("/assets/images/aboutus_1.png") }}" alt="Our Services">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="about-four__img" style="padding-top:100px">
                                            <img src="{{ asset("/assets/images/aboutus_2.png") }}" alt="Our Team">
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                            <!-- <div class="about-four__shape-1"></div>
                            <div class="about-four__shape-2"></div>
                            <div class="about-four__shape-3 float-bob-x"></div>
                            <div class="about-four__shape-4 float-bob-y"></div>
                            <div class="about-four__shape-5 float-bob-x"></div> -->
                            <!-- <div class="about-four__success-ratio">
                                                                                                    <div class="about-four__success-ratio-percent">
                                                                                                        <h3 class="odometer" data-count="98">00</h3>
                                                                                                        <span>%</span>
                                                                                                    </div>
                                                                                                    <p class="about-four__success-ratio-text">Success Ratio</p>
                                                                                                </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-four__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <h6 class="section-title__tagline">About us</h6>
                            <h3 class="section-title__title title-animation">At Courtice Home Health Care, we’ve proudly
                                supported independent living in our community for 15+ years.
                            </h3>
                        </div>

                        <p class="about-four__text">

                            Our knowledgeable team works closely with you to understand your needs and recommend the right
                            products —
                            from mobility and accessibility solutions to essential daily-living supports.
                        </p>

                        <p class="about-four__text">
                            More than a store, we are your local care partner. Rooted in the community, we are committed to
                            helping
                            individuals and families live safely, comfortably, and with confidence at home.
                        </p>

                        <div class="about-four__point-box">
                            <ul class="list-unstyled about-four__point">
                                <li>
                                    <div class="icon">
                                        <span class="icon-cheack"></span>
                                    </div>
                                    <div class="text">
                                        <p>Mobility & Accessibility Solutions</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-cheack"></span>
                                    </div>
                                    <div class="text">
                                        <p>Home Safety Equipment</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-unstyled about-four__point about-four__point--two">
                                <li>
                                    <div class="icon">
                                        <span class="icon-cheack"></span>
                                    </div>
                                    <div class="text">
                                        <p>Daily Living Aids & Supports</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-cheack"></span>
                                    </div>
                                    <div class="text">
                                        <p>Personalized Product Guidance</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="about-four__trusted-patient-box">
                            <p class="about-four__trusted-patient-text">Trusted By Over <span class="odometer"
                                    data-count="500">00</span>+ <br> Communities Served
                            </p>
                            <!-- <ul class="list-unstyled about-four__trusted-patient-review-img-box">
                                                                                                                                                            <li>
                                                                                                                                                                <div class="about-four__trusted-patient-review-img">
                                                                                                                                                                    <img src="{{ asset("/assets/images/resources/about-four-trusted-patient-img-1.jpg") }}"
                                                                                                                                                                        alt="">
                                                                                                                                                                </div>
                                                                                                                                                            </li>
                                                                                                                                                            <li>
                                                                                                                                                                <div class="about-four__trusted-patient-img">
                                                                                                                                                                    <img src="{{ asset("/assets/images/resources/about-four-trusted-patient-img-2.jpg") }}"
                                                                                                                                                                        alt="">
                                                                                                                                                                </div>
                                                                                                                                                            </li>
                                                                                                                                                            <li>
                                                                                                                                                                <div class="about-four__trusted-patient-img">
                                                                                                                                                                    <img src="{{ asset("/assets/images/resources/about-four-trusted-patient-img-3.jpg") }}"
                                                                                                                                                                        alt="">
                                                                                                                                                                </div>
                                                                                                                                                            </li>
                                                                                                                                                            <li>
                                                                                                                                                                <div class="about-four__trusted-patient-img">
                                                                                                                                                                    <img src="{{ asset("/assets/images/resources/about-four-trusted-patient-img-4.jpg") }}"
                                                                                                                                                                        alt="">
                                                                                                                                                                </div>
                                                                                                                                                            </li>
                                                                                                                                                            <li>
                                                                                                                                                                <div class="about-four__trusted-patient-plus-box">
                                                                                                                                                                    <p>+</p>
                                                                                                                                                                </div>
                                                                                                                                                            </li>
                                                                                                                                                        </ul> -->
                        </div>
                        <div class="about-four__btn-and-call-box">
                            <div class="about-four__btn-box">
                                <a href="{{ url("about") }}" class="thm-btn">More About Us <span
                                        class="icon-arrow-right"></span> </a>
                            </div>
                            <div class="about-four__call">
                                <div class="about-four__call-icon">
                                    <span class="icon-call"></span>
                                </div>
                                <div class="about-four__call-number">
                                    <p>Need help?</p>
                                    <h5><a href="{{ url("tel:+19057210004") }}">+1 905-721-0004</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Four End -->

    <!--Team Four Start -->
    <section class="team-four">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <!--<h6 class="section-title__tagline">Our Doctors</h6>-->
                <h3 class="section-title__title title-animation"> Our Services
                </h3>
            </div>
            <div class="featured-services__carousel owl-theme owl-carousel">
                @foreach ($featuredServices as $index => $service)
                    @php
                        $animations = ['fadeInLeft', 'fadeInUp', 'fadeInRight'];
                        $delays = ['100ms', '200ms', '300ms'];
                        $animationClass = $animations[$index % 3];
                        $animationDelay = $delays[$index % 3];
                        $detailSlug = !empty($service->servicesUrl)
                            ? $service->servicesUrl
                            : \Illuminate\Support\Str::slug($service->ServicesTitle);
                    @endphp
                    <!--Team Four Single Start -->
                    <div class="wow {{ $animationClass }}" data-wow-delay="{{ $animationDelay }}">
                        <div class="team-four__single">
                            <div class="team-four__img-box">
                                <div class="team-four__img">
                                    <img src="{{ !empty($service->serviceimage) ? asset('uploads/services/' . $service->serviceimage) : asset('/assets/images/own/wheelchair.jpg') }}"
                                        alt="{{ $service->ServicesTitle }}" style="height:400px">
                                </div>
                                <div class="team-four__content">
                                    <div class="team-four__title-box">
                                        <h3 class="team-four__title"><a
                                                href="{{ route('services.details', $detailSlug) }}">{{ $service->ServicesTitle }}</a>
                                        </h3>
                                        <!-- <p class="team-four__sub-title">Nursing Assistant</p> -->
                                    </div>
                                    <div class="team-four__arrow-and-social">
                                        <div class="team-four__arrow">
                                            <a href="{{ route('services.details', $detailSlug) }}"><span
                                                    class="icon-arrow-right"></span></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Four Single End -->
                @endforeach
            </div>
        </div>
    </section>
    <!--Team Four End -->

    <!--Counter Three Start -->
    <!--Counter Three Start -->
    <section class="counter-three">
        <div class="container">
            <div class="counter-three__inner">
                <ul class="list-unstyled counter-three__list">
                    <li>
                        <div class="counter-three__single">
                            <div class="counter-three__count-box">
                                <h3 class="odometer" data-count="1,000+">00</h3>
                                <span>+</span>
                            </div>
                            <p class="counter-three__text"> Products Available</p>
                        </div>
                    </li>
                    <li>
                        <div class="counter-three__single">
                            <div class="counter-three__count-box">
                                <h3 class="odometer" data-count="4000">00</h3>
                                <span>+</span>
                            </div>
                            <p class="counter-three__text">Customers Served</p>
                        </div>
                    </li>
                    <li>
                        <div class="counter-three__single">
                            <div class="counter-three__count-box">
                                <h3 class="odometer" data-count="15">00</h3>
                                <span>+</span>
                            </div>
                            <p class="counter-three__text"> Mobility & Home Care Categories
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="counter-three__single">
                            <div class="counter-three__count-box">
                                <h3 class="odometer" data-count="100">00</h3>
                                <span>%</span>
                            </div>
                            <p class="counter-three__text">Local
                                Courtice, Ontario Store
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Counter Three End -->

    <!--Counter Three End -->

    <!--Faq Three Start -->
    <section class="faq-three">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-three__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <h6 class="section-title__tagline">Ask Questions</h6>
                            <h3 class="section-title__title title-animation">Frequently Asked <br> Questions
                            </h3>
                        </div>
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                            @forelse ($homeFaqs as $index => $faq)
                                @php
                                    $isLeft = $index % 2 === 0;
                                    $animationClass = $isLeft ? 'fadeInLeft' : 'fadeInRight';
                                    $animationDelay = (($index + 1) * 100) . 'ms';
                                @endphp
                                <div class="accrodion wow {{ $animationClass }}"
                                    data-wow-delay="{{ $animationDelay }}">
                                    <div class="accrodion-title">
                                        <div class="faq-three-accrodion__count"></div>
                                        <h4>{{ $faq->question }}</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            {!! $faq->answer !!}
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="accrodion wow fadeInLeft" data-wow-delay="100ms">
                                    <div class="accrodion-title">
                                        <div class="faq-three-accrodion__count"></div>
                                        <h4>No FAQs available right now.</h4>
                                    </div>
                                </div>
                            @endforelse
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-three__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="faq-three__img">
                            <img src="{{ asset("/assets/images/faq.png") }}" alt="" style="height:750px">
                            <div class="faq-three__contact-info">
                                <ul class="list-unstyled faq-three__contact-info-list">
                                    <li>
                                        <div class="faq-three__contact-info-icon-box">
                                            <div class="faq-three__contact-info-icon">
                                                <span class="icon-call"></span>
                                            </div>
                                            <p class="faq-three__contact-info-icon-text">Phone Number</p>
                                        </div>
                                        <div class="faq-three__contact-info-number">
                                            <p><a href="{{ url("tel:+19057210004") }}">+1 905-721-0004</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-three__contact-info-icon-box">
                                            <div class="faq-three__contact-info-icon">
                                                <span class="icon-envolope"></span>
                                            </div>
                                            <p class="faq-three__contact-info-icon-text">Email</p>
                                        </div>
                                        <div class="faq-three__contact-info-number">
                                            <p><a href="mailto:info@courticehomehealthcare.com">info@courticehomehealthcare.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Faq Three End -->


    <!--Brand Two Start -->
    <section class="brand-two">
           <h3 class="section-title__title title-animation" style="text-align: center;">Our Suppliers
                </h3>
        <div class="container-fluid">
            <div class="brand-two__inner wow fadeInUp" data-wow-delay="100ms">
                <div class="brand-two__carousel owl-theme owl-carousel">
                    @forelse($clientImages as $img)
                        <div class="item">
                            <div class="brand-two__single">
                                <div class="brand-two__img">
                                    <img src="{{ asset($img->image_path) }}" alt="Client Image">
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="item">
                            <div class="brand-two__single">
                                <div class="brand-two__img">
                                    <img src="{{ asset("/assets/images/brand/brand-2-1.png") }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="brand-two__single">
                                <div class="brand-two__img">
                                    <img src="{{ asset("/assets/images/brand/brand-2-2.png") }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="brand-two__single">
                                <div class="brand-two__img">
                                    <img src="{{ asset("/assets/images/brand/brand-2-3.png") }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="brand-two__single">
                                <div class="brand-two__img">
                                    <img src="{{ asset("/assets/images/brand/brand-2-4.png") }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="brand-two__single">
                                <div class="brand-two__img">
                                    <img src="{{ asset("/assets/images/brand/brand-2-5.png") }}" alt="">
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!--Brand Two End -->

    <!--Video One Start -->
    <!--<section class="video-one">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-xl-6 col-lg-6">-->
    <!--                <div class="video-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">-->
    <!--                    <div class="video-one__img">-->
    <!--                        <img src="{{ asset("/assets/images/resources/video-one-img-1.jpg") }}" alt="">-->
    <!--                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"-->
    <!--                            class="video-one__round-text-box video-popup">-->
    <!--                            <div class="video-one__round-text-box-inner">-->
    <!--                                <div class="video-one__curved-circle rotate-me">-->
    <!--                                    Dentalcare Care Since 2010.-->
    <!--                                </div>-->
    <!--                                <div class="video-one__video-icon">-->
    <!--                                    <span class="icon-play"></span>-->
    <!--                                    <i class="ripple"></i>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-xl-6 col-lg-6">-->
    <!--                <div class="video-one__right">-->
    <!--                    <div class="video-one__right">-->
    <!--                        <div class="video-one__content-box">-->
    <!--                            <div class="video-one__content-icon">-->
    <!--                                <span class="icon-teeth"></span>-->
    <!--                            </div>-->
    <!--                            <h3 class="video-one__content-title">Gentle Touch Dental Care</h3>-->
    <!--                            <p class="video-one__content-text">Dental care is essential for maintaining oral <br>-->
    <!--                                health-->
    <!--                                and overall well-being</p>-->
    <!--                            <div class="video-one__btn-box">-->
    <!--                                <a href="{{ url("contact") }}" class="thm-btn">Contact Us<span-->
    <!--                                        class="icon-arrow-right"></span> </a>-->
    <!--                            </div>-->
    <!--                            <div class="video-one__shape-1 float-bob-y">-->
    <!--                                <img src="{{ asset("/assets/images/shapes/video-one-shape-1.png") }}" alt="">-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--Video One End -->

    <!--Testimonial Four Start -->
    <section class="testimonial-four">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h6 class="section-title__tagline">our Testimonials</h6>
                <h3 class="section-title__title title-animation">What Clients Say
                </h3>
            </div>
            <div class="testimonial-four__carousel owl-theme owl-carousel">
                <!--Testimonial Four Single Start-->
                <div class="testimonial-four__single">
                    <div class="testimonial-four__quote">
                        <span class="icon-quote-2"></span>
                    </div>
                    <div class="testimonial-four__client-info">
                        <div class="testimonial-four__client-img">
                            <img src="{{ asset("/assets/images/testimonial/testimonial-4-1.jpg") }}" alt="">
                        </div>
                        <div class="testimonial-four__client-content">
                            <h3><a href="{{ url("testimonials") }}">Floyd Miles</a></h3>
                            <p>Marketing Coordinator</p>
                        </div>
                    </div>
                    <p class="testimonial-four__text">maintaining oral health through practices such as the regular
                        check-a ups, cleanings, and treatments for teeth and an gums.</p>
                </div>
                <!--Testimonial Four Single End-->
                <!--Testimonial Four Single Start-->
                <div class="testimonial-four__single">
                    <div class="testimonial-four__quote">
                        <span class="icon-quote-2"></span>
                    </div>
                    <div class="testimonial-four__client-info">
                        <div class="testimonial-four__client-img">
                            <img src="{{ asset("/assets/images/testimonial/testimonial-4-2.jpg") }}" alt="">
                        </div>
                        <div class="testimonial-four__client-content">
                            <h3><a href="{{ url("testimonials") }}">David Ham</a></h3>
                            <p>Manager</p>
                        </div>
                    </div>
                    <p class="testimonial-four__text">maintaining oral health through practices such as the regular
                        check-a ups, cleanings, and treatments for teeth and an gums.</p>
                </div>
                <!--Testimonial Four Single End-->
                <!--Testimonial Four Single Start-->
                <div class="testimonial-four__single">
                    <div class="testimonial-four__quote">
                        <span class="icon-quote-2"></span>
                    </div>
                    <div class="testimonial-four__client-info">
                        <div class="testimonial-four__client-img">
                            <img src="{{ asset("/assets/images/testimonial/testimonial-4-2.jpg") }}" alt="">
                        </div>
                        <div class="testimonial-four__client-content">
                            <h3><a href="{{ url("testimonials") }}">David Ham</a></h3>
                            <p>Manager</p>
                        </div>
                    </div>
                    <p class="testimonial-four__text">maintaining oral health through practices such as the regular
                        check-a ups, cleanings, and treatments for teeth and an gums.</p>
                </div>
                <!--Testimonial Four Single End-->
            </div>
        </div>
    </section>
    <!--Testimonial Four End -->

    <!--Before And After Start-->
    <!--<section class="before-and-after">-->
    <!--    <div class="container">-->
    <!--        <div class="before-and-after__top">-->
    <!--            <div class="section-title text-left sec-title-animation animation-style2">-->
    <!--                <h6 class="section-title__tagline">SEE THE TRANSFORMATION</h6>-->
    <!--                <h3 class="section-title__title title-animation">Stunning results that showcase<br> the-->
    <!--                    lifechanging impact-->
    <!--                </h3>-->
    <!--            </div>-->
    <!--            <div class="before-and-after__btn-box">-->
    <!--                <a href="{{ url("contact") }}" class="thm-btn">Contact Us <span class="icon-right-arrow"></span> </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="before-and-after__inner">-->
    <!--            <div class="before-and-after__img-box">-->
    <!--                <div class="before-after">-->
    <!--                    <div class="before-after-twentytwenty" id="wrinkle-before-after">-->
    <!--                        <img src="{{ asset("/assets/images/resources/before-and-after-img.jpg") }}" alt="">-->
    <!--                        <img src="{{ asset("/assets/images/resources/before-and-after-img-2.jpg") }}" alt="">-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--Before And After End-->

    <!--Contact Two Start -->
    <section class="contact-two">
        <div class="contact-two__bg-color">
            <div class="contact-two__bg-shape"
                style="background-image: url(assets/images/shapes/contact-two-bg-shape.png);"></div>
        </div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <!-- <h6 class="section-title__tagline">Contact Us</h6> -->
               
           
            </div>
            <!-- <p class="contact-two__text text-center">Dental care is essential for maintaining oral health and
                                                                                                                                            overall
                                                                                                                                            well-being.<br> Regular check-ups, cleanings, and treatments </p> -->
            <div class="contact-two__inner">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="contact-two__left">
                             <h3 class="section-title__title title-animation" style="text-align: center;color:black">Contact us
                </h3>
                                 <p style="font-size:20px;padding-top:15px;padding-bottom:15px;text-align:center">
                                    If you have questions; Let’s Talk Complete the form; and let’s talk about how <span style="color: #00bdd6;">CHHC</span> can help.
                                </p>
                            <!-- <h3 class="contact-two__title">Shop our Products</h3> -->
                            @if (session('success'))
                                <div class="alert alert-success mb-3">{{ session('success') }}</div>
                            @endif
                            <form id="contactSubmitForm" class="contact-form-validated contact-two__form" method="POST"
                                action="{{ route('contact.submit') }}" novalidate="novalidate">
                                @csrf
                                <div class="row">

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-two__input-box">
                                            <input type="text" name="first_name" placeholder="First Name"
                                                value="{{ old('first_name') }}" required="">
                                        </div>
                                        @error('first_name') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-two__input-box">
                                            <input type="text" name="last_name" placeholder="Last Name"
                                                value="{{ old('last_name') }}">
                                        </div>
                                        @error('last_name') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-two__input-box">
                                            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}"
                                                required="">
                                        </div>
                                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-two__input-box">
                                            <input type="tel" id="phoneInput" name="phone_display" placeholder="Phone Number"
                                                value="{{ old('phone') }}" required="">
                                            <input type="hidden" name="phone" id="phoneHidden">
                                        </div>
                                        @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-two__input-box">
                                            <input type="text" name="subject" placeholder="Subject"
                                                value="{{ old('subject') }}" required="">
                                        </div>
                                        @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <!-- <div class="col-xl-6 col-lg-6 col-md-6">
                                                                                                                                                                    <div class="contact-two__input-box">
                                                                                                                                                                        <input type="text" name="time" placeholder="Chose A Time">
                                                                                                                                                                    </div>
                                                                                                                                                                </div> -->
                                    <div class="col-xl-12">
                                        <div class="contact-two__input-box text-message-box">
                                            <textarea name="message" placeholder="Message">{{ old('message') }}</textarea>
                                        </div>
                                        @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                                        <div class="contact-two__btn-box">
                                            <button id="contactSubmitBtn" type="submit" class="thm-btn">Submit<span
                                                    class="icon-plus"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="contact-two__right">
                            <div class="contact-two__img">
                                <img src="{{ asset("/assets/images/contactus.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Two End -->

    <!--Blog Four Start -->
    <section class="blog-four">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h6 class="section-title__tagline">Our Latest Blog and news</h6>
                <h3 class="section-title__title title-animation">Check Our Latest Articles<br> & news
                </h3>
            </div>
            <div class="row">
                @foreach($blogs as $index => $blog)
                    @php
                        $animationClass = 'fadeInUp';
                        if ($index == 0)
                            $animationClass = 'fadeInLeft';
                        if ($index == 2)
                            $animationClass = 'fadeInRight';
                        $delay = ($index + 1) * 100 . 'ms';
                    @endphp
                    <div class="col-xl-4 col-lg-4 wow {{ $animationClass }}" data-wow-delay="{{ $delay }}">
                        <div class="blog-four__single">
                            <div class="blog-four__img-box">
                                <div class="blog-four__img">
                                    <img src="{{ str_contains($blog->image1, 'uploads/') ? asset($blog->image1) : asset('storage/' . $blog->image1) }}" alt="{{ $blog->name }}"
                                        style="height:410px">
                                </div>
                                <div class="blog-four__content">
                                    <ul class="blog-four__meta list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-user"></span>
                                            </div>
                                            <p> {{ $blog->writtenby ?? 'By Courtice Home Health Care' }}</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-calender"></span>
                                            </div>
                                            <p>{{ $blog->last_updated ? $blog->last_updated->format('d M, Y') : '' }}</p>
                                        </li>
                                    </ul>
                                    <h3 class="blog-four__title">
                                        <a href="{{ route('blog.details', $blog->blogurl) }}">
                                            {{ $blog->name }}
                                        </a>
                                    </h3>
                                    <div class="blog-four__btn-box">
                                        <a href="{{ route('blog.details', $blog->blogurl) }}" class="thm-btn">
                                            Read More <span class="icon-arrow-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!--Blog Four End -->



    <x-footerThree />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@21.0.8/build/js/intlTelInput.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize intl-tel-input
            var phoneInput = document.getElementById('phoneInput');
            var phoneHidden = document.getElementById('phoneHidden');
            var iti = window.intlTelInput(phoneInput, {
                initialCountry: 'ca',
                preferredCountries: ['ca', 'us', 'gb', 'in', 'au', 'sg'],
                separateDialCode: true,
                utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@21.0.8/build/js/utils.js'
            });

            var form = document.getElementById('contactSubmitForm');
            var submitBtn = document.getElementById('contactSubmitBtn');
            if (!form || !submitBtn) return;

            var defaultHtml = submitBtn.innerHTML;
            form.addEventListener('submit', function (e) {
                // Set full international phone number before submission
                phoneHidden.value = iti.getNumber();
                
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="form-submit-spinner" aria-hidden="true"></span>Submitting...';
            });
        });
    </script>
@endsection