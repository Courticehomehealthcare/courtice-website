@extends('layouts.layout3')
@section('title', 'Breast Pumps Rental || Careon')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
    $title = 'Breast Pumps Rental';
    $subtitle = 'Breast Pumps';
@endphp
@section('content')

    <x-strickyHeaderThree />

    <section class="page-header" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }});">
        <div class="container">
            <div class="page-header__inner">
                <h2>Breast Pumps Rental</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span class="icon-arrow-left"></span></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><span class="icon-arrow-left"></span></li>
                        <li><a href="{{ route('services.rentals') }}">Rentals</a></li>
                        <li><span class="icon-arrow-left"></span></li>
                        <li>Breast Pumps</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details__left">
                        <div class="service-details__img">
                            <img src="{{ isset($landingService->serviceimage) ? asset('uploads/services/' . $landingService->serviceimage) : asset('assets/images/resources/service-details-img-1.jpg') }}" alt="{{ $landingService->ServicesTitle ?? 'Breast Pumps' }}">
                        </div>
                        <div class="service-details__content">
                            <h3 class="service-details__title-1">{{ $landingService->ServicesTitle ?? 'Breast Pumps Rental' }}</h3>
                            <div class="service-details__text-1">
                                @if(isset($landingService))
                                    {!! $landingService->ServicesText !!}
                                @else
                                    <p>We understand the importance of providing the best for your baby. That's why we offer professional, hospital-grade breast pumps for rent. Our rental program is designed to be flexible and supportive, ensuring you have access to the equipment you need, when you need it.</p>
                                    <h4 class="mt-4">Why Choose Our Rental Service?</h4>
                                    <ul class="list-unstyled mt-3">
                                        <li><span class="icon-check"></span> Hospital-grade performance and efficiency</li>
                                        <li><span class="icon-check"></span> Hygienic and thoroughly sanitized equipment</li>
                                        <li><span class="icon-check"></span> Flexible rental periods (weekly/monthly)</li>
                                        <li><span class="icon-check"></span> Expert guidance on setup and usage</li>
                                    </ul>
                                @endif
                            </div>
                            <div class="contact-one__btn-box mt-5">
                                <a href="{{ route('contact') }}?service=Breast Pump Rental" class="thm-btn">Inquire About Rental <span class="icon-plus"></span></a>
                            </div>

                            @if(isset($services) && $services->count() > 0)
                            <div class="mt-5">
                                <h3>Available Breast Pumps</h3>
                                <div class="row mt-4">
                                    @foreach($services as $s)
                                    @php
                                        $sSlug = !empty($s->servicesUrl) ? $s->servicesUrl : \Illuminate\Support\Str::slug($s->ServicesTitle);
                                    @endphp
                                    <div class="col-md-6 mb-4">
                                        <div class="blog-five__single">
                                            <div class="blog-five__img">
                                                <img src="{{ !empty($s->serviceimage) ? asset('uploads/services/' . $s->serviceimage) : asset('/assets/images/resources/service-details-img-1.jpg') }}" alt="{{ $s->ServicesTitle }}">
                                            </div>
                                            <div class="blog-five__content">
                                                <h4><a href="{{ route('services.details', $sSlug) }}">{{ $s->ServicesTitle }}</a></h4>
                                                <div class="blog-five__read-more">
                                                    <a href="{{ route('services.details', $sSlug) }}">Details <span class="icon-arrow-right"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="service-details__right">
                        <div class="service-details__services-box">
                            <h3 class="service-details__service-title">Other Rentals</h3>
                            <ul class="service-details__service-list list-unstyled">
                                <li><a href="{{ route('services.rentals.hospital-beds') }}"><span class="icon-left-arrows"></span>Hospital Beds</a></li>
                                <li><a href="{{ route('services.rentals') }}"><span class="icon-left-arrows"></span>View All Rentals</a></li>
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
            </div>
        </div>
    </section>

    <x-footerThree />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
