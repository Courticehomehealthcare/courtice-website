@extends('layouts.layout4onepage')
@section('title', 'Home Four || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/twentytwenty.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/module-css/video.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/module-css/before-and-after.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>';

@endphp
@section('content')

    <x-strickyHeaderThree />



    <!--Banner Two Start -->
    <section class="banner-two" id="home">
        <div class="banner-two__shape-bg" style="background-image: url(assets/images/shapes/banner-two-shape-bg.png);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="banner-two__left sec-title-animation animation-style2">
                        <div class="banner-two__review-box">
                            <ul class="list-unstyled banner-two__review-img-box">
                                <li>
                                    <div class="banner-two__review-img">
                                        <img src="{{ asset("/assets/images/resources/banner-two-review-img-1.jpg") }}"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-two__review-img">
                                        <img src="{{ asset("/assets/images/resources/banner-two-review-img-2.jpg") }}"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-two__review-img">
                                        <img src="{{ asset("/assets/images/resources/banner-two-review-img-3.jpg") }}"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-two__review-count-box">
                                        <div class="banner-two__review-count">
                                            <h3 class="odometer" data-count="3">00</h3>
                                            <span>k+</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="banner-two__review-content-box">
                                <h4 class="banner-two__review-content-title">patients reviews</h4>
                                <div class="banner-two__review-rating-box">
                                    <p>5.0</p>
                                    <div class="banner-two__review-start">
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="banner-two__title title-animation">Get Cure With <span>Our Doctors</span> </h2>
                        <p class="banner-two__text">Dental care focuses on maintaining oral health through practices
                            such as regular check-ups, cleanings, and treatments for teeth and gums. </p>
                        <div class="banner-two__btn-box">
                            <a href="{{ url("appoinment") }}" class="thm-btn">Shop our Products<span
                                    class="icon-arrow-right"></span> </a>
                        </div>
                        <div class="banner-two__counter-box">
                            <ul class="list-unstyled banner-two__counter">
                                <li>
                                    <div class="banner-two__counter-single">
                                        <div class="banner-two__counter-count">
                                            <h3 class="odometer" data-count="120">00</h3>
                                            <span>+</span>
                                        </div>
                                        <p class="banner-two__counter-text">ADP Authorized Vendor
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-two__counter-single">
                                        <div class="banner-two__counter-count">
                                            <h3 class="odometer" data-count="450">00</h3>
                                            <span>+</span>
                                        </div>
                                        <p class="banner-two__counter-text"> In Patients Bed
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-two__counter-single">
                                        <div class="banner-two__counter-count">
                                            <h3 class="odometer" data-count="3">00</h3>
                                            <span>k+</span>
                                        </div>
                                        <p class="banner-two__counter-text"> Dedicated Staff
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="banner-two__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="banner-two__img">
                            <img src="{{ asset("/assets/images/resources/banner-two-img-1.jpg") }}" alt="">
                            <div class="banner-two__call">
                                <div class="banner-two__call-icon">
                                    <img src="{{ asset("/assets/images/icon/chat-icon.png") }}" alt="">
                                </div>
                                <div class="banner-two__call-number">
                                    <p>Hotline</p>
                                    <h5><a href="{{ url("tel:+19057210004") }}">+1 905-721-0004</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner Two End -->

    <!--Services Four Start -->
    <section class="services-four" id="services">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h6 class="section-title__tagline">Our Services</h6>
                <h3 class="section-title__title title-animation">Our Departments
                </h3>
            </div>
            <div class="row">
                <!--Services Four Single Start -->
                <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="services-four__single">
                        <div class="services-four__icon">
                            <span class="icon-teeth"></span>
                        </div>
                        <h3 class="services-four__title"><a href="{{ url("vitality-health-solutions") }}">Oral Cancer</a>
                        </h3>
                        <p class="services-four__text">Dental care is essential for maintaining oral health and
                            overall well-being</p>
                        <div class="services-four__btn-box">
                            <a href="{{ url("vitality-health-solutions") }}" class="thm-btn">Read More <span
                                    class="icon-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Services Four Single End -->
                <!--Services Four Single Start -->
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-four__single">
                        <div class="services-four__icon">
                            <span class="icon-teeth-4"></span>
                        </div>
                        <h3 class="services-four__title"><a href="{{ url("wellSpring-wellness-center") }}">Dental
                                Implants</a></h3>
                        <p class="services-four__text">Dental care is essential for maintaining oral health and
                            overall well-being</p>
                        <div class="services-four__btn-box">
                            <a href="{{ url("wellSpring-wellness-center") }}" class="thm-btn">Read More <span
                                    class="icon-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Services Four Single End -->
                <!--Services Four Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="services-four__single">
                        <div class="services-four__icon">
                            <span class="icon-teeth-5"></span>
                        </div>
                        <h3 class="services-four__title"><a href="{{ url("evergreen-medical-center") }}">Orthodontics</a>
                        </h3>
                        <p class="services-four__text">Dental care is essential for maintaining oral health and
                            overall well-being</p>
                        <div class="services-four__btn-box">
                            <a href="{{ url("evergreen-medical-center") }}" class="thm-btn">Read More <span
                                    class="icon-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Services Four Single End -->
            </div>
        </div>
    </section>
    <!--Services Four End -->

    <!--About Four Start -->
    <section class="about-four" id="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-four__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-four__img-box">
                            <div class="about-four__img">
                                <img src="{{ asset("/assets/images/resources/about-four-img-1.png") }}" alt="">
                            </div>
                            <div class="about-four__shape-1"></div>
                            <div class="about-four__shape-2"></div>
                            <div class="about-four__shape-3 float-bob-x"></div>
                            <div class="about-four__shape-4 float-bob-y"></div>
                            <div class="about-four__shape-5 float-bob-x"></div>
                            <div class="about-four__success-ratio">
                                <div class="about-four__success-ratio-percent">
                                    <h3 class="odometer" data-count="98">00</h3>
                                    <span>%</span>
                                </div>
                                <p class="about-four__success-ratio-text">Success Ratio</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-four__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <h6 class="section-title__tagline">About Our clinic</h6>
                            <h3 class="section-title__title title-animation">Get Amazing Experice With Our
                                Professional
                            </h3>
                        </div>
                        <p class="about-four__text">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy</p>
                        <div class="about-four__point-box">
                            <ul class="list-unstyled about-four__point">
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
                            <ul class="list-unstyled about-four__point about-four__point--two">
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
                        <div class="about-four__trusted-patient-box">
                            <p class="about-four__trusted-patient-text">Trusted By Over <span class="odometer"
                                    data-count="4000">00</span>+ <br> Patient worldwide
                            </p>
                            <ul class="list-unstyled about-four__trusted-patient-review-img-box">
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
                            </ul>
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
                                    <h5><a href="{{ url("tel:8085550111") }}">(808) 555-0111</a></h5>
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
    <section class="team-four" id="team">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h6 class="section-title__tagline">Our Doctors</h6>
                <h3 class="section-title__title title-animation">Meet With Our Dental <br> Professionals</h3>
            </div>
            <div class="row">
                <!--Team Four Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="team-four__single">
                        <div class="team-four__img-box">
                            <div class="team-four__img">
                                <img src="{{ asset("/assets/images/team/team-4-1.jpg") }}" alt="">
                            </div>
                            <div class="team-four__content">
                                <div class="team-four__title-box">
                                    <h3 class="team-four__title"><a href="{{ url("doctor-details") }}">Dr.Darlene
                                            Robertson</a>
                                    </h3>
                                    <p class="team-four__sub-title">Nursing Assistant</p>
                                </div>
                                <div class="team-four__arrow-and-social">
                                    <div class="team-four__arrow">
                                        <span class="icon-arrow-right"></span>
                                    </div>
                                    <div class="team-four__social">
                                        <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Four Single End -->
                <!--Team Four Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="team-four__single">
                        <div class="team-four__img-box">
                            <div class="team-four__img">
                                <img src="{{ asset("/assets/images/team/team-4-2.jpg") }}" alt="">
                            </div>
                            <div class="team-four__content">
                                <div class="team-four__title-box">
                                    <h3 class="team-four__title"><a href="{{ url("doctor-details") }}">Dr.Dianne Russell</a>
                                    </h3>
                                    <p class="team-four__sub-title">Dental Spalicalist</p>
                                </div>
                                <div class="team-four__arrow-and-social">
                                    <div class="team-four__arrow">
                                        <span class="icon-arrow-right"></span>
                                    </div>
                                    <div class="team-four__social">
                                        <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Four Single End -->
                <!--Team Four Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="team-four__single">
                        <div class="team-four__img-box">
                            <div class="team-four__img">
                                <img src="{{ asset("/assets/images/team/team-4-3.jpg") }}" alt="">
                            </div>
                            <div class="team-four__content">
                                <div class="team-four__title-box">
                                    <h3 class="team-four__title"><a href="{{ url("doctor-details") }}">Dr.Leslie
                                            Alexander</a>
                                    </h3>
                                    <p class="team-four__sub-title">Medical Assistant</p>
                                </div>
                                <div class="team-four__arrow-and-social">
                                    <div class="team-four__arrow">
                                        <span class="icon-arrow-right"></span>
                                    </div>
                                    <div class="team-four__social">
                                        <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Four Single End -->
            </div>
        </div>
    </section>
    <!--Team Four End -->

    <!--Counter Three Start -->
    <section class="counter-three">
        <div class="container">
            <div class="counter-three__inner">
                <ul class="list-unstyled counter-three__list">
                    <li>
                        <div class="counter-three__single">
                            <div class="counter-three__count-box">
                                <h3 class="odometer" data-count="140">00</h3>
                                <span>+</span>
                            </div>
                            <p class="counter-three__text">In Patients Bed</p>
                        </div>
                    </li>
                    <li>
                        <div class="counter-three__single">
                            <div class="counter-three__count-box">
                                <h3 class="odometer" data-count="179">00</h3>
                                <span>+</span>
                            </div>
                            <p class="counter-three__text">Dedicated Staff</p>
                        </div>
                    </li>
                    <li>
                        <div class="counter-three__single">
                            <div class="counter-three__count-box">
                                <h3 class="odometer" data-count="3">00</h3>
                                <span>k</span>
                            </div>
                            <p class="counter-three__text">Research Lab</p>
                        </div>
                    </li>
                    <li>
                        <div class="counter-three__single">
                            <div class="counter-three__count-box">
                                <h3 class="odometer" data-count="2">00</h3>
                                <span>k</span>
                            </div>
                            <p class="counter-three__text">Consultation Rooms</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
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
                            <div class="accrodion wow fadeInLeft" data-wow-delay="100ms">
                                <div class="accrodion-title">
                                    <div class="faq-three-accrodion__count"></div>
                                    <h4>Are braces only for children?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Healthcare is a crucial aspect of our well-being. From hospitals to the a
                                            clinics, the encompasses a wide range Healthcare is a crucial aspect of
                                            our well-being. From hospitals </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion wow fadeInRight" data-wow-delay="200ms">
                                <div class="accrodion-title">
                                    <div class="faq-three-accrodion__count"></div>
                                    <h4>What is the best way to prevent cavities?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Healthcare is a crucial aspect of our well-being. From hospitals to the a
                                            clinics, the encompasses a wide range Healthcare is a crucial aspect of
                                            our well-being. From hospitals </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion wow fadeInLeft" data-wow-delay="300ms">
                                <div class="accrodion-title">
                                    <div class="faq-three-accrodion__count"></div>
                                    <h4>What are the benefits of dental other options?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Healthcare is a crucial aspect of our well-being. From hospitals to the a
                                            clinics, the encompasses a wide range Healthcare is a crucial aspect of
                                            our well-being. From hospitals </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion wow fadeInRight" data-wow-delay="400ms">
                                <div class="accrodion-title">
                                    <div class="faq-three-accrodion__count"></div>
                                    <h4>How can I alleviate tooth sensitivity?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Healthcare is a crucial aspect of our well-being. From hospitals to the a
                                            clinics, the encompasses a wide range Healthcare is a crucial aspect of
                                            our well-being. From hospitals </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-three__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="faq-three__img">
                            <img src="{{ asset("/assets/images/resources/faq-three-img-1.jpg") }}" alt="">
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
                                            <p><a href="{{ url("tel:2075550119") }}">(207) 555-0119</a></p>
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
                                            <p><a href="{{ url(" mailto:info@courticehomehealthcare.com")
                                                    }}">info@courticehomehealthcare.com</a></p>
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
        <div class="container">
            <div class="brand-two__inner">
                <div class="brand-two__carousel owl-theme owl-carousel">
                    <!--Brand Two Single Start-->
                    <div class="item">
                        <div class="brand-two__single">
                            <div class="brand-two__img">
                                <img src="{{ asset("/assets/images/brand/brand-2-1.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!--Brand Two Single End-->
                    <!--Brand Two Single Start-->
                    <div class="item">
                        <div class="brand-two__single">
                            <div class="brand-two__img">
                                <img src="{{ asset("/assets/images/brand/brand-2-2.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!--Brand Two Single End-->
                    <!--Brand Two Single Start-->
                    <div class="item">
                        <div class="brand-two__single">
                            <div class="brand-two__img">
                                <img src="{{ asset("/assets/images/brand/brand-2-3.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!--Brand Two Single End-->
                    <!--Brand Two Single Start-->
                    <div class="item">
                        <div class="brand-two__single">
                            <div class="brand-two__img">
                                <img src="{{ asset("/assets/images/brand/brand-2-4.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!--Brand Two Single End-->
                    <!--Brand Two Single Start-->
                    <div class="item">
                        <div class="brand-two__single">
                            <div class="brand-two__img">
                                <img src="{{ asset("/assets/images/brand/brand-2-5.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!--Brand Two Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Brand Two End -->

    <!--Video One Start -->
    <section class="video-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="video-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="video-one__img">
                            <img src="{{ asset("/assets/images/resources/video-one-img-1.jpg") }}" alt="">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                class="video-one__round-text-box video-popup">
                                <div class="video-one__round-text-box-inner">
                                    <div class="video-one__curved-circle rotate-me">
                                        Dentalcare Care Since 2010.
                                    </div>
                                    <div class="video-one__video-icon">
                                        <span class="icon-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="video-one__right">
                        <div class="video-one__content-box">
                            <div class="video-one__content-icon">
                                <span class="icon-teeth"></span>
                            </div>
                            <h3 class="video-one__content-title">Gentle Touch Dental Care</h3>
                            <p class="video-one__content-text">Dental care is essential for maintaining oral <br>
                                health
                                and overall well-being</p>
                            <div class="video-one__btn-box">
                                <a href="{{ url("contact") }}" class="thm-btn">Contact Us<span
                                        class="icon-arrow-right"></span> </a>
                            </div>
                            <div class="video-one__shape-1 float-bob-y">
                                <img src="{{ asset("/assets/images/shapes/video-one-shape-1.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Video One End -->

    <!--Testimonial Four Start -->
    <section class="testimonial-four" id="testimonial">
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
    <section class="before-and-after">
        <div class="container">
            <div class="before-and-after__top">
                <div class="section-title text-left sec-title-animation animation-style2">
                    <h6 class="section-title__tagline">SEE THE TRANSFORMATION</h6>
                    <h3 class="section-title__title title-animation">Stunning results that showcase<br> the
                        lifechanging impact
                    </h3>
                </div>
                <div class="before-and-after__btn-box">
                    <a href="{{ url("contact") }}" class="thm-btn">Contact Us <span class="icon-right-arrow"></span> </a>
                </div>
            </div>
            <div class="before-and-after__inner">
                <div class="before-and-after__img-box">
                    <div class="before-after">
                        <div class="before-after-twentytwenty" id="wrinkle-before-after">
                            <img src="{{ asset("/assets/images/resources/before-and-after-img.jpg") }}" alt="">
                            <img src="{{ asset("/assets/images/resources/before-and-after-img-2.jpg") }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Before And After End-->

    <!--Contact Two Start -->
    <section class="contact-two" id="contact">
        <div class="contact-two__bg-color">
            <div class="contact-two__bg-shape"
                style="background-image: url(assets/images/shapes/contact-two-bg-shape.png);"></div>
        </div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h6 class="section-title__tagline">Contact Us</h6>
                <h3 class="section-title__title title-animation">Book your dentist with<br> prime care
                </h3>
            </div>
            <p class="contact-two__text text-center">Dental care is essential for maintaining oral health and
                overall
                well-being.<br> Regular check-ups, cleanings, and treatments </p>
            <div class="contact-two__inner">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="contact-two__left">
                            <h3 class="contact-two__title">Shop our Products</h3>
                            <form class="contact-form-validated contact-two__form" method="POST"
                                action="assets/inc/sendemail.php" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-two__input-box">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-two__input-box">
                                            <input type="email" name="email" placeholder="E-mail" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-two__input-box">
                                            <input type="text" name="location" placeholder="Your Location" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-two__input-box">
                                            <input type="text" placeholder="mmm/dd/yyy" name="date" id="datepicker">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-two__input-box">
                                            <input type="text" name="record" placeholder="Medical Record No." required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-two__input-box">
                                            <input type="text" name="time" placeholder="Chose A Time">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-two__input-box text-message-box">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="contact-two__btn-box">
                                            <button type="submit" class="thm-btn">Appointment Now<span
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
                                <img src="{{ asset("/assets/images/resources/contact-two-img-1.jpg") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Two End -->

    <!--Blog Four Start -->
    <section class="blog-four" id="blog">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h6 class="section-title__tagline">Our Latest Blog and news</h6>
                <h3 class="section-title__title title-animation">Check Our Latest Articles<br> & news
                </h3>
            </div>
            <div class="row">
                <!--Blog Four Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="blog-four__single">
                        <div class="blog-four__img-box">
                            <div class="blog-four__img">
                                <img src="{{ asset("/assets/images/blog/blog-4-1.jpg") }}" alt="">
                            </div>
                            <div class="blog-four__content">
                                <ul class="blog-four__meta list-unstyled">
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
                                <h3 class="blog-four__title"><a href="{{ url("blog-details") }}">Sparkling Smiles, Healthy
                                        Teeth Brighten Your Smile</a></h3>
                                <div class="blog-four__btn-box">
                                    <a href="{{ url("blog-details") }}" class="thm-btn">Read More <span
                                            class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog Four Single End-->
                <!--Blog Four Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-four__single">
                        <div class="blog-four__img-box">
                            <div class="blog-four__img">
                                <img src="{{ asset("/assets/images/blog/blog-4-2.jpg") }}" alt="">
                            </div>
                            <div class="blog-four__content">
                                <ul class="blog-four__meta list-unstyled">
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
                                <h3 class="blog-four__title"><a href="{{ url("blog-details") }}">Smile Renew Dental Gentle
                                        Touch Dental Care</a></h3>
                                <div class="blog-four__btn-box">
                                    <a href="{{ url("blog-details") }}" class="thm-btn">Read More <span
                                            class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog Four Single End-->
                <!--Blog Four Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="blog-four__single">
                        <div class="blog-four__img-box">
                            <div class="blog-four__img">
                                <img src="{{ asset("/assets/images/blog/blog-4-3.jpg") }}" alt="">
                            </div>
                            <div class="blog-four__content">
                                <ul class="blog-four__meta list-unstyled">
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
                                <h3 class="blog-four__title"><a href="{{ url("blog-details") }}">Dental Excellence Gentle
                                        Touch Dental Care</a></h3>
                                <div class="blog-four__btn-box">
                                    <a href="{{ url("blog-details") }}" class="thm-btn">Read More <span
                                            class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog Four Single End-->
            </div>
        </div>
    </section>
    <!--Blog Four End -->


    <x-footerThree />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection