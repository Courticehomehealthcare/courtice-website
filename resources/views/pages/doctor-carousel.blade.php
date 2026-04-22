
@extends('layouts.layout-inner-page')
@section('title', 'Doctor Carousel || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
            
@endphp
@php
    $title = 'Doctor Carousel';
    $subtitle = 'Doctor Carousel';
@endphp
@section('content')

<x-strickyHeader/>
 
        <!--Team Carousel Page Start -->
        <section class="team-carousel-page">
            <div class="container">
                <div class="team-carousel-style owl-carousel owl-theme carousel-dot-style">
                    <!--Team Two Single Start-->
                    <div class="item">
                        <div class="team-two__single">
                            <div class="team-two__img-box">
                                <div class="team-two__img">
                                    <img src="{{ asset("/assets/images/team/team-2-1.jpg") }}" alt="">
                                </div>
                                <div class="team-two__plus-and-social">
                                    <div class="team-two__plus">
                                        <span class="icon-plus"></span>
                                    </div>
                                    <div class="team-two__social">
                                        <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__title"><a href="{{ url("doctor-details") }}">Dr.William Barbara</a></h3>
                                <p class="team-two__sub-title">Neurology Expert</p>
                            </div>
                        </div>
                    </div>
                    <!--Team Two Single End-->
                    <!--Team Two Single Start-->
                    <div class="item">
                        <div class="team-two__single">
                            <div class="team-two__img-box">
                                <div class="team-two__img">
                                    <img src="{{ asset("/assets/images/team/team-2-2.jpg") }}" alt="">
                                </div>
                                <div class="team-two__plus-and-social">
                                    <div class="team-two__plus">
                                        <span class="icon-plus"></span>
                                    </div>
                                    <div class="team-two__social">
                                        <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__title"><a href="{{ url("doctor-details") }}">Dr.Richard Susan</a></h3>
                                <p class="team-two__sub-title">Dental Care</p>
                            </div>
                        </div>
                    </div>
                    <!--Team Two Single End-->
                    <!--Team Two Single Start-->
                    <div class="item">
                        <div class="team-two__single">
                            <div class="team-two__img-box">
                                <div class="team-two__img">
                                    <img src="{{ asset("/assets/images/team/team-2-3.jpg") }}" alt="">
                                </div>
                                <div class="team-two__plus-and-social">
                                    <div class="team-two__plus">
                                        <span class="icon-plus"></span>
                                    </div>
                                    <div class="team-two__social">
                                        <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__title"><a href="{{ url("doctor-details") }}">Dr.Joseph Jessica</a></h3>
                                <p class="team-two__sub-title">Eye Expert</p>
                            </div>
                        </div>
                    </div>
                    <!--Team Two Single End-->
                    <!--Team Two Single Start-->
                    <div class="item">
                        <div class="team-two__single">
                            <div class="team-two__img-box">
                                <div class="team-two__img">
                                    <img src="{{ asset("/assets/images/team/team-2-4.jpg") }}" alt="">
                                </div>
                                <div class="team-two__plus-and-social">
                                    <div class="team-two__plus">
                                        <span class="icon-plus"></span>
                                    </div>
                                    <div class="team-two__social">
                                        <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__title"><a href="{{ url("doctor-details") }}">Dr.Mukesh Kummer</a></h3>
                                <p class="team-two__sub-title">Heart Spacialist</p>
                            </div>
                        </div>
                    </div>
                    <!--Team Two Single End-->
                    <!--Team Two Single Start-->
                    <div class="item">
                        <div class="team-two__single">
                            <div class="team-two__img-box">
                                <div class="team-two__img">
                                    <img src="{{ asset("/assets/images/team/team-2-5.jpg") }}" alt="">
                                </div>
                                <div class="team-two__plus-and-social">
                                    <div class="team-two__plus">
                                        <span class="icon-plus"></span>
                                    </div>
                                    <div class="team-two__social">
                                        <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__title"><a href="{{ url("doctor-details") }}">Dr.David Jons</a></h3>
                                <p class="team-two__sub-title">Nero Spacialist</p>
                            </div>
                        </div>
                    </div>
                    <!--Team Two Single End-->
                    <!--Team Two Single Start-->
                    <div class="item">
                        <div class="team-two__single">
                            <div class="team-two__img-box">
                                <div class="team-two__img">
                                    <img src="{{ asset("/assets/images/team/team-2-6.jpg") }}" alt="">
                                </div>
                                <div class="team-two__plus-and-social">
                                    <div class="team-two__plus">
                                        <span class="icon-plus"></span>
                                    </div>
                                    <div class="team-two__social">
                                        <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__title"><a href="{{ url("doctor-details") }}">Dr.Andew Hope</a></h3>
                                <p class="team-two__sub-title">Medicine Specialists</p>
                            </div>
                        </div>
                    </div>
                    <!--Team Two Single End-->
                    <!--Team Two Single Start-->
                    <div class="item">
                        <div class="team-two__single">
                            <div class="team-two__img-box">
                                <div class="team-two__img">
                                    <img src="{{ asset("/assets/images/team/team-2-2.jpg") }}" alt="">
                                </div>
                                <div class="team-two__plus-and-social">
                                    <div class="team-two__plus">
                                        <span class="icon-plus"></span>
                                    </div>
                                    <div class="team-two__social">
                                        <a href="{{ url("doctor-details") }}"><span class="icon-facebook"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-twitter"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-instagram"></span></a>
                                        <a href="{{ url("doctor-details") }}"><span class="icon-pinterest"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__title"><a href="{{ url("doctor-details") }}">Dr.Richard Susan</a></h3>
                                <p class="team-two__sub-title">Dental Care</p>
                            </div>
                        </div>
                    </div>
                    <!--Team Two Single End-->
                </div>
            </div>
        </section>
        <!--Team Carousel Page End -->
       
<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection