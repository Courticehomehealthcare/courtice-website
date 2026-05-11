@extends('layouts.layout3')
@section('title', 'Product Rentals || Careon')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
    $title = 'Product Rentals';
    $subtitle = 'Rentals';
@endphp
@section('content')

    <x-strickyHeaderThree />

    <section class="page-header" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }});">
        <div class="container">
            <div class="page-header__inner">
                <h2>Product Rentals</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span class="icon-arrow-left"></span></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><span class="icon-arrow-left"></span></li>
                        <li>Rentals</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-five services-page">
        <div class="container">
            <div class="section-title-three text-center sec-title-animation animation-style2">
                <h3 class="section-title-three__title title-animation">{{ $landingService->ServicesTitle ?? 'Product Rentals' }}</h3>
                @if(isset($landingService))
                    <div class="mt-3">
                        {!! $landingService->ServicesText !!}
                    </div>
                @endif
            </div>
            <div class="row">
                <!-- Breast Pumps -->
                <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="blog-five__single">
                        <div class="blog-five__img">
                            <img src="{{ asset('assets/images/resources/service-details-img-1.jpg') }}" alt="Breast Pumps">
                            <div class="blog-five__plus">
                                <a href="{{ route('services.rentals.breast-pumps') }}"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="blog-five__content">
                            <h3 class="blog-five__title">
                                <a href="{{ route('services.rentals.breast-pumps') }}">Breast Pumps</a>
                            </h3>
                            <p class="blog-five__text">We offer high-quality hospital-grade breast pumps for rent to support your breastfeeding journey.</p>
                            <div class="blog-five__read-more">
                                <a href="{{ route('services.rentals.breast-pumps') }}">Learn More <span class="icon-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hospital Beds -->
                <div class="col-xl-6 col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="blog-five__single">
                        <div class="blog-five__img">
                            <img src="{{ asset('assets/images/resources/service-details-img-2.jpg') }}" alt="Hospital Beds">
                            <div class="blog-five__plus">
                                <a href="{{ route('services.rentals.hospital-beds') }}"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="blog-five__content">
                            <h3 class="blog-five__title">
                                <a href="{{ route('services.rentals.hospital-beds') }}">Hospital Beds</a>
                            </h3>
                            <p class="blog-five__text">Durable and comfortable hospital beds available for home use, ensuring safety and ease of care.</p>
                            <div class="blog-five__read-more">
                                <a href="{{ route('services.rentals.hospital-beds') }}">Learn More <span class="icon-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if($services->count() > 0)
            <div class="section-title-three text-center mt-5">
                <h3 class="section-title-three__title">Other Rental Services</h3>
            </div>
            <div class="row mt-4">
                @foreach($services as $service)
                @php
                    $detailSlug = !empty($service->servicesUrl) ? $service->servicesUrl : \Illuminate\Support\Str::slug($service->ServicesTitle);
                @endphp
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="blog-five__single">
                        <div class="blog-five__img">
                            <img src="{{ !empty($service->serviceimage) ? asset('uploads/services/' . $service->serviceimage) : asset('/assets/images/resources/service-details-img-1.jpg') }}" alt="{{ $service->ServicesTitle }}">
                            <div class="blog-five__plus">
                                <a href="{{ route('services.details', $detailSlug) }}"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="blog-five__content">
                            <h3 class="blog-five__title">
                                <a href="{{ route('services.details', $detailSlug) }}">{{ $service->ServicesTitle }}</a>
                            </h3>
                            <div class="blog-five__read-more">
                                <a href="{{ route('services.details', $detailSlug) }}">Read More <span class="icon-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    <x-footerThree />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
