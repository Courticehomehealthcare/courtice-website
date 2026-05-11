@extends('layouts.layout3')
@section('title', $page->title . ' || Courtice Home Health Care')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
@endphp

@section('content')

    <x-strickyHeaderThree />

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('assets/images/banner/about_banner.png') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h3>{{ $page->title }}</h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span class="icon-arrow-left"></span></li>
                        <li>{{ $page->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="static-page-content" style="padding: 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="static-page-content__inner">
                        <div class="static-page-content__text">
                            {!! $page->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footerThree />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
