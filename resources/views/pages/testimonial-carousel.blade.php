
@extends('layouts.layout-inner-page')
@section('title', 'Testimonials Carousel || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
            
@endphp
@php
    $title = 'Testimonials Carousel';
    $subtitle = 'Testimonials Carousel';
@endphp
@section('content')

<x-strickyHeader/>
 
        <!--Testimonials Carousel Page Start-->
        <section class="testimonials-carousel-page">
            <div class="container">
                <div class="testimonials-carousel-style owl-carousel owl-theme carousel-dot-style">
                    <!--Testimonial Four Single Start-->
                    <div class="item">
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
                            <p class="testimonial-four__text">maintaining oral health through practices such as the
                                regular
                                check-a ups, cleanings, and treatments for teeth and an gums.</p>
                        </div>
                    </div>
                    <!--Testimonial Four Single End-->
                    <!--Testimonial Four Single Start-->
                    <div class="item">
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
                            <p class="testimonial-four__text">maintaining oral health through practices such as the
                                regular
                                check-a ups, cleanings, and treatments for teeth and an gums.</p>
                        </div>
                    </div>
                    <!--Testimonial Four Single End-->
                    <!--Testimonial Four Single Start-->
                    <div class="item">
                        <div class="testimonial-four__single">
                            <div class="testimonial-four__quote">
                                <span class="icon-quote-2"></span>
                            </div>
                            <div class="testimonial-four__client-info">
                                <div class="testimonial-four__client-img">
                                    <img src="{{ asset("/assets/images/testimonial/testimonial-4-3.jpg") }}" alt="">
                                </div>
                                <div class="testimonial-four__client-content">
                                    <h3><a href="{{ url("testimonials") }}">Will Young</a></h3>
                                    <p>Manager</p>
                                </div>
                            </div>
                            <p class="testimonial-four__text">maintaining oral health through practices such as the
                                regular
                                check-a ups, cleanings, and treatments for teeth and an gums.</p>
                        </div>
                    </div>
                    <!--Testimonial Four Single End-->
                    <!--Testimonial Four Single Start-->
                    <div class="item">
                        <div class="testimonial-four__single">
                            <div class="testimonial-four__quote">
                                <span class="icon-quote-2"></span>
                            </div>
                            <div class="testimonial-four__client-info">
                                <div class="testimonial-four__client-img">
                                    <img src="{{ asset("/assets/images/testimonial/testimonial-4-4.jpg") }}" alt="">
                                </div>
                                <div class="testimonial-four__client-content">
                                    <h3><a href="{{ url("testimonials") }}">Graum Hume</a></h3>
                                    <p>Manager</p>
                                </div>
                            </div>
                            <p class="testimonial-four__text">maintaining oral health through practices such as the
                                regular
                                check-a ups, cleanings, and treatments for teeth and an gums.</p>
                        </div>
                    </div>
                    <!--Testimonial Four Single End-->
                    <!--Testimonial Four Single Start-->
                    <div class="item">
                        <div class="testimonial-four__single">
                            <div class="testimonial-four__quote">
                                <span class="icon-quote-2"></span>
                            </div>
                            <div class="testimonial-four__client-info">
                                <div class="testimonial-four__client-img">
                                    <img src="{{ asset("/assets/images/testimonial/testimonial-4-5.jpg") }}" alt="">
                                </div>
                                <div class="testimonial-four__client-content">
                                    <h3><a href="{{ url("testimonials") }}">David Boon</a></h3>
                                    <p>Manager</p>
                                </div>
                            </div>
                            <p class="testimonial-four__text">maintaining oral health through practices such as the
                                regular
                                check-a ups, cleanings, and treatments for teeth and an gums.</p>
                        </div>
                    </div>
                    <!--Testimonial Four Single End-->
                    <!--Testimonial Four Single Start-->
                    <div class="item">
                        <div class="testimonial-four__single">
                            <div class="testimonial-four__quote">
                                <span class="icon-quote-2"></span>
                            </div>
                            <div class="testimonial-four__client-info">
                                <div class="testimonial-four__client-img">
                                    <img src="{{ asset("/assets/images/testimonial/testimonial-4-6.jpg") }}" alt="">
                                </div>
                                <div class="testimonial-four__client-content">
                                    <h3><a href="{{ url("testimonials") }}">Jessica Brown</a></h3>
                                    <p>Manager</p>
                                </div>
                            </div>
                            <p class="testimonial-four__text">maintaining oral health through practices such as the
                                regular
                                check-a ups, cleanings, and treatments for teeth and an gums.</p>
                        </div>
                    </div>
                    <!--Testimonial Four Single End-->
                </div>
            </div>
        </section>
        <!--Testimonials Carousel Page End-->
       
<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection