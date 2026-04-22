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
    </style>

    <x-strickyHeader />

    <section class="page-header banner-two" style="height: auto; overflow: visible; position: relative;">
        <div class="banner-two__carousel owl-theme owl-carousel">
            @forelse($banners as $banner)
                <div class="item">
                    <img src="{{ asset($banner->image_url) }}" alt="{{ $banner->title }}"
                        style="width: 100%; height: 500px; object-fit: cover; display: block;">
                </div>
            @empty
                <div class="item">
                    <img src="{{ asset('assets/images/banner/services.png') }}" alt="Services Banner"
                        style="width: 100%; height: 500px; object-fit: cover; display: block;">
                </div>
            @endforelse
        </div>
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(90deg, #bee1e614 0%, rgba(190, 225, 230, 0) 100%); pointer-events: none; z-index: 1;"></div>
        <div class="container" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;">
            <div class="page-header__inner" style="padding: 0;">
                <h3>Services</h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span class="icon-arrow-left"></span></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--Services Page Start-->
    <section class="blog-five services-page">
        <div class="container">
            <div class="section-title-three text-center sec-title-animation animation-style2">
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
                                <div class="accrodion {{ $loop->first ? '' : '' }} wow fadeInLeft" data-wow-delay="{{ 100 * ($index + 1) }}ms">
                                    <div class="accrodion-title">
                                        <div class="faq-one-accrodion__count"></div>
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
                                        <div class="faq-one-accrodion__count"></div>
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
                                        <div class="faq-one-accrodion__count"></div>
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
                                <img src="{{ asset("/assets/images/resources/contact-one-img-1.jpg") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="contact-one__right">
                            <h3 class="contact-one__title">Request a Service Consultation</h3>
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