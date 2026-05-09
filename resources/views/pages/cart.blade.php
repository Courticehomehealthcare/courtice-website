@extends('layouts.layout3')
@section('title', 'Cart || Careon || Careon Laravel Template')
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
@endphp
@section('content')


    <x-strickyHeaderThree />

    <!--Start Cart Page-->
    <section class="cart-page">
        <div class="container">
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
                                                    <h3><a
                                                            href="{{ route('product-details', $item['slug'] ?? '#') }}">{{ $item['title'] }}</a>
                                                    </h3>
                                                </div>
                                            </td>
                                            <td>${{ number_format($item['price'], 2) }}</td>
                                            <td>
                                                <div class="quantity-box"
                                                    style="display: flex; align-items: center; justify-content: center;">
                                                    <input type="number" value="{{ $item['quantity'] }}" readonly
                                                        style="width: 50px; text-align: center; border: 1px solid #ebebeb; border-radius: 4px;">
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
                            <div class="cart-page__shipping">
                                <h3 class="cart-page__shipping-title">Calculated Shipping</h3>
                                <form action="#" class="cart-page__shipping-form">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="cart-page__shipping-input-box">
                                                <div class="select-box">
                                                    <select class="wide">
                                                        <option data-display="Country">Country</option>
                                                        <option value="1">Ban</option>
                                                        <option value="2">Ind</option>
                                                        <option value="3">Pak</option>
                                                        <option value="3">USA</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="cart-page__shipping-input-box">
                                                <div class="select-box">
                                                    <select class="wide">
                                                        <option data-display="State/City">State/City</option>
                                                        <option value="1">Ban</option>
                                                        <option value="2">Ind</option>
                                                        <option value="3">Pak</option>
                                                        <option value="3">USA</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="cart-page__shipping-input-box">
                                                <input type="text" placeholder="zip code">
                                            </div>
                                        </div>
                                        <div class="cart-page__btn-box">
                                            <button type="submit" class="thm-btn">Update <span
                                                    class="icon-right-arrow"></span> </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="cart-page__coupon-code">
                                <h3 class="cart-page__coupon-code-title">Coupon Code</h3>
                                <p class="cart-page__coupon-code-text">I must explain to you how all this mistaken
                                    idea of denouncing pleasure and praising pain was born</p>
                                <form action="#" class="default-form cart-page__coupon-code-form">
                                    <input type="text" placeholder="Enter Coupon Code">
                                    <button class="thm-btn" type="submit">
                                        Apply Coupon <span class="icon-right-arrow"></span>
                                    </button>
                                </form>
                            </div>
                            @php
                                $subtotal = collect($cart)->sum(fn($i) => $i['price'] * $i['quantity']);
                            @endphp
                            <ul class="cart-total list-unstyled">
                                <li>
                                    <span>Cart Subtotal</span>
                                    <span>${{ number_format($subtotal, 2) }}</span>
                                </li>
                                <li>
                                    <span>Shipping Cost</span>
                                    <span>Calculated at checkout</span>
                                </li>
                                <li>
                                    <span>Cart Total</span>
                                    <span class="cart-total-amount">${{ number_format($subtotal, 2) }}</span>
                                </li>
                            </ul>
                            <div class="cart-page__buttons">
                                <div class="cart-page__buttons-1">
                                    <a class="thm-btn" href="{{ route('collections') }}">Continue Shopping
                                        <span class="icon-right-arrow"></span>
                                    </a>
                                </div>
                                <div class="cart-page__buttons-2">
                                    @if(count($cart) > 0)
                                        <form action="{{ route('checkout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="thm-btn" style="width: 100%;">Checkout
                                                <span class="icon-right-arrow"></span>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-8 col-lg-7">

            </div>
            <div class="col-xl-4 col-lg-5">


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