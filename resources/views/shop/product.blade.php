@extends('layouts.layout3')
@section('title', 'Product || Courtice Home Health Care')
@section('content')
<section class="pt-60 pb-60">
    <div class="container">
        <div class="row mb-20">
            <div class="col-12">
                <nav style="font-size:14px; color:#666; margin-bottom:15px;">
                    <a href="/shop" style="color:#2E75B6;">Shop</a> &rsaquo;
                    <a href="/shop/{{ $collection }}" style="color:#2E75B6;">{{ ucwords(str_replace('-', ' ', $collection)) }}</a> &rsaquo;
                    {{ $product['title'] }}
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-30">
                @php $images = collect($product['images']['edges'])->map(fn($e) => $e['node']); @endphp
                @if($images->count() > 0)
                <img id="mainImage" src="{{ $images[0]['url'] }}" alt="{{ $product['title'] }}"
                     style="width:100%; border-radius:10px; object-fit:cover; max-height:450px;">
                <div style="display:flex; gap:10px; margin-top:10px; flex-wrap:wrap;">
                    @foreach($images as $image)
                    <img src="{{ $image['url'] }}" alt="{{ $product['title'] }}"
                         onclick="document.getElementById('mainImage').src='{{ $image['url'] }}'"
                         style="width:70px; height:70px; object-fit:cover; border-radius:6px; cursor:pointer; border:2px solid #ddd;">
                    @endforeach
                </div>
                @endif
            </div>
            <div class="col-lg-6">
                <h2 style="color:#1E3A5F; margin-bottom:15px;">{{ $product['title'] }}</h2>
                <div id="productPrice" style="font-size:24px; font-weight:bold; color:#2E75B6; margin-bottom:20px;">
                    ${{ number_format($variants[0]['price']['amount'] ?? 0, 2) }} CAD
                </div>
                @foreach($product['options'] as $option)
                @if($option['name'] !== 'Title')
                <div style="margin-bottom:15px;">
                    <label style="font-weight:bold; color:#1E3A5F; display:block; margin-bottom:8px;">{{ $option['name'] }}</label>
                    <div style="display:flex; gap:8px; flex-wrap:wrap;">
                        @foreach($option['values'] as $value)
                        <button onclick="selectOption('{{ $option['name'] }}', '{{ $value }}', this)"
                                style="padding:8px 16px; border:2px solid #ddd; border-radius:6px; background:white; cursor:pointer; font-size:14px;">
                            {{ $value }}
                        </button>
                        @endforeach
                    </div>
                </div>
                @endif
                @endforeach
                <div style="margin-bottom:20px;">
                    <label style="font-weight:bold; color:#1E3A5F; display:block; margin-bottom:8px;">Quantity</label>
                    <div style="display:flex; align-items:center; gap:10px;">
                        <button onclick="changeQty(-1)" style="width:35px; height:35px; border:1px solid #ddd; background:white; border-radius:5px; font-size:18px; cursor:pointer;">-</button>
                        <span id="qty" style="font-size:18px; font-weight:bold;">1</span>
                        <button onclick="changeQty(1)" style="width:35px; height:35px; border:1px solid #ddd; background:white; border-radius:5px; font-size:18px; cursor:pointer;">+</button>
                    </div>
                </div>
                <div id="stockStatus" style="margin-bottom:20px; font-size:14px; color:green; font-weight:bold;">
                    ✓ In Stock
                </div>
                <div style="display:flex; gap:12px; flex-wrap:wrap;">
                    <button onclick="addToCart()"
                            style="padding:14px 30px; background:#1E3A5F; color:white; border:none; border-radius:6px; font-size:16px; cursor:pointer; font-weight:bold;">
                        🛒 Add to Cart
                    </button>
                    <button onclick="buyNow()"
                            style="padding:14px 30px; background:#2E75B6; color:white; border:none; border-radius:6px; font-size:16px; cursor:pointer; font-weight:bold;">
                        ⚡ Buy Now
                    </button>
                </div>
                @if($product['description'])
                <div style="margin-top:30px; padding-top:20px; border-top:1px solid #eee;">
                    <h5 style="color:#1E3A5F; margin-bottom:10px;">Product Description</h5>
                    <p style="color:#666; line-height:1.7;">{{ $product['description'] }}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
<script>
const variants = @json($variants);
let selectedOptions = {};
let currentQty = 1;

function selectOption(name, value, btn) {
    selectedOptions[name] = value;
    document.querySelectorAll('[onclick*="' + name + '"]').forEach(b => {
        b.style.borderColor = '#ddd';
        b.style.background = 'white';
        b.style.color = 'black';
    });
    btn.style.borderColor = '#1E3A5F';
    btn.style.background = '#1E3A5F';
    btn.style.color = 'white';
    updateVariant();
}

function updateVariant() {
    const variant = variants.find(v =>
        v.selectedOptions.every(opt => selectedOptions[opt.name] === opt.value)
    );
    if (variant) {
        const total = (parseFloat(variant.price.amount) * currentQty).toFixed(2);
        document.getElementById('productPrice').textContent = '$' + total + ' CAD';
        document.getElementById('stockStatus').textContent = variant.availableForSale ? '✓ In Stock' : '✗ Out of Stock';
        document.getElementById('stockStatus').style.color = variant.availableForSale ? 'green' : 'red';
    }
}

function changeQty(change) {
    currentQty = Math.max(1, currentQty + change);
    document.getElementById('qty').textContent = currentQty;
    const variant = getCurrentVariant();
    const total = (parseFloat(variant.price.amount) * currentQty).toFixed(2);
    document.getElementById('productPrice').textContent = '$' + total + ' CAD';
}

function getCurrentVariant() {
    return variants.find(v =>
        v.selectedOptions.every(opt => selectedOptions[opt.name] === opt.value)
    ) || variants[0];
}

function addToCart() {
    const variant = getCurrentVariant();
    const csrfToken = document.querySelector('meta[name="csrf-token"]');
    if (!csrfToken) { alert('CSRF token missing!'); return; }
    fetch('/cart/add', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken.content
        },
        body: JSON.stringify({
            variantId: variant.id,
            quantity: currentQty,
            title: '{{ addslashes($product["title"]) }}',
            price: variant.price.amount,
            image: '{{ isset($product["images"]["edges"][0]["node"]["url"]) ? $product["images"]["edges"][0]["node"]["url"] : "" }}'
        })
    }).then(r => r.json()).then(data => {
        if(data.success) {
            alert('✅ Added to cart! (' + data.count + ' items in cart)');
        }
    }).catch(err => {
        alert('Error adding to cart. Please try again.');
    });
}

function buyNow() {
    const variant = getCurrentVariant();
    const csrfToken = document.querySelector('meta[name="csrf-token"]');
    fetch('/cart/add', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken.content
        },
        body: JSON.stringify({
            variantId: variant.id,
            quantity: currentQty,
            title: '{{ addslashes($product["title"]) }}',
            price: variant.price.amount,
            image: '{{ isset($product["images"]["edges"][0]["node"]["url"]) ? $product["images"]["edges"][0]["node"]["url"] : "" }}'
        })
    }).then(() => window.location.href = '/cart');
}
</script>
@endsection
