
@extends('layouts.layout-inner-page')
@section('title', 'project || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
            
@endphp
@php
    $title = 'project';
    $subtitle = 'Project';
@endphp
@section('content')

<x-strickyHeader/>
 
        <!--Project Two Start -->
        <section class="project-two">
            <div class="container">
                <div class="project-two__menu-box">
                    <ul class="project-filter clearfix post-filter has-dynamic-filters-counter list-unstyled">
                        <li data-filter=".filter-item" class="active"><span class="filter-text">View All</span></li>
                        <li data-filter=".bodysurgery"><span class="filter-text">Body Surgery</span></li>
                        <li data-filter=".dentalcare"><span class="filter-text">Dental Care</span></li>
                        <li data-filter=".allergicissue"><span class="filter-text">Allergic Issue</span></li>
                        <li data-filter=".eyecare"><span class="filter-text">Eye Care</span></li>
                    </ul>
                </div>
                <div class="row filter-layout masonary-layout">
                    <!--Project Two Single End-->
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item bodysurgery allergicissue">
                        <div class="project-two__single">
                            <div class="project-two__img-box">
                                <div class="project-two__img">
                                    <img src="{{ asset("/assets/images/project/project-2-1.jpg") }}" alt="#">
                                </div>
                                <div class="project-two__content-box">
                                    <h2 class="project-two__title"><a href="{{ url("product-details") }}">Medi Treatment</a>
                                    </h2>
                                    <p class="project-two__sub-title">Medicine</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project Two Single Start-->
                    <!--Project Two Single End-->
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item dentalcare bodysurgery allergicissue">
                        <div class="project-two__single">
                            <div class="project-two__img-box">
                                <div class="project-two__img">
                                    <img src="{{ asset("/assets/images/project/project-2-2.jpg") }}" alt="#">
                                </div>
                                <div class="project-two__content-box">
                                    <h2 class="project-two__title"><a href="{{ url("product-details") }}">Medi Treatment</a>
                                    </h2>
                                    <p class="project-two__sub-title">Medicine</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project Two Single Start-->
                    <!--Project Two Single End-->
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item allergicissue eyecare">
                        <div class="project-two__single">
                            <div class="project-two__img-box">
                                <div class="project-two__img">
                                    <img src="{{ asset("/assets/images/project/project-2-3.jpg") }}" alt="#">
                                </div>
                                <div class="project-two__content-box">
                                    <h2 class="project-two__title"><a href="{{ url("product-details") }}">Medi Treatment</a>
                                    </h2>
                                    <p class="project-two__sub-title">Medicine</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project Two Single Start-->
                    <!--Project Two Single End-->
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item eyecare bodysurgery allergicissue">
                        <div class="project-two__single">
                            <div class="project-two__img-box">
                                <div class="project-two__img">
                                    <img src="{{ asset("/assets/images/project/project-2-4.jpg") }}" alt="#">
                                </div>
                                <div class="project-two__content-box">
                                    <h2 class="project-two__title"><a href="{{ url("product-details") }}">Medi Treatment</a>
                                    </h2>
                                    <p class="project-two__sub-title">Medicine</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project Two Single Start-->
                    <!--Project Two Single End-->
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item dentalcare bodysurgery allergicissue">
                        <div class="project-two__single">
                            <div class="project-two__img-box">
                                <div class="project-two__img">
                                    <img src="{{ asset("/assets/images/project/project-2-6.jpg") }}" alt="#">
                                </div>
                                <div class="project-two__content-box">
                                    <h2 class="project-two__title"><a href="{{ url("product-details") }}">Medi Treatment</a>
                                    </h2>
                                    <p class="project-two__sub-title">Medicine</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project Two Single Start-->
                    <!--Project Two Single End-->
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item eyecare bodysurgery allergicissue">
                        <div class="project-two__single">
                            <div class="project-two__img-box">
                                <div class="project-two__img">
                                    <img src="{{ asset("/assets/images/project/project-2-5.jpg") }}" alt="#">
                                </div>
                                <div class="project-two__content-box">
                                    <h2 class="project-two__title"><a href="{{ url("product-details") }}">Medi Treatment</a>
                                    </h2>
                                    <p class="project-two__sub-title">Medicine</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project Two Single Start-->
                </div>
            </div>
        </section>
        <!--Project Two End -->

        <!--FAQ Two Start -->
        <section class="faq-two faq-four">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="faq-two__left">
                            <div class="section-title-two text-left sec-title-animation animation-style1">
                                <h6 class="section-title-two__tagline">Ask Question
                                </h6>
                                <h3 class="section-title-two__title title-animation">Partner in Health <br> Matters Most
                                </h3>
                            </div>
                            <p class="faq-two__text">Health care is a vital aspect of maintaining overall well-being,
                                encompassing a range of services from preventive care to treatment for your life</p>
                            <div class="faq-two__btn-box">
                                <a href="{{ url("contact") }}" class="thm-btn">Contact Us<i class="icon-call"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="faq-two__right">
                            <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <div class="faq-two-accrodion__count"></div>
                                        <h4>What should I do in case of a medical emergency?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Healthcare is a crucial aspect of our well-being. From hospitals to the a
                                                clinics, the encompasses a wide range Healthcare is a crucial aspect of
                                                our well-being. From hospitals </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion  active">
                                    <div class="accrodion-title">
                                        <div class="faq-two-accrodion__count"></div>
                                        <h4>What are Dedicated to Better Health?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Healthcare is a crucial aspect of our well-being. From hospitals to the a
                                                clinics, the encompasses a wide range Healthcare is a crucial aspect of
                                                our well-being. From hospitals </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <div class="faq-two-accrodion__count"></div>
                                        <h4>What preventive screenings do you recommend?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Healthcare is a crucial aspect of our well-being. From hospitals to the a
                                                clinics, the encompasses a wide range Healthcare is a crucial aspect of
                                                our well-being. From hospitals </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <div class="faq-two-accrodion__count"></div>
                                        <h4>How can I schedule an appointment?</h4>
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
                </div>
            </div>
        </section>
        <!--FAQ Two End -->
       
<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection