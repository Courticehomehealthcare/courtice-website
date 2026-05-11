@extends('layouts.layout3')
@section('title', 'In-Store Shopping || Careon')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
    $title = 'In-Store Shopping';
    $subtitle = 'In-Store';
@endphp
@section('content')

    <x-strickyHeaderThree />

    <section class="page-header" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }});">
        <div class="container">
            <div class="page-header__inner">
                <h2>In-Store Shopping</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span class="icon-arrow-left"></span></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><span class="icon-arrow-left"></span></li>
                        <li>In-Store Shopping</li>
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
                        <h3 class="section-title-three__title title-animation">{{ $landingService->ServicesTitle ?? 'In-Store Shopping' }}</h3>
                        @if(isset($landingService))
                            <div class="mt-3">
                                {!! $landingService->ServicesText !!}
                            </div>
                        @else
                            <p class="mt-3">Experience our products first-hand. Our experts are here to help you find exactly what you need.</p>
                        @endif
                    </div>
                    
                    <div class="row mt-4">
                        @forelse($services as $service)
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
                        @empty
                        <div class="col-12 text-center">
                            <p>No specific in-store services listed yet. Visit us today!</p>
                            <a href="{{ route('contact') }}" class="thm-btn mt-3">Find Us <span class="icon-plus"></span></a>
                        </div>
                        @endforelse
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
