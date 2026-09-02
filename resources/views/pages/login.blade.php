@extends('layouts.layout3')
@section('title', 'Login || Courtice Home Healthcare')

@section('content')
    <x-strickyHeader />
    
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 rounded-4" style="background: #fff; padding: 40px;">
                    <div class="text-center mb-4">
                        <h2 style="color: #0D2137; font-weight: 600; margin-bottom: 10px;">Login Here</h2>
                        <p style="color: #666; font-size: 14px;">Sign in to your account to access products</p>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success mb-3" style="border-radius: 10px;">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger mb-3" style="border-radius: 10px;">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form id="loginForm" action="{{ route('login.submit') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="email" style="display: block; margin-bottom: 8px; color: #0D2137; font-weight: 500;">Email Address <span style="color: red;">*</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email..." required value="{{ old('email') }}" style="border-radius: 10px; border: 1px solid #ddd; padding: 12px 15px; font-size: 14px;">
                        </div>

                        <div class="mb-3">
                            <label for="password" style="display: block; margin-bottom: 8px; color: #0D2137; font-weight: 500;">Password <span style="color: red;">*</span></label>
                            <div style="position: relative;">
                                <input type="password" id="passwordField" name="password" class="form-control" placeholder="Enter your password..." required style="border-radius: 10px; border: 1px solid #ddd; padding: 12px 15px; font-size: 14px;">
                                <i class="fa fa-eye" onclick="togglePassword()" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer; color: #666;"></i>
                            </div>
                        </div>

                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <div>
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember" style="margin: 0; cursor: pointer; color: #666;">Remember me</label>
                            </div>
                            <a href="{{ url('forgot-password') }}" style="color: #D4581A; text-decoration: none; font-size: 14px;">Forgot password?</a>
                        </div>

                        <button type="submit" id="loginBtn" class="btn btn-primary w-100" style="background: #0D2137; border: none; border-radius: 10px; padding: 12px; font-weight: 600; color: white; font-size: 16px;">
                            <span id="btnText">Login Here</span>
                            <i class="fa fa-spinner fa-spin" id="btnLoader" style="display: none; margin-left: 10px;"></i>
                        </button>

                        <p class="text-center mt-3" style="color: #666; font-size: 14px;">
                            Don't have an account? <a href="{{ route('sign-up') }}" style="color: #D4581A; text-decoration: none; font-weight: 600;">Sign Up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <x-footerThree />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('passwordField');
            const toggleIcon = document.querySelector('.fa-eye');
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
            btn.disabled = true;
            btnText.textContent = 'Logging in...';
            btnLoader.style.display = 'inline-block';
        });
    </script>
@endsection
