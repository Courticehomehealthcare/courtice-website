@extends('layouts.layout-inner-page')
@section('title', 'Project Details || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
                <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
                <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
                <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
                <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
                <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';

@endphp
@php
    $title = 'Project Details ';
    $subtitle = 'Project Details ';
@endphp
@section('content')

    <x-strickyHeader />

    <!--Project Details Start-->
    <section class="project-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="project-details__left">
                        <h3 class="project-details__title-1">Enhancing Lives Through Care</h3>
                        <p class="project-details__text-1">Medical services are an essential part of our lives,
                            offering care and treatment for various health conditions. These services encompass a
                            wide range of specialties, including primary care, pediatrics, cardiology</p>
                        <p class="project-details__text-2">Medical services are an essential part of our lives,
                            offering care and treatment for various health conditions. These are a services
                            encompass a wide range of specialties, including primary care, pediatrics, cardiology
                            Medical services are an essential part of our lives, offering care and treatment for
                            various health conditions These services </p>
                        <div class="project-details__img">
                            <img src="{{ asset("/assets/images/project/project-details-img-1.jpg") }}" alt="">
                        </div>
                        <ul class="project-details__points-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-left-arrows"></span>
                                </div>
                                <p>Dental operations involve various procedures performed by dentists</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-left-arrows"></span>
                                </div>
                                <p>Medical services are an essential part of our lives, offering care</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-left-arrows"></span>
                                </div>
                                <p>These services encompass a wide range of specialties, including primary care,
                                    pediatrics, cardiology</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-left-arrows"></span>
                                </div>
                                <p>Your Partner in Health Where Health Matters Most</p>
                            </li>
                        </ul>
                        <h3 class="project-details__title-2">Enhancing Lives Through Care</h3>
                        <p class="project-details__text-3">Medical services are an essential part of our lives,
                            offering care and treatment for various health conditions. These services encompass a
                            wide range of specialties, including primary care, pediatrics, cardiology</p>
                        <h3 class="project-details__title-3">Popular Project</h3>
                        <div class="project-details__img-and-points">
                            <div class="project-details__points-img">
                                <img src="{{ asset("/assets/images/project/project-details-points-img.jpg") }}" alt="">
                            </div>
                            <ul class="project-details__points-list-2 list-unstyled">
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
                                    <p>Pediatric Health Screenings</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-left-arrows"></span>
                                    </div>
                                    <p>Dermatology Procedures</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-left-arrows"></span>
                                    </div>
                                    <p>Nutritional Counseling Sessions</p>
                                </li>
                            </ul>
                        </div>
                        <h3 class="project-details__title-4">Holistic Health Consultations</h3>
                        <p class="project-details__text-4">Medical services are an essential part of our lives,
                            offering care and treatment for various health conditions. These services encompass a
                            wide range of specialties, including primary care, pediatrics, cardiology</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="project-details__right">
                        <div class="project-details__info-box">
                            <h3 class="project-details__info-title">Project Information</h3>
                            <ul class="project-details__info-list list-unstyled">
                                <li>
                                    <p>Category:</p>
                                    <span>Health Care</span>
                                </li>
                                <li>
                                    <p>Customer:</p>
                                    <span>Kane Darabis</span>
                                </li>
                                <li>
                                    <p>Start date: </p>
                                    <span>21 August 2024</span>
                                </li>
                                <li>
                                    <p>End date:</p>
                                    <span>28 October 2024</span>
                                </li>
                                <li>
                                    <p>Rating:</p>
                                    <div class="project-details__info-ratting">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star last-icon"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__need-help">
                            <h3 class="sidebar__need-help-title">Need Help?Call Us</h3>
                            <div class="sidebar__need-help-icon">
                                <span class="icon-call"></span>
                            </div>
                            <div class="sidebar__need-help-call">
                                <a href="{{ url("tel:888178456765") }}">+1 905-721-0004</a>
                            </div>
                        </div>
                        <div class="project-details__download-box">
                            <ul class="project-details__download-list list-unstyled">
                                <li>
                                    <a href="{{ url("#") }}">Company File<i
                                            class="icon-download"></i><span>(1.5Mb)</span></a>
                                </li>
                                <li>
                                    <a href="{{ url("#") }}">Project File<i
                                            class="icon-download"></i><span>(1.5Mb)</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-details__prev-next">
                <div class="project-details__prev">
                    <div class="project-details__prev-icon">
                        <a href="{{ url("#") }}"><span class="icon-prev"></span></a>
                    </div>
                    <div class="content">
                        <p>Previous</p>
                    </div>
                </div>
                <div class="project-details__next">
                    <div class="content">
                        <p>Next</p>
                    </div>
                    <div class="project-details__next-icon">
                        <a href="{{ url("#") }}"><span class="icon-prev"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Project Details End-->

    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection