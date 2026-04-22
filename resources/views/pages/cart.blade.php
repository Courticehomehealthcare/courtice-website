
@extends('layouts.layout-inner-page')
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

<x-strickyHeader/>
 
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

                                        <tr>
                                            <td>
                                                <div class="product-box">
                                                    <div class="img-box">
                                                        <img src="{{ asset("/assets/images/shop/cart-page-img-1.jpg") }}" alt="">
                                                    </div>
                                                    <h3><a href="{{ url("product-details") }}">Nebulizer</a></h3>
                                                </div>
                                            </td>
                                            <td>$10.99</td>
                                            <td>
                                                <div class="quantity-box">
                                                    <button type="button" class="sub"><i
                                                            class="fa fa-minus"></i></button>
                                                    <input type="number" id="product-1" value="1" />
                                                    <button type="button" class="add"><i
                                                            class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                $10.99
                                            </td>
                                            <td>
                                                <div class="cross-icon">
                                                    <i class="fas fa-times"></i>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="product-box">
                                                    <div class="img-box">
                                                        <img src="{{ asset("/assets/images/shop/cart-page-img-2.jpg") }}" alt="">
                                                    </div>
                                                    <h3><a href="{{ url("product-details") }}">Mouthwash</a></h3>
                                                </div>
                                            </td>
                                            <td>$10.99</td>
                                            <td>
                                                <div class="quantity-box">
                                                    <button type="button" class="sub"><i
                                                            class="fa fa-minus"></i></button>
                                                    <input type="number" id="product-2" value="1" />
                                                    <button type="button" class="add"><i
                                                            class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                $10.99
                                            </td>
                                            <td>
                                                <div class="cross-icon">
                                                    <i class="fas fa-times"></i>
                                                </div>
                                            </td>
                                        </tr>
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
                                <div class="cart-page__cart-total">
                                    <ul class="cart-total list-unstyled">
                                        <li>
                                            <span>Cart Subtotal</span>
                                            <span>$20.98 USD </span>
                                        </li>
                                        <li>
                                            <span>Shipping Cost</span>
                                            <span>-$40.00 USD</span>
                                        </li>
                                        <li>
                                            <span>Discount</span>
                                            <span>$0.00 USD</span>
                                        </li>
                                        <li>
                                            <span>Cart Total</span>
                                            <span class="cart-total-amount">$20.98 USD</span>
                                        </li>
                                    </ul>
                                    <div class="cart-page__buttons">
                                        <div class="cart-page__buttons-1">
                                            <a class="thm-btn" href="{{ url("checkout") }}">Update
                                                <span class="icon-right-arrow"></span>
                                            </a>
                                        </div>
                                        <div class="cart-page__buttons-2">
                                            <a href="{{ url("checkout") }}" class="thm-btn">Checkout
                                                <span class="icon-right-arrow"></span>
                                            </a>
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
       
<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection