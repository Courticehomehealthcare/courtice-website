
@extends('layouts.layout-inner-page')
@section('title', 'Services Carousel || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
            
@endphp
@php
    $title = 'Services Carousel';
    $subtitle = 'Services Carousel';
@endphp
@section('content')

<x-strickyHeader/>
 
        <!--Services Carousel Page Start -->
        <section class="services-carousel-page">
            <div class="container">
                <div class="services-carousel-style owl-carousel owl-theme carousel-dot-style">
                    <!--Services Three Single Start -->
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
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
                </div>
            </div>
        </section>
        <!--Services Carousel Page End -->
       
<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection