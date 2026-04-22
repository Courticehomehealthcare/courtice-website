@extends('layouts.layout3')
@section('title', ($product->meta_title ?: $product->name) . ' || Courtice Home Health Care')
@section('meta_description', $product->meta_description)
@section('meta_keywords', $product->meta_keywords)

@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/error-page.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/shop.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
            
@endphp
@php
    $title = $product->name;
    $subtitle = 'Product Details';
@endphp
@section('content')

<x-strickyHeaderThree/>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('assets/images/banner/about_banner.png') }});"></div>
    <div class="container">
        <div class="page-header__inner">
            <h3>{{ $product->name }}</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span class="icon-arrow-left"></span></li>
                    <li><a href="{{ route('collections') }}">Collections</a></li>
                    <li><span class="icon-arrow-left"></span></li>
                    <li><a href="{{ route('products', $product->category->slug) }}">{{ $product->category->categoriename }}</a></li>
                    <li><span class="icon-arrow-left"></span></li>
                    <li>{{ $product->name }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Start Product Details-->
<section class="product-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="product-details__left">
                    <div class="product-details__left-inner">
                        <div class="product-details__content-box">
                            <div class="swiper-container" id="shop-details-one__carousel">
                                <div class="swiper-wrapper">
                                    @if($product->main_image)
                                    <div class="swiper-slide">
                                        <div class="product-details__img">
                                            <img src="{{ asset('uploads/products/' . $product->main_image) }}" alt="{{ $product->name }}">
                                        </div>
                                    </div>
                                    @endif
                                    @foreach($product->images as $gallery)
                                    <div class="swiper-slide">
                                        <div class="product-details__img">
                                            <img src="{{ asset('uploads/products/gallery/' . $gallery->image) }}" alt="{{ $product->name }}">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="product-details__nav">
                                <div class="swiper-button-prev" id="product-details__swiper-button-next">
                                    <i class="icon-left-arrow"></i>
                                </div>
                                <div class="swiper-button-next" id="product-details__swiper-button-prev">
                                    <i class="icon-right-arrow"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-details__thumb-box">
                            <div class="swiper-container" id="shop-details-one__thumb">
                                <div class="swiper-wrapper">
                                    @if($product->main_image)
                                    <div class="swiper-slide">
                                        <div class="product-details__thumb-img">
                                            <img src="{{ asset('uploads/products/' . $product->main_image) }}" alt="{{ $product->name }}">
                                        </div>
                                    </div>
                                    @endif
                                    @foreach($product->images as $gallery)
                                    <div class="swiper-slide">
                                        <div class="product-details__thumb-img">
                                            <img src="{{ asset('uploads/products/gallery/' . $gallery->image) }}" alt="{{ $product->name }}">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-6">
                <div class="product-details__right">
                    <div class="product-details__top">
                        <h3 class="product-details__title">
                            {{ $product->name }} <span>{{ $product->price ? '$' . $product->price : 'Contact for Price' }}</span>
                        </h3>
                    </div>
                    <div class="product-details__content">
                        <p class="product-details__content-text1">
                            {{ $product->small_description }}
                        </p>
                        @if($product->sku)
                        <p class="product-details__content-text2">SKU: {{ $product->sku }} <br>
                            Available in store</p>
                        @endif
                    </div>
                    <div class="product-details__inner">
                        <div class="product-details__buttons-boxes">
                            <div class="product-details__buttons-1">
                                <a href="tel:+19054321234" class="thm-btn">Call for Inquiry <span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details__social">
                        <div class="title">
                            <h3>Share with friends:</h3>
                        </div>
                        <div class="product-details__social-link">
                            <a href="#"><span class="fab fa-twitter"></span></a>
                            <a href="#"><span class="fab fa-facebook"></span></a>
                            <a href="#"><span class="fab fa-pinterest-p"></span></a>
                            <a href="#"><span class="fab fa-instagram"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Product Details-->

<!--Shop Details Start-->
<section class="product-description">
    <div class="container">
        <div class="product-details__description">
            <div class="product-details__main-tab-box tabs-box">
                <ul class="tab-buttons clearfix list-unstyled">
                    <li data-tab="#description" class="tab-btn active-btn"><span>Description</span></li>
                </ul>
                <div class="tabs-content">
                    <!--tab-->
                    <div class="tab active-tab" id="description">
                        <div class="product-details__tab-content-inner">
                            <div class="product-details__description-content">
                                {!! $product->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Shop Details End-->

<!-- Start Related Products -->
@if($relatedProducts->count() > 0)
<section class="related-products">
    <div class="container">
        <div class="related-products__title">
            <h3>Related Products</h3>
        </div>
        <div class="row">
            <div class="related-products__carousel owl-carousel owl-theme owl-dot-style1">
                @foreach($relatedProducts as $related)
                <!--Product All Single Start-->
                <div class="single-product-style1 instyle--2">
                    <div class="single-product-style1__img">
                        @if($related->main_image)
                            <img src="{{ asset('uploads/products/' . $related->main_image) }}" alt="{{ $related->name }}">
                        @else
                            <img src="{{ asset('assets/images/resources/no-image.jpg') }}" alt="No Image">
                        @endif
                        <ul class="single-product-style1__info">
                            <li>
                                <a href="{{ route('product-details', $related->slug) }}" title="View Details">
                                    <i class="fa fa-regular fa-eye"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="single-product-style1__content">
                        <div class="single-product-style1__content-left">
                            <h4>
                                <a href="{{ route('product-details', $related->slug) }}">
                                    {{ $related->name }}
                                </a>
                            </h4>
                            <p>{{ $related->price ? '$' . $related->price : '' }}</p>
                        </div>
                    </div>
                </div>
                <!--Product All Single End-->
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
<!-- End Related Products -->
       
<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection
       
<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection