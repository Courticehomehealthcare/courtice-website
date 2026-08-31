@extends('layouts.layout-inner-page', ['title' => 'Sign Up', 'subtitle' => 'Create Account', 'bodyClass' => 'sign-up-page'])

@section('content')
<section class="sign-up-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="sign-up-wrapper">
                    <h2 class="sign-up-title">Create Your Account</h2>
                    <p class="sign-up-subtitle">Join us to start purchasing quality home healthcare products</p>

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Oops! Please fix these errors:</strong>
                            <ul class="mb-0 mt-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <form id="signupForm" action="{{ route('sign-up.post') }}" method="POST" class="sign-up-form" novalidate>
                        @csrf

                        <!-- First Name -->
                        <div class="form-group mb-3">
                            <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                            <input 
                                type="text" 
                                class="form-control @error('first_name') is-invalid @enderror" 
                                id="firstName" 
                                name="first_name" 
                                value="{{ old('first_name') }}"
                                placeholder="John"
                                required
                            >
                            @error('first_name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Last Name -->
                        <div class="form-group mb-3">
                            <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                            <input 
                                type="text" 
                                class="form-control @error('last_name') is-invalid @enderror" 
                                id="lastName" 
                                name="last_name" 
                                value="{{ old('last_name') }}"
                                placeholder="Doe"
                                required
                            >
                            @error('last_name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                id="email" 
                                name="email" 
                                value="{{ old('email') }}"
                                placeholder="john@example.com"
                                required
                            >
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div class="form-group mb-3">
                            <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                            <input 
                                type="tel" 
                                class="form-control @error('phone') is-invalid @enderror" 
                                id="phone" 
                                name="phone" 
                                value="{{ old('phone') }}"
                                placeholder="+1 (905) 123-4567"
                                required
                            >
                            @error('phone')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                            <div class="password-input-wrapper">
                                <input 
                                    type="password" 
                                    class="form-control @error('password') is-invalid @enderror" 
                                    id="password" 
                                    name="password" 
                                    placeholder="Enter a strong password"
                                    required
                                    onkeyup="checkPasswordStrength()"
                                >
                                <span class="password-toggle" onclick="togglePassword('password')">
                                    <i class="fa fa-eye"></i>
                                </span>
                            </div>

                            <!-- Password Strength Indicator -->
                            <div class="password-strength mt-2">
                                <div class="strength-bar">
                                    <div id="strengthMeter" class="strength-meter" style="width: 0%"></div>
                                </div>
                                <small id="strengthText" class="strength-text">Password strength: None</small>
                            </div>

                            <small class="form-text text-muted d-block mt-2">
                                Password must be at least 8 characters with uppercase, lowercase, and numbers.
                            </small>
                            @error('password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group mb-3">
                            <label for="passwordConfirm" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                            <div class="password-input-wrapper">
                                <input 
                                    type="password" 
                                    class="form-control @error('password_confirmation') is-invalid @enderror" 
                                    id="passwordConfirm" 
                                    name="password_confirmation" 
                                    placeholder="Re-enter your password"
                                    required
                                    onkeyup="checkPasswordMatch()"
                                >
                                <span class="password-toggle" onclick="togglePassword('passwordConfirm')">
                                    <i class="fa fa-eye"></i>
                                </span>
                            </div>
                            <small id="passwordMatch" class="form-text"></small>
                            @error('password_confirmation')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Terms & Conditions -->
                        <div class="form-check mb-3">
                            <input 
                                type="checkbox" 
                                class="form-check-input @error('terms') is-invalid @enderror" 
                                id="terms" 
                                name="terms" 
                                value="1"
                                required
                            >
                            <label class="form-check-label" for="terms">
                                I agree to the <a href="/terms" target="_blank">Terms & Conditions</a> 
                                and <a href="/privacy" target="_blank">Privacy Policy</a>
                                <span class="text-danger">*</span>
                            </label>
                            @error('terms')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button 
                            type="submit" 
                            id="submitBtn" 
                            class="btn btn-primary btn-lg w-100 sign-up-btn"
                        >
                            <span id="btnText">Sign Up</span>
                            <span id="btnLoader" class="spinner-border spinner-border-sm ms-2 d-none" role="status"></span>
                        </button>

                        <!-- Social Sign Up -->
                        <div class="divider my-4">
                            <span>Or continue with</span>
                        </div>

                        <div class="social-signup d-flex gap-2">
                            <button type="button" class="btn btn-outline-google flex-fill">
                                <i class="fab fa-google"></i> Google
                            </button>
                            <button type="button" class="btn btn-outline-facebook flex-fill">
                                <i class="fab fa-facebook"></i> Facebook
                            </button>
                        </div>
                    </form>

                    <!-- Login Link -->
                    <p class="text-center mt-4">
                        Already have an account? <a href="{{ route('login') }}" class="login-link">Sign In</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .sign-up-section {
        padding: 60px 0;
        background: #f8f9fa;
        min-height: 100vh;
        display: flex;
        align-items: center;
    }

    .sign-up-wrapper {
        background: white;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .sign-up-title {
        font-size: 28px;
        font-weight: 700;
        color: #1e3a5f;
        margin-bottom: 10px;
    }

    .sign-up-subtitle {
        color: #666;
        margin-bottom: 30px;
        font-size: 14px;
    }

    .form-label {
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
    }

    .form-control {
        padding: 10px 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    }

    .form-control.is-invalid {
        border-color: #dc3545;
    }

    .invalid-feedback {
        font-size: 13px;
        color: #dc3545;
        margin-top: 5px;
    }

    .password-input-wrapper {
        position: relative;
    }

    .password-toggle {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #666;
        font-size: 16px;
    }

    .password-toggle:hover {
        color: #333;
    }

    .password-strength {
        display: none;
    }

    .password-strength.show {
        display: block;
    }

    .strength-bar {
        height: 6px;
        background: #e9ecef;
        border-radius: 3px;
        overflow: hidden;
        margin-bottom: 8px;
    }

    .strength-meter {
        height: 100%;
        border-radius: 3px;
        transition: all 0.3s ease;
    }

    .strength-meter.weak {
        width: 33.33% !important;
        background: #dc3545;
    }

    .strength-meter.fair {
        width: 66.66% !important;
        background: #ffc107;
    }

    .strength-meter.strong {
        width: 100% !important;
        background: #28a745;
    }

    .strength-text {
        font-size: 12px;
        color: #666;
    }

    .strength-text.weak {
        color: #dc3545;
    }

    .strength-text.fair {
        color: #ffc107;
    }

    .strength-text.strong {
        color: #28a745;
    }

    .form-check-input {
        width: 18px;
        height: 18px;
        margin-top: 3px;
    }

    .form-check-label {
        font-size: 14px;
        color: #333;
    }

    .form-check-label a {
        color: #007bff;
        text-decoration: none;
    }

    .form-check-label a:hover {
        text-decoration: underline;
    }

    .btn-primary {
        background: #007bff;
        border: none;
        font-weight: 600;
        padding: 12px 24px;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background: #0056b3;
    }

    .btn-primary:disabled {
        opacity: 0.7;
        cursor: not-allowed;
    }

    .divider {
        text-align: center;
        position: relative;
    }

    .divider span {
        background: white;
        padding: 0 10px;
        color: #999;
        font-size: 14px;
    }

    .divider::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        height: 1px;
        background: #ddd;
        z-index: -1;
    }

    .social-signup .btn {
        font-size: 14px;
        padding: 10px 16px;
        border-radius: 4px;
    }

    .btn-outline-google,
    .btn-outline-facebook {
        border: 1px solid #ddd;
        color: #333;
        transition: all 0.3s ease;
    }

    .btn-outline-google:hover {
        border-color: #db4437;
        color: #db4437;
        background: #f8f9fa;
    }

    .btn-outline-facebook:hover {
        border-color: #4267B2;
        color: #4267B2;
        background: #f8f9fa;
    }

    .login-link {
        color: #007bff;
        text-decoration: none;
        font-weight: 600;
    }

    .login-link:hover {
        text-decoration: underline;
    }

    .alert {
        border-radius: 4px;
        font-size: 14px;
    }

    .alert ul {
        padding-left: 20px;
    }

    .alert li {
        margin-bottom: 5px;
    }

    @media (max-width: 576px) {
        .sign-up-wrapper {
            padding: 20px;
        }

        .sign-up-title {
            font-size: 22px;
        }

        .form-control {
            font-size: 16px;
        }
    }
</style>

<script>
    // Toggle Password Visibility
    function togglePassword(fieldId) {
        const field = document.getElementById(fieldId);
        const type = field.type === 'password' ? 'text' : 'password';
        field.type = type;
    }

    // Check Password Strength
    function checkPasswordStrength() {
        const password = document.getElementById('password').value;
        const strengthBar = document.getElementById('strengthMeter');
        const strengthText = document.getElementById('strengthText');
        const strengthDiv = document.querySelector('.password-strength');

        if (password.length === 0) {
            strengthDiv.classList.remove('show');
            return;
        }

        strengthDiv.classList.add('show');

        let strength = 0;
        if (password.length >= 8) strength++;
        if (/[a-z]/.test(password)) strength++;
        if (/[A-Z]/.test(password)) strength++;
        if (/[0-9]/.test(password)) strength++;
        if (/[^a-zA-Z0-9]/.test(password)) strength++;

        strengthBar.classList.remove('weak', 'fair', 'strong');
        strengthText.classList.remove('weak', 'fair', 'strong');

        if (strength <= 2) {
            strengthBar.classList.add('weak');
            strengthText.classList.add('weak');
            strengthText.textContent = 'Password strength: Weak';
        } else if (strength <= 3) {
            strengthBar.classList.add('fair');
            strengthText.classList.add('fair');
            strengthText.textContent = 'Password strength: Fair';
        } else {
            strengthBar.classList.add('strong');
            strengthText.classList.add('strong');
            strengthText.textContent = 'Password strength: Strong';
        }

        checkPasswordMatch();
    }

    // Check Password Match
    function checkPasswordMatch() {
        const password = document.getElementById('password').value;
        const confirm = document.getElementById('passwordConfirm').value;
        const matchText = document.getElementById('passwordMatch');

        if (confirm.length === 0) {
            matchText.textContent = '';
            return;
        }

        if (password === confirm) {
            matchText.textContent = 'Passwords match ?';
            matchText.className = 'form-text text-success';
        } else {
            matchText.textContent = 'Passwords do not match ?';
            matchText.className = 'form-text text-danger';
        }
    }

    // Form Submission with Loading State
    document.getElementById('signupForm').addEventListener('submit', function(e) {
        const submitBtn = document.getElementById('submitBtn');
        const btnText = document.getElementById('btnText');
        const btnLoader = document.getElementById('btnLoader');

        submitBtn.disabled = true;
        btnText.textContent = 'Creating Account...';
        btnLoader.classList.remove('d-none');
    });
</script>
@endsection
