
@extends('layouts.layout3')
@section('title', (isset($category->meta_title) ? $category->meta_title : ($category->categoriename ?? 'Products')) . ' || Courtice Home Health Care')
@section('meta_description', $category->meta_description ?? '')
@section('meta_keywords', $category->meta_keywords ?? '')

@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/shop.css') . '"/>';
@endphp

@section('content')

<style>
    :root {
        --shop-purple: #2e2a4f;
        --shop-gray: #f8f9fa;
        --shop-text: #212529;
    }

    .shop-container {
        padding: 60px 0;
        background: #fff;
    }

    .shop-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .shop-header h2 {
        font-size: 42px;
        font-weight: 800;
        color: var(--shop-purple);
        margin-bottom: 15px;
    }

    .shop-breadcrumb {
        display: flex;
        justify-content: center;
        gap: 10px;
        list-style: none;
        padding: 0;
        font-weight: 500;
        color: #666;
    }

    .shop-breadcrumb a {
        color: var(--shop-purple);
        text-decoration: none;
    }

    /* Category Grid */
    .category-card {
        background: var(--shop-gray);
        border-radius: 20px;
        padding: 40px 20px;
        text-align: center;
        transition: all 0.3s ease;
        text-decoration: none;
        display: block;
        height: 100%;
        border: 1px solid transparent;
    }

    .category-card:hover {
        transform: translateY(-10px);
        background: #fff;
        border-color: var(--shop-purple);
        box-shadow: 0 15px 30px rgba(46, 42, 79, 0.1);
    }

    .category-card__img {
        width: 120px;
        height: 120px;
        margin: 0 auto 25px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        padding: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .category-card__img img {
        max-width: 100%;
        height: auto;
    }

    .category-card h4 {
        font-size: 20px;
        font-weight: 700;
        color: var(--shop-purple);
        margin: 0;
    }

    /* Product Grid */
    .product-card {
        background: var(--shop-gray);
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.3s ease;
        margin-bottom: 30px;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .product-card:hover {
        transform: translateY(-10px);
        background: #fff;
        box-shadow: 0 15px 30px rgba(0,0,0,0.08);
    }

    .product-card__img {
        position: relative;
        padding: 20px;
        background: #fff;
        height: 250px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .product-card__img img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .product-card__content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .product-card__title {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 10px;
        line-height: 1.4;
    }

    .product-card__title a {
        color: var(--shop-text);
        text-decoration: none;
    }

    .product-card__price {
        font-size: 18px;
        font-weight: 800;
        color: var(--shop-purple);
    }

    .product-card__btn {
        margin-top: 20px;
        background: var(--shop-purple);
        color: #fff;
        text-align: center;
        padding: 12px;
        border-radius: 10px;
        font-weight: 600;
        text-decoration: none;
        transition: opacity 0.3s;
    }

    .product-card__btn:hover {
        opacity: 0.9;
        color: #fff;
    }

    .back-to-shop {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--shop-purple);
        text-decoration: none;
        font-weight: 600;
        margin-bottom: 30px;
    }
</style>

<x-strickyHeaderThree/>

<section class="shop-container">
    <div class="container">
        
        @if($is_root)
            <div class="shop-header">
                <h2>Shop by Category</h2>
                <ul class="shop-breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>/</li>
                    <li>Shop</li>
                </ul>
            </div>

            <div class="row">
                @foreach($categories as $cat)
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <a href="{{ route('products', $cat->slug) }}" class="category-card">
                            <div class="category-card__img">
                                <img src="{{ $cat->image }}" alt="{{ $cat->categoriename }}">
                            </div>
                            <h4>{{ $cat->categoriename }}</h4>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="shop-header">
                <a href="{{ route('collections') }}" class="back-to-shop">
                    <i class="fa fa-arrow-left"></i> Back to Categories
                </a>
                <h2>{{ $category->categoriename }}</h2>
                <ul class="shop-breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>/</li>
                    <li><a href="{{ route('collections') }}">Shop</a></li>
                    <li>/</li>
                    <li>{{ $category->categoriename }}</li>
                </ul>
            </div>

            <div class="row">
                @forelse($products as $product)
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="product-card">
                            <div class="product-card__img">
                                <a href="{{ route('product-details', $product->slug) }}">
                                    <img src="{{ $product->main_image ?? asset('assets/images/resources/no-image.jpg') }}" alt="{{ $product->name }}">
                                </a>
                            </div>
                            <div class="product-card__content">
                                <div>
                                    <h4 class="product-card__title">
                                        <a href="{{ route('product-details', $product->slug) }}">{{ $product->name }}</a>
                                    </h4>
                                    <p class="product-card__price">
                                        @if(isset($product->sale_price) && $product->sale_price)
                                            <span style="text-decoration: line-through; color: #999; font-size: 14px; margin-right: 5px;">${{ number_format($product->price, 2) }}</span>
                                            <span>${{ number_format($product->sale_price, 2) }}</span>
                                        @else
                                            ${{ number_format($product->price, 2) }}
                                        @endif
                                    </p>
                                </div>
                                <a href="{{ route('product-details', $product->slug) }}" class="product-card__btn">View Product</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center" style="padding: 100px 0;">
                        <h4>No products found in this category.</h4>
                        <a href="{{ route('collections') }}" class="thm-btn">Back to Categories</a>
                    </div>
                @endforelse
            </div>
        @endif

    </div>
</section>

@endsection