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

    <section class="service-details blog-five services-page">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-5">
                    <div class="service-details__right">
                        <div class="service-details__services-box">
                            <h3 class="service-details__service-title">All Services</h3>
                            <ul class="service-details__service-list list-unstyled">
                                @foreach($allServices as $s)
                                @php
                                    $sSlug = !empty($s->servicesUrl) ? $s->servicesUrl : \Illuminate\Support\Str::slug($s->ServicesTitle);
                                @endphp
                                <li class="{{ request()->is('services/details/'.$sSlug) ? 'active' : '' }}">
                                    <a href="{{ route('services.details', $sSlug) }}"><span class="icon-left-arrows"></span>{{ $s->ServicesTitle }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="service-details__need-help-inner">
                            <div class="service-details__need-help">
                                <div class="service-details__need-help-bg" style="background-image: url({{ asset('assets/images/resources/service-details-need-help-bg.jpg') }});"></div>
                                <h3 class="service-details__need-help-title">Need Help? Call Us</h3>
                                <div class="service-details__need-help-icon"><span class="icon-call"></span></div>
                                <div class="service-details__need-help-call"><a href="tel:9057210004">+1 905-721-0004</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-xl-8 col-lg-7">
                    <div class="section-title-three sec-title-animation animation-style2">
                        <h3 class="section-title-three__title title-animation">{{ $landingService->ServicesTitle ?? 'Product Rentals' }}</h3>
                        @if(isset($landingService))
                            <div class="mt-3">
                                {!! $landingService->ServicesText !!}
                            </div>
                        @endif
                    </div>
                    @if($services->count() > 0)
                    <div class="row mt-4">
                        @foreach($services as $service)
                        @php
                            $detailSlug = !empty($service->servicesUrl) ? $service->servicesUrl : \Illuminate\Support\Str::slug($service->ServicesTitle);
                        @endphp
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
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

                    <div class="section-title-three mt-5">
                        <h3 class="section-title-three__title">Rental Options</h3>
                    </div>
                    <div class="row mt-4">
                        <!-- Breast Pumps -->
                        <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="blog-five__single">
                                <div class="blog-five__img">
                                    <img src="{{ isset($breastPumps) && $breastPumps->serviceimage ? asset('uploads/services/' . $breastPumps->serviceimage) : asset('assets/images/resources/service-details-img-1.jpg') }}" alt="{{ $breastPumps->ServicesTitle ?? 'Breast Pumps' }}">
                                    <div class="blog-five__plus">
                                        <a href="{{ route('services.rentals.breast-pumps') }}"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="blog-five__content">
                                    <h3 class="blog-five__title">
                                        <a href="{{ route('services.rentals.breast-pumps') }}">{{ $breastPumps->ServicesTitle ?? 'Breast Pumps' }}</a>
                                    </h3>
                                    <p class="blog-five__text">
                                        @if(isset($breastPumps))
                                            {{ \Illuminate\Support\Str::limit(strip_tags($breastPumps->ServicesText), 120) }}
                                        @else
                                            We offer high-quality hospital-grade breast pumps for rent to support your breastfeeding journey.
                                        @endif
                                    </p>
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
                                    <img src="{{ isset($hospitalBeds) && $hospitalBeds->serviceimage ? asset('uploads/services/' . $hospitalBeds->serviceimage) : asset('assets/images/resources/service-details-img-2.jpg') }}" alt="{{ $hospitalBeds->ServicesTitle ?? 'Hospital Beds' }}">
                                    <div class="blog-five__plus">
                                        <a href="{{ route('services.rentals.hospital-beds') }}"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="blog-five__content">
                                    <h3 class="blog-five__title">
                                        <a href="{{ route('services.rentals.hospital-beds') }}">{{ $hospitalBeds->ServicesTitle ?? 'Hospital Beds' }}</a>
                                    </h3>
                                    <p class="blog-five__text">
                                        @if(isset($hospitalBeds))
                                            {{ \Illuminate\Support\Str::limit(strip_tags($hospitalBeds->ServicesText), 120) }}
                                        @else
                                            Durable and comfortable hospital beds available for home use, ensuring safety and ease of care.
                                        @endif
                                    </p>
                                    <div class="blog-five__read-more">
                                        <a href="{{ route('services.rentals.hospital-beds') }}">Learn More <span class="icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footerThree />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
