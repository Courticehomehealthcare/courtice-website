
@extends('layouts.layout-inner-page')
@section('title', 'Project Carousel || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
            
@endphp
@php
    $title = 'Project Carousel';
    $subtitle = 'Project Carousel';
@endphp
@section('content')

<x-strickyHeader/>
 
        <!--Project Carousel Page Start -->
        <section class="project-carousel-page">
            <div class="container">
                <div class="project-carousel-style owl-carousel owl-theme carousel-dot-style">
                    <!--Project Two Single End-->
                    <div class="item">
                        <div class="project-two__single">
                            <div class="project-two__img-box">
                                <div class="project-two__img">
                                    <img src="{{ asset("/assets/images/project/project-carousel-1-1.jpg") }}" alt="#">
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
                    <div class="item">
                        <div class="project-two__single">
                            <div class="project-two__img-box">
                                <div class="project-two__img">
                                    <img src="{{ asset("/assets/images/project/project-carousel-1-2.jpg") }}" alt="#">
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
                    <div class="item">
                        <div class="project-two__single">
                            <div class="project-two__img-box">
                                <div class="project-two__img">
                                    <img src="{{ asset("/assets/images/project/project-carousel-1-3.jpg") }}" alt="#">
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
                    <div class="item">
                        <div class="project-two__single">
                            <div class="project-two__img-box">
                                <div class="project-two__img">
                                    <img src="{{ asset("/assets/images/project/project-carousel-1-4.jpg") }}" alt="#">
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
                    <div class="item">
                        <div class="project-two__single">
                            <div class="project-two__img-box">
                                <div class="project-two__img">
                                    <img src="{{ asset("/assets/images/project/project-carousel-1-5.jpg") }}" alt="#">
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
                    <div class="item">
                        <div class="project-two__single">
                            <div class="project-two__img-box">
                                <div class="project-two__img">
                                    <img src="{{ asset("/assets/images/project/project-carousel-1-6.jpg") }}" alt="#">
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
                    <div class="item">
                        <div class="project-two__single">
                            <div class="project-two__img-box">
                                <div class="project-two__img">
                                    <img src="{{ asset("/assets/images/project/project-carousel-1-7.jpg") }}" alt="#">
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
        <!--Project Carousel Page End -->
       
<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection