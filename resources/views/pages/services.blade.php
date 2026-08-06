@extends('layouts.layout3')
@section('title', 'Services || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
                                                                                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
                                                                                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
                                                                                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
                                                                                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
                                                                                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>
                                                                                                                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@21.0.8/build/css/intlTelInput.css"/>';

@endphp
@php
    $title = 'Services';
    $subtitle = 'Services';
@endphp
@section('content')
    <style>
        .page-header__bg::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, #bee1e614 0%, rgba(190, 225, 230, 0) 100%);
        }

        .thm-breadcrumb li {

            color: white !important;
        }


        .banner-two {

            padding: 0px !important;

        }

        .thm-breadcrumb li a {
            color: white !important;

        }

        .page-header__inner h3 {
            color: white !important;

        }

        .image_c {
            height: 280px;
        }

        .services-faq {
            padding: 120px 0;
            background-color: #f7fbff;
        }

        .services-faq .accrodion-title h4 {
            font-size: 18px;
            line-height: 1.5;
        }

        /* Banner Carousel Dots & Arrows */
        .banner-two__carousel.owl-carousel .owl-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            pointer-events: none;
            z-index: 10;
        }

        .banner-two__carousel.owl-carousel .owl-nav button.owl-prev,
        .banner-two__carousel.owl-carousel .owl-nav button.owl-next {
            width: 50px;
            height: 50px;
            background-color: #ffffff !important;
            color: #00bdd6 !important;
            /* Theme blue */
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            pointer-events: all;
            margin: 0 30px;
            opacity: 0.8;
        }

        .banner-two__carousel.owl-carousel .owl-nav button.owl-prev:hover,
        .banner-two__carousel.owl-carousel .owl-nav button.owl-next:hover {
            background-color: #00bdd6 !important;
            color: #ffffff !important;
            opacity: 1;
            transform: scale(1.1);
        }

        .banner-two__carousel.owl-carousel .owl-dots {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 12px;
            z-index: 10;
        }

        .icon-arrow-left:before {
            content: "\e929" !important;
        }

        .banner-two__carousel.owl-carousel .owl-dots .owl-dot span {
            width: 12px;
            height: 12px;
            background-color: rgba(255, 255, 255, 0.5) !important;
            border-radius: 50%;
            transition: all 0.3s ease;
            display: block;
            margin: 0 !important;
        }

        .banner-two__carousel.owl-carousel .owl-dots .owl-dot.active span {
            background-color: #ffffff !important;
            transform: scale(1.3);
        }

        .icon-arrow-left:before {
            content: "\e929" !important;
        }

        /* Make Service Cards Same Height */
        .blog-five .row {
            display: flex;
            flex-wrap: wrap;
        }

        .blog-five .row>[class*='col-'] {
            display: flex;
            margin-bottom: 30px;
            /* Ensure spacing between rows */
        }

        .blog-five__single {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
            margin-bottom: 0 !important;
            /* Override any bottom margin that might break height */
            background-color: #fff;
            /* Ensure background color if needed */
        }

        .blog-five__img {
            flex-shrink: 0;
        }

        .blog-five__content {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            padding-bottom: 30px;
            /* Ensure some padding at bottom */
        }

        .blog-five__text {
            flex-grow: 1;
        }

        .blog-five__read-more,
        .blog-one__read-more {
            margin-top: auto;
        }

        .page-header__inner {
            text-align: left;
        }

        .thm-breadcrumb {
            justify-content: flex-start !important;
        }

        .faq-one-accrodion__count::before {
            display: none !important;
        }

        /* Premium Banner Button & Content Styles */
        .banner-content-overlay {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            transform: translateY(-50%);
            z-index: 5;
            pointer-events: none;
        }

        .banner-content-overlay .container {
            pointer-events: none;
        }

        .banner-content-inner {
            max-width: 600px;
            pointer-events: all;
            text-align: left;
        }

        .banner-title {
            font-size: 64px;
            font-weight: 900;
            color: #ffffff;
            line-height: 1.1;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: -1px;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .banner-text {
            font-size: 20px;
            color: #ffffff;
            margin-bottom: 35px;
            line-height: 1.6;
            max-width: 500px;
            font-weight: 500;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        }

        .premium-banner-btn {
            display: inline-flex;
            align-items: center;
            background-color: #e5f0b8;
            /* Light lime/yellow from screenshot */
            color: #000 !important;
            padding: 12px 28px;
            border-radius: 50px;
            text-decoration: none !important;
            font-weight: 800;
            font-size: 16px;
            text-transform: uppercase;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid #000;
            box-shadow: 0 4px 0px rgba(0, 0, 0, 1);
        }

        .premium-banner-btn:hover {
            background-color: #d8e6a2;
            transform: translateY(-2px);
            box-shadow: 0 6px 0px rgba(0, 0, 0, 1);
        }

        .premium-banner-btn:active {
            transform: translateY(2px);
            box-shadow: 0 0px 0px rgba(0, 0, 0, 1);
        }

        .premium-banner-btn .icon-circle {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #000;
            color: #fff;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            margin-left: 18px;
            transition: transform 0.3s ease;
        }

        .premium-banner-btn:hover .icon-circle {
            transform: translateX(5px);
        }

        .premium-banner-btn .icon-circle i {
            font-size: 14px;
        }

        @media (max-width: 991px) {
            .banner-title {
                font-size: 48px;
            }

            .banner-text {
                font-size: 18px;
            }
        }

        @media (max-width: 767px) {
            .banner-title {
                font-size: 36px;
                letter-spacing: 0;
            }

            .banner-text {
                font-size: 16px;
                margin-bottom: 25px;
            }

            .banner-two__carousel .item img {
                height: 450px !important;
            }

            .banner-content-inner {
                padding: 0 15px;
            }

            .premium-banner-btn {
                padding: 10px 20px;
                font-size: 14px;
            }

            .premium-banner-btn .icon-circle {
                width: 30px;
                height: 30px;
                margin-left: 10px;
            }
        }
    </style>

    <x-strickyHeader />

    <section class="page-header banner-two"
        style="height: auto; overflow: visible; position: relative; background-color: #f7fbff;">
        <div class="banner-two__carousel owl-theme owl-carousel">
            @forelse($banners as $banner)
                <div class="item" style="position: relative;">
                    <img src="{{ asset($banner->image_url) }}" alt="{{ $banner->title }}"
                        style="width: 100%; height: 600px; display: block;">

                    <div class="banner-content-overlay">
                        <div
                            style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(90deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0) 70%); pointer-events: none; z-index: -1;">
                        </div>
                        <!--<div class="container">-->
                        <!--    <div class="banner-content-inner">-->
                        <!--        @if($banner->title)-->
                        <!--            <h1 class="banner-title">{{ $banner->title }}</h1>-->
                        <!--        @endif-->

                        <!--        @if($banner->description)-->
                        <!--            <p class="banner-text">{{ $banner->description }}</p>-->
                        <!--        @endif-->

                        <!--        @if($banner->button_text && $banner->button_link)-->
                        <!--            <a href="{{ $banner->button_link }}" class="premium-banner-btn">-->
                        <!--                {{ $banner->button_text }}-->
                        <!--                <span class="icon-circle">-->
                        <!--                    <span class="icon-arrow-right"></span>-->
                        <!--                </span>-->
                        <!--            </a>-->
                        <!--        @endif-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            @empty
                <div class="item" style="position: relative;">
                    <img src="{{ asset('assets/images/banner/services.png') }}" alt="Services Banner"
                        style="width: 100%; height: 600px; object-fit: cover; display: block;">

                    <div class="banner-content-overlay">
                        <div
                            style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(90deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0) 70%); pointer-events: none; z-index: -1;">
                        </div>
                        <div class="container">
                            <div class="banner-content-inner">
                                <h1 class="banner-title">Be Ready For Anything</h1>
                                <p class="banner-text">Essential first aid and medical supplies stocked, trusted, and always
                                    within reach.</p>
                                <a href="{{ route('collections') }}" class="premium-banner-btn">
                                    Shop First Aid
                                    <span class="icon-circle">
                                        <span class="icon-arrow-right"></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </section>




    <div class="container">
        <div class="section-title-three text-center sec-title-animation animation-style2" style="padding-top:50px">
            <h3 class="section-title-three__title title-animation">Explore Featured Services.</h3>
        </div>
        <div class="row">
            @forelse ($services as $index => $service)
                @php
                    $animations = ['fadeInLeft', 'fadeInUp', 'fadeInRight'];
                    $delays = ['100ms', '200ms', '300ms'];
                    $animationClass = $animations[$index % 3];
                    $animationDelay = $delays[$index % 3];
                    $detailSlug = !empty($service->servicesUrl)
                        ? $service->servicesUrl
                        : \Illuminate\Support\Str::slug($service->ServicesTitle);
                @endphp
                <div class="col-xl-4 col-lg-4 wow {{ $animationClass }}" data-wow-delay="{{ $animationDelay }}">
                    <div class="blog-five__single">
                        <div class="blog-five__img">
                            <img class="image_c"
                                src="{{ !empty($service->serviceimage) ? asset('uploads/services/' . $service->serviceimage) : asset('/assets/images/own/wheelchair.jpg') }}"
                                alt="{{ $service->ServicesTitle }}">
                            <div class="blog-five__plus">
                                <a href="{{ route('services.details', $detailSlug) }}"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="blog-five__content">
                            <h3 class="blog-five__title">
                                <a href="{{ route('services.details', $detailSlug) }}">{{ $service->ServicesTitle }}</a>
                            </h3>
                            <p class="blog-five__text">
                                {{ \Illuminate\Support\Str::limit(strip_tags($service->ServicesText), 90) }}
                            </p>
                            <div class="blog-five__read-more">
                                <a href="{{ route('services.details', $detailSlug) }}">Read More <span
                                        class="icon-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">No services found.</p>
                </div>
            @endforelse



        </div>
    </div>
    </div>
    </section>
    <!--Services Page End-->

    <!--Services FAQ Start-->
    <section class="services-faq">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h6 class="section-title__tagline"><span class="icon-broken-bone"></span>FAQs</h6>
                <h3 class="section-title__title title-animation">Common Questions About Our Services</h3>
            </div>
            <div class="row">
                @php
                    $half = ceil($servicesFaqs->count() / 2);
                    $leftFaqs = $servicesFaqs->slice(0, $half);
                    $rightFaqs = $servicesFaqs->slice($half);
                @endphp
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-one__left">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="services-faq-1">
                            @forelse ($leftFaqs as $index => $faq)
                                <div class="accrodion {{ $loop->first ? '' : '' }} wow fadeInLeft"
                                    data-wow-delay="{{ 100 * ($index + 1) }}ms">
                                    <div class="accrodion-title">
                                        <div class="faq-one-accrodion__count">{{ $loop->iteration }}</div>
                                        <h4>{{ $faq->question }}</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            {!! $faq->answer !!}
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="accrodion wow fadeInLeft" data-wow-delay="100ms">
                                    <div class="accrodion-title">
                                        <div class="faq-one-accrodion__count">
                                            {{ sprintf('%02d', $loop->iteration + ($loop->parent->half ?? (isset($half) ? $half : 0))) }}
                                        </div>
                                        <h4>No Services FAQs available right now.</h4>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-one__left">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="services-faq-2">
                            @foreach ($rightFaqs as $index => $faq)
                                <div class="accrodion wow fadeInRight" data-wow-delay="{{ 100 * ($index + 1) }}ms">
                                    <div class="accrodion-title">
                                        <div class="faq-one-accrodion__count">{{ $loop->iteration + $half }}</div>
                                        <h4>{{ $faq->question }}</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            {!! $faq->answer !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services FAQ End-->

    <!--Contact One Start-->
    <section class="contact-one contact-three">
        <div class="container">
            <div class="contact-one__inner">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="contact-one__left">
                            <div class="contact-one__img">
                                <img src="{{ asset("/assets/images/resources/contact-products.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="contact-one__right">
                            <h6 class="section-title__tagline"><span class="icon-broken-bone"></span>If you have questions;
                            </h6>
                            <h5 class="contact-one__tite" style="text-align: start;padding-top:10px;padding-bottom:15px">
                                Let’s Talk Complete the form; and let’s talk about how <span
                                    style="color: #00bdd6;">CHHC</span> can help.</h5>
                            @if (session('success'))
                                <div class="alert alert-success mb-3">{{ session('success') }}</div>
                            @endif
                            <form id="contactSubmitForm" class="contact-form-validated contact-one__form" method="POST"
                                action="{{ route('contact.submit') }}" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <input type="text" name="first_name" placeholder="First Name"
                                                value="{{ old('first_name') }}" required="">
                                        </div>
                                        @error('first_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <input type="text" name="last_name" placeholder="Last Name"
                                                value="{{ old('last_name') }}">
                                        </div>
                                        @error('last_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <input type="email" name="email" placeholder="Email Address"
                                                value="{{ old('email') }}" required="">
                                        </div>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <input type="tel" id="phoneInput" name="phone_display"
                                                placeholder="Phone Number" value="{{ old('phone') }}" required="">
                                            <input type="hidden" name="phone" id="phoneHidden">
                                        </div>
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="contact-one__input-box"
                                            style="position: relative; margin-bottom: 20px;">
                                            <select name="service" class="form-control ignore"
                                                style="height: 60px !important; width: 100% !important; border: 1px solid var(--careon-base) !important; border-radius: 35px !important; background: #fff !important; padding: 0 30px !important; font-size: 14px !important; font-weight: 400 !important; color: var(--careon-gray) !important; appearance: none !important; -webkit-appearance: none !important; cursor: pointer !important; outline: none !important; background-image: none !important;">
                                                <option value="" style="color: var(--careon-gray);">Select Service You Are
                                                    Interested In</option>
                                                <option value="In-Store Shopping" {{ old('service') == 'In-Store Shopping' ? 'selected' : '' }}>In-Store Shopping</option>
                                                <option value="Online Shopping" {{ old('service') == 'Online Shopping' ? 'selected' : '' }}>Online Shopping</option>
                                                <option value="Product Rentals – Breast Pumps" {{ old('service') == 'Product Rentals – Breast Pumps' ? 'selected' : '' }}>Product Rentals – Breast
                                                    Pumps</option>
                                                <option value="Product Rentals – Hospital Beds" {{ old('service') == 'Product Rentals – Hospital Beds' ? 'selected' : '' }}>Product Rentals – Hospital
                                                    Beds</option>
                                                <option value="Compression Services" {{ old('service') == 'Compression Services' ? 'selected' : '' }}>Compression Services</option>
                                                <option value="Professional Fittings" {{ old('service') == 'Professional Fittings' ? 'selected' : '' }}>Professional Fittings</option>
                                                <option value="General Inquiry" {{ old('service') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry</option>
                                            </select>
                                            <span class="fa fa-angle-down"
                                                style="position: absolute; top: 50%; right: 30px; transform: translateY(-50%); font-size: 18px; color: var(--careon-base); pointer-events: none; z-index: 2;"></span>
                                        </div>
                                        @error('service')
                                            <small class="text-danger" style="margin-left: 30px;">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="contact-one__input-box text-message-box">
                                            <textarea name="message"
                                                placeholder="Message here..">{{ old('message') }}</textarea>
                                        </div>
                                        @error('message')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <div class="contact-one__btn-box">
                                            <button id="contactSubmitBtn" type="submit" class="thm-btn">Send Message<span
                                                    class="icon-plus"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact One End-->


    <x-footerThree />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@21.0.8/build/js/intlTelInput.min.js"></script>
    <style>
        .iti {
            width: 100%;
            display: block;
        }

        .iti__selected-dial-code {
            font-size: 14px;
            color: var(--careon-gray);
        }

        .iti--separate-dial-code .iti__selected-flag {
            background: transparent !important;
            padding-left: 20px;
        }

        .contact-one__input-box .iti input[type="tel"] {
            height: 60px;
            width: 100%;
            padding-left: 95px !important;
            padding-right: 30px;
            outline: none;
            font-size: 14px;
            font-weight: 400;
            background-color: transparent;
            border: 1px solid var(--careon-base);
            color: var(--careon-gray);
            display: block;
            border-radius: 30px;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize intl-tel-input
            var phoneInput = document.getElementById('phoneInput');
            var phoneHidden = document.getElementById('phoneHidden');
            var iti = window.intlTelInput(phoneInput, {
                initialCountry: 'ca',
                preferredCountries: ['ca', 'us', 'gb', 'in', 'au', 'sg'],
                separateDialCode: true,
                utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@21.0.8/build/js/utils.js'
            });

            var form = document.getElementById('contactSubmitForm');
            var submitBtn = document.getElementById('contactSubmitBtn');
            if (!form || !submitBtn) return;

            var originalBtnHTML = submitBtn.innerHTML;

            form.addEventListener('submit', function (e) {
                e.preventDefault();

                // Clear previous errors & alerts
                form.querySelectorAll('.ajax-error').forEach(function (el) { el.remove(); });
                form.querySelectorAll('.ajax-alert').forEach(function (el) { el.remove(); });

                // Show spinner
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Submitting...';

                // Set full international phone number
                phoneHidden.value = iti.getNumber();

                var formData = new FormData(form);

                fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    },
                    body: formData
                })
                    .then(function (response) {
                        if (response.ok) return response.json();
                        if (response.status === 422) {
                            return response.json().then(function (data) {
                                throw { validation: true, errors: data.errors };
                            });
                        }
                        throw { validation: false };
                    })
                    .then(function (data) {
                        // Success
                        form.reset();
                        var alert = document.createElement('div');
                        alert.className = 'alert alert-success mt-3 ajax-alert';
                        alert.textContent = data.message || 'Submitted successfully!';
                        form.appendChild(alert);
                        setTimeout(function () { alert.remove(); }, 5000);
                    })
                    .catch(function (err) {
                        if (err && err.validation && err.errors) {
                            Object.keys(err.errors).forEach(function (field) {
                                var input = form.querySelector('[name="' + field + '"]');
                                if (input) {
                                    var small = document.createElement('small');
                                    small.className = 'text-danger d-block ajax-error';
                                    small.textContent = err.errors[field][0];
                                    input.closest('.col-xl-6, .col-xl-12, .col-lg-6, .col-md-6')?.appendChild(small);
                                }
                            });
                        } else {
                            var alert = document.createElement('div');
                            alert.className = 'alert alert-danger mt-3 ajax-alert';
                            alert.textContent = 'Something went wrong. Please try again.';
                            form.appendChild(alert);
                            setTimeout(function () { alert.remove(); }, 5000);
                        }
                    })
                    .finally(function () {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnHTML;
                    });
            });
        });
    </script>
@endsection