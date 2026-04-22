@extends('layouts.layout3')
@section('title', 'Login || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/module-css/shop.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
                                <style>
                                    .input-box { position: relative; }
                                    .input-box input { 
                                        width: 100%; 
                                        padding-right: 50px; /* Space for the eye icon */
                                    }
                                    .toggle-password {
                                        position: absolute;
                                        top: 50%;
                                        right: 20px;
                                        transform: translateY(-50%);
                                        cursor: pointer;
                                        color: #666;
                                        z-index: 10;
                                    }
                                    .btn-loader {
                                        display: none;
                                        margin-left: 10px;
                                    }
                                    .thm-btn:disabled {
                                        opacity: 0.7;
                                        cursor: not-allowed;
                                    }

                                    input#passwordField {
                position: relative;
                display: block;
                border-radius: 10px;
                border: 1px solid rgba(var(--careon-bdr-color-rgb), .50);
                background-color: rgba(var(--careon-bdr-color-rgb), .50);
                width: 100%;
                height: 60px;
                color: var(--careon-gray);
                font-size: 16px;
                font-family: var(--careon-font);
                font-weight: 400;
                font-style: normal;
                padding-left: 30px;
                padding-right: 30px;
                outline: none;
                transition: all 500ms ease;
            }
                                </style>';

@endphp
@php
    $title = 'Login Page';
    $subtitle = 'Login Page';
@endphp
@section('content')

    <x-strickyHeader />
    <!--Start Login One-->
    <section class="login-one">
        <div class="container">
            <div class="login-one__form">
                <div class="inner-title text-center">
                    <h2>Login Here</h2>
                </div>

                {{-- Success --}}
                @if(session('success'))
                    <div class="alert alert-success mb-3">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Errors --}}
                @if ($errors->any())
                    <div class="alert alert-danger mb-3">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form id="loginForm" action="{{ route('login.submit') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="email" name="email" placeholder="Email..." required
                                        value="{{ old('email') }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="password" name="password" id="passwordField" placeholder="Password..."
                                        required>
                                    <i class="fa fa-eye toggle-password" onclick="togglePassword()"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="form-group">
                                <button class="thm-btn" type="submit" id="loginBtn">
                                    <span id="btnText">Login Here</span>
                                    <i class="fa fa-spinner fa-spin btn-loader" id="btnLoader"></i>
                                    <span class="icon-right-arrow" id="btnIcon"></span>
                                </button>
                            </div>
                        </div>

                        <div class="remember-forget">
                            <div class="checked-box1">
                                <input type="checkbox" name="remember" id="saveinfo">
                                <label for="saveinfo">
                                    <span></span>
                                    Remember me
                                </label>
                            </div>

                            <div class="forget">
                                <a href="{{ url('forgot-password') }}">Forget password?</a>
                            </div>
                        </div>

                        <div class="create-account text-center">
                            <p>
                                Not registered yet?
                                <a href="{{ url('sign-up') }}">Create an Account</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--End Login One-->

    <x-footerThree />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('passwordField');
            const toggleIcon = document.querySelector('.toggle-password');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }

        document.getElementById('loginForm').addEventListener('submit', function () {
            const btn = document.getElementById('loginBtn');
            const btnText = document.getElementById('btnText');
            const btnLoader = document.getElementById('btnLoader');
            const btnIcon = document.getElementById('btnIcon');

            // Disable button
            btn.disabled = true;

            // Change text and show loader
            btnText.textContent = 'Logging in...';
            btnLoader.style.display = 'inline-block';
            if (btnIcon) btnIcon.style.display = 'none';
        });
    </script>

@endsection