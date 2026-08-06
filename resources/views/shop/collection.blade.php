@extends('layouts.layout3')
@section('title', '{{ $collection["title"] }} || Courtice Home Health Care')
@section('content')
<section class="pt-60 pb-60">
    <div class="container">
        <div class="row mb-20">
            <div class="col-12">
                <nav style="font-size:14px; color:#666; margin-bottom:15px;">
                    <a href="/shop" style="color:#2E75B6;">Shop</a> &rsaquo; {{ $collection['title'] }}
                </nav>
                <h2>{{ $collection['title'] }}</h2>
                <p style="color:#666; margin-top:5px;">{{ count($products) }} products</p>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                <a href="/shop/{{ $handle }}/{{ $product['handle'] }}" style="text-decoration:none; color:inherit;">
                    <div style="background:white; border-radius:10px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.08); transition:transform 0.2s;">
                        @if(isset($product['images']['edges'][0]['node']['url']))
                        <img src="{{ $product['images']['edges'][0]['node']['url'] }}"
                             alt="{{ $product['title'] }}"
                             style="width:100%; height:200px; object-fit:cover;"
                             loading="lazy">
                        @else
                        <div style="width:100%; height:200px; background:#eef2f7; display:flex; align-items:center; justify-content:center; color:#999;">No Image</div>
                        @endif
                        <div style="padding:15px;">
                            <h6 style="color:#1E3A5F; margin-bottom:8px;">{{ $product['title'] }}</h6>
                            <p style="color:#2E75B6; font-weight:bold;">
                                ${{ number_format($product['priceRange']['minVariantPrice']['amount'], 2) }}
                                {{ $product['priceRange']['minVariantPrice']['currencyCode'] }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @if($pageInfo['hasNextPage'])
        <div class="row mt-30">
            <div class="col-12 text-center">
                <a href="/shop/{{ $handle }}?cursor={{ $pageInfo['endCursor'] }}"
                   style="display:inline-block; padding:12px 30px; background:#1E3A5F; color:white; border-radius:6px; text-decoration:none;">
                    Load More Products →
                </a>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection
