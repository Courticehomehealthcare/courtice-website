@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')

<div class="row">

    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $stats['services'] }}</h3>
                <p>Services</p>
            </div>
            <div class="icon"><i class="fas fa-concierge-bell"></i></div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{ $stats['blogs'] }}</h3>
                <p>Blogs</p>
            </div>
            <div class="icon"><i class="fas fa-blog"></i></div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $stats['faqs'] }}</h3>
                <p>FAQs</p>
            </div>
            <div class="icon"><i class="fas fa-question-circle"></i></div>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $stats['contactus'] }}</h3>
                <p>contactus</p>
            </div>
            <div class="icon"><i class="fas fa-question-circle"></i></div>
        </div>
    </div>


    <div class="col-lg-3 col-6">
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>{{ $stats['carousel'] }}</h3>
                <p>Carousel Items</p>
            </div>
        </div>
    </div>


</div>

@stop