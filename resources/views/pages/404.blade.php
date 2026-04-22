
@extends('layouts.layout-inner-page')
@section('title', 'Error Page || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/error-page.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
            
@endphp
@php
    $title = 'Error Page';
    $subtitle = 'Error Page';
@endphp
@section('content')

<x-strickyHeader/>

    
    <!--Error Page Start-->
    <section class="error-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="error-page__inner">
                        <div class="error-page__title-box">
                            <h2 class="error-page__title">404</h2>
                        </div>
                        <h3 class="error-page__tagline">Sorry we can't find that page!</h3>
                        <p class="error-page__text">The page you are looking for was never existed.</p>
                        <form class="error-page__form">
                            <div class="error-page__form-input">
                                <input type="search" placeholder="Search here">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                        <div class="error-page__btn-box">
                            <a href="{{ url("/") }}" class="thm-btn">Back to home<span
                                    class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Error Page End-->

       
<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection