
@extends('layouts.layout-inner-page')
@section('title', 'Appoinment || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
            
@endphp
@php
    $title = 'Appoinment';
    $subtitle = 'Appoinment';
@endphp
@section('content')

<x-strickyHeader/>
 
        <!--Appoinment Page Start-->
        <section class="appoinment-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="appoinment-page__left">
                            <h3 class="appoinment-page__title">Appiontment Now</h3>
                            <form class="contact-form-validated appoinment-page__form" method="POST" action="assets/inc/sendemail.php" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="appoinment-page__input-box">
                                            <input type="text" name="name" placeholder="Your Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="appoinment-page__input-box">
                                            <input type="email" name="email" placeholder="Your Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="appoinment-page__input-box">
                                            <input type="text" name="number" placeholder="Your Number" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="appoinment-page__input-box">
                                            <input type="text" placeholder="mm/dd/yyy" name="date" id="datepicker">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="appoinment-page__input-box text-message-box">
                                            <textarea name="message" placeholder="Message here.."></textarea>
                                        </div>
                                        <div class="appoinment-page__btn-box">
                                            <button type="submit" class="thm-btn">Appointment Now<span
                                                    class="icon-plus"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="appoinment-page__right">
                            <div class="appoinment-page__working-hour">
                                <h3 class="appoinment-page__working-hour-title">Working Hours</h3>
                                <p class="appoinment-page__working-hour-text">Health care is a vital aspect of maintain
                                    overall well-being, encompassing a range</p>
                                <ul class="appoinment-page__working-hour-list list-unstyled">
                                    <li>
                                        <span>Saturday-Sunday</span>
                                        <p>9 Am To 5 Pm</p>
                                    </li>
                                    <li>
                                        <span>Monday-Tuesday</span>
                                        <p>1 Pm To 7 Pm</p>
                                    </li>
                                    <li>
                                        <span>Wednesday-Thusday</span>
                                        <p>2 Am To 6 Pm</p>
                                    </li>
                                    <li>
                                        <span>Friday</span>
                                        <p>Off Day</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Appoinment Page End-->
       
<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection