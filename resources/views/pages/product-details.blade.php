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

    <x-strickyHeaderThree />

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('assets/images/banner/about_banner.png') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h3>{{ $product->name }}</h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span class="icon-arrow-left"></span></li>
                        <li><a href="{{ route('collections') }}">Collections</a></li>
                        <li><span class="icon-arrow-left"></span></li>
                        <li><a
                                href="{{ route('products', $product->category->slug) }}">{{ $product->category->categoriename }}</a>
                        </li>
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
                                <div class="swiper swiper-container" id="shop-details-one__carousel"
                                    style="overflow: hidden; border-radius: 12px; border: 1px solid #ebebeb; position: relative; width: 100%;">
                                    <div class="swiper-wrapper">
                                        @if($product->main_image)
                                            <div class="swiper-slide">
                                                <div class="product-details__img"
                                                    style="height: 500px; background: #fff; display: flex; align-items: center; justify-content: center;">
                                                    <img src="{{ $product->main_image }}" alt="{{ $product->name }}"
                                                        style="max-height: 100%; max-width: 100%; object-fit: contain;">
                                                </div>
                                            </div>
                                        @endif
                                        @foreach($product->images as $gallery)
                                            <div class="swiper-slide">
                                                <div class="product-details__img"
                                                    style="height: 500px; background: #fff; display: flex; align-items: center; justify-content: center;">
                                                    <img src="{{ $gallery->image }}" alt="{{ $product->name }}"
                                                        style="max-height: 100%; max-width: 100%; object-fit: contain;">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="product-details__nav">
                                    <div class="swiper-button-prev" id="product-details__swiper-button-prev"
                                        style="width: 44px; height: 44px; background: rgba(0, 189, 214, 0.8); border-radius: 50%; color: #fff; display: flex; align-items: center; justify-content: center; left: 10px;">
                                        <i class="fa fa-chevron-left" style="font-size: 14px;"></i>
                                    </div>
                                    <div class="swiper-button-next" id="product-details__swiper-button-next"
                                        style="width: 44px; height: 44px; background: rgba(0, 189, 214, 0.8); border-radius: 50%; color: #fff; display: flex; align-items: center; justify-content: center; right: 10px;">
                                        <i class="fa fa-chevron-right" style="font-size: 14px;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product-details__thumb-box" style="margin-top: 15px;">
                                <div class="swiper swiper-container" id="shop-details-one__thumb"
                                    style="overflow: hidden; width: 100%;">
                                    <div class="swiper-wrapper">
                                        @if($product->main_image)
                                            <div class="swiper-slide">
                                                <div class="product-details__thumb-img"
                                                    style="border: 1px solid #ebebeb; border-radius: 8px; overflow: hidden; height: 100px; width: 100px; cursor: pointer;">
                                                    <img src="{{ $product->main_image }}" alt="{{ $product->name }}"
                                                        style="height: 100%; width: 100%; object-fit: cover;">
                                                </div>
                                            </div>
                                        @endif
                                        @foreach($product->images as $gallery)
                                            <div class="swiper-slide">
                                                <div class="product-details__thumb-img"
                                                    style="border: 1px solid #ebebeb; border-radius: 8px; overflow: hidden; height: 100px; width: 100px; cursor: pointer;">
                                                    <img src="{{ $gallery->image }}" alt="{{ $product->name }}"
                                                        style="height: 100%; width: 100%; object-fit: cover;">
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
                            <h3 class="product-details__title"
                                style="font-size: 32px; font-weight: 800; color: #061738; margin-bottom: 5px;">
                                {{ $product->name }}
                            </h3>
                            <div class="product-details__price-box" style="margin-bottom: 20px;">
                                <span id="productPrice"
                                    style="font-size: 28px; font-weight: 700; color: #00bdd6;">{{ $product->price ? '$' . number_format($product->price, 2) : 'Contact for Price' }}</span>
                                @if(isset($product->sale_price) && $product->sale_price)
                                    <span
                                        style="font-size: 18px; color: #999; text-decoration: line-through; margin-left: 10px;">${{ number_format($product->price, 2) }}</span>
                                @endif
                            </div>
                            <div class="availability-status" style="margin-bottom: 25px; display: inline-flex; align-items: center; gap: 8px; padding: 6px 15px; border-radius: 30px; font-size: 14px; {{ $product->is_available ? 'background: #e8f5e9; color: #2e7d32;' : 'background: #ffebee; color: #ff4d4f;' }}">
                                @if($product->is_available)
                                    <i class="fa fa-check-circle"></i> <strong>In Stock</strong>
                                @else
                                    <i class="fa fa-times-circle"></i> <strong>Currently Out of Stock</strong>
                                @endif
                            </div>
                        </div>
                        <div class="product-details__content"
                            style="border-top: 1px solid #f0f0f0; border-bottom: 1px solid #f0f0f0; padding: 25px 0; margin-bottom: 30px;">
                            <p class="product-details__content-text1"
                                style="font-size: 16px; line-height: 1.7; color: #666; margin-bottom: 0;">
                                {{ $product->small_description }}
                            </p>
                            <!-- <div
                                        style="display: flex; gap: 20px; align-items: center; color: #061738; font-size: 14px; font-weight: 600;">
                                        <span><i class="fa fa-check-circle" style="color: #2e7d32;"></i> In Stock</span>
                                        <span><i class="fa fa-truck" style="color: #00bdd6;"></i> Fast Delivery</span>
                                    </div> -->
                        </div>
                        <div class="product-details__options" style="margin-top: 20px;">
                            @foreach($product->shopify_options as $option)
                                @if($option['name'] !== 'Title')
                                    <div class="option-group" style="margin-bottom: 20px;">
                                        <h5 style="font-size: 16px; font-weight: 700; margin-bottom: 10px; color: #061738;">
                                            {{ $option['name'] }}
                                        </h5>
                                        <div class="option-values" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                            @foreach($option['values'] as $value)
                                                <button type="button" class="option-btn"
                                                    onclick="selectOption('{{ $option['name'] }}', '{{ $value }}', this)"
                                                    style="padding: 8px 18px; border: 2px solid #ebebeb; border-radius: 6px; background: #fff; color: #666; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">
                                                    {{ $value }}
                                                </button>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        @if($product->is_available)
                            <div class="product-details__quantity"
                                style="margin-top: 30px; margin-bottom: 30px; display: flex !important; align-items: center !important; gap: 20px !important;">
                                <h5 style="font-size: 16px; font-weight: 700; margin: 0; color: #061738;">Quantity</h5>
                                <div class="quantity-box"
                                    style="display: flex !important; align-items: center !important; justify-content: space-between !important; background: #fff !important; border-radius: 50px !important; padding: 6px !important; border: 1px solid #e0e0e0 !important; box-shadow: 0 4px 15px rgba(0,0,0,0.06) !important; width: 155px !important; height: 54px !important; flex-shrink: 0 !important; user-select: none !important; margin: 0 !important;">
                                    
                                    <!-- Minus Action -->
                                    <div onclick="changeQty(-1)"
                                        style="width: 42px !important; height: 42px !important; background: #00bdd6 !important; color: #fff !important; font-size: 20px !important; font-weight: 800 !important; cursor: pointer !important; border-radius: 50% !important; display: flex !important; align-items: center !important; justify-content: center !important; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 3px 10px rgba(0, 189, 214, 0.2) !important; line-height: 1 !important;">
                                        <i class="fa fa-minus"></i>
                                    </div>
                                    
                                    <input type="text" id="quantity" value="1" readonly
                                        style="width: 45px !important; text-align: center !important; border: none !important; background: transparent !important; font-weight: 800 !important; font-size: 20px !important; color: #061738 !important; outline: none !important; padding: 0 !important; margin: 0 !important; pointer-events: none !important;">
                                    
                                    <!-- Plus Action -->
                                    <div onclick="changeQty(1)"
                                        style="width: 42px !important; height: 42px !important; background: #00bdd6 !important; color: #fff !important; font-size: 18px !important; font-weight: 800 !important; cursor: pointer !important; border-radius: 50% !important; display: flex !important; align-items: center !important; justify-content: center !important; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 3px 10px rgba(0, 189, 214, 0.2) !important; line-height: 1 !important;">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="product-details__buttons-boxes" style="margin-top: 40px;">
                                <div class="product-details__buttons-1" style="display: flex; gap: 15px; flex-wrap: wrap;">
                                    <button type="button" onclick="addToCart()" class="thm-btn btn-add-to-cart"
                                        style="flex: 1; min-width: 200px; height: 55px; background: #fff; border: 2px solid #00bdd6; color: #00bdd6; border-radius: 12px; font-weight: 700; transition: all 0.3s ease; box-shadow: 0 4px 10px rgba(0, 189, 214, 0.1);">
                                        <span class="fa fa-shopping-cart" style="margin-right: 8px;"></span> Add to Cart
                                    </button>
                                    <button type="button" onclick="buyNow()" class="thm-btn btn-buy-now"
                                        style="flex: 1; min-width: 200px; height: 55px; background: #0d1e3b; border: 2px solid #0d1e3b; color: #fff; border-radius: 12px; font-weight: 700; transition: all 0.3s ease; box-shadow: 0 4px 10px rgba(13, 30, 59, 0.2);">
                                        Buy Now <span class="icon-right-arrow"></span>
                                    </button>
                                </div>
                            </div>
                        @else
                            <div class="product-details__buttons-boxes" style="margin-top: 40px;">
                                <div class="product-details__buttons-1" style="display: flex; gap: 15px; flex-wrap: wrap;">
                                    <button type="button" class="thm-btn" disabled
                                        style="flex: 1; min-width: 200px; height: 55px; background: #ccc; border: 2px solid #ccc; color: #fff; border-radius: 12px; font-weight: 700; cursor: not-allowed;">
                                        Currently Out of Stock
                                    </button>
                                </div>
                            </div>
                        @endif


                        <div id="cartMessage"
                            style="margin-top: 15px; display: none; padding: 10px 15px; border-radius: 6px; font-weight: 600;">
                        </div>
                        <div class="product-details__social">
                            <div class="title">
                                <h3 style="font-size: 18px; font-weight: 700; color: #061738; margin-bottom: 15px;">Share with friends:</h3>
                            </div>
                            <div class="product-details__social-link" style="display: flex; gap: 12px;">
                                @php
                                    $shareUrl = urlencode(request()->fullUrl());
                                    $shareTitle = urlencode($product->name);
                                    $shareImage = urlencode($product->main_image);
                                @endphp
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank" class="share-icon fb" title="Share on Facebook"><span class="fab fa-facebook-f"></span></a>
                                <a href="https://twitter.com/intent/tweet?text={{ $shareTitle }}&url={{ $shareUrl }}" target="_blank" class="share-icon tw" title="Share on Twitter"><span class="fab fa-twitter"></span></a>
                                <a href="https://pinterest.com/pin/create/button/?url={{ $shareUrl }}&media={{ $shareImage }}&description={{ $shareTitle }}" target="_blank" class="share-icon pin" title="Pin on Pinterest"><span class="fab fa-pinterest-p"></span></a>
                                <a href="https://api.whatsapp.com/send?text={{ $shareTitle }}%20{{ $shareUrl }}" target="_blank" class="share-icon wa" title="Share on WhatsApp"><span class="fab fa-whatsapp"></span></a>
                                <a href="https://www.instagram.com/" target="_blank" class="share-icon ins" title="Share on Instagram"><span class="fab fa-instagram"></span></a>
                            </div>
                        </div>

                        <style>
                            .share-icon {
                                width: 40px;
                                height: 40px;
                                border-radius: 50%;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                color: #fff !important;
                                transition: all 0.3s ease;
                                font-size: 16px;
                                text-decoration: none !important;
                            }
                            .share-icon.fb { background: #3b5998; }
                            .share-icon.tw { background: #1da1f2; }
                            .share-icon.pin { background: #bd081c; }
                            .share-icon.wa { background: #25d366; }
                            .share-icon.ins { background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); }
                            .share-icon:hover {
                                transform: translateY(-3px);
                                box-shadow: 0 5px 15px rgba(0,0,0,0.2);
                                filter: brightness(1.1);
                            }
                        </style>
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
                                        <img src="{{ $related->main_image }}" alt="{{ $related->name }}">
                                    @else
                                        <img src="{{ asset('assets/images/resources/no-image.jpg') }}" alt="No Image">
                                    @endif
                                    @if(!$related->is_available)
                                        <div class="out-of-stock-badge-related">Out of Stock</div>
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
                                        <p>
                                            @if(isset($related->sale_price) && $related->sale_price)
                                                <span
                                                    style="text-decoration: line-through; opacity: 0.6; margin-right: 5px;">${{ number_format($related->price, 2) }}</span>
                                                <span
                                                    style="color: #00bdd6; font-weight: 700;">${{ number_format($related->sale_price, 2) }}</span>
                                            @else
                                                {{ $related->price ? '$' . number_format($related->price, 2) : 'Contact for Price' }}
                                            @endif
                                        </p>
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

    <style>
        .option-btn.active {
            border-color: #00bdd6 !important;
            background: #00bdd6 !important;
            color: #fff !important;
        }

        .btn-add-to-cart:hover {
            background: #00bdd6 !important;
            color: #fff !important;
            transform: translateY(-2px);
        }

        .btn-buy-now:hover {
            background: #1a2a4d !important;
            transform: translateY(-2px);
        }

        .option-btn:hover {
            border-color: #00bdd6 !important;
            color: #00bdd6 !important;
        }

        .related-products__carousel .single-product-style1__img img {
            height: 280px !important;
            object-fit: cover !important;
            width: 100% !important;
        }

        .single-product-style1__img img {
            opacity: 1 !important;
            transform: none !important;
            filter: none !important;
            position: relative !important;
        }

        /* Fix for broken single-product-style1 hover effect if only one image */
        .single-product-style1:hover .single-product-style1__img img {
            opacity: 1 !important;
            transform: none !important;
            filter: none !important;
        }

        /* Swiper Gallery Layout Fix */
        .product-details__left-inner {
            display: flex;
            flex-direction: column;
            gap: 0px;
            align-items: center;
            position: relative;
        }

        .product-details__content-box {
            width: 100%;
            position: relative;
            min-width: 0;
        }

        .product-details__thumb-box {
            width: 100%;
            flex-shrink: 0;
            min-width: 0;
        }

        .product-details__img {
            width: 100%;
        }

        .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #shop-details-one__thumb .swiper-slide {
            width: auto !important;
        }

        .swiper-slide-thumb-active .product-details__thumb-img {
            border-color: #00bdd6 !important;
            border-width: 2px !important;
        }

        @media (max-width: 767px) {
            .product-details__img {
                height: 350px !important;
            }
        }

        .out-of-stock-badge-related {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #ff4d4f;
            color: #fff;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            z-index: 2;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
    </style>

    <script>
        const variants = @json($product->shopify_variants);
        let selectedOptions = {};
        let currentQty = 1;

        function selectOption(name, value, btn) {
            selectedOptions[name] = value;

            // Update button styles
            const group = btn.closest('.option-values');
            group.querySelectorAll('.option-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            updateVariantInfo();
        }

        function updateVariantInfo() {
            const variant = getCurrentVariant();
            if (variant) {
                const price = parseFloat(variant.price.amount);
                document.getElementById('productPrice').textContent = '$' + (price * currentQty).toFixed(2);
            }
        }

        function changeQty(amt) {
            currentQty = Math.max(1, currentQty + amt);
            document.getElementById('quantity').value = currentQty;
            updateVariantInfo();
        }

        function getCurrentVariant() {
            // If only one variant, return it
            if (variants.length === 1) return variants[0];

            // Match selected options
            return variants.find(v =>
                v.selectedOptions.every(opt => selectedOptions[opt.name] === opt.value)
            ) || variants[0];
        }

        function addToCart() {
            const variant = getCurrentVariant();
            const btn = event.currentTarget;
            if (!btn) return;
            btn.disabled = true;
            const oldHtml = btn.innerHTML;
            btn.innerHTML = 'Adding...';

            fetch('{{ route("cart.add") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    variantId: variant.id,
                    quantity: currentQty,
                    title: '{{ $product->name }}',
                    price: variant.price.amount,
                    image: '{{ $product->main_image }}'
                })
            })
                .then(r => r.json())
                .then(data => {
                    btn.disabled = false;
                    btn.innerHTML = oldHtml;

                    const msg = document.getElementById('cartMessage');
                    msg.style.display = 'block';
                    if (data.success) {
                        msg.style.background = '#e8f5e9';
                        msg.style.color = '#2e7d32';
                        msg.innerHTML = '✓ Product added! <a href="/cart" style="font-weight:bold; color:#1E3A5F; text-decoration:underline; margin-left:8px;">View Cart &rarr;</a>';
                    } else {
                        msg.style.background = '#ffebee';
                        msg.style.color = '#c62828';
                        msg.innerHTML = 'Failed to add product to cart.';
                    }
                })
                .catch(err => {
                    btn.disabled = false;
                    btn.innerHTML = oldHtml;
                    console.error(err);
                });
        }

        function buyNow() {
            const variant = getCurrentVariant();
            const msg = document.getElementById('cartMessage');
            fetch('{{ route("cart.buy-now") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ variantId: variant.id, quantity: currentQty })
            })
            .then(r => r.json())
            .then(data => {
                if (data.url) {
                    window.location.href = data.url;
                } else if (msg) {
                    msg.style.display = 'block';
                    msg.style.background = '#fff8e6';
                    msg.style.color = '#7a5d00';
                    msg.innerHTML = data.error || 'Unable to start checkout. Please try again.';
                }
            })
            .catch(() => {
                if (msg) {
                    msg.style.display = 'block';
                    msg.style.background = '#ffebee';
                    msg.style.color = '#c62828';
                    msg.innerHTML = 'Unable to start checkout. Please try again.';
                }
            });
        }

        // Initialize first options if available
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.option-group').forEach(group => {
                const firstBtn = group.querySelector('.option-btn');
                if (firstBtn) firstBtn.click();
            });

            // Related Products Carousel Initialization
            if (typeof $ !== 'undefined' && $('.related-products__carousel').length) {
                $('.related-products__carousel').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: false,
                    dots: true,
                    smartSpeed: 500,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    responsive: {
                        0: { items: 1 },
                        600: { items: 2 },
                        1000: { items: 4 }
                    }
                });
            }

            // Swiper Initialization for main product images
            if (typeof Swiper !== 'undefined') {
                var shopDetailsThumb = new Swiper('#shop-details-one__thumb', {
                    slidesPerView: 'auto',
                    spaceBetween: 10,
                    freeMode: true,
                    watchSlidesVisibility: true,
                    watchSlidesProgress: true,
                    direction: 'horizontal',
                });
                var shopDetailsCarousel = new Swiper('#shop-details-one__carousel', {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    navigation: {
                        nextEl: '#product-details__swiper-button-next',
                        prevEl: '#product-details__swiper-button-prev',
                    },
                    thumbs: {
                        swiper: shopDetailsThumb
                    }
                });
            }
        });
    </script>

    <x-footerThree />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection