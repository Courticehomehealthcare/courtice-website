
@extends('layouts.layout3')
@section('title', ($category->meta_title ?: $category->categoriename) . ' || Courtice Home Health Care')
@section('meta_description', $category->meta_description)
@section('meta_keywords', $category->meta_keywords)

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
    $title = $category->categoriename;
    $subtitle = 'Products';
@endphp

@section('content')

<x-strickyHeaderThree/>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('assets/images/banner/about_banner.png') }});"></div>
    <div class="container">
        <div class="page-header__inner">
            <h3>{{ $category->categoriename }}</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span class="icon-arrow-left"></span></li>
                    @if($category->id == 0)
                        <li>Shop</li>
                    @else
                        <li><a href="{{ route('collections') }}">Shop</a></li>
                        <li><span class="icon-arrow-left"></span></li>
                        <li>{{ $category->categoriename }}</li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Product Start-->
<section class="product">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="product__showing-result" style="padding: 0 !important; margin-bottom: 30px !important; display: flex; align-items: center; justify-content: space-between; width: 100% !important; background: transparent;">
                    <p class="product__showing-text" style="margin: 0; font-weight: 500;">
                        Showing {{ $products->firstItem() }}–{{ $products->lastItem() }}/{{ $products->total() }} of {{ $products->total() }} results
                    </p>
                    <div class="product__showing-sort" style="display: flex; align-items: center; gap: 15px; max-width: none; margin-right: 0 !important; width: auto !important;">
                        <div class="select-box" style="width: 250px;">
                            <select class="wide">
                                <option data-display="Sort by popular">Sort by popular</option>
                                <option value="1">Sort by Popularity</option>
                                <option value="2">Sort by Price</option>
                                <option value="3">Sort by Ratings</option>
                            </select>
                        </div>
                        <div class="product__all-tab-button" style="position: static !important; top: 0 !important; display: flex; align-items: center; background: #f4f7f6; padding: 5px 10px; border-radius: 4px; margin: 0 !important;">
                            <ul class="tabs-button-box clearfix list-unstyled" style="display: flex; margin: 0; gap: 8px;">
                                <li data-tab="#grid" class="tab-btn-item active-btn-item" style="cursor: pointer;">
                                    <div class="product__all-tab-button-icon one" style="background: #006666; color: #fff; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                                        <i class="fa fa-solid fa-bars"></i>
                                    </div>
                                </li>
                                <li data-tab="#list" class="tab-btn-item" style="cursor: pointer;">
                                    <div class="product__all-tab-button-icon" style="background: #fff; color: #006666; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border-radius: 4px; border: 1px solid #ebebeb;">
                                        <i class="fa fa-solid fa-list-ul"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Content Start -->
            <div class="col-xl-9 col-lg-8">
                <div class="product__items">

                    <div class="product__all">
                        <!--Start Tabs Content Box-->
                        <div class="tabs-content-box">
                            <!--Start Tab Grid-->
                            <div class="tab-content-box-item tab-content-box-item-active" id="grid">
                                <div class="product__all-tab-content-box-item">
                                    <div class="product__all-tab-single">
                                        <div class="row">
                                            @forelse ($products as $product)
                                            <!--Product Grid Single Start-->
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="single-product-style1">
                                                    <div class="single-product-style1__img">
                                                        @if($product->main_image)
                                                            <img src="{{ asset('uploads/products/' . $product->main_image) }}" alt="{{ $product->name }}">
                                                            <img src="{{ asset('uploads/products/' . $product->main_image) }}" alt="{{ $product->name }}">
                                                        @else
                                                            <img src="{{ asset('assets/images/resources/no-image.jpg') }}" alt="No Image">
                                                            <img src="{{ asset('assets/images/resources/no-image.jpg') }}" alt="No Image">
                                                        @endif
                                                        
                                                        @if($loop->first)
                                                        <ul class="single-product-style1__overlay">
                                                            <li><p>New</p></li>
                                                        </ul>
                                                        @elseif($loop->index == 2)
                                                        <ul class="single-product-style1__overlay">
                                                            <li><p>5% Off</p></li>
                                                        </ul>
                                                        @endif

                                                        <ul class="single-product-style1__info">
                                                            <li><a href="#" title="Add to Wishlist"><i class="fa fa-regular fa-heart"></i></a></li>
                                                            <li><a href="#" title="Add to cart"><i class="fa fa-solid fa-cart-plus"></i></a></li>
                                                            <li><a href="{{ route('product-details', $product->slug) }}" title="Quick View"><i class="fa fa-regular fa-eye"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="fa fa-solid fa-repeat"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-product-style1__content" style="padding: 20px 15px; background: #fff;">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 style="margin: 0; font-size: 18px; font-weight: 700;"><a href="{{ route('product-details', $product->slug) }}" style="color: #061738; text-decoration: none;">{{ $product->name }}</a></h4>
                                                                <p style="margin: 5px 0 0; font-size: 16px; font-weight: 600; color: #006666;">
                                                                    @if($product->sale_price)
                                                                        <span style="text-decoration: line-through; color: #999; margin-right: 8px; font-weight: 400;">${{ number_format($product->price, 2) }}</span>
                                                                        <span>${{ number_format($product->sale_price, 2) }}</span>
                                                                    @else
                                                                        {{ $product->price ? '$' . number_format($product->price, 2) : 'Contact' }}
                                                                    @endif
                                                                </p>
                                                            </div>
                                                            <div class="col-4 text-end">
                                                                <div class="single-product-style1__review" style="background: #f4f7f6; padding: 6px 12px; border-radius: 4px; display: inline-flex; align-items: center; gap: 6px;">
                                                                    <i class="fa fa-star" style="color: #006666; font-size: 14px;"></i>
                                                                    <p style="margin: 0; font-size: 15px; font-weight: 700; color: #061738;">5.0</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Product Grid Single End-->
                                            @empty
                                            <div class="col-12 text-center" style="padding: 100px 0;">
                                                <span class="icon-broken-bone" style="font-size: 60px; color: #3bb18f; margin-bottom: 20px; display: block;"></span>
                                                <h4>No products found in this category.</h4>
                                                <p>We're working on adding more items soon.</p>
                                            </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Tab Grid-->

                            <!--Start Tab List-->
                            <div class="tab-content-box-item" id="list">
                                <div class="product__all-tab-content-box-item">
                                    <div class="product__all-tab-single">
                                        <div class="row">
                                            @foreach ($products as $product)
                                            <!--Product List Single Start-->
                                            <div class="col-xl-12">
                                                <div class="single-product-style2" style="margin-bottom: 30px; border: 1px solid #ebebeb; border-radius: 8px; overflow: hidden;">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4">
                                                            <div class="single-product-style2__img">
                                                                @if($product->main_image)
                                                                    <img src="{{ asset('uploads/products/' . $product->main_image) }}" alt="{{ $product->name }}">
                                                                    <img src="{{ asset('uploads/products/' . $product->main_image) }}" alt="{{ $product->name }}">
                                                                @else
                                                                    <img src="{{ asset('assets/images/resources/no-image.jpg') }}" alt="No Image">
                                                                    <img src="{{ asset('assets/images/resources/no-image.jpg') }}" alt="No Image">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="single-product-style2__content" style="padding: 30px 40px; display: flex; flex-direction: column; justify-content: center;">
                                                                <div class="single-product-style2__review" style="margin-bottom: 12px; position: static;">
                                                                    <i class="fa fa-star" style="color: #ff9800;"></i>
                                                                    <i class="fa fa-star" style="color: #ff9800;"></i>
                                                                    <i class="fa fa-star" style="color: #ff9800;"></i>
                                                                    <i class="fa fa-star" style="color: #ff9800;"></i>
                                                                    <i class="fa fa-star" style="color: #ff9800;"></i>
                                                                </div>
                                                                <div class="single-product-style2__text" style="padding: 0; border: none; position: static;">
                                                                    <h4 style="font-size: 26px; font-weight: 700; margin-bottom: 10px; line-height: 1.2;"><a href="{{ route('product-details', $product->slug) }}" style="color: #061738; text-decoration: none;">{{ $product->name }}</a></h4>
                                                                    <p style="font-size: 22px; font-weight: 700; color: #006666; margin-bottom: 15px;">{{ $product->price ? '$' . number_format($product->price, 2) : 'Contact for Price' }}</p>
                                                                    <p style="margin: 0 0 25px; color: #666; line-height: 1.6; font-size: 15px;">{{ Str::limit(strip_tags($product->description), 140) }}</p>
                                                                </div>
                                                                <div class="product-list-btn-box" style="display: flex; gap: 10px; position: static; margin-top: 5px;">
                                                                    <a href="{{ route('product-details', $product->slug) }}" class="thm-btn" style="padding: 10px 25px;">View Details</a>
                                                                    <a href="tel:+19057210004" class="thm-btn" style="padding: 10px 25px; background: #061738;">Inquire Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Product List Single End-->
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Tab List-->
                        </div>

                        <div class="mt-4">
                            {{ $products->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content End -->

            <!-- Sidebar Start -->
            <div class="col-xl-3 col-lg-4">
                <div class="shop-sidebar" style="background: #f4f7f6; padding: 30px; border-radius: 12px;">
                    <!-- Search Widget -->
                    <div class="shop-sidebar__single shop-sidebar__search" style="margin-bottom: 40px;">
                        <form action="#" class="shop-sidebar__search-form" style="position: relative;">
                            <input type="text" placeholder="Search" style="width: 100%; height: 60px; border: none; border-radius: 8px; padding-left: 20px; padding-right: 60px; font-weight: 500;">
                            <button type="submit" style="position: absolute; top: 5px; right: 5px; width: 50px; height: 50px; background: #006666; border: none; border-radius: 6px; color: #fff;">
                                <i class="icon-search"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Price Filter Widget -->
                    <div class="shop-sidebar__single shop-sidebar__price-filter" style="margin-bottom: 40px;">
                        <h3 class="shop-sidebar__title" style="font-size: 22px; font-weight: 700; margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
                            <span style="color: #006666;">▶</span> Price
                        </h3>
                        <div class="price-range-slider" style="background: #fff; padding: 25px; border-radius: 10px;">
                            <div style="height: 6px; background: #ebebeb; border-radius: 3px; position: relative; margin-bottom: 25px;">
                                <div style="position: absolute; left: 0; right: 20%; top: 0; bottom: 0; background: #006666; border-radius: 3px;"></div>
                                <div style="position: absolute; left: 0; top: 50%; transform: translateY(-50%); width: 16px; height: 16px; background: #006666; border-radius: 50%; cursor: pointer;"></div>
                                <div style="position: absolute; right: 20%; top: 50%; transform: translateY(-50%); width: 16px; height: 16px; background: #006666; border-radius: 50%; cursor: pointer;"></div>
                            </div>
                            <div style="display: flex; align-items: center; justify-content: space-between;">
                                <p style="margin: 0; font-weight: 500; color: #666; font-size: 14px;">0 - 3000</p>
                                <button class="thm-btn" style="padding: 8px 20px; font-size: 13px; text-transform: uppercase; background: #061738; letter-spacing: 1px;">Filter</button>
                            </div>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="shop-sidebar__single shop-sidebar__category" style="margin-bottom: 40px;">
                        <h3 class="shop-sidebar__title" style="font-size: 22px; font-weight: 700; margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
                            <span style="color: #006666;">▶</span> Categories
                        </h3>
                        <ul class="shop-sidebar__category-list list-unstyled">
                            <li style="margin-bottom: 12px;">
                                <a href="{{ route('collections') }}" 
                                   style="display: flex; align-items: center; justify-content: space-between; padding: 15px 20px; border-radius: 8px; font-weight: 600; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(0,0,0,0.02); 
                                   {{ $category->id == 0 ? 'background: #006666; color: #fff;' : 'background: #fff; color: #222;' }}">
                                    All Products
                                    <span style="width: 30px; height: 30px; {{ $category->id == 0 ? 'background: #fff; color: #006666;' : 'background: #006666; color: #fff;' }} display: flex; align-items: center; justify-content: center; border-radius: 4px; font-size: 12px;">
                                        <i class="fa fa-arrow-right"></i>
                                    </span>
                                </a>
                            </li>
                            @foreach($categories as $cat)
                            <li style="margin-bottom: 12px;">
                                <a href="{{ route('products', $cat->slug) }}" 
                                   style="display: flex; align-items: center; justify-content: space-between; padding: 15px 20px; border-radius: 8px; font-weight: 600; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(0,0,0,0.02); 
                                   {{ $category->id == $cat->id ? 'background: #006666; color: #fff;' : 'background: #fff; color: #222;' }}">
                                    {{ $cat->categoriename }}
                                    <span style="width: 30px; height: 30px; {{ $category->id == $cat->id ? 'background: #fff; color: #006666;' : 'background: #006666; color: #fff;' }} display: flex; align-items: center; justify-content: center; border-radius: 4px; font-size: 12px;">
                                        <i class="fa fa-arrow-right"></i>
                                    </span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
</section>
<!--Product End-->

<style>
    .single-product-style1__img {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        background: #f4f7f6;
    }
    .single-product-style1__img img {
        width: 100%;
        transition: transform 0.6s ease;
    }
    .single-product-style1:hover .single-product-style1__img img {
        transform: scale(1.1);
    }
    .single-product-style1__overlay {
        position: absolute;
        top: 20px;
        left: 20px;
        z-index: 2;
        padding: 0;
        list-style: none;
    }
    .single-product-style1__overlay li p {
        background: #fff;
        color: #006666;
        padding: 6px 15px;
        border-radius: 4px;
        font-weight: 700;
        font-size: 13px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        margin: 0;
    }
    .single-product-style1__info {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%) translateY(20px);
        background: #fff;
        display: flex;
        justify-content: center;
        gap: 5px;
        padding: 8px;
        border-radius: 30px;
        transition: all 0.4s ease;
        list-style: none;
        margin: 0;
        opacity: 0;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        z-index: 5;
    }
    .single-product-style1:hover .single-product-style1__info {
        opacity: 1;
        transform: translateX(-50%) translateY(0);
    }
    .single-product-style1__info a {
        width: 40px;
        height: 40px;
        background: transparent;
        color: #006666;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.3s ease;
        font-size: 16px;
    }
    .single-product-style1__info a:hover {
        background: #f4f7f6;
        color: #061738;
    }
    .single-product-style1__content {
        padding: 20px 0;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }
    .single-product-style1__content h4 {
        font-size: 18px;
        margin-bottom: 5px;
    }
    .single-product-style1__content h4 a {
        color: #222;
        text-decoration: none;
    }
    .single-product-style1__content p {
        margin: 0;
        color: #006666;
        font-weight: 700;
        font-size: 16px;
    }
    
    
    .tab-content-box-item {
        display: none;
    }
    .tab-content-box-item.tab-content-box-item-active {
        display: block;
        animation: fadeIn 0.5s ease-in-out;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .tab-btn-item.active-btn-item .product__all-tab-button-icon {
        background: #006666 !important;
        color: #fff !important;
    }
    
    .shop-sidebar__category-list a:hover {
        background: #006666 !important;
        color: #fff !important;
        transform: translateX(5px);
    }
    .shop-sidebar__category-list a:hover span {
        background: #fff !important;
        color: #006666 !important;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-btn-item');
    const tabItems = document.querySelectorAll('.tab-content-box-item');

    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            // Update buttons
            tabButtons.forEach(btn => btn.classList.remove('active-btn-item'));
            this.classList.add('active-btn-item');
            
            // Update icons styling (optional if using CSS classes)
            tabButtons.forEach(btn => {
                const icon = btn.querySelector('.product__all-tab-button-icon');
                if (btn.classList.contains('active-btn-item')) {
                    icon.style.background = '#006666';
                    icon.style.color = '#fff';
                } else {
                    icon.style.background = '#fff';
                    icon.style.color = '#006666';
                }
            });

            // Update content
            tabItems.forEach(item => {
                item.classList.remove('tab-content-box-item-active');
                if ('#' + item.id === targetTab) {
                    item.classList.add('tab-content-box-item-active');
                }
            });
        });
    });
});
</script>

@endsection