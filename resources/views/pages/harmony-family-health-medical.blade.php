@extends('layouts.layout-inner-page')
@section('title', 'Harmony Family Health Medical || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
                    <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
                    <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
                    <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
                    <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
                    <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';

@endphp
@php
    $title = 'Harmony Family Health Medical';
    $subtitle = 'Harmony Family Health Medical';
@endphp
@section('content')

    <x-strickyHeader />

    <!--Service Details Start-->
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details__left">
                        <div class="service-details__img">
                            <img src="{{ asset("/assets/images/resources/service-details-img-4.jpg") }}" alt="">
                        </div>
                        <div class="service-details__content">
                            <h3 class="service-details__title-1">Quality Care Exceptional Service</h3>
                            <p class="service-details__text-1">Medical services are an essential part of our lives,
                                offering care and treatment for various health conditions. These services encompass
                                a
                                wide range of specialties, including primary care, pediatrics, cardiology</p>
                            <p class="service-details__text-2">Medical services are an essential part of our lives,
                                offering care and treatment for various health conditions. These are a services
                                encompass a wide range of specialties, including primary care, pediatrics,
                                cardiology
                                Medical services are an essential part of our lives, offering care and treatment for
                                various health conditions These services </p>
                            <h4 class="service-details__title-2">Senior Care Coordination</h4>
                            <div class="service-details__points-box">
                                <ul class="service-details__points-list list-unstyled">
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
                                <ul class="service-details__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-left-arrows"></span>
                                        </div>
                                        <p>Enhancing Lives Through Care</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-left-arrows"></span>
                                        </div>
                                        <p>Quality Care, Exceptional Service</p>
                                    </li>
                                </ul>
                                <ul class="service-details__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-left-arrows"></span>
                                        </div>
                                        <p>Wellness with Care</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-left-arrows"></span>
                                        </div>
                                        <p>Compassion in Care</p>
                                    </li>
                                </ul>
                            </div>
                            <p class="service-details__text-3">Medical services are an essential part of our lives,
                                offering care and treatment for various health conditions. These services encompass
                                a wide range of specialties, including primary care, pediatrics, cardiology</p>
                            <h4 class="service-details__title-3">Quality Care, Always</h4>
                            <p class="service-details__text-4">Medical services are an essential part of our lives,
                                offering care and treatment for various health conditions. These services encompass
                                a wide range of specialties, including primary care, pediatrics, cardiology</p>
                            <div class="service-details__img-box">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="service-details__img-box-img">
                                            <img src="{{ asset("/assets/images/resources/service-details-img-box-img-1.jpg") }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="service-details__img-box-img">
                                            <img src="{{ asset("/assets/images/resources/service-details-img-box-img-2.jpg") }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="service-details__text-list list-unstyled">
                                <li>
                                    <p>Medical services are an essential part of our lives, offering care</p>
                                </li>
                                <li>
                                    <p>These services encompass a wide range of specialties, including primary care,
                                        pediatrics, cardiology</p>
                                </li>
                                <li>
                                    <p>Compassionate Care, Always There</p>
                                </li>
                                <li>
                                    <p>Quality Care, Exceptional Service Your Health, Our Mission</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="service-details__right">
                        <div class="service-details__services-box">
                            <h3 class="service-details__service-title">Services</h3>
                            <ul class="service-details__service-list list-unstyled">
                                <li>
                                    <a href="{{ url("vitality-health-solutions") }}"><span
                                            class="icon-left-arrows"></span>Vitality Health Solutions</a>
                                </li>
                                <li>
                                    <a href="{{ url("wellSpring-wellness-center") }}"><span
                                            class="icon-left-arrows"></span>WellSpring Wellness Center</a>
                                </li>
                                <li class="active">
                                    <a href="{{ url("harmony-family-health-medical") }}"><span
                                            class="icon-left-arrows"></span>Harmony Family Health Medical
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url("evergreen-medical-center") }}"><span
                                            class="icon-left-arrows"></span>Evergreen Medical Center</a>
                                </li>
                                <li>
                                    <a href="{{ url("pure-life-health-services") }}"><span
                                            class="icon-left-arrows"></span>PureLife Health Services</a>
                                </li>
                            </ul>
                        </div>
                        <div class="service-details__need-help-inner">
                            <div class="service-details__need-help">
                                <div class="service-details__need-help-bg"
                                    style="background-image: url(assets/images/resources/service-details-need-help-bg.jpg);">
                                </div>
                                <h3 class="service-details__need-help-title">Need Help?Call Us</h3>
                                <div class="service-details__need-help-icon">
                                    <span class="icon-call"></span>
                                </div>
                                <div class="service-details__need-help-call">
                                    <a href="{{ url("tel:+19057210004") }}">+1 905-721-0004</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-details__download-box">
                            <ul class="service-details__download-list list-unstyled">
                                <li>
                                    <a href="{{ url("#") }}"><span>(1.5Mb)</span>Company File</a>
                                </li>
                                <li>
                                    <a href="{{ url("#") }}"><span>(1.5Mb)</span>Project File</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services Page End-->

    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection