@extends('layouts.layout3')
@section('title', (($service->seo_title ?: $service->ServicesTitle) ?? 'Service Details') . ' || Careon')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
                        <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
    $title = $service->ServicesTitle;
    $subtitle = $service->ServicesTitle;
    $metaDescription = $service->seo_description ?: \Illuminate\Support\Str::limit(strip_tags($service->ServicesText), 160);
    $metaKeywords = $service->seo_keywords;
@endphp
@section('content')

    <x-strickyHeaderThree />

    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details__left">
                        <div class="service-details__img">
                            <img src="{{ !empty($service->serviceimage) ? asset('uploads/services/' . $service->serviceimage) : asset('/assets/images/resources/service-details-img-1.jpg') }}"
                                alt="{{ $service->ServicesTitle }}">
                        </div>
                        <div class="service-details__content">
                            <h3 class="service-details__title-1">{{ $service->ServicesTitle }}</h3>
                            <div class="service-details__text-1">{!! $service->ServicesText !!}</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="service-details__right">
                        <div class="service-details__services-box">
                            <h3 class="service-details__service-title">Services</h3>
                            <ul class="service-details__service-list list-unstyled">
                                @foreach ($services as $item)
                                    @php
                                        $detailSlug = !empty($item->servicesUrl)
                                            ? $item->servicesUrl
                                            : \Illuminate\Support\Str::slug($item->ServicesTitle);
                                    @endphp
                                    <li class="{{ $item->Serviceid === $service->Serviceid ? 'active' : '' }}">
                                        <a href="{{ route('services.details', $detailSlug) }}"><span
                                                class="icon-left-arrows"></span>{{ $item->ServicesTitle }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="service-details__need-help-inner">
                            <div class="service-details__need-help">
                                <div class="service-details__need-help-bg"
                                    style="background-image: url({{ asset('assets/images/resources/service-details-need-help-bg.jpg') }});">
                                </div>
                                <h3 class="service-details__need-help-title">Need Help? Call Us</h3>
                                <div class="service-details__need-help-icon">
                                    <span class="icon-call"></span>
                                </div>
                                <div class="service-details__need-help-call">
                                    <a href="{{ url('tel:888178456765') }}">+1 905-721-0004</a>
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