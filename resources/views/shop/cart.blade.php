@extends('layouts.layout3')
@section('title', 'Cart || Courtice Home Health Care')
@section('content')
<section class="pt-60 pb-60">
    <div class="container">
        <div class="row mb-30">
            <div class="col-12">
                <h2 style="color:#1E3A5F;">Your Cart</h2>
            </div>
        </div>

        @if(empty($cart))
        <div class="row">
            <div class="col-12 text-center" style="padding:60px 0;">
                <h4 style="color:#666;">Your cart is empty</h4>
                <a href="/shop" style="display:inline-block; margin-top:20px; padding:12px 30px; background:#1E3A5F; color:white; border-radius:6px; text-decoration:none;">
                    Continue Shopping
                </a>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-lg-8">
                @php $total = 0; @endphp
                @foreach($cart as $item)
                @php $total += $item['price'] * $item['quantity']; @endphp
                <div style="background:white; border-radius:10px; padding:20px; margin-bottom:15px; box-shadow:0 2px 8px rgba(0,0,0,0.08); display:flex; gap:15px; align-items:center;">
                    @if($item['image'])
                    <img src="{{ $item['image'] }}" style="width:80px; height:80px; object-fit:cover; border-radius:6px;">
                    @endif
                    <div style="flex:1;">
                        <h6 style="color:#1E3A5F; margin-bottom:5px;">{!!html_entity_decode($item['title'])!!}</h6>
                        <p style="color:#2E75B6; font-weight:bold;">${{ number_format($item['price'], 2) }} CAD</p>
                        <p style="color:#666; font-size:14px;">Qty: {{ $item['quantity'] }}</p>
                    </div>
                    <form method="POST" action="/cart/remove">
                        @csrf
                        <input type="hidden" name="variantId" value="{{ $item['variantId'] }}">
                        <button type="submit" style="background:none; border:none; color:red; cursor:pointer; font-size:20px;">✕</button>
                    </form>
                </div>
                @endforeach
            </div>

            <div class="col-lg-4">
                <div style="background:white; border-radius:10px; padding:25px; box-shadow:0 2px 8px rgba(0,0,0,0.08);">
                    <h5 style="color:#1E3A5F; margin-bottom:20px;">Order Summary</h5>
                    <div style="display:flex; justify-content:space-between; margin-bottom:15px;">
                        <span>Subtotal</span>
                        <strong>${{ number_format($total, 2) }} CAD</strong>
                    </div>
                    <div style="display:flex; justify-content:space-between; margin-bottom:20px; padding-top:15px; border-top:1px solid #eee;">
                        <strong>Total</strong>
                        <strong style="color:#2E75B6; font-size:18px;">${{ number_format($total, 2) }} CAD</strong>
                    </div>
                    <form method="POST" action="/cart/checkout">
                        @csrf
                        <button type="submit" style="width:100%; padding:14px; background:#1E3A5F; color:white; border:none; border-radius:6px; font-size:16px; font-weight:bold; cursor:pointer;">
                            Proceed to Checkout →
                        </button>
                    </form>
                    <a href="/shop" style="display:block; text-align:center; margin-top:12px; color:#666; text-decoration:none; font-size:14px;">
                        ← Continue Shopping
                    </a>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection

