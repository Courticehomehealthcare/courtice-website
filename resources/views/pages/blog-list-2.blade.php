@extends('layouts.layout-inner-page')
@section('title', 'Blog List Two || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
                <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
                <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
                <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
                <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
                <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';

@endphp
@php
    $title = 'Blog List Two';
    $subtitle = 'Blog List Two';
@endphp
@section('content')

    <x-strickyHeader />

    <!--Blog List Start-->
    <section class="blog-list">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar sidebar--two">
                        <div class="sidebar__single sidebar__search">
                            <form action="#" class="sidebar__search-form">
                                <input type="search" placeholder="Search....">
                                <button type="submit"><i class="icon-search"></i></button>
                            </form>
                        </div>
                        <div class="sidebar__single sidebar__post-box">
                            <h3 class="sidebar__title">Recent News</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                <li>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <a href="{{ url("blog-details") }}">Partnering in Wellnes A Tradition of
                                                Healing</a>
                                        </h3>
                                        <p class="sidebar__post-date"><span class="icon-calender"></span>20 Aug,2024
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <a href="{{ url("blog-details") }}">Your Wellness Our Empowering Healthier Lives
                                                Priority</a>
                                        </h3>
                                        <p class="sidebar__post-date"><span class="icon-calender"></span>20 Aug,2024
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <a href="{{ url("blog-details") }}">Quality Care, Exceptional Service Your
                                                Health Our Mission</a>
                                        </h3>
                                        <p class="sidebar__post-date"><span class="icon-calender"></span>20 Aug,2024
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__all-category">
                            <h3 class="sidebar__title">Category</h3>
                            <ul class="sidebar__all-category-list list-unstyled">
                                <li>
                                    <a href="{{ url("blog-details") }}"><span class="icon-arrow-right"></span>A Tradition of
                                        Healing
                                        There</a>
                                </li>
                                <li class="active">
                                    <a href="{{ url("blog-details") }}"><span class="icon-arrow-right"></span>Compassionate
                                        Care Always</a>
                                </li>
                                <li>
                                    <a href="{{ url("blog-details") }}"><span class="icon-arrow-right"></span>Caring for
                                        You, Always</a>
                                </li>
                                <li>
                                    <a href="{{ url("blog-details") }}"><span class="icon-arrow-right"></span>Where Health
                                        Matters Most</a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__tags">
                            <h3 class="sidebar__title">Tags</h3>
                            <div class="sidebar__tags-list">
                                <a href="{{ url("blog-details") }}">Therapy</a>
                                <a href="{{ url("blog-details") }}">Wellness</a>
                                <a href="{{ url("blog-details") }}">Meditation</a>
                                <a href="{{ url("blog-details") }}">Clinics</a>
                                <a href="{{ url("blog-details") }}">Mental Health</a>
                                <a href="{{ url("blog-details") }}">Health</a>
                            </div>
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
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-list__left">
                        <!--Blog List Single Start-->
                        <div class="blog-list__single">
                            <div class="blog-list__img-box">
                                <div class="blog-list__img">
                                    <img src="{{ asset("/assets/images/blog/blog-list-1-1.jpg") }}" alt="">
                                    <div class="blog-list__date-box">
                                        <div class="blog-list__date-icon">
                                            <span class="icon-calender"></span>
                                        </div>
                                        <div class="blog-list__date-text">
                                            <p>23 Dec 2025</p>
                                        </div>
                                    </div>
                                    <div class="blog-list__plus">
                                        <a href="{{ url("blog-details") }}"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-list__content">
                                <ul class="blog-list__meta list-unstyled">
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
                                <h3 class="blog-list__title"><a href="{{ url("blog-details") }}">Empowering Healthier Lives
                                        Compassionate Care</a></h3>
                                <div class="blog-list__read-more">
                                    <a href="{{ url("blog-details") }}" class="thm-btn">Read More <span
                                            class="icon-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--Blog List Single End-->
                        <!--Blog List Single Start-->
                        <div class="blog-list__single">
                            <div class="blog-list__img-box">
                                <div class="blog-list__img">
                                    <img src="{{ asset("/assets/images/blog/blog-list-1-2.jpg") }}" alt="">
                                    <div class="blog-list__date-box">
                                        <div class="blog-list__date-icon">
                                            <span class="icon-calender"></span>
                                        </div>
                                        <div class="blog-list__date-text">
                                            <p>23 Dec 2025</p>
                                        </div>
                                    </div>
                                    <div class="blog-list__plus">
                                        <a href="{{ url("blog-details") }}"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-list__content">
                                <ul class="blog-list__meta list-unstyled">
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
                                <h3 class="blog-list__title"><a href="{{ url("blog-details") }}">Compassionate Care, Always
                                        There Health Always</a></h3>
                                <div class="blog-list__read-more">
                                    <a href="{{ url("blog-details") }}" class="thm-btn">Read More <span
                                            class="icon-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--Blog List Single End-->
                        <!--Blog List Single Start-->
                        <div class="blog-list__single">
                            <div class="blog-list__img-box">
                                <div class="blog-list__img">
                                    <img src="{{ asset("/assets/images/blog/blog-list-1-3.jpg") }}" alt="">
                                    <div class="blog-list__date-box">
                                        <div class="blog-list__date-icon">
                                            <span class="icon-calender"></span>
                                        </div>
                                        <div class="blog-list__date-text">
                                            <p>23 Dec 2025</p>
                                        </div>
                                    </div>
                                    <div class="blog-list__plus">
                                        <a href="{{ url("blog-details") }}"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-list__content">
                                <ul class="blog-list__meta list-unstyled">
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
                                <h3 class="blog-list__title"><a href="{{ url("blog-details") }}">Quality Care Service Your
                                        Health Our Mission</a></h3>
                                <div class="blog-list__read-more">
                                    <a href="{{ url("blog-details") }}" class="thm-btn">Read More <span
                                            class="icon-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--Blog List Single End-->
                        <div class="blog-list__pagination">
                            <ul class="pg-pagination list-unstyled">
                                <li class="prev active">
                                    <a href="{{ url("blog-details") }}" aria-label="prev">1</a>
                                </li>
                                <li class="count"><a href="{{ url("blog-details") }}">2</a></li>
                                <li class="count"><a href="{{ url("blog-details") }}">3</a></li>
                                <li class="next">
                                    <a href="{{ url("blog-details") }}" aria-label="Next"><span
                                            class="icon-left-arrows"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog List End-->

    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection