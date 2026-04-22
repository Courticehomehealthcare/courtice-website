
@extends('layouts.layout-inner-page')
@section('title', 'Sign Up || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/shop.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
            
@endphp
@php
    $title = 'Sign Up Page';
    $subtitle = 'Sign Up Page';
@endphp
@section('content')

<x-strickyHeader/>
 
        <!--Start Sign Up One-->
        <section class="sign-up-one">
            <div class="container">
                <div class="sign-up-one__form">
                    <div class="inner-title text-center">
                        <h2>Sing Up</h2>
                    </div>
                    <form id="sign-up-one__form" name="sign-up-one_form" action="#" method="post">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="form_name" id="formName" placeholder="Name..."
                                            required="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="email" name="form_email" id="formEmail" placeholder="Email..."
                                            required="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="form_phone" id="formPhone" placeholder="Phone..."
                                            required="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="form_password" id="formPassword"
                                            placeholder="Password..." required="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <button class="thm-btn" type="submit" data-loading-text="Please wait...">Sing
                                        Up <span class="icon-right-arrow"></span> </button>
                                </div>
                            </div>
                        </div>
                        <div class="google-facebook">
                            <a href="https://www.google.com/">
                                <div class="icon">
                                    <img src="{{ asset("/assets/images/icon/icon-google-2.png") }}" alt="Google">
                                </div>
                                Continue with Google
                            </a>
                            <a href="https://www.facebook.com/">
                                <div class="icon">
                                    <img src="{{ asset("/assets/images/icon/icon-facebook.png") }}" alt="Google">
                                </div>
                                Continue with Facebook
                            </a>
                        </div>
                        <div class="create-account text-center">
                            <p>Already have an account? <a href="{{ url("login") }}">Login Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--End Sign Up One-->
       
<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection