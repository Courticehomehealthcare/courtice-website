@extends('layouts.layout3')
@section('title', 'Shop || Courtice Home Health Care')
@section('content')
<section class="pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-40">
                <h2>Shop by Category</h2>
            </div>
        </div>
        <div class="row">
            @foreach($collections as $collection)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                <a href="/shop/{{ $collection['handle'] }}" style="text-decoration:none; color:inherit;">
                    <div style="background:white; border-radius:10px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.08);">
                        @if($collection['image'])
                        <img src="{{ $collection['image']['url'] }}" alt="{{ $collection['title'] }}" style="width:100%; height:200px; object-fit:cover;">
                        @endif
                        <div style="padding:15px;">
                            <h5 style="color:#1E3A5F;">{{ $collection['title'] }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
