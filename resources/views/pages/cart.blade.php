@extends('layouts.layout3')
@section('title', 'Cart | Courtice Home Health Care')
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
    $title = 'Cart';
    $subtitle = 'Cart';
    $subtotal = collect($cart)->sum(fn($i) => $i['price'] * $i['quantity']);
    $onlineLimit = 200;
    $overLimit = $subtotal > $onlineLimit;
@endphp
@section('content')


    <x-strickyHeaderThree />

    <!--Start Cart Page-->
    <section class="cart-page">
        <div class="container">

            @if(session('error'))
                <div class="row">
                    <div class="col-12">
                        <div style="background:#fdecea; border:1px solid #f5c6cb; color:#a94442; border-radius:8px; padding:14px 18px; margin-bottom:20px;">
                            {{ session('error') }}
                        </div>
                    </div>
                </div>
            @endif

            @if($overLimit)
                <div class="row">
                    <div class="col-12">
                        <div style="background:#fff8e6; border:1px solid #f0d998; color:#7a5d00; border-radius:8px; padding:16px 20px; margin-bottom:20px;">
                            <strong>Online orders are limited to ${{ number_format($onlineLimit, 0) }}.</strong>
                            For larger purchases, please call us at <a href="tel:+19057210004" style="font-weight:bold; color:#1E3A5F;">+1 (905) 721-0004</a>
                            or visit our store at 1423 King St E Unit 5, Courtice — our team will help you directly and can
                            check your ADP, Green Shield, WSIB or Veterans Affairs coverage for bigger items.
                        </div>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="cart-page__left">
                        <div class="table-responsive">
                            <table class="table cart-table">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($cart as $id => $item)
                                        <tr>
                                            <td>
                                                <div class="product-box">
                                                    <div class="img-box">
                                                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}">
                                                </div>
                                                <h3>
                                                    @if(!empty($item['slug']))
                                                        <a href="{{ route('product-details', $item['slug']) }}">{{ $item['title'] }}</a>
                                                    @else
                                                        {{ $item['title'] }}
                                                    @endif
                                                </h3>
                                            </div>
                                        </td>
                                        <td>${{ number_format($item['price'], 2) }}</td>
                                        <td>
                                            <div style="display:flex; align-items:center; justify-content:center; gap:6px; min-width:130px;">
                                                <form action="{{ route('cart.update') }}" method="POST" style="margin:0;">
                                                    @csrf
                                                    <input type="hidden" name="variantId" value="{{ $id }}">
                                                    <input type="hidden" name="change" value="-1">
                                                    <button type="submit" aria-label="Decrease quantity"
                                                        style="display:inline-flex; align-items:center; justify-content:center; width:34px; height:34px; border:1px solid #d9d9d9; background:#f7f7f7; border-radius:6px; cursor:pointer; font-size:18px; font-weight:bold; color:#1E3A5F; padding:0; line-height:1;">&minus;</button>
                                                </form>
                                                <span style="display:inline-flex; align-items:center; justify-content:center; width:44px; height:34px; border:1px solid #d9d9d9; border-radius:6px; background:#fff; font-weight:600;">{{ $item['quantity'] }}</span>
                                                <form action="{{ route('cart.update') }}" method="POST" style="margin:0;">
                                                    @csrf
                                                    <input type="hidden" name="variantId" value="{{ $id }}">
                                                    <input type="hidden" name="change" value="1">
                                                    <button type="submit" aria-label="Increase quantity"
                                                        style="display:inline-flex; align-items:center; justify-content:center; width:34px; height:34px; border:1px solid #d9d9d9; background:#f7f7f7; border-radius:6px; cursor:pointer; font-size:18px; font-weight:bold; color:#1E3A5F; padding:0; line-height:1;">+</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            ${{ number_format($item['price'] * $item['quantity'], 2) }}
                                        </td>
                                        <td>
                                            <form action="{{ route('cart.remove') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="variantId" value="{{ $id }}">
                                                <button type="submit"
                                                    style="background: none; border: none; color: #ff4d4d; cursor: pointer;">
                                                    <div class="cross-icon">
                                                        <i class="fas fa-times"></i>
                                                    </div>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center" style="padding: 50px 0;">
                                            <h4>Your cart is empty</h4>
                                            <a href="{{ route('collections') }}" class="thm-btn mt-3">Go to Shop</a>
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="cart-page__right">
                        <div class="cart-page__sidebar">
                            <h4 style="color:#1E3A5F; margin:0 0 18px; font-size:20px;">Order Summary</h4>

                            <div style="display:flex; justify-content:space-between; align-items:center; padding:10px 0; font-size:15px; color:#444;">
                                <span>Subtotal</span>
                                <span style="font-weight:600; color:#1E3A5F;">${{ number_format($subtotal, 2) }}</span>
                            </div>
                            <div style="display:flex; justify-content:space-between; align-items:center; padding:10px 0; font-size:15px; color:#444; border-bottom:1px solid #eee;">
                                <span>Shipping &amp; taxes</span>
                                <span style="color:#888; font-size:13px;">Calculated at checkout</span>
                            </div>
                            <div style="display:flex; justify-content:space-between; align-items:center; padding:16px 0 6px;">
                                <span style="font-weight:700; color:#1E3A5F; font-size:17px;">Total</span>
                                <span style="font-weight:700; color:#1E3A5F; font-size:22px;">${{ number_format($subtotal, 2) }} <span style="font-size:13px; font-weight:500; color:#888;">CAD</span></span>
                            </div>

                            <div style="background:#f6f9fc; border-radius:8px; padding:12px 14px; margin:14px 0;">
                                <p style="font-size:13.5px; color:#555; margin:0 0 6px;">
                                    <i class="fas fa-store" style="color:#1E3A5F; margin-right:6px;"></i>
                                    Free in-store pickup in Courtice — same-day on in-stock items.
                                </p>
                                <p style="font-size:12.5px; color:#999; margin:0;">
                                    Discount code? Enter it at checkout.
                                </p>
                            </div>

                            @if(count($cart) > 0)
                                @if($overLimit)
                                    <a class="thm-btn" href="tel:+19057210004" style="display:block; width:100%; text-align:center;">
                                        Call to Order <span class="icon-right-arrow"></span>
                                    </a>
                                @else
                                    <form action="{{ route('checkout') }}" method="POST" style="margin:0;">
                                        @csrf
                                        <button type="submit" class="thm-btn" style="width:100%;">
                                            Checkout <span class="icon-right-arrow"></span>
                                        </button>
                                    </form>
                                @endif
                            @endif
                            <a href="{{ route('collections') }}" style="display:block; text-align:center; margin-top:14px; color:#666; text-decoration:none; font-size:14px;">
                                &larr; Continue Shopping
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Cart Page-->

    <x-footerThree />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
