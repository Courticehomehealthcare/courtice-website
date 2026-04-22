
@extends('layouts.layout-inner-page')
@section('title', 'Pricing || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/pricing.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
            
@endphp
@php
    $title = 'Pricing';
    $subtitle = 'Pricing';
@endphp
@section('content')

<x-strickyHeader/>
 
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
       
<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection