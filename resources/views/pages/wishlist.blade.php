
@extends('layouts.layout-inner-page')
@section('title', 'Wishlist || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/shop.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
            
@endphp
@php
    $title = 'Wishlist';
    $subtitle = 'Wishlist';
@endphp
@section('content')

<x-strickyHeaderThree/>
 
        <!--Start Cart Page-->
        <section class="wishlist-page">
            <div class="container">
                <div class="table-responsive-box">
                    <table class="wishlist-table">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="product-box">
                                        <div class="img-box">
                                            <img src="{{ asset("/assets/images/shop/wishlist-page-img-1.jpg") }}" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="product-name-select-box">
                                        <div class="product-name">
                                            <h4>Insulin Pen</h4>
                                            <p>$50.00</p>
                                        </div>
                                        <div class="product-select">
                                            <a class="thm-btn wishlist-page__btn" href="{{ url("wishlist") }}">Select
                                                Product
                                                <span class="icon-right-arrow"></span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="cross-icon">
                                        <i class="fas fa-times remove-icon"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-box">
                                        <div class="img-box">
                                            <img src="{{ asset("/assets/images/shop/wishlist-page-img-2.jpg") }}" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="product-name-select-box">
                                        <div class="product-name">
                                            <h4>Nebulizer</h4>
                                            <p>$90.00</p>
                                        </div>
                                        <div class="product-select">
                                            <div class="product-select">
                                                <a class="thm-btn wishlist-page__btn" href="{{ url("wishlist") }}">Select
                                                    Product
                                                    <span class="icon-right-arrow"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="cross-icon">
                                        <i class="fas fa-times remove-icon"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-box">
                                        <div class="img-box">
                                            <img src="{{ asset("/assets/images/shop/wishlist-page-img-3.jpg") }}" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="product-name-select-box">
                                        <div class="product-name">
                                            <h4>Pulse Oximeter</h4>
                                            <p>$60.00</p>
                                        </div>
                                        <div class="product-select">
                                            <div class="product-select">
                                                <a class="thm-btn wishlist-page__btn" href="{{ url("wishlist") }}">Select
                                                    Product
                                                    <span class="icon-right-arrow"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="cross-icon">
                                        <i class="fas fa-times remove-icon"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-box">
                                        <div class="img-box">
                                            <img src="{{ asset("/assets/images/shop/wishlist-page-img-4.jpg") }}" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="product-name-select-box">
                                        <div class="product-name">
                                            <h4>Mouthwash</h4>
                                            <p>$170.00</p>
                                        </div>
                                        <div class="product-select">
                                            <div class="product-select">
                                                <a class="thm-btn wishlist-page__btn" href="{{ url("wishlist") }}">Select
                                                    Product
                                                    <span class="icon-right-arrow"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="cross-icon">
                                        <i class="fas fa-times remove-icon"></i>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="product-details__social two">
                    <div class="title">
                        <h3>Share with friends:</h3>
                    </div>
                    <div class="product-details__social-link">
                        <a href="{{ url("#") }}"><span class="fab fa-twitter"></span></a>
                        <a href="{{ url("#") }}"><span class="fab fa-facebook"></span></a>
                        <a href="{{ url("#") }}"><span class="fab fa-pinterest-p"></span></a>
                        <a href="{{ url("#") }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Cart Page-->
       
<x-footerThree/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection