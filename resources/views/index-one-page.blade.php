
@extends('layouts.layout1onepage')
@section('title', 'Home One || Careon || Careon Laravel Template')

@section('content')

<x-strickyHeader/>

        <!-- Banner One Start -->
        <section class="banner-one" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="banner-one__left sec-title-animation animation-style2">
                            <p class="banner-one__sub-title">Health Care</p>
                            <h2 class="banner-one__title title-animation">
                                Exceptional Health Treatment <span>Always Find There</span>
                            </h2>
                            <p class="banner-one__text">Health care is a vital aspect of maintaining overall well-being,
                                <br> encompassing a range of services from preventive</p>
                            <div class="banner-one__call">
                                <div class="banner-one__call-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="banner-one__call-content">
                                    <p class="banner-one__call-sub-title">Phone Number</p>
                                    <h5 class="banner-one__call-number"><a href="{{ url("tel:0123456789101") }}">012 345 678 9101</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="banner-one__right">
                            <div class="banner-one__img-box">
                                <div class="banner-one__img wow slideInRight" data-wow-delay="100ms"
                                    data-wow-duration="2000ms">
                                    <img src="{{ asset("/assets/images/resources/banner-one-img-1.png") }}" alt="">
                                </div>
                                <div class="banner-one__img-shape-1 float-bob-x">
                                    <img src="{{ asset("/assets/images/shapes/main-slider-one-img-shape-1.png") }}" alt="">
                                </div>
                                <div class="banner-one__find-doctor wow slideInLeft" data-wow-delay="100ms"
                                    data-wow-duration="2000ms">
                                    <h4 class=" banner-one__find-doctor-title">Find Doctor</h4>
                                    <ul class="list-unstyled banner-one__find-doctor-list">
                                        <li>
                                            <div class="banner-one__find-doctor-img">
                                                <img src="{{ asset("/assets/images/resources/banner-one-find-doctor-img-1-1.jpg") }}"
                                                    alt="">
                                            </div>
                                            <div class="banner-one__find-doctor-name">
                                                <h4><a href="{{ url("doctor-details") }}">Dr.Joseph Jessica</a></h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="banner-one__find-doctor-img">
                                                <img src="{{ asset("/assets/images/resources/banner-one-find-doctor-img-1-2.jpg") }}"
                                                    alt="">
                                            </div>
                                            <div class="banner-one__find-doctor-name">
                                                <h4><a href="{{ url("doctor-details") }}">Dr.Richard Susan</a></h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="banner-one__find-doctor-img">
                                                <img src="{{ asset("/assets/images/resources/banner-one-find-doctor-img-1-1.jpg") }}"
                                                    alt="">
                                            </div>
                                            <div class="banner-one__find-doctor-name">
                                                <h4><a href="{{ url("doctor-details") }}">Dr.William Barbara</a></h4>
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
        <!--Banner One End -->

        <!--Feature One Start -->
        <section class="feature-one">
            <div class="container">
                <div class="feature-one__inner">
                    <div class="section-title text-center sec-title-animation animation-style1">
                        <h6 class="section-title__tagline"><span class="icon-broken-bone"></span>Our Feature
                        </h6>
                        <h3 class="section-title__title title-animation">Your Wellness, Our Priority<br>
                            Empowering Healthier </h3>
                    </div>
                    <ul class="feature-one__feature-list list-unstyled">
                        <li class="wow fadeInLeft" data-wow-delay="100ms">
                            <div class="feature-one__feature-list-left">
                                <div class="feature-one__feature-list-icon">
                                    <span class="icon-quaity-care"></span>
                                </div>
                                <h3 class="feature-one__feature-list-title"><a
                                        href="{{ url("wellSpring-wellness-center") }}">Quality Care </a></h3>
                            </div>
                            <div class="feature-one__feature-list-right">
                                <p class="feature-one__feature-list-sub-title">CareMed Clinic</p>
                                <div class="feature-one__feature-list-arrow">
                                    <a href="{{ url("wellSpring-wellness-center") }}"><span class="icon-arrow-up"></span></a>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-delay="200ms">
                            <div class="feature-one__feature-list-left">
                                <div class="feature-one__feature-list-icon">
                                    <span class="icon-quaity-care-2"></span>
                                </div>
                                <h3 class="feature-one__feature-list-title"><a
                                        href="{{ url("evergreen-medical-center") }}">Enhancing Quality Care </a></h3>
                            </div>
                            <div class="feature-one__feature-list-right">
                                <p class="feature-one__feature-list-sub-title">CareMed Clinic</p>
                                <div class="feature-one__feature-list-arrow">
                                    <a href="{{ url("evergreen-medical-center") }}"><span class="icon-arrow-up"></span></a>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-delay="300ms">
                            <div class="feature-one__feature-list-left">
                                <div class="feature-one__feature-list-icon">
                                    <span class="icon-quaity-care-3"></span>
                                </div>
                                <h3 class="feature-one__feature-list-title"><a
                                        href="{{ url("pure-life-health-services") }}">Lives Through Care</a></h3>
                            </div>
                            <div class="feature-one__feature-list-right">
                                <p class="feature-one__feature-list-sub-title">CareMed Clinic</p>
                                <div class="feature-one__feature-list-arrow">
                                    <a href="{{ url("pure-life-health-services") }}"><span class="icon-arrow-up"></span></a>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-delay="400ms">
                            <div class="feature-one__feature-list-left">
                                <div class="feature-one__feature-list-icon">
                                    <span class="icon-quaity-care-4"></span>
                                </div>
                                <h3 class="feature-one__feature-list-title"><a
                                        href="{{ url("vitality-health-solutions") }}">Compassionate Care</a></h3>
                            </div>
                            <div class="feature-one__feature-list-right">
                                <p class="feature-one__feature-list-sub-title">CareMed Clinic</p>
                                <div class="feature-one__feature-list-arrow">
                                    <a href="{{ url("vitality-health-solutions") }}"><span class="icon-arrow-up"></span></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Feature One End -->

        <!--About One Start -->
        <section class="about-one" id="about">
            <div class="container">
                <div class="about-one__inner">
                    <div class="about-one__img-box">
                        <div class="about-one__content-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <h6 class="section-title__tagline"><span class="icon-broken-bone"></span>About Us
                                </h6>
                                <h3 class="section-title__title title-animation">Health care maintenance or improvement
                                </h3>
                            </div>
                            <p class="about-one__text">Health care is a vital aspect of maintaining overall well-being,
                                encompassing a range of services from preventive care to treatment</p>
                            <ul class="about-one__points-box list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-left-arrows"></span>
                                    </div>
                                    <p>Where Health Matters Most</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-left-arrows"></span>
                                    </div>
                                    <p>Caring for You, Always</p>
                                </li>
                            </ul>
                        </div>
                        <div class="about-one__img">
                            <img src="{{ asset("/assets/images/resources/about-one-img-1.jpg") }}" alt="">
                        </div>
                        <div class="about-one__working-hour wow slideInRight" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <h3 class="about-one__working-hour-title">Working Hours</h3>
                            <ul class="about-one__working-hour-list list-unstyled">
                                <li>
                                    <span>Saturday-Sunday</span>
                                    <p>9 Am To 5 Pm</p>
                                </li>
                                <li>
                                    <span>Monday-Tuesday</span>
                                    <p>1 Pm To 7 Pm</p>
                                </li>
                                <li>
                                    <span>Wednesday-Thusday</span>
                                    <p>2 Am To 6 Pm</p>
                                </li>
                                <li>
                                    <span>Friday</span>
                                    <p>Off Day</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End -->

        <!--Brand One Start -->
        <section class="brand-one">
            <div class="container">
                <div class="brand-one__carousel owl-theme owl-carousel">
                    <!--Brand One Single Start-->
                    <div class="item">
                        <div class="brand-one__single">
                            <div class="brand-one__img">
                                <img src="{{ asset("/assets/images/brand/brand-1-1.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!--Brand One Single End-->
                    <!--Brand One Single Start-->
                    <div class="item">
                        <div class="brand-one__single">
                            <div class="brand-one__img">
                                <img src="{{ asset("/assets/images/brand/brand-1-2.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!--Brand One Single End-->
                    <!--Brand One Single Start-->
                    <div class="item">
                        <div class="brand-one__single">
                            <div class="brand-one__img">
                                <img src="{{ asset("/assets/images/brand/brand-1-3.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!--Brand One Single End-->
                    <!--Brand One Single Start-->
                    <div class="item">
                        <div class="brand-one__single">
                            <div class="brand-one__img">
                                <img src="{{ asset("/assets/images/brand/brand-1-4.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!--Brand One Single End-->
                    <!--Brand One Single Start-->
                    <div class="item">
                        <div class="brand-one__single">
                            <div class="brand-one__img">
                                <img src="{{ asset("/assets/images/brand/brand-1-5.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!--Brand One Single End-->
                </div>
            </div>
        </section>
        <!--Brand One End-->

        <!--Services One Start-->
        <section class="services-one" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="services-one__left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <h6 class="section-title__tagline"><span class="icon-broken-bone"></span>Latest service
                                </h6>
                                <h3 class="section-title__title title-animation">Health Always an Quality Care
                                </h3>
                            </div>
                            <p class="services-one__text">Health care is a vital aspect of maintaining overall
                                well-being, encompassing a range Quality</p>
                            <div class="services-one__btn-box">
                                <a href="{{ url("vitality-health-solutions") }}" class="thm-btn">Read More <span
                                        class="icon-plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="services-one__right">
                            <ul class="row list-unstyled">
                                <!--Services One Single Start-->
                                <li class="col-xl-6 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                                    <div class="services-one__single services-one__single-1">
                                        <div class="services-one__icon">
                                            <span class="icon-broken-bone"></span>
                                        </div>
                                        <h3 class="services-one__title"><a
                                                href="{{ url("vitality-health-solutions") }}">Vitality Health
                                                Solutions</a></h3>
                                        <p class="services-one__text">Health care is a vital aspect of maintaining
                                            overall well-being, encompassing</p>
                                        <a href="{{ url("vitality-health-solutions") }}" class="services-one__read-more">Read
                                            More<span class="icon-plus"></span></a>
                                    </div>
                                </li>
                                <!--Services One Single End-->
                                <!--Services One Single Start-->
                                <li class="col-xl-6 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="200ms">
                                    <div class="services-one__single">
                                        <div class="services-one__icon">
                                            <span class="icon-pills"></span>
                                        </div>
                                        <h3 class="services-one__title"><a href="{{ url("wellSpring-wellness-center") }}">Your
                                                Health Our
                                                Mission</a></h3>
                                        <p class="services-one__text">Health care is a vital aspect of maintaining
                                            overall well-being, encompassing</p>
                                        <a href="{{ url("wellSpring-wellness-center") }}" class="services-one__read-more">Read
                                            More<span class="icon-plus"></span></a>
                                    </div>
                                </li>
                                <!--Services One Single End-->
                                <!--Services One Single Start-->
                                <li class="col-xl-6 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                                    <div class="services-one__single">
                                        <div class="services-one__icon">
                                            <span class="icon-pills-2"></span>
                                        </div>
                                        <h3 class="services-one__title"><a href="{{ url("evergreen-medical-center") }}">Your
                                                Partner in
                                                Health</a></h3>
                                        <p class="services-one__text">Health care is a vital aspect of maintaining
                                            overall well-being, encompassing</p>
                                        <a href="{{ url("evergreen-medical-center") }}" class="services-one__read-more">Read
                                            More<span class="icon-plus"></span></a>
                                    </div>
                                </li>
                                <!--Services One Single End-->
                                <!--Services One Single Start-->
                                <li class="col-xl-6 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="400ms">
                                    <div class="services-one__single">
                                        <div class="services-one__icon">
                                            <span class="icon-pills-3"></span>
                                        </div>
                                        <h3 class="services-one__title"><a
                                                href="{{ url("pure-life-health-services") }}">Enhancing Lives
                                                Care</a></h3>
                                        <p class="services-one__text">Health care is a vital aspect of maintaining
                                            overall well-being, encompassing</p>
                                        <a href="{{ url("pure-life-health-services") }}" class="services-one__read-more">Read
                                            More<span class="icon-plus"></span></a>
                                    </div>
                                </li>
                                <!--Services One Single End-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--Project One Start-->
        <section class="project-one" id="project">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <h6 class="section-title__tagline"><span class="icon-broken-bone"></span>Latest project
                    </h6>
                    <h3 class="section-title__title title-animation">Your Wellness Our Priority
                        <br> Healthier Lives
                    </h3>
                </div>
                <div class="row">
                    <!--Project One Single Start-->
                    <div class="col-xl-5 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="{{ asset("/assets/images/project/project-1-1.jpg") }}" alt="">
                                </div>
                                <div class="project-one__content">
                                    <p class="project-one__sub-title">Familly Health</p>
                                    <h3 class="project-one__title"><a href="{{ url("project-details") }}">Quality Care,
                                            Exceptional Service Your Health</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="col-xl-7 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="{{ asset("/assets/images/project/project-1-2.jpg") }}" alt="">
                                </div>
                                <div class="project-one__content">
                                    <p class="project-one__sub-title">Familly Health</p>
                                    <h3 class="project-one__title"><a href="{{ url("project-details") }}">Quality Care,
                                            Exceptional Service Your Health</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="col-xl-7 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="{{ asset("/assets/images/project/project-1-3.jpg") }}" alt="">
                                </div>
                                <div class="project-one__content">
                                    <p class="project-one__sub-title">Familly Health</p>
                                    <h3 class="project-one__title"><a href="{{ url("project-details") }}">Quality Care,
                                            Exceptional Service Your Health</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="col-xl-5 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="{{ asset("/assets/images/project/project-1-4.jpg") }}" alt="">
                                </div>
                                <div class="project-one__content">
                                    <p class="project-one__sub-title">Familly Health</p>
                                    <h3 class="project-one__title"><a href="{{ url("project-details") }}">Quality Care,
                                            Exceptional Service Your Health</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                </div>
            </div>
        </section>
        <!--Project One End-->

        <!--Team One Start-->
        <section class="team-one" id="team">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <h6 class="section-title__tagline"><span class="icon-broken-bone"></span>Our Team Member
                    </h6>
                    <h3 class="section-title__title title-animation">Trust in Health Caring Every<br> Step Heal with
                        Heart
                    </h3>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset("/assets/images/team/team-1-1.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__title"><a href="{{ url("doctor-details") }}">Dr.William Barbara</a></h3>
                                <p class="team-one__sub-title">Neurology Expert</p>
                                <div class="team-one__social">
                                    <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                    <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                    <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                    <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset("/assets/images/team/team-1-2.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__title"><a href="{{ url("doctor-details") }}">Dr.Richard Susan</a></h3>
                                <p class="team-one__sub-title">Dental Care</p>
                                <div class="team-one__social">
                                    <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                    <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                    <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                    <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset("/assets/images/team/team-1-3.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__title"><a href="{{ url("doctor-details") }}">Dr.Joseph Jessica</a></h3>
                                <p class="team-one__sub-title">Eye Expert</p>
                                <div class="team-one__social">
                                    <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                    <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                    <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                    <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset("/assets/images/team/team-1-4.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__title"><a href="{{ url("doctor-details") }}">Dr.Harry Donal</a></h3>
                                <p class="team-one__sub-title">Heart Spacialist</p>
                                <div class="team-one__social">
                                    <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                    <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                    <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                    <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
            </div>
        </section>
        <!--Team One End-->

        <!--FAQ One Start-->
        <section class="faq-one">
            <div class="container">
                <div class="faq-one__inner">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="faq-one__left">
                                <div class="section-title text-left sec-title-animation animation-style2">
                                    <h6 class="section-title__tagline"><span class="icon-broken-bone"></span>Ask
                                        Question
                                    </h6>
                                    <h3 class="section-title__title title-animation">Partner in Health Matters<br> Most
                                        Caring Always
                                    </h3>
                                </div>
                                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                    <div class="accrodion wow fadeInLeft" data-wow-delay="100ms">
                                        <div class="accrodion-title">
                                            <div class="faq-one-accrodion__count"></div>
                                            <h4>What should I do in case of a medical emergency?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Healthcare is a crucial aspect of our well-being. From hospitals to
                                                    the a clinics, the encompasses a wide range Healthcare</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion  active wow fadeInRight" data-wow-delay="200ms">
                                        <div class="accrodion-title">
                                            <div class="faq-one-accrodion__count"></div>
                                            <h4>What are Dedicated to Better Health?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Healthcare is a crucial aspect of our well-being. From hospitals to
                                                    the a clinics, the encompasses a wide range Healthcare</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion wow fadeInLeft" data-wow-delay="300ms">
                                        <div class="accrodion-title">
                                            <div class="faq-one-accrodion__count"></div>
                                            <h4>What should I do in case of a medical emergency?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Healthcare is a crucial aspect of our well-being. From hospitals to
                                                    the a clinics, the encompasses a wide range Healthcare</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="faq-one__right wow fadeInRight" data-wow-delay="100ms">
                                <div class="faq-one__img">
                                    <img src="{{ asset("/assets/images/resources/faq-one-img-1.jpg") }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FAQ One End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="testimonial-one__left">
                            <div class="testimonial-one__img">
                                <img src="{{ asset("/assets/images/testimonial/testimonial-one-img-1.jpg") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="testimonial-one__right">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <h6 class="section-title__tagline"><span class="icon-broken-bone"></span>Clients
                                    Testimonial
                                </h6>
                                <h3 class="section-title__title title-animation">Enhancing Lives Through Care Your
                                    Partner
                                </h3>
                            </div>
                            <p class="testimonial-one__text-1">Health care is a vital aspect of maintaining overall
                                well-being, encompassing a range encompassing a range of services from preventive care
                            </p>
                            <div class="testimonial-one__carousel owl-theme owl-carousel">
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star icon-star-color"></span>
                                        </div>
                                        <p class="testimonial-one__text">Healthcare is a crucial aspect of our a of the
                                            well being. From hospitals to clinics and a medical field encompasses</p>
                                        <div class="testimonial-one__client-info">
                                            <h4><a href="{{ url("testimonials") }}">Dr.Donald Williamson</a></h4>
                                            <p>Eye Expert</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->

                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star icon-star-color"></span>
                                        </div>
                                        <p class="testimonial-one__text">Healthcare is a crucial aspect of our a of the
                                            well being. From hospitals to clinics and a medical field encompasses</p>
                                        <div class="testimonial-one__client-info">
                                            <h4><a href="{{ url("testimonials") }}">Dr.Donald Williamson</a></h4>
                                            <p>Eye Expert</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->

                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star icon-star-color"></span>
                                        </div>
                                        <p class="testimonial-one__text">Healthcare is a crucial aspect of our a of the
                                            well being. From hospitals to clinics and a medical field encompasses</p>
                                        <div class="testimonial-one__client-info">
                                            <h4><a href="{{ url("testimonials") }}">Dr.Donald Williamson</a></h4>
                                            <p>Eye Expert</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--Blog One Start-->
        <section class="blog-one" id="blog">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <h6 class="section-title__tagline"><span class="icon-broken-bone"></span>Latest Blog and news
                    </h6>
                    <h3 class="section-title__title title-animation">Where Health Matters Most
                        <br> CareMed ClinicVitality
                    </h3>
                </div>
                <div class="row">
                    <!--blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{ asset("/assets/images/blog/blog-1-1.jpg") }}" alt="">
                                    <div class="blog-one__date-box">
                                        <div class="blog-one__date-icon">
                                            <span class="icon-calender"></span>
                                        </div>
                                        <div class="blog-one__date-text">
                                            <p>23 Dec 2024</p>
                                        </div>
                                    </div>
                                    <div class="blog-one__plus">
                                        <a href="{{ url("blog-details") }}"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-user"></span>
                                        </div>
                                        <p>Admin</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-file"></span>
                                        </div>
                                        <p>Catagory</p>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ url("blog-details") }}">Empowering Futures Quality the
                                        Care Close to Home and way</a></h3>
                                <div class="blog-one__read-more">
                                    <a href="{{ url("blog-details") }}" class="thm-btn">Read More <span
                                            class="icon-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--blog One Single End-->
                    <!--blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{ asset("/assets/images/blog/blog-1-2.jpg") }}" alt="">
                                    <div class="blog-one__date-box">
                                        <div class="blog-one__date-icon">
                                            <span class="icon-calender"></span>
                                        </div>
                                        <div class="blog-one__date-text">
                                            <p>23 Dec 2024</p>
                                        </div>
                                    </div>
                                    <div class="blog-one__plus">
                                        <a href="{{ url("blog-details") }}"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-user"></span>
                                        </div>
                                        <p>Admin</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-file"></span>
                                        </div>
                                        <p>Catagory</p>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ url("blog-details") }}">Your Health, Our Mission Caring
                                        for It focuses on promoting health</a></h3>
                                <div class="blog-one__read-more">
                                    <a href="{{ url("blog-details") }}" class="thm-btn">Read More <span
                                            class="icon-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--blog One Single End-->
                    <!--blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{ asset("/assets/images/blog/blog-1-3.jpg") }}" alt="">
                                    <div class="blog-one__date-box">
                                        <div class="blog-one__date-icon">
                                            <span class="icon-calender"></span>
                                        </div>
                                        <div class="blog-one__date-text">
                                            <p>23 Dec 2024</p>
                                        </div>
                                    </div>
                                    <div class="blog-one__plus">
                                        <a href="{{ url("blog-details") }}"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-user"></span>
                                        </div>
                                        <p>Admin</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-file"></span>
                                        </div>
                                        <p>Catagory</p>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ url("blog-details") }}">Your Wellness Priority
                                        Empowering Healthier Compassionate</a></h3>
                                <div class="blog-one__read-more">
                                    <a href="{{ url("blog-details") }}" class="thm-btn">Read More <span
                                            class="icon-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--blog One Single End-->
                </div>
            </div>
        </section>
        <!--Blog One End-->

        <!--Contact One Start-->
        <section class="contact-one" id="contact">
            <div class="container">
                <div class="contact-one__inner">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="contact-one__left">
                                <div class="contact-one__img">
                                    <img src="{{ asset("/assets/images/resources/contact-one-img-1.jpg") }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="contact-one__right">
                                <h3 class="contact-one__title">Appiontment Now</h3>
                                <form class="contact-form-validated contact-one__form"method="POST" action="assets/inc/sendemail.php" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-one__input-box">
                                                <input type="text" name="name" placeholder="Your Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-one__input-box">
                                                <input type="email" name="email" placeholder="Your Email" required="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-one__input-box">
                                                <input type="text" name="number" placeholder="Your Number" required="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-one__input-box">
                                                <input type="text" placeholder="mm/dd/yyy" name="date" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-one__input-box text-message-box">
                                                <textarea name="message" placeholder="Message here.."></textarea>
                                            </div>
                                            <div class="contact-one__btn-box">
                                                <button type="submit" class="thm-btn">Appointment Now<span
                                                        class="icon-plus"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact One End-->
       
<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection