
@extends('layouts.layout-inner-page')
@section('title', 'Blog Carousel || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
            
@endphp
@php
    $title = 'Blog Carousel';
    $subtitle = 'Blog Carousel';
@endphp
@section('content')

<x-strickyHeader/>
 
        <!--Blog Carousel Page Start-->
        <section class="blog-carousel-page">
            <div class="container">
                <div class="blog-carousel-style owl-carousel owl-theme carousel-dot-style">
                    <!--blog One Single Start-->
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{ asset("/assets/images/blog/blog-1-4.jpg") }}" alt="">
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
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{ asset("/assets/images/blog/blog-1-5.jpg") }}" alt="">
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
                    <!--blog One Single Start-->
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{ asset("/assets/images/blog/blog-1-6.jpg") }}" alt="">
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
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{ asset("/assets/images/blog/blog-1-4.jpg") }}" alt="">
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
                </div>
            </div>
        </section>
        <!--Blog Carousel Page End-->
       
<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection