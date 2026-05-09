
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
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        margin-bottom: 30px;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid #f0f0f0;
        box-shadow: 0 4px 6px rgba(0,0,0,0.02);
    }

    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        border-color: #e0f7fa;
    }

    .product-card__img {
        position: relative;
        padding: 20px;
        background: #fff;
        height: 280px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .product-card__img img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .product-card:hover .product-card__img img {
        transform: scale(1.08);
    }

    .product-card__content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background: #fff;
        border-top: 1px solid #f8f8f8;
    }

    .product-card__title {
        font-size: 17px;
        font-weight: 700;
        margin-bottom: 12px;
        line-height: 1.5;
        min-height: 50px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .product-card__title a {
        color: var(--shop-purple);
        text-decoration: none;
        transition: color 0.3s;
    }

    .product-card__title a:hover {
        color: #00bdd6;
    }

    .product-card__price {
        font-size: 20px;
        font-weight: 800;
        color: #00bdd6;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .product-card__btn {
        margin-top: 25px;
        background: var(--shop-purple);
        color: #fff;
        text-align: center;
        padding: 14px;
        border-radius: 12px;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s;
        border: 2px solid var(--shop-purple);
        display: block;
    }

    .product-card__btn:hover {
        background: #00bdd6;
        border-color: #00bdd6;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0, 189, 214, 0.2);
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

    .out-of-stock-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        background: rgba(255, 77, 79, 0.9);
        color: #fff;
        padding: 6px 14px;
        border-radius: 8px;
        font-size: 11px;
        font-weight: 800;
        text-transform: uppercase;
        z-index: 5;
        backdrop-filter: blur(4px);
        letter-spacing: 0.5px;
        box-shadow: 0 4px 10px rgba(255, 77, 79, 0.3);
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
            <div class="row">
                <!-- Sidebar -->
                <div class="col-xl-3 col-lg-4">
                    <!-- Categories Sidebar -->
                    <div class="shop-sidebar" style="background: #ffffff; padding: 0; border-radius: 16px; margin-bottom: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; overflow: hidden;">
                        <div style="background: #fcfcfc; padding: 25px 30px; border-bottom: 1px solid #f0f0f0;">
                            <h3 style="font-size: 20px; font-weight: 800; color: var(--shop-purple); margin: 0; display: flex; align-items: center; gap: 10px;">
                                <i class="fa fa-th-large" style="font-size: 16px; color: #00bdd6;"></i>
                                Categories
                            </h3>
                        </div>
                        <ul style="list-style: none; padding: 15px; margin: 0;">
                            <li style="margin-bottom: 5px;">
                                <a href="{{ route('collections') }}" class="sidebar-link {{ $is_root ? 'active' : '' }}">
                                    <span class="dot"></span>
                                    All Products
                                </a>
                            </li>
                            @foreach($categories as $cat)
                                @php $isActive = isset($category->slug) && $category->slug == $cat->slug; @endphp
                                <li style="margin-bottom: 5px;">
                                    <a href="{{ route('products', $cat->slug) }}" class="sidebar-link {{ $isActive ? 'active' : '' }}">
                                        <span class="dot"></span>
                                        {{ $cat->categoriename }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Filter Sidebar -->
                    <div class="shop-sidebar" style="background: #ffffff; padding: 30px; border-radius: 16px; margin-bottom: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #f0f0f0;">
                        <h3 style="font-size: 20px; font-weight: 800; color: var(--shop-purple); margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
                            <i class="fa fa-filter" style="font-size: 16px; color: #00bdd6;"></i>
                            Filters
                        </h3>
                        
                        <form id="sidebarFilterForm" action="{{ request()->url() }}" method="GET">
                            @foreach(request()->only(['sort_by', 'per_page']) as $key => $value)
                                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                            @endforeach

                            <div style="margin-bottom: 30px;">
                                <h4 style="font-size: 16px; font-weight: 700; color: #333; margin-bottom: 15px;">Price Range</h4>
                                <div style="display: flex; gap: 10px; align-items: center;">
                                    <input type="number" name="min_price" value="{{ request('min_price') }}" placeholder="Min" style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ddd; font-size: 14px;">
                                    <span style="color: #999;">-</span>
                                    <input type="number" name="max_price" value="{{ request('max_price') }}" placeholder="Max" style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ddd; font-size: 14px;">
                                </div>
                            </div>

                            <div style="margin-bottom: 30px;">
                                <h4 style="font-size: 16px; font-weight: 700; color: #333; margin-bottom: 15px;">Availability</h4>
                                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; font-size: 14px; color: #555;">
                                    <input type="checkbox" name="in_stock" value="true" {{ request('in_stock') == 'true' ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: #00bdd6;" onchange="this.form.submit()">
                                    In Stock Only
                                </label>
                            </div>

                            <button type="submit" class="thm-btn" style="width: 100%; padding: 12px; font-size: 15px;">Apply Filters</button>
                            <a href="{{ request()->url() }}" style="display: block; text-align: center; margin-top: 15px; font-size: 13px; color: #999; text-decoration: none;">Clear All</a>
                        </form>
                    </div>
                </div>

                <style>
                    /* Sidebar styles */
                    .sidebar-link {
                        color: #555;
                        text-decoration: none !important;
                        font-weight: 500;
                        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                        display: flex;
                        align-items: center;
                        gap: 12px;
                        padding: 12px 15px;
                        border-radius: 10px;
                        position: relative;
                        font-size: 15px;
                    }

                    .sidebar-link .dot {
                        width: 6px;
                        height: 6px;
                        background: #ddd;
                        border-radius: 50%;
                        transition: all 0.3s;
                    }

                    .sidebar-link:hover {
                        background: #f0f9fa;
                        color: #00bdd6;
                        padding-left: 20px;
                    }

                    .sidebar-link:hover .dot {
                        background: #00bdd6;
                        transform: scale(1.5);
                    }

                    .sidebar-link.active {
                        background: #e6f8fa;
                        color: #00bdd6;
                        font-weight: 700;
                    }

                    .sidebar-link.active .dot {
                        background: #00bdd6;
                        transform: scale(1.5);
                    }

                    .sidebar-link.active::after {
                        content: '';
                        position: absolute;
                        right: 15px;
                        width: 6px;
                        height: 6px;
                        background: #00bdd6;
                        border-radius: 50%;
                        animation: pulse 2s infinite;
                    }

                    @keyframes pulse {
                        0% { transform: scale(1); opacity: 1; }
                        50% { transform: scale(2); opacity: 0; }
                        100% { transform: scale(1); opacity: 0; }
                    }

                    .sort-select {
                        appearance: none;
                        background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23999' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E") no-repeat right 12px center;
                        border: 1px solid #ddd;
                        color: #555;
                        cursor: pointer;
                        transition: all 0.3s;
                    }
                    .sort-select:focus { border-color: #00bdd6; outline: none; }
                </style>

                <!-- Product Grid -->
                <div class="col-xl-9 col-lg-8">
                    <div class="shop-header" style="text-align: left; margin-bottom: 30px; background: linear-gradient(to right, #f8f9fa, #fff); padding: 30px; border-radius: 16px; border-left: 4px solid #00bdd6;">
                        <h2 style="margin-bottom: 8px; font-size: 32px; font-weight: 800; color: var(--shop-purple);">{{ $category->categoriename }}</h2>
                        <ul class="shop-breadcrumb" style="justify-content: flex-start; margin: 0; font-size: 14px;">
                            <li><a href="{{ url('/') }}" style="color: #666;">Home</a></li>
                            <li style="margin: 0 10px; color: #ccc;">/</li>
                            <li><a href="{{ route('collections') }}" style="color: #666;">Shop</a></li>
                            <li style="margin: 0 10px; color: #ccc;">/</li>
                            <li style="color: #00bdd6; font-weight: 600;">{{ $category->categoriename }}</li>
                        </ul>
                    </div>

                    <!-- Top Control Bar -->
                    <div class="filter-bar" style="background: #ffffff; padding: 15px 25px; border-radius: 12px; margin-bottom: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; display: flex; justify-content: space-between; align-items: center; gap: 20px;">
                        <div style="font-size: 14px; font-weight: 600; color: #777;">
                            <i class="fa fa-th-list" style="margin-right: 8px; color: #00bdd6;"></i>
                            Displaying products
                        </div>
                        <form id="topControlForm" action="{{ request()->url() }}" method="GET" style="display: flex; align-items: center; gap: 20px;">
                            @foreach(request()->except(['sort_by', 'per_page']) as $key => $value)
                                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                            @endforeach

                            <div style="display: flex; align-items: center; gap: 10px;">
                                <label style="font-size: 13px; font-weight: 700; color: #333; margin: 0; white-space: nowrap;">Show:</label>
                                <select name="per_page" class="premium-select" onchange="this.form.submit()">
                                    <option value="12" {{ request('per_page', 12) == 12 ? 'selected' : '' }}>12</option>
                                    <option value="24" {{ request('per_page') == 24 ? 'selected' : '' }}>24</option>
                                    <option value="48" {{ request('per_page') == 48 ? 'selected' : '' }}>48</option>
                                </select>
                            </div>

                            <div style="display: flex; align-items: center; gap: 10px;">
                                <label style="font-size: 13px; font-weight: 700; color: #333; margin: 0; white-space: nowrap;">Sort:</label>
                                <select name="sort_by" class="premium-select" onchange="this.form.submit()" style="min-width: 160px;">
                                    <option value="TITLE" {{ request('sort_by') == 'TITLE' ? 'selected' : '' }}>Default</option>
                                    <option value="price-low-high" {{ request('sort_by') == 'price-low-high' ? 'selected' : '' }}>Price: Low to High</option>
                                    <option value="price-high-low" {{ request('sort_by') == 'price-high-low' ? 'selected' : '' }}>Price: High to Low</option>
                                    <option value="newest" {{ request('sort_by') == 'newest' ? 'selected' : '' }}>Newest</option>
                                    <option value="title-desc" {{ request('sort_by') == 'title-desc' ? 'selected' : '' }}>A to Z</option>
                                </select>
                            </div>
                        </form>
                    </div>

                    <style>
                        .premium-select {
                            appearance: none;
                            background: #fcfcfc url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23999' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E") no-repeat right 12px center;
                            border: 1px solid #e0e0e0;
                            border-radius: 8px;
                            padding: 8px 35px 8px 12px;
                            font-size: 13px;
                            font-weight: 600;
                            color: #555;
                            cursor: pointer;
                            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                            outline: none;
                        }
                        .premium-select:hover {
                            border-color: #00bdd6;
                            background-color: #fff;
                        }
                        .premium-select:focus {
                            border-color: #00bdd6;
                            box-shadow: 0 0 0 3px rgba(0, 189, 214, 0.1);
                        }
                    </style>

                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                                <div class="product-card">
                                    <div class="product-card__img">
                                        <a href="{{ route('product-details', $product->slug) }}">
                                            <img src="{{ $product->main_image ?? asset('assets/images/resources/no-image.jpg') }}" alt="{{ $product->name }}">
                                        </a>
                                        @if(!$product->is_available)
                                            <div class="out-of-stock-badge">Out of Stock</div>
                                        @endif
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
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    @if($pageInfo['hasNextPage'] || $pageInfo['hasPreviousPage'])
                        <div class="shop-pagination" style="margin-top: 50px; display: flex; justify-content: center; align-items: center; gap: 15px;">
                            @if($pageInfo['hasPreviousPage'])
                                <a href="{{ request()->fullUrlWithQuery(['cursor_before' => $pageInfo['startCursor'], 'cursor_after' => null, 'per_page' => request('per_page', 12)]) }}" class="pagination-btn">
                                    <i class="fa fa-chevron-left"></i> Previous
                                </a>
                            @else
                                <span class="pagination-btn disabled">
                                    <i class="fa fa-chevron-left"></i> Previous
                                </span>
                            @endif

                            <div style="font-size: 14px; font-weight: 600; color: #999; padding: 0 10px;">
                                Page
                            </div>

                            @if($pageInfo['hasNextPage'])
                                <a href="{{ request()->fullUrlWithQuery(['cursor_after' => $pageInfo['endCursor'], 'cursor_before' => null, 'per_page' => request('per_page', 12)]) }}" class="pagination-btn">
                                    Next <i class="fa fa-chevron-right"></i>
                                </a>
                            @else
                                <span class="pagination-btn disabled">
                                    Next <i class="fa fa-chevron-right"></i>
                                </span>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        @endif

        <style>
            .pagination-btn {
                display: inline-flex;
                align-items: center;
                gap: 10px;
                padding: 12px 25px;
                background: #fff;
                border: 1px solid #f0f0f0;
                border-radius: 12px;
                color: var(--shop-purple);
                font-weight: 700;
                text-decoration: none !important;
                transition: all 0.3s;
                box-shadow: 0 4px 10px rgba(0,0,0,0.03);
                font-size: 15px;
            }

            .pagination-btn:hover:not(.disabled) {
                background: var(--shop-purple);
                color: #fff;
                transform: translateY(-2px);
                box-shadow: 0 8px 20px rgba(46, 42, 79, 0.15);
            }

            .pagination-btn.disabled {
                opacity: 0.5;
                cursor: not-allowed;
                background: #f8f8f8;
                color: #ccc;
            }
        </style>

    </div>
</section>

@endsection