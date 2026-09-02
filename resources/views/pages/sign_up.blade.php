@extends('layouts.layout3')
@section('title', 'Sign Up || Courtice Home Healthcare')

<style>
    .page-header { display: none !important; }
    .breadcrumb-area { display: none !important; }
    .inner-title { display: none !important; }
    .page-title-area { display: none !important; }
    .page-header-area { display: none !important; }
    [class*="breadcrumb"] { display: none !important; }
    [class*="title-area"] { display: none !important; }
    h2 { display: none !important; }
</style>

@section('content')
    <x-strickyHeader />
    
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-4" style="background: #fff; padding: 40px;">
                    <div class="text-center mb-4">
                        <h3 style="color: #0D2137; font-weight: 600; margin-bottom: 10px;">Create Your Account</h3>
                        <p style="color: #666; font-size: 14px;">Join us to start purchasing quality home healthcare products</p>
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

                    <form id="signupForm" action="{{ route('sign-up.post') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="first_name" style="display: block; margin-bottom: 8px; color: #0D2137; font-weight: 500;">First Name <span style="color: red;">*</span></label>
                                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="John" required value="{{ old('first_name') }}" style="border-radius: 10px; border: 1px solid #ddd; padding: 12px 15px; font-size: 14px;">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="last_name" style="display: block; margin-bottom: 8px; color: #0D2137; font-weight: 500;">Last Name <span style="color: red;">*</span></label>
                                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Doe" required value="{{ old('last_name') }}" style="border-radius: 10px; border: 1px solid #ddd; padding: 12px 15px; font-size: 14px;">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" style="display: block; margin-bottom: 8px; color: #0D2137; font-weight: 500;">Email Address <span style="color: red;">*</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com" required value="{{ old('email') }}" style="border-radius: 10px; border: 1px solid #ddd; padding: 12px 15px; font-size: 14px;">
                        </div>

                        <div class="mb-3">
                            <label for="phone" style="display: block; margin-bottom: 8px; color: #0D2137; font-weight: 500;">Phone Number <span style="color: red;">*</span></label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="+1 (905) 123-4567" required value="{{ old('phone') }}" style="border-radius: 10px; border: 1px solid #ddd; padding: 12px 15px; font-size: 14px;">
                        </div>

                        <div class="mb-3">
                            <label for="address" style="display: block; margin-bottom: 8px; color: #0D2137; font-weight: 500;">Address (Optional)</label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="123 Main Street" value="{{ old('address') }}" style="border-radius: 10px; border: 1px solid #ddd; padding: 12px 15px; font-size: 14px;">
                        </div>

                        <div class="mb-3">
                            <label for="password" style="display: block; margin-bottom: 8px; color: #0D2137; font-weight: 500;">Password <span style="color: red;">*</span></label>
                            <div style="position: relative;">
                                <input type="password" id="passwordField" name="password" class="form-control" placeholder="Enter a strong password" required style="border-radius: 10px; border: 1px solid #ddd; padding: 12px 15px; font-size: 14px;">
                                <i class="fa fa-eye" onclick="togglePassword()" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer; color: #666;"></i>
                            </div>
                            <small style="color: #999; font-size: 12px;">Password must be at least 8 characters with uppercase, lowercase, and numbers.</small>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" style="display: block; margin-bottom: 8px; color: #0D2137; font-weight: 500;">Confirm Password <span style="color: red;">*</span></label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Re-enter your password" required style="border-radius: 10px; border: 1px solid #ddd; padding: 12px 15px; font-size: 14px;">
                        </div>

                        <div class="mb-3">
                            <input type="checkbox" id="agree" name="agree" required style="cursor: pointer;">
                            <label for="agree" style="margin: 0; cursor: pointer; color: #666; font-size: 14px;">
                                I agree to the <a href="{{ url('terms-conditions') }}" style="color: #D4581A; text-decoration: none;">Terms & Conditions</a> and <a href="{{ url('privacy-policy') }}" style="color: #D4581A; text-decoration: none;">Privacy Policy</a> <span style="color: red;">*</span>
                            </label>
                        </div>

                        <button type="submit" id="signupBtn" class="btn btn-primary w-100" style="background: #0D2137; border: none; border-radius: 10px; padding: 12px; font-weight: 600; color: white; font-size: 16px;">
                            <span id="btnText">Sign Up</span>
                            <i class="fa fa-spinner fa-spin" id="btnLoader" style="display: none; margin-left: 10px;"></i>
                        </button>

                        <p class="text-center mt-3" style="color: #666; font-size: 14px;">
                            Already have an account? <a href="{{ route('login') }}" style="color: #D4581A; text-decoration: none; font-weight: 600;">Login Here</a>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
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

        document.getElementById('signupForm').addEventListener('submit', function () {
            const btn = document.getElementById('signupBtn');
            const btnText = document.getElementById('btnText');
            const btnLoader = document.getElementById('btnLoader');
            btn.disabled = true;
            btnText.textContent = 'Creating Account...';
            btnLoader.style.display = 'inline-block';
        });
    </script>
@endsection
