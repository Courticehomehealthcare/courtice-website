
@extends('layouts.layout3')
@section('title', 'Home Three || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>';
            
@endphp
@section('content')

<x-strickyHeader/>


        <!--Main Slider Start-->
        <section class="main-slider-two">
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
                        <div class="main-slider-two__bg"
                            style="background-image: url(assets/images/backgrounds/slider-2-1.jpg);"></div>
                        <div class="main-slider-two__bg-overly"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <p class="main-slider-two__sub-title">welcome to our clinic</p>
                                        <h2 class="main-slider-two__title">your trusted <br> partner <span>in oral <br>
                                                health</span>
                                        </h2>
                                        <div class="main-slider-two__right-content">
                                            <div class="main-slider-two__counter-box">
                                                <ul class="list-unstyled main-slider-two__counter">
                                                    <li>
                                                        <div class="main-slider-two__counter-single">
                                                            <div class="main-slider-two__counter-count">
                                                                <h3 class="odometer" data-count="30">00</h3>
                                                                <span>+</span>
                                                            </div>
                                                            <p class="main-slider-two__counter-text">Years of Experience
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="main-slider-two__counter-single">
                                                            <div class="main-slider-two__counter-count">
                                                                <h3 class="odometer" data-count="350">00</h3>
                                                                <span>+</span>
                                                            </div>
                                                            <p class="main-slider-two__counter-text"> In Patients Bed
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="main-slider-two__text-box">
                                                <p>As a dental hospital we are providing oral care services <br> and
                                                    specialised treatments by skilled professionals.</p>
                                            </div>
                                            <div class="main-slider-two__thm-btn">
                                                <a href="{{ url("appoinment") }}" class="thm-btn">Shop our Products <span
                                                        class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__bottom">
                                        <ul class="list-unstyled main-slider-two__points">
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>24 Hours Service</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Online Reporting</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Online Appoinment</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Expert Physicians</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-slider-two__bg"
                            style="background-image: url(assets/images/backgrounds/slider-2-2.jpg);"></div>
                        <div class="main-slider-two__bg-overly"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <p class="main-slider-two__sub-title">welcome to our clinic</p>
                                        <h2 class="main-slider-two__title">your trusted <br> partner <span>in oral <br>
                                                health</span>
                                        </h2>
                                        <div class="main-slider-two__right-content">
                                            <div class="main-slider-two__counter-box">
                                                <ul class="list-unstyled main-slider-two__counter">
                                                    <li>
                                                        <div class="main-slider-two__counter-single">
                                                            <div class="main-slider-two__counter-count">
                                                                <h3 class="odometer" data-count="30">00</h3>
                                                                <span>+</span>
                                                            </div>
                                                            <p class="main-slider-two__counter-text">Years of Experience
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="main-slider-two__counter-single">
                                                            <div class="main-slider-two__counter-count">
                                                                <h3 class="odometer" data-count="350">00</h3>
                                                                <span>+</span>
                                                            </div>
                                                            <p class="main-slider-two__counter-text"> In Patients Bed
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="main-slider-two__text-box">
                                                <p>As a dental hospital we are providing oral care services <br> and
                                                    specialised treatments by skilled professionals.</p>
                                            </div>
                                            <div class="main-slider-two__thm-btn">
                                                <a href="{{ url("appoinment") }}" class="thm-btn">Shop our Products <span
                                                        class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__bottom">
                                        <ul class="list-unstyled main-slider-two__points">
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>24 Hours Service</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Online Reporting</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Online Appoinment</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Expert Physicians</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-slider-two__bg"
                            style="background-image: url(assets/images/backgrounds/slider-2-3.jpg);"></div>
                        <div class="main-slider-two__bg-overly"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <p class="main-slider-two__sub-title">welcome to our clinic</p>
                                        <h2 class="main-slider-two__title">your trusted <br> partner <span>in oral <br>
                                                health</span>
                                        </h2>
                                        <div class="main-slider-two__right-content">
                                            <div class="main-slider-two__counter-box">
                                                <ul class="list-unstyled main-slider-two__counter">
                                                    <li>
                                                        <div class="main-slider-two__counter-single">
                                                            <div class="main-slider-two__counter-count">
                                                                <h3 class="odometer" data-count="30">00</h3>
                                                                <span>+</span>
                                                            </div>
                                                            <p class="main-slider-two__counter-text">Years of Experience
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="main-slider-two__counter-single">
                                                            <div class="main-slider-two__counter-count">
                                                                <h3 class="odometer" data-count="350">00</h3>
                                                                <span>+</span>
                                                            </div>
                                                            <p class="main-slider-two__counter-text"> In Patients Bed
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="main-slider-two__text-box">
                                                <p>As a dental hospital we are providing oral care services <br> and
                                                    specialised treatments by skilled professionals.</p>
                                            </div>
                                            <div class="main-slider-two__thm-btn">
                                                <a href="{{ url("appoinment") }}" class="thm-btn">Shop our Products <span
                                                        class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__bottom">
                                        <ul class="list-unstyled main-slider-two__points">
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>24 Hours Service</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Online Reporting</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Online Appoinment</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Expert Physicians</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="swiper-pagination" id="main-slider-pagination"></div>
                <!-- If we need navigation buttons -->

            </div>
        </section>
        <!--Main Slider End-->



        <!--Services Three Start -->
        <section class="services-three">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <h6 class="section-title__tagline">Our Services</h6>
                    <h3 class="section-title__title title-animation">Our Departments
                    </h3>
                </div>
                <div class="row">
                    <!--Services Three Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-three__single">
                            <div class="services-three__icon">
                                <span class="icon-teeth"></span>
                            </div>
                            <h3 class="services-three__title"><a href="{{ url("vitality-health-solutions") }}">Teeth
                                    Whitening</a></h3>
                            <p class="services-three__text">Dental care is essential for maint aining oral health and
                                overall</p>
                            <a href="{{ url("vitality-health-solutions") }}" class="services-three__read-more">View More <span
                                    class="icon-right-arrow"></span> </a>
                        </div>
                    </div>
                    <!--Services Three Single End -->
                    <!--Services Three Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-three__single">
                            <div class="services-three__icon">
                                <span class="icon-teeth-2"></span>
                            </div>
                            <h3 class="services-three__title"><a href="{{ url("wellSpring-wellness-center") }}">Dental
                                    Surgery</a></h3>
                            <p class="services-three__text">Dental care is essential for maint aining oral health and
                                overall</p>
                            <a href="{{ url("wellSpring-wellness-center") }}" class="services-three__read-more">View More <span
                                    class="icon-right-arrow"></span> </a>
                        </div>
                    </div>
                    <!--Services Three Single End -->
                    <!--Services Three Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-three__single">
                            <div class="services-three__icon">
                                <span class="icon-teeth-3"></span>
                            </div>
                            <h3 class="services-three__title"><a href="{{ url("harmony-family-health-medical") }}">Oral
                                    Cancer</a></h3>
                            <p class="services-three__text">Dental care is essential for maint aining oral health and
                                overall</p>
                            <a href="{{ url("harmony-family-health-medical") }}" class="services-three__read-more">View More
                                <span class="icon-right-arrow"></span> </a>
                        </div>
                    </div>
                    <!--Services Three Single End -->
                    <!--Services Three Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-three__single">
                            <div class="services-three__icon">
                                <span class="icon-teeth-4"></span>
                            </div>
                            <h3 class="services-three__title"><a href="{{ url("evergreen-medical-center") }}">Root Canal</a>
                            </h3>
                            <p class="services-three__text">Dental care is essential for maint aining oral health and
                                overall</p>
                            <a href="{{ url("evergreen-medical-center") }}" class="services-three__read-more">View More <span
                                    class="icon-right-arrow"></span> </a>
                        </div>
                    </div>
                    <!--Services Three Single End -->
                    <!--Services Three Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="services-three__single">
                            <div class="services-three__icon">
                                <span class="icon-teeth-5"></span>
                            </div>
                            <h3 class="services-three__title"><a href="{{ url("pure-life-health-services") }}">Orthodontics</a>
                            </h3>
                            <p class="services-three__text">Dental care is essential for maint aining oral health and
                                overall</p>
                            <a href="{{ url("pure-life-health-services") }}" class="services-three__read-more">View More <span
                                    class="icon-right-arrow"></span> </a>
                        </div>
                    </div>
                    <!--Services Three Single End -->
                    <!--Services Three Single Start -->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="services-three__single">
                            <div class="services-three__icon">
                                <span class="icon-teeth-6"></span>
                            </div>
                            <h3 class="services-three__title"><a href="{{ url("vitality-health-solutions") }}">Metal Braces</a>
                            </h3>
                            <p class="services-three__text">Dental care is essential for maint aining oral health and
                                overall</p>
                            <a href="{{ url("vitality-health-solutions") }}" class="services-three__read-more">View More <span
                                    class="icon-right-arrow"></span> </a>
                        </div>
                    </div>
                    <!--Services Three Single End -->
                    <!--Services Three Single Start -->
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                        <div class="services-three__get-a-quote">
                            <div class="services-three__get-a-quote-bg"
                                style="background-image: url(assets/images/backgrounds/services-three-get-a-quote-bg.jpg);">
                            </div>
                            <p class="services-three__get-a-quote-sub-title">Get A Quote</p>
                            <h4 class="services-three__get-a-quote-title">Book an Appointment</h4>
                            <div class="services-three__thm-btn">
                                <a href="{{ url("appoinment") }}" class="thm-btn">Get Appointment</a>
                            </div>
                        </div>
                    </div>
                    <!--Services Three Single End -->
                </div>
            </div>
        </section>
        <!--Services Three End -->

        <!--About Three Start -->
        <section class="about-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-three__left wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="about-three__img-box">
                                <div class="about-three__img">
                                    <img src="{{ asset("/assets/images/resources/about-three-img-1.jpg") }}" alt="">
                                </div>
                                <div class="about-three__img-two">
                                    <img src="{{ asset("/assets/images/resources/about-three-img-2.jpg") }}" alt="">
                                </div>
                                <div class="about-three__trusted-patient-box">
                                    <ul class="list-unstyled about-three__trusted-patient-review-img-box">
                                        <li>
                                            <div class="about-three__trusted-patient-review-img">
                                                <img src="{{ asset("/assets/images/resources/about-three-trusted-patient-img-1.jpg") }}"
                                                    alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="about-three__trusted-patient-img">
                                                <img src="{{ asset("/assets/images/resources/about-three-trusted-patient-img-2.jpg") }}"
                                                    alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="about-three__trusted-patient-img">
                                                <img src="{{ asset("/assets/images/resources/about-three-trusted-patient-img-3.jpg") }}"
                                                    alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="about-three__trusted-patient-img">
                                                <img src="{{ asset("/assets/images/resources/about-three-trusted-patient-img-4.jpg") }}"
                                                    alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="about-three__trusted-patient-plus-box">
                                                <p>+</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="about-three__trusted-patient-text">Trusted By Over <span class="odometer"
                                            data-count="4000">00</span>+ <br> Patient worldwide
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-three__right">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <h6 class="section-title__tagline">About Us</h6>
                                <h3 class="section-title__title title-animation">Get Amazing Experice Our Professional
                                </h3>
                            </div>
                            <div class="about-three__text-box">
                                <p class="about-three__text">We are committed to providing compassionate, high-quality
                                    dental care in a comfortable and welcoming environment. We always ensures your
                                    smile.
                                </p>
                            </div>
                            <ul class="list-unstyled about-three__point-one">
                                <li>
                                    <div class="icon">
                                        <span class="icon-teeth-7"></span>
                                    </div>
                                    <div class="text">
                                        <p>Expert Technician</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-teeth-3"></span>
                                    </div>
                                    <div class="text">
                                        <p>Modern Lab Facilities</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="about-three__point-two-and-awards-box">
                                <ul class="list-unstyled about-three__point-two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-cheack"></span>
                                        </div>
                                        <div class="text">
                                            <p>Specialized Departments</p>
                                        </div>
                                    </li>
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
                                <div class="about-three__awards-box">
                                    <div class="about-three__awards-icon">
                                        <img src="{{ asset("/assets/images/icon/awards-icon-1.png") }}" alt="">
                                    </div>
                                    <div class="about-three__awards-content">
                                        <h4>we are <br> <span>WHO</span> certified <br> hospital</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="about-three__btn-and-call-box">
                                <div class="about-three__btn-box">
                                    <a href="{{ url("about") }}" class="thm-btn">More About Us <span
                                            class="icon-arrow-right"></span> </a>
                                </div>
                                <div class="about-three__call">
                                    <div class="about-three__call-icon">
                                        <span class="icon-call"></span>
                                    </div>
                                    <div class="about-three__call-number">
                                        <p>Need help?</p>
                                        <h5><a href="{{ url("tel:8085550111") }}">(808) 555-0111</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Three End -->


        <!--Counter Two Start -->
        <section class="counter-two">
            <div class="container">
                <div class="counter-two__inner">
                    <ul class="counter-two__count-list list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="icon-teeth-3"></span>
                            </div>
                            <div class="content">
                                <div class="counter-two__count-box">
                                    <h3 class="odometer" data-count="140">00</h3>
                                    <span>+</span>
                                </div>
                                <p class="counter-two__count-text">Consultation Room</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-teeth"></span>
                            </div>
                            <div class="content">
                                <div class="counter-two__count-box">
                                    <h3 class="odometer" data-count="2">00</h3>
                                    <span>K</span>
                                    <span>+</span>
                                </div>
                                <p class="counter-two__count-text">In Patients Bed</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-teeth-4"></span>
                            </div>
                            <div class="content">
                                <div class="counter-two__count-box">
                                    <h3 class="odometer" data-count="3">00</h3>
                                    <span>K</span>
                                    <span>+</span>
                                </div>
                                <p class="counter-two__count-text">Dedicated Staff</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-teeth-9"></span>
                            </div>
                            <div class="content">
                                <div class="counter-two__count-box">
                                    <h3 class="odometer" data-count="40">00</h3>
                                    <span>+</span>
                                </div>
                                <p class="counter-two__count-text">Research Lab </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Counter Two End -->

        <!--Team Three Start -->
        <section class="team-three">
            <div class="team-three__shape-bg"
                style="background-image: url(assets/images/shapes/team-three-shape-bg.png);"></div>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <h6 class="section-title__tagline">Our Doctors</h6>
                    <h3 class="section-title__title title-animation">Meet With Our Dental <br>Professionals
                    </h3>
                </div>
                <div class="row">
                    <!--Team Three Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="team-three__single">
                            <div class="team-three__img-box">
                                <div class="team-three__img">
                                    <img src="{{ asset("/assets/images/team/team-3-1.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="team-three__content">
                                <div class="team-three__title-box">
                                    <h3 class="team-three__title"><a href="{{ url("doctor-details") }}">Dr.Darlene Robertson</a>
                                    </h3>
                                    <p class="team-three__sub-title">Nursing Assistant</p>
                                </div>
                                <div class="team-three__arrow-and-social">
                                    <div class="team-three__arrow">
                                        <span class="icon-arrow-right"></span>
                                    </div>
                                    <div class="team-three__social">
                                        <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Three Single End-->
                    <!--Team Three Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-three__single">
                            <div class="team-three__img-box">
                                <div class="team-three__img">
                                    <img src="{{ asset("/assets/images/team/team-3-2.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="team-three__content">
                                <div class="team-three__title-box">
                                    <h3 class="team-three__title"><a href="{{ url("doctor-details") }}">Dr.Dianne Russell</a>
                                    </h3>
                                    <p class="team-three__sub-title">Dental Spalicalist</p>
                                </div>
                                <div class="team-three__arrow-and-social">
                                    <div class="team-three__arrow">
                                        <span class="icon-arrow-right"></span>
                                    </div>
                                    <div class="team-three__social">
                                        <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Three Single End-->
                    <!--Team Three Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                        <div class="team-three__single">
                            <div class="team-three__img-box">
                                <div class="team-three__img">
                                    <img src="{{ asset("/assets/images/team/team-3-3.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="team-three__content">
                                <div class="team-three__title-box">
                                    <h3 class="team-three__title"><a href="{{ url("doctor-details") }}">Dr.Leslie Alexander</a>
                                    </h3>
                                    <p class="team-three__sub-title">Medical Assistant</p>
                                </div>
                                <div class="team-three__arrow-and-social">
                                    <div class="team-three__arrow">
                                        <span class="icon-arrow-right"></span>
                                    </div>
                                    <div class="team-three__social">
                                        <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Three Single End-->
                </div>
            </div>
        </section>
        <!--Team Three End -->

        <!--Why Choose Two Start -->
        <section class="why-choose-two">
            <div class="container">
                <div class="why-choose-two__top">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7">
                            <div class="why-choose-two__top-left">
                                <div class="section-title text-left sec-title-animation animation-style2">
                                    <h6 class="section-title__tagline">our speciality</h6>
                                    <h3 class="section-title__title title-animation">Why Choose Us for an<br> Your
                                        Dental Care
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="why-choose-two__top-right">
                                <p class="why-choose-two__top-text">We specialize in cosmetic, restorative, and
                                    preventive dentistry, delivering personalised treatments for healthier.</p>
                                <div class="why-choose-two__top-btn-box">
                                    <a href="{{ url("appoinment") }}" class="thm-btn">Shop our Products <span
                                            class="icon-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="why-choose-two__bottom">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="why-choose-two__bottom-list-box">
                                <ul class="why-choose-two__list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-teeth-10"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Emergency Service</h3>
                                            <p>Dental care is essential maintaining health and overall well-being.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-teeth-11"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Preventive Focus</h3>
                                            <p>Dental care is essential maintaining health and overall well-being.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-teeth-9"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Positive Reviews</h3>
                                            <p>Dental care is essential maintaining health and overall well-being.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="why-choose-two__img">
                                <img src="{{ asset("/assets/images/resources/why-choose-two-img-1.jpg") }}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                            <div class="why-choose-two__bottom-list-box">
                                <ul class="why-choose-two__list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-teeth"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Expert Physician</h3>
                                            <p>Dental care is essential maintaining health and overall well-being.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-teeth-7"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Budget Friendly</h3>
                                            <p>Dental care is essential maintaining health and overall well-being.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-teeth-3"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Trusted Partner</h3>
                                            <p>Dental care is essential maintaining health and overall well-being.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose Two End -->

        <!--Project Three Start -->
        <section class="project-three">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <h6 class="section-title__tagline">case studies</h6>
                    <h3 class="section-title__title title-animation">Our Recent Studies & <br>Success Stories
                    </h3>
                </div>
                <div class="row filter-layout masonary-layout">
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="project-three__single">
                            <div class="project-three__img-box">
                                <div class="project-three__img">
                                    <img src="{{ asset("/assets/images/project/project-3-1.jpg") }}" alt="">
                                    <div class="project-three__content">
                                        <div class="project-three__arrow">
                                            <a href="{{ url("assets/images/project/project-3-1.jpg") }}" class="img-popup"><span
                                                    class="icon-up-arrow"></span></a>
                                        </div>
                                        <p class="project-three__sub-title">Dental Care</p>
                                        <h3 class="project-three__title"><a href="{{ url("project-details") }}">Effective
                                                Solutions
                                                For
                                                <br> Relief Dental Pain</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="project-three__single">
                            <div class="project-three__img-box">
                                <div class="project-three__img">
                                    <img src="{{ asset("/assets/images/project/project-3-2.jpg") }}" alt="">
                                    <div class="project-three__content">
                                        <div class="project-three__arrow">
                                            <a href="{{ url("assets/images/project/project-3-2.jpg") }}" class="img-popup"><span
                                                    class="icon-up-arrow"></span></a>
                                        </div>
                                        <p class="project-three__sub-title">Dental Care</p>
                                        <h3 class="project-three__title"><a href="{{ url("project-details") }}">Effective
                                                Solutions
                                                For
                                                <br> Relief Dental Pain</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="project-three__single">
                            <div class="project-three__img-box">
                                <div class="project-three__img">
                                    <img src="{{ asset("/assets/images/project/project-3-3.jpg") }}" alt="">
                                    <div class="project-three__content">
                                        <div class="project-three__arrow">
                                            <a href="{{ url("assets/images/project/project-3-3.jpg") }}" class="img-popup"><span
                                                    class="icon-up-arrow"></span></a>
                                        </div>
                                        <p class="project-three__sub-title">Dental Care</p>
                                        <h3 class="project-three__title"><a href="{{ url("project-details") }}">Effective
                                                Solutions
                                                For
                                                <br> Relief Dental Pain</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="project-three__single">
                            <div class="project-three__img-box">
                                <div class="project-three__img">
                                    <img src="{{ asset("/assets/images/project/project-3-4.jpg") }}" alt="">
                                    <div class="project-three__content">
                                        <div class="project-three__arrow">
                                            <a href="{{ url("assets/images/project/project-3-4.jpg") }}" class="img-popup"><span
                                                    class="icon-up-arrow"></span></a>
                                        </div>
                                        <p class="project-three__sub-title">Dental Care</p>
                                        <h3 class="project-three__title"><a href="{{ url("project-details") }}">Effective
                                                Solutions
                                                For
                                                <br> Relief Dental Pain</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="project-three__single">
                            <div class="project-three__img-box">
                                <div class="project-three__img">
                                    <img src="{{ asset("/assets/images/project/project-3-5.jpg") }}" alt="">
                                    <div class="project-three__content">
                                        <div class="project-three__arrow">
                                            <a href="{{ url("assets/images/project/project-3-5.jpg") }}" class="img-popup"><span
                                                    class="icon-up-arrow"></span></a>
                                        </div>
                                        <p class="project-three__sub-title">Dental Care</p>
                                        <h3 class="project-three__title"><a href="{{ url("project-details") }}">Effective
                                                Solutions
                                                For
                                                <br> Relief Dental Pain</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Project Three End -->

        <!--Testimonial Three Start -->
        <section class="testimonial-three">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <h6 class="section-title__tagline">our testimonials</h6>
                    <h3 class="section-title__title title-animation">patient Feedbacks
                    </h3>
                </div>
                <div class="testimonial-three__carousel owl-theme owl-carousel">
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-three__single">
                            <div class="testimonial-three__img">
                                <img src="{{ asset("/assets/images/testimonial/testimonial-3-1.jpg") }}" alt="">
                            </div>
                            <div class="testimonial-three__content">
                                <div class="testimonial-three__quote">
                                    <span class="icon-quote"></span>
                                </div>
                                <p class="testimonial-three__text">Dental care is essential for maintaining oral health
                                    and overall an well-being. Regular check-ups, cleanings, and treatments can the
                                    prevent issues like cavities, gum disease, and tooth decay. </p>
                                <div class="testimonial-three__client-info">
                                    <h3><a href="{{ url("testimonials") }}">Floyd Miles</a></h3>
                                    <p>Marketing Coordinator</p>
                                </div>
                            </div>
                            <div class="testimonial-three__ratting">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-three__single">
                            <div class="testimonial-three__img">
                                <img src="{{ asset("/assets/images/testimonial/testimonial-3-2.jpg") }}" alt="">
                            </div>
                            <div class="testimonial-three__content">
                                <div class="testimonial-three__quote">
                                    <span class="icon-quote"></span>
                                </div>
                                <p class="testimonial-three__text">Dental care is essential for maintaining oral health
                                    and overall an well-being. Regular check-ups, cleanings, and treatments can the
                                    prevent issues like cavities, gum disease, and tooth decay. </p>
                                <div class="testimonial-three__client-info">
                                    <h3><a href="{{ url("testimonials") }}">Robert Son</a></h3>
                                    <p>Marketing Coordinator</p>
                                </div>
                            </div>
                            <div class="testimonial-three__ratting">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                    <!--Testimonial Two Single Start-->
                    <div class="item">
                        <div class="testimonial-three__single">
                            <div class="testimonial-three__img">
                                <img src="{{ asset("/assets/images/testimonial/testimonial-3-3.jpg") }}" alt="">
                            </div>
                            <div class="testimonial-three__content">
                                <div class="testimonial-three__quote">
                                    <span class="icon-quote"></span>
                                </div>
                                <p class="testimonial-three__text">Dental care is essential for maintaining oral health
                                    and overall an well-being. Regular check-ups, cleanings, and treatments can the
                                    prevent issues like cavities, gum disease, and tooth decay. </p>
                                <div class="testimonial-three__client-info">
                                    <h3><a href="{{ url("testimonials") }}">Alisha Martin</a></h3>
                                    <p>Marketing Coordinator</p>
                                </div>
                            </div>
                            <div class="testimonial-three__ratting">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Two Single End-->
                </div>
            </div>
        </section>
        <!--Testimonial Three End -->

        <!--Appiontment Two Start -->
        <section class="appiontment-two">
            <div class="container">
                <div class="appiontment-two__inner">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="appiontment-two__left">
                                <h3 class="appiontment-two__title">Get Appointment</h3>
                                <form class="contact-form-validated appiontment-two__form" method="POST" action="assets/inc/sendemail.php" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="appiontment-two__input-box">
                                                <input type="text" name="name" placeholder="Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="appiontment-two__input-box">
                                                <input type="email" name="email" placeholder="E-mail" required="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="appiontment-two__input-box">
                                                <input type="text" placeholder="mm/dd/yyy" name="date" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="appiontment-two__input-box">
                                                <input type="text" name="time" placeholder="Chose A Time">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="appiontment-two__input-box text-message-box">
                                                <textarea name="message" placeholder="Message"></textarea>
                                            </div>
                                            <div class="appiontment-two__btn-box">
                                                <button type="submit" class="thm-btn">Appointment Now<span
                                                        class="icon-plus"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="appiontment-two__right">
                                <h3 class="appiontment-two__right-title">Get In Touch</h3>
                                <p class="appiontment-two__right-text">Dental care is essential for maintaining oral
                                    health and overall well-the being. Regular Dental care is essential for maintaining
                                    oral health and overall well-being. Regular check-ups, cleanings</p>
                                <ul class="appiontment-two__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-call-2"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Need Dental Services ?</h3>
                                            <p><a href="{{ url("tel:2075550119") }}">(207) 555-0119</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-hour"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Opening Hours</h3>
                                            <p>Mon to Sat 9:00AM to 9:00PM</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Appiontment Two End -->

        <!--Blog Three Start -->
        <section class="blog-three">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <h6 class="section-title__tagline">Our Blog</h6>
                    <h3 class="section-title__title title-animation">Our Researches and
                        <br> Publications
                    </h3>
                </div>
                <div class="row">
                    <!--Blog Three Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="blog-three__single">
                            <div class="blog-three__img-box">
                                <div class="blog-three__img">
                                    <img src="{{ asset("/assets/images/blog/blog-3-1.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="blog-three__content">
                                <ul class="blog-three__meta list-unstyled">
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
                                <h3 class="blog-three__title"><a href="{{ url("blog-details") }}">Why Cavities Happen And the
                                        How to Prevent Them</a></h3>
                                <div class="blog-three__btn-box">
                                    <a href="{{ url("blog-details") }}" class="thm-btn">Read More <span
                                            class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Three Single End-->
                    <!--Blog Three Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-three__single">
                            <div class="blog-three__img-box">
                                <div class="blog-three__img">
                                    <img src="{{ asset("/assets/images/blog/blog-3-2.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="blog-three__content">
                                <ul class="blog-three__meta list-unstyled">
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
                                <h3 class="blog-three__title"><a href="{{ url("blog-details") }}">What to Expect During Your
                                        First Visit to the Dentist</a></h3>
                                <div class="blog-three__btn-box">
                                    <a href="{{ url("blog-details") }}" class="thm-btn">Read More <span
                                            class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Three Single End-->
                    <!--Blog Three Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                        <div class="blog-three__single">
                            <div class="blog-three__img-box">
                                <div class="blog-three__img">
                                    <img src="{{ asset("/assets/images/blog/blog-3-3.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="blog-three__content">
                                <ul class="blog-three__meta list-unstyled">
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
                                <h3 class="blog-three__title"><a href="{{ url("blog-details") }}">How to Overcome Anxiety and
                                        Feel Comfortable</a></h3>
                                <div class="blog-three__btn-box">
                                    <a href="{{ url("blog-details") }}" class="thm-btn">Read More <span
                                            class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Three Single End-->
                </div>
            </div>
        </section>
        <!--Blog Three End -->
       
<x-footerThree/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection