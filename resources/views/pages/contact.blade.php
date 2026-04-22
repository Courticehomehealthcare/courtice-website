
@extends('layouts.layout3')
@section('title', 'Contact || Careon || Careon Laravel Template')
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
    $title = 'Contact';
    $subtitle = 'Contact';
@endphp
@section('content')

<x-strickyHeader/>
 
        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="contact-page__left">
                            <!-- <h3 class="contact-page__title">Appiontment Now</h3> -->
                            @if (session('success'))
                                <div class="alert alert-success mb-3">{{ session('success') }}</div>
                            @endif
                            <form id="contactSubmitForm" class="contact-form-validated contact-page__form" method="POST"
                                action="{{ route('contact.submit') }}" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-page__input-box">
                                            <input type="text" name="first_name" placeholder="First Name"
                                                value="{{ old('first_name') }}" required="">
                                        </div>
                                        @error('first_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-page__input-box">
                                            <input type="text" name="last_name" placeholder="Last Name"
                                                value="{{ old('last_name') }}">
                                        </div>
                                        @error('last_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-page__input-box">
                                            <input type="email" name="email" placeholder="Email Address"
                                                value="{{ old('email') }}" required="">
                                        </div>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-page__input-box">
                                            <input type="tel" id="phoneInput" name="phone_display" placeholder="Phone Number"
                                                value="{{ old('phone') }}" required="">
                                            <input type="hidden" name="phone" id="phoneHidden">
                                        </div>
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="contact-page__input-box text-message-box">
                                            <textarea name="message" placeholder="Message here..">{{ old('message') }}</textarea>
                                        </div>
                                        @error('message')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <div class="contact-page__btn-box">
                                            <button id="contactSubmitBtn" type="submit" class="thm-btn">Contact Now
                                                <span class="icon-plus"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="contact-page__right">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <h6 class="section-title__tagline"><span class="icon-broken-bone"></span>Get In Touch
                                </h6>
                                <h3 class="section-title__title title-animation">{{ $siteSettings->companyname ?? 'Health First Always' }}
                                </h3>
                            </div>
                            <p class="contact-page__text">{{ $siteSettings->description ?? 'Health care is a vital aspect of maintaining overall well-being, encompassing a range of services from preventive care to treatment.' }}</p>
                            <ul class="contact-page__contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-call"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Phone</h3>
                                        <p><a href="tel:{{ $siteSettings->phone_number ?? '' }}">{{ $siteSettings->phone_number ?? 'N/A' }}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-envolope"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Email</h3>
                                        <p><a href="mailto:{{ $siteSettings->email ?? '' }}">{{ $siteSettings->email ?? 'N/A' }}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Location</h3>
                                        <p>{{ $siteSettings->address ?? 'N/A' }}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->
       
<x-footerThree/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@21.0.8/build/js/intlTelInput.min.js"></script>
<style>
    .iti { width: 100%; display: block; }
    .iti__selected-dial-code { font-size: 14px; color: var(--careon-gray); }
    .iti--separate-dial-code .iti__selected-flag { background: transparent !important; padding-left: 0; }
    .contact-page__input-box .iti input[type="tel"] { 
        height: 54px;
        width: 100%;
        padding-left: 55px !important;
        padding-right: 30px;
        outline: none;
        font-size: 14px;
        font-weight: 400;
        background-color: transparent;
        border: none;
        border-bottom: 2px solid var(--careon-bdr-color);
        color: var(--careon-gray);
        display: block;
        border-radius: 0;
    }
    .contact-page__input-box .iti input[type="tel"]:focus {
        border-bottom-color: var(--careon-base);
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
            form.querySelectorAll('.ajax-error').forEach(function(el) { el.remove(); });
            form.querySelectorAll('.ajax-alert').forEach(function(el) { el.remove(); });

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