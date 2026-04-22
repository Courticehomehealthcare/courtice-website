
@extends('layouts.layout5')
@section('title', 'Home Five || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/pricing.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/video.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/before-and-after.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>';
            
@endphp
@section('content')

<x-strickyHeaderFour/>

<!--Main Slider Start-->
        <section class="main-slider-three">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                    "delay": 8000
                } 
            }'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="main-slider-three__bg"
                            style="background-image: url(assets/images/backgrounds/slider-3-1.jpg);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <div class="main-slider-three__review-box">
                                            <ul class="list-unstyled main-slider-three__review-img-box">
                                                <li>
                                                    <div class="main-slider-three__review-img">
                                                        <img src="{{ asset("/assets/images/resources/banner-three-review-img-1.jpg") }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main-slider-three__review-img">
                                                        <img src="{{ asset("/assets/images/resources/banner-three-review-img-2.jpg") }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main-slider-three__review-img">
                                                        <img src="{{ asset("/assets/images/resources/banner-three-review-img-3.jpg") }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main-slider-three__review-count-box">
                                                        <div class="main-slider-three__review-count">
                                                            <h3 class="odometer" data-count="3">00</h3>
                                                            <span>k+</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="main-slider-three__review-content-box">
                                                <h4 class="main-slider-three__review-content-title">Happy patients
                                                </h4>
                                            </div>
                                        </div>
                                        <h2 class="main-slider-three__title">Premium dental care <br> for every patient
                                        </h2>
                                        <p class="main-slider-three__text">We are committed to providing exceptional
                                            dental care in a comfortable <br> environment. Our team priorities your
                                            health and comfort.</p>
                                        <div class="main-slider-three__btn-and-video-box">
                                            <a href="{{ url("appoinment") }}" class="thm-btn">Shop our Products<span
                                                    class="icon-arrow-right"></span> </a>
                                            <div class="main-slider-three__video-link">
                                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                    class="video-popup">
                                                    <div class="main-slider-three__video-icon">
                                                        <span class="icon-play"></span>
                                                        <i class="ripple"></i>
                                                    </div>
                                                </a>
                                                <h4 class="main-slider-three__video-title">Watch Now</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-slider-three__bg"
                            style="background-image: url(assets/images/backgrounds/slider-3-2.jpg);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <div class="main-slider-three__review-box">
                                            <ul class="list-unstyled main-slider-three__review-img-box">
                                                <li>
                                                    <div class="main-slider-three__review-img">
                                                        <img src="{{ asset("/assets/images/resources/banner-three-review-img-1.jpg") }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main-slider-three__review-img">
                                                        <img src="{{ asset("/assets/images/resources/banner-three-review-img-2.jpg") }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main-slider-three__review-img">
                                                        <img src="{{ asset("/assets/images/resources/banner-three-review-img-3.jpg") }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main-slider-three__review-count-box">
                                                        <div class="main-slider-three__review-count">
                                                            <h3 class="odometer" data-count="3">00</h3>
                                                            <span>k+</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="main-slider-three__review-content-box">
                                                <h4 class="main-slider-three__review-content-title">Happy patients
                                                </h4>
                                            </div>
                                        </div>
                                        <h2 class="main-slider-three__title">Premium dental care <br> for every patient
                                        </h2>
                                        <p class="main-slider-three__text">We are committed to providing exceptional
                                            dental care in a comfortable <br> environment. Our team priorities your
                                            health and comfort.</p>
                                        <div class="main-slider-three__btn-and-video-box">
                                            <a href="{{ url("appoinment") }}" class="thm-btn">Shop our Products<span
                                                    class="icon-arrow-right"></span> </a>
                                            <div class="main-slider-three__video-link">
                                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                    class="video-popup">
                                                    <div class="main-slider-three__video-icon">
                                                        <span class="icon-play"></span>
                                                        <i class="ripple"></i>
                                                    </div>
                                                </a>
                                                <h4 class="main-slider-three__video-title">Watch Now</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-slider-three__bg"
                            style="background-image: url(assets/images/backgrounds/slider-3-3.jpg);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <div class="main-slider-three__review-box">
                                            <ul class="list-unstyled main-slider-three__review-img-box">
                                                <li>
                                                    <div class="main-slider-three__review-img">
                                                        <img src="{{ asset("/assets/images/resources/banner-three-review-img-1.jpg") }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main-slider-three__review-img">
                                                        <img src="{{ asset("/assets/images/resources/banner-three-review-img-2.jpg") }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main-slider-three__review-img">
                                                        <img src="{{ asset("/assets/images/resources/banner-three-review-img-3.jpg") }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main-slider-three__review-count-box">
                                                        <div class="main-slider-three__review-count">
                                                            <h3 class="odometer" data-count="3">00</h3>
                                                            <span>k+</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="main-slider-three__review-content-box">
                                                <h4 class="main-slider-three__review-content-title">Happy patients
                                                </h4>
                                            </div>
                                        </div>
                                        <h2 class="main-slider-three__title">Premium dental care <br> for every patient
                                        </h2>
                                        <p class="main-slider-three__text">We are committed to providing exceptional
                                            dental care in a comfortable <br> environment. Our team priorities your
                                            health and comfort.</p>
                                        <div class="main-slider-three__btn-and-video-box">
                                            <a href="{{ url("appoinment") }}" class="thm-btn">Shop our Products<span
                                                    class="icon-arrow-right"></span> </a>
                                            <div class="main-slider-three__video-link">
                                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                    class="video-popup">
                                                    <div class="main-slider-three__video-icon">
                                                        <span class="icon-play"></span>
                                                        <i class="ripple"></i>
                                                    </div>
                                                </a>
                                                <h4 class="main-slider-three__video-title">Watch Now</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider-three__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->



        <!--Counter Four Start -->
        <section class="counter-four">
            <div class="container">
                <div class="counter-four__inner">
                    <ul class="list-unstyled counter-four__list">
                        <li>
                            <div class="counter-four__single">
                                <div class="counter-four__count-box">
                                    <h3 class="odometer" data-count="140">00</h3>
                                    <span>+</span>
                                </div>
                                <p class="counter-four__text">In Patients Bed</p>
                            </div>
                        </li>
                        <li>
                            <div class="counter-four__single">
                                <div class="counter-four__count-box">
                                    <h3 class="odometer" data-count="200">00</h3>
                                    <span>+</span>
                                </div>
                                <p class="counter-four__text">Dedicated Staff</p>
                            </div>
                        </li>
                        <li>
                            <div class="counter-four__single">
                                <div class="counter-four__count-box">
                                    <h3 class="odometer" data-count="2">00</h3>
                                    <span>k+</span>
                                </div>
                                <p class="counter-four__text">Research Lab</p>
                            </div>
                        </li>
                        <li>
                            <div class="counter-four__single">
                                <div class="counter-four__count-box">
                                    <h3 class="odometer" data-count="3">00</h3>
                                    <span>k+</span>
                                </div>
                                <p class="counter-four__text">Consultation Rooms</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Counter Four End -->

        <!--About Five Start -->
        <section class="about-five">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-five__left">
                            <div class="section-title-three text-left sec-title-animation animation-style2">
                                <h6 class="section-title-three__tagline">About Us</h6>
                                <h3 class="section-title-three__title title-animation">Get Amazing Experice With Our
                                    Professional
                                </h3>
                            </div>
                            <p class="about-five__text">We are committed to provide 100% quality services and patient
                                satisfaction</p>
                            <div class="about-five__point-box">
                                <ul class="list-unstyled about-five__point">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-cheack"></span>
                                        </div>
                                        <div class="text">
                                            <p>24 Hours Emergency Services</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-cheack"></span>
                                        </div>
                                        <div class="text">
                                            <p>Specialized Departments</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled about-five__point about-five__point--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-cheack"></span>
                                        </div>
                                        <div class="text">
                                            <p>Inpatient/Outpatient Care</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-cheack"></span>
                                        </div>
                                        <div class="text">
                                            <p>Advanced Technology</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="about-five__btn-box">
                                <a href="{{ url("about") }}" class="thm-btn">More About Us <span
                                        class="icon-arrow-right"></span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-five__right wow slideInRight" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="about-five__img-box">
                                <div class="about-five__img">
                                    <img src="{{ asset("/assets/images/resources/about-five-img-1.jpg") }}" alt="">
                                </div>
                                <div class="about-five__doctor-list-box">
                                    <h4 class="about-five__doctor-title">Team Of our <br>
                                        Passionate Doctors</h4>
                                    <ul class="list-unstyled about-five__doctor-list">
                                        <li>
                                            <div class="about-five__doctor-img">
                                                <img src="{{ asset("/assets/images/resources/about-five-doctor-1.jpg") }}" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="about-five__doctor-img">
                                                <img src="{{ asset("/assets/images/resources/about-five-doctor-2.jpg") }}" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="about-five__doctor-img">
                                                <img src="{{ asset("/assets/images/resources/about-five-doctor-3.jpg") }}" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="about-five__doctor-img">
                                                <img src="{{ asset("/assets/images/resources/about-five-doctor-4.jpg") }}" alt="">
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
        <!--About Five End -->

        <!--Services Five Start -->
        <section class="services-five">
            <div class="container">
                <div class="section-title-three text-center sec-title-animation animation-style1">
                    <h6 class="section-title-three__tagline">Our Services</h6>
                    <h3 class="section-title-three__title title-animation">We Provide Our Services <br> all Over the
                        World
                    </h3>
                </div>
                <div class="row">
                    <!--Services Five Single Start -->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="services-five__single">
                            <div class="services-five__count"></div>
                            <div class="services-five__icon">
                                <span class="icon-teeth"></span>
                            </div>
                            <h3 class="services-five__title"><a href="{{ url("vitality-health-solutions") }}">Oral Cancer</a>
                            </h3>
                            <p class="services-five__text">Dental care is essential for maintaining oral health and
                                overall well-being</p>
                            <div class="services-five__btn-box">
                                <a href="{{ url("vitality-health-solutions") }}" class="thm-btn">Explore More <span
                                        class="icon-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--Services Five Single End -->
                    <!--Services Five Single Start -->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-five__single">
                            <div class="services-five__count"></div>
                            <div class="services-five__icon">
                                <span class="icon-teeth-6"></span>
                            </div>
                            <h3 class="services-five__title"><a href="{{ url("wellSpring-wellness-center") }}">Dental
                                    Implants</a></h3>
                            <p class="services-five__text">Dental care is essential for maintaining oral health and
                                overall well-being</p>
                            <div class="services-five__btn-box">
                                <a href="{{ url("wellSpring-wellness-center") }}" class="thm-btn">Explore More <span
                                        class="icon-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--Services Five Single End -->
                    <!--Services Five Single Start -->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                        <div class="services-five__single">
                            <div class="services-five__count"></div>
                            <div class="services-five__icon">
                                <span class="icon-teeth-5"></span>
                            </div>
                            <h3 class="services-five__title"><a
                                    href="{{ url("harmony-family-health-medical") }}">Orthodontics</a></h3>
                            <p class="services-five__text">Dental care is essential for maintaining oral health and
                                overall well-being</p>
                            <div class="services-five__btn-box">
                                <a href="{{ url("harmony-family-health-medical") }}" class="thm-btn">Explore More <span
                                        class="icon-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--Services Five Single End -->
                </div>
            </div>
        </section>
        <!--Services Five End -->

        <!--Why Choose Three Start -->
        <section class="why-choose-three">
            <div class="why-choose-three__bg"
                style="background-image: url(assets/images/backgrounds/why-choose-three-bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="why-choose-three__left">
                            <div class="section-title-three text-left sec-title-animation animation-style2">
                                <h6 class="section-title-three__tagline">Why Chose Us</h6>
                                <h3 class="section-title-three__title title-animation">Why Choose Us for Your Dental
                                    Treatment
                                </h3>
                            </div>
                            <p class="why-choose-three__text">Dental care is essential for maintaining oral health and
                                overall well-being. Regular and check-ups, cleanings, and treatments</p>
                            <ul class="list-unstyled why-choose-three__point">
                                <li>
                                    <div class="why-choose-three__point-icon">
                                        <span class="icon-teeth-12"></span>
                                    </div>
                                    <div class="why-choose-three__point-content">
                                        <h4 class="why-choose-three__point-title">Expert Physician</h4>
                                        <p class="why-choose-three__point-text">Dental care is essential for maintaining
                                            oral <br> health and overall well-being</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="why-choose-three__point-icon">
                                        <span class="icon-teeth-5"></span>
                                    </div>
                                    <div class="why-choose-three__point-content">
                                        <h4 class="why-choose-three__point-title">Budget Friendly</h4>
                                        <p class="why-choose-three__point-text">Dental care is essential for maintaining
                                            oral <br> health and overall well-being</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="why-choose-three__point-icon">
                                        <span class="icon-toothache"></span>
                                    </div>
                                    <div class="why-choose-three__point-content">
                                        <h4 class="why-choose-three__point-title">Trusted Partner</h4>
                                        <p class="why-choose-three__point-text">Dental care is essential for maintaining
                                            oral <br> health and overall well-being</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="why-choose-three__btn-box">
                                <a href="{{ url("contact") }}" class="thm-btn">Book Appionment <span
                                        class="icon-arrow-right"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose Three End -->

        <!--Pricing One Start -->
        <section class="pricing-one">
            <div class="container">
                <div class="section-title-three text-center sec-title-animation animation-style1">
                    <h6 class="section-title-three__tagline">Pricing Plan</h6>
                    <h3 class="section-title-three__title title-animation">Regular Health Checkup <br> Packages for you
                    </h3>
                </div>
                <div class="row">
                    <!--Pricing One Single Start -->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="pricing-one__single">
                            <h3 class="pricing-one__price-pack-name">Regular Plan</h3>
                            <div class="pricing-one__img">
                                <img src="{{ asset("/assets/images/resources/pricing-1-1.jpg") }}" alt="">
                            </div>
                            <div class="pricing-one__price-box">
                                <h2>$45 <span>Per Month</span></h2>
                            </div>
                            <ul class="list-unstyled pricing-one__point">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Plaque and Tartar Removal</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Plaque and Tartar Removal</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Plaque and Tartar Removal</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="pricing-one__btn-box">
                                <a href="{{ url("contact") }}" class="thm-btn">Appiontment Now <span
                                        class="icon-arrow-right"></span> </a>
                            </div>
                        </div>
                    </div>
                    <!--Pricing One Single End -->
                    <!--Pricing One Single Start -->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="pricing-one__single">
                            <h3 class="pricing-one__price-pack-name">Standard Plan</h3>
                            <div class="pricing-one__img">
                                <img src="{{ asset("/assets/images/resources/pricing-1-2.jpg") }}" alt="">
                            </div>
                            <div class="pricing-one__price-box">
                                <h2>$25 <span>Per Month</span></h2>
                            </div>
                            <ul class="list-unstyled pricing-one__point">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Tooth Sensitivity</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Cleaning and Polishing</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Cancer Screening</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="pricing-one__btn-box">
                                <a href="{{ url("contact") }}" class="thm-btn">Appiontment Now <span
                                        class="icon-arrow-right"></span> </a>
                            </div>
                        </div>
                    </div>
                    <!--Pricing One Single End -->
                    <!--Pricing One Single Start -->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                        <div class="pricing-one__single">
                            <h3 class="pricing-one__price-pack-name">Premium Plan</h3>
                            <div class="pricing-one__img">
                                <img src="{{ asset("/assets/images/resources/pricing-1-3.jpg") }}" alt="">
                            </div>
                            <div class="pricing-one__price-box">
                                <h2>$55 <span>Per Month</span></h2>
                            </div>
                            <ul class="list-unstyled pricing-one__point">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Gum Bleeding or Swelling</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Cracked or Broken Teeth</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Check for Bad Breath</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="pricing-one__btn-box">
                                <a href="{{ url("contact") }}" class="thm-btn">Appiontment Now <span
                                        class="icon-arrow-right"></span> </a>
                            </div>
                        </div>
                    </div>
                    <!--Pricing One Single End -->
                </div>
            </div>
        </section>
        <!--Pricing One End -->

        <!--Project Four Start -->
        <section class="project-four">
            <div class="container">
                <div class="project-four__top">
                    <div class="section-title-three text-left sec-title-animation animation-style1">
                        <h6 class="section-title-three__tagline">our case studies</h6>
                        <h3 class="section-title-three__title title-animation">Our Recent medical camp<br> and Success
                            Stories
                        </h3>
                    </div>
                    <p class="project-four__text">Dental care is essential for maintaining oral health and overall
                        well<br>-being. Regular and check-ups, cleanings, and treatments Dental care is<br> essential
                        for
                        maintaining oral health and overall well-being. </p>
                </div>
                <div class="row">
                    <!--Project four Single Start-->
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="project-four__single">
                            <div class="project-four__img-box">
                                <div class="project-four__img">
                                    <img src="{{ asset("/assets/images/project/project-4-1.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="project-four__content">
                                <div class="project-four__title-box">
                                    <p class="project-four__sub-title">Dentistry, Happy</p>
                                    <h3 class="project-four__title"><a href="{{ url("project-details") }}">Teeth Family Elite
                                            Dental Solutions</a></h3>
                                </div>
                                <div class="project-four__arrow">
                                    <a href="{{ url("project-details") }}"><span class="icon-up-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project four Single End-->
                    <!--Project four Single Start-->
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="project-four__single">
                            <div class="project-four__img-box">
                                <div class="project-four__img">
                                    <img src="{{ asset("/assets/images/project/project-4-2.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="project-four__content">
                                <div class="project-four__title-box">
                                    <p class="project-four__sub-title">White Pearl Dentistry</p>
                                    <h3 class="project-four__title"><a href="{{ url("project-details") }}">Happy Teeth Family
                                            Dentistry</a></h3>
                                </div>
                                <div class="project-four__arrow">
                                    <a href="{{ url("project-details") }}"><span class="icon-up-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project four Single End-->
                    <!--Project four Single Start-->
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="project-four__single">
                            <div class="project-four__img-box">
                                <div class="project-four__img">
                                    <img src="{{ asset("/assets/images/project/project-4-3.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="project-four__content">
                                <div class="project-four__title-box">
                                    <p class="project-four__sub-title">Our Services at </p>
                                    <h3 class="project-four__title"><a href="{{ url("project-details") }}">Happy Teeth Family
                                            Dental Solutions</a></h3>
                                </div>
                                <div class="project-four__arrow">
                                    <a href="{{ url("project-details") }}"><span class="icon-up-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project four Single End-->
                    <!--Project four Single Start-->
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="project-four__single">
                            <div class="project-four__img-box">
                                <div class="project-four__img">
                                    <img src="{{ asset("/assets/images/project/project-4-4.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="project-four__content">
                                <div class="project-four__title-box">
                                    <p class="project-four__sub-title">Dental Care </p>
                                    <h3 class="project-four__title"><a href="{{ url("project-details") }}">Services at White
                                            Pearl Dentistry</a></h3>
                                </div>
                                <div class="project-four__arrow">
                                    <a href="{{ url("project-details") }}"><span class="icon-up-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project four Single End-->
                </div>
                <div class="project-four__btn-box">
                    <a href="{{ url("project") }}" class="thm-btn">Explore More<span class="icon-arrow-right"></span> </a>
                </div>
            </div>
        </section>
        <!--Project Four End -->

        <!--Team Five Start -->
        <section class="team-five">
            <div class="container">
                <div class="section-title-three text-center sec-title-animation animation-style1">
                    <h6 class="section-title-three__tagline">Our Team</h6>
                    <h3 class="section-title-three__title title-animation">Our Experienced & caring <br> dental team
                    </h3>
                </div>
                <div class="row">
                    <!--Team Five Single Start -->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="team-five__single">
                            <div class="team-five__img-box">
                                <div class="team-five__img">
                                    <img src="{{ asset("/assets/images/team/team-5-1.jpg") }}" alt="">
                                </div>
                                <div class="team-five__shape-1"
                                    style="background-image: url(assets/images/shapes/team-five-shape-1.png);"></div>
                            </div>
                            <div class="team-five__social">
                                <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                            </div>
                            <div class="team-five__content">
                                <h3 class="team-five__name"><a href="{{ url("doctor-details") }}">Dr.Darlene Robertson</a></h3>
                                <p class="team-five__sub-title">Nursing Assistant</p>
                            </div>
                            <div class="team-five__arrow">
                                <a href="{{ url("doctor-details") }}"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Team Five Single End -->
                    <!--Team Five Single Start -->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-five__single">
                            <div class="team-five__img-box">
                                <div class="team-five__img">
                                    <img src="{{ asset("/assets/images/team/team-5-2.jpg") }}" alt="">
                                </div>
                                <div class="team-five__shape-1"
                                    style="background-image: url(assets/images/shapes/team-five-shape-1.png);"></div>
                            </div>
                            <div class="team-five__social">
                                <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                            </div>
                            <div class="team-five__content">
                                <h3 class="team-five__name"><a href="{{ url("doctor-details") }}">Dr.Dianne Russell</a></h3>
                                <p class="team-five__sub-title">Dental Spalicalist</p>
                            </div>
                            <div class="team-five__arrow">
                                <a href="{{ url("doctor-details") }}"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Team Five Single End -->
                    <!--Team Five Single Start -->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                        <div class="team-five__single">
                            <div class="team-five__img-box">
                                <div class="team-five__img">
                                    <img src="{{ asset("/assets/images/team/team-5-1.jpg") }}" alt="">
                                </div>
                                <div class="team-five__shape-1"
                                    style="background-image: url(assets/images/shapes/team-five-shape-1.png);"></div>
                            </div>
                            <div class="team-five__social">
                                <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                            </div>
                            <div class="team-five__content">
                                <h3 class="team-five__name"><a href="{{ url("doctor-details") }}">Dr.Leslie Alexander</a></h3>
                                <p class="team-five__sub-title">Medical Assistant</p>
                            </div>
                            <div class="team-five__arrow">
                                <a href="{{ url("doctor-details") }}"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Team Five Single End -->
                </div>
            </div>
        </section>
        <!--Team Five End -->

        <!--Feature Two Start -->
        <section class="feature-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="feature-two__single feature-two__single-1">
                            <div class="feature-two__single-one-img-1">
                                <img src="{{ asset("/assets/images/resources/feature-two-single-one-img-1.png") }}" alt="">
                            </div>
                            <h3 class="feature-two__title">A Bright Smile Can Make Your Life Simple</h3>
                            <p class="feature-two__text">Dental care is essential for maintaining oral<br> health
                                and
                                preventing dental issues. Regular<br> check-ups, cleanings, and treatments help<br>
                                ensure a
                                healthy smile. Services include exams,<br> X-rays, cleanings, fillings, crown</p>
                            <div class="feature-two__btn-box">
                                <a href="{{ url("contact") }}" class="thm-btn">Contact Us<span class="icon-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="feature-two__single">
                            <div class="feature-two__img">
                                <img src="{{ asset("/assets/images/resources/feature-two-img-1.jpg") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="feature-two__single">
                            <div class="feature-two__img">
                                <img src="{{ asset("/assets/images/resources/feature-two-img-2.jpg") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="feature-two__single feature-two__single-2">
                            <div class="feature-two__single-two-img-1">
                                <img src="{{ asset("/assets/images/resources/feature-two-single-two-img-1.png") }}" alt="">
                            </div>
                            <div class="feature-two__single-two-icon">
                                <span class="icon-teeth"></span>
                            </div>
                            <h3 class="feature-two__single-two-title">Gentle Touch Dental Care</h3>
                            <p class="feature-two__single-two-text">Dental care is essential for maintaining oral<br>
                                health
                                and overall well-being</p>
                            <div class="feature-two__btn-box">
                                <a href="{{ url("contact") }}" class="thm-btn">Contact Us<span class="icon-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Feature Two End -->

        <!--Testimonial Five Start -->
        <section class="testimonial-five">
            <div class="container">
                <div class="section-title-three text-center sec-title-animation animation-style2">
                    <h6 class="section-title-three__tagline">our Testimonials</h6>
                    <h3 class="section-title-three__title title-animation">What Our Clients Say
                    </h3>
                </div>
                <div class="testimonial-five__carousel owl-theme owl-carousel">
                    <!--Testimonial Four Single Start-->
                    <div class="item">
                        <div class="testimonial-five__single">
                            <div class="testimonial-five__quote">
                                <span class="icon-quote-2"></span>
                            </div>
                            <p class="testimonial-five__text">Dental care focuses on maintaining oral health through
                                practices such as the regular check-a ups, cleanings, and treatments </p>
                            <div class="testimonial-five__client-info-and-ratting-box">
                                <div class="testimonial-five__Client-box">
                                    <h3><a href="{{ url("testimonials") }}">Floyd Miles</a></h3>
                                    <p>Marketing Coordinator</p>
                                </div>
                                <div class="testimonial-five__ratting">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Four Single End-->
                    <!--Testimonial Four Single Start-->
                    <div class="item">
                        <div class="testimonial-five__single">
                            <div class="testimonial-five__quote">
                                <span class="icon-quote-2"></span>
                            </div>
                            <p class="testimonial-five__text">Dental care focuses on maintaining oral health through
                                practices such as the regular check-a ups, cleanings, and treatments </p>
                            <div class="testimonial-five__client-info-and-ratting-box">
                                <div class="testimonial-five__Client-box">
                                    <h3><a href="{{ url("testimonials") }}">John Dwo</a></h3>
                                    <p>Marketing Coordinator</p>
                                </div>
                                <div class="testimonial-five__ratting">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Four Single End-->
                    <!--Testimonial Four Single Start-->
                    <div class="item">
                        <div class="testimonial-five__single">
                            <div class="testimonial-five__quote">
                                <span class="icon-quote-2"></span>
                            </div>
                            <p class="testimonial-five__text">Dental care focuses on maintaining oral health through
                                practices such as the regular check-a ups, cleanings, and treatments </p>
                            <div class="testimonial-five__client-info-and-ratting-box">
                                <div class="testimonial-five__Client-box">
                                    <h3><a href="{{ url("testimonials") }}">Ruksana Miles</a></h3>
                                    <p>Marketing Coordinator</p>
                                </div>
                                <div class="testimonial-five__ratting">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Four Single End-->
                </div>
            </div>
        </section>
        <!--Testimonial Five Start -->

        <!--Appiontment Three Start -->
        <section class="appiontment-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-6">
                        <div class="appiontment-three__left">
                            <div class="appiontment-three__img">
                                <img src="{{ asset("/assets/images/resources/appiontment-three-img-1.jpg") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="appiontment-three__right wow slideInRight" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <h3 class="appiontment-three__title text-center">Shop our Products Now</h3>
                            <form class="contact-form-validated appiontment-three__form" method="POST" action="assets/inc/sendemail.php" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="appiontment-three__input-box">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="appiontment-three__input-box">
                                            <input type="email" name="email" placeholder="E-mail" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="appiontment-three__input-box">
                                            <input type="text" name="number" placeholder="Your Number" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="appiontment-three__input-box">
                                            <input type="text" placeholder="Date" name="date" id="datepicker">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="appiontment-three__input-box text-message-box">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="appiontment-three__btn-box">
                                            <button type="submit" class="thm-btn">Get Appointment <span
                                                    class="icon-arrow-right"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Appiontment Three End -->

        <!--Blog Five Start -->
        <section class="blog-five">
            <div class="container">
                <div class="section-title-three text-center sec-title-animation animation-style2">
                    <h6 class="section-title-three__tagline">Our Blog and news</h6>
                    <h3 class="section-title-three__title title-animation">Latest dental news <br>and insights
                    </h3>
                </div>
                <div class="row">
                    <!--Blog Five Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="blog-five__single">
                            <div class="blog-five__img-box">
                                <div class="blog-five__img">
                                    <img src="{{ asset("/assets/images/blog/blog-5-1.jpg") }}" alt="">
                                    <div class="blog-five__plus">
                                        <a href="{{ url("blog-details") }}"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-five__content">
                                <ul class="blog-five__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-user"></span>
                                        </div>
                                        <p>By admin</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-calender"></span>
                                        </div>
                                        <p>20, june 2024</p>
                                    </li>
                                </ul>
                                <h3 class="blog-five__title"><a href="{{ url("blog-details") }}">Fresh Breath Dental Spa</a>
                                </h3>
                                <p class="blog-five__text">Dental care is essential for maintaining health and overall
                                    well-being Regular </p>
                                <div class="blog-five__read-more">
                                    <a href="{{ url("blog-details") }}">Read More <span class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Five Single End-->
                    <!--Blog Five Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-five__single">
                            <div class="blog-five__img-box">
                                <div class="blog-five__img">
                                    <img src="{{ asset("/assets/images/blog/blog-5-2.jpg") }}" alt="">
                                    <div class="blog-five__plus">
                                        <a href="{{ url("blog-details") }}"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-five__content">
                                <ul class="blog-five__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-user"></span>
                                        </div>
                                        <p>By admin</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-calender"></span>
                                        </div>
                                        <p>20, june 2024</p>
                                    </li>
                                </ul>
                                <h3 class="blog-five__title"><a href="{{ url("blog-details") }}">Gentle Touch Dental Care</a>
                                </h3>
                                <p class="blog-five__text">Dental care is essential for maintaining health and overall
                                    well-being Regular </p>
                                <div class="blog-five__read-more">
                                    <a href="{{ url("blog-details") }}">Read More <span class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Five Single End-->
                    <!--Blog Five Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                        <div class="blog-five__single">
                            <div class="blog-five__img-box">
                                <div class="blog-five__img">
                                    <img src="{{ asset("/assets/images/blog/blog-5-3.jpg") }}" alt="">
                                    <div class="blog-five__plus">
                                        <a href="{{ url("blog-details") }}"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-five__content">
                                <ul class="blog-five__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-user"></span>
                                        </div>
                                        <p>By admin</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-calender"></span>
                                        </div>
                                        <p>20, june 2024</p>
                                    </li>
                                </ul>
                                <h3 class="blog-five__title"><a href="{{ url("blog-details") }}">White Pearl Dentistry teeth</a>
                                </h3>
                                <p class="blog-five__text">Dental care is essential for maintaining health and overall
                                    well-being Regular </p>
                                <div class="blog-five__read-more">
                                    <a href="{{ url("blog-details") }}">Read More <span class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Five Single End-->
                </div>
            </div>
        </section>
        <!--Blog Five End -->

       
<x-footerThree/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection