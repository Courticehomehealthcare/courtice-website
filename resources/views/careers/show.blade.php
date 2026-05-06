@extends('layouts.layout3')

@section('title', $job->title . ' || Careers')

@section('content')

<style>
    .page-header {
        position: relative;
        padding: 100px 0 100px;
    }
    .page-header__bg::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(90deg, rgba(0, 189, 214, 0.2) 0%, rgba(0, 189, 214, 0) 100%) !important;
        z-index: 1;
    }
    .page-header__inner {
        position: relative;
        z-index: 2;
        text-align: left;
    }
    .page-header__inner h2 {
        font-size: 50px;
        font-weight: 800;
        color: #1a2c3d;
        margin-bottom: 15px;
        text-transform: capitalize;
    }
    .thm-breadcrumb {
        display: flex !important;
        align-items: center;
        justify-content: flex-start !important;
        gap: 15px;
        padding: 0;
        margin: 0;
    }
    .thm-breadcrumb li {
        font-size: 16px;
        font-weight: 600;
        color: #555;
        display: flex;
        align-items: center;
    }
    .thm-breadcrumb li a {
        color: #00bdd6;
        transition: all 0.3s ease;
    }
    .thm-breadcrumb li a:hover {
        color: #1a2c3d;
    }
    .thm-breadcrumb li span {
        font-size: 12px;
        color: #888;
    }
</style>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>{{ $job->title }}</h2>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span class="fas fa-chevron-right"></span></li>
                    <li><a href="{{ route('careers.index') }}">Careers</a></li>
                    <li><span class="fas fa-chevron-right"></span></li>
                    <li>Job Details</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="job-details-page py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="job-details__content" style="background: #fff; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); border: 1px solid #f0f0f0;">
                    <div class="job-header mb-4">
                        <span style="background: rgba(0, 189, 214, 0.1); color: #00bdd6; padding: 6px 18px; border-radius: 50px; font-size: 13px; font-weight: 700; display: inline-block; margin-bottom: 15px;">
                            {{ $job->job_type }}
                        </span>
                        <h2 style="font-size: 34px; font-weight: 800; color: #1a2c3d; line-height: 1.2;">{{ $job->title }}</h2>
                        <div class="job-meta mt-3 d-flex flex-wrap gap-4">
                            <span style="color: #666; font-size: 16px;"><i class="fas fa-map-marker-alt" style="color: #00bdd6; margin-right: 8px;"></i> {{ $job->location }}</span>
                            @if($job->salary_range)
                            <span style="color: #666; font-size: 16px;"><i class="fas fa-money-bill-wave" style="color: #00bdd6; margin-right: 8px;"></i> {{ $job->salary_range }}</span>
                            @endif
                            <span style="color: #666; font-size: 16px;"><i class="fas fa-calendar-alt" style="color: #00bdd6; margin-right: 8px;"></i> Posted {{ $job->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                    
                    <hr style="border-top: 1px solid #eee; margin: 30px 0;">
                    
                    <div class="job-description">
                        <h4 style="font-weight: 700; margin-bottom: 20px; color: #1a2c3d;">Job Description</h4>
                        <div style="color: #555; line-height: 1.8; font-size: 16px;">
                            {!! nl2br(e($job->description)) !!}
                        </div>
                    </div>
                    
                    <div class="share-box mt-5 p-4" style="background: #f9f9f9; border-radius: 15px; display: flex; align-items: center; justify-content: space-between;">
                        <h5 style="margin: 0; font-size: 16px; font-weight: 600;">Share this position:</h5>
                        <div class="social-links d-flex gap-3">
                            <a href="#" style="width: 40px; height: 40px; border-radius: 50%; background: #3b5998; color: #fff; display: flex; align-items: center; justify-content: center; transition: transform 0.3s;"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" style="width: 40px; height: 40px; border-radius: 50%; background: #1da1f2; color: #fff; display: flex; align-items: center; justify-content: center; transition: transform 0.3s;"><i class="fab fa-twitter"></i></a>
                            <a href="#" style="width: 40px; height: 40px; border-radius: 50%; background: #0077b5; color: #fff; display: flex; align-items: center; justify-content: center; transition: transform 0.3s;"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-5">
                <div class="apply-form-sidebar sticky-top" style="top: 100px; z-index: 10;">
                    <div class="contact-two__right" style="background-color: #fff; padding: 40px; border-radius: 20px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0;">
                        <div class="section-title text-left mb-4">
                            <h3 class="section-title__title" style="font-size: 26px; font-weight: 800;">Apply Now</h3>
                            <p style="color: #777; font-size: 14px; margin-top: 5px;">Fill out the form below to submit your application.</p>
                        </div>
                        
                        @if(session('success'))
                            <div class="alert alert-success" style="border-radius: 12px; font-size: 14px;">
                                <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger" style="border-radius: 12px; font-size: 14px;">
                                <ul class="mb-0 pl-3">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('careers.apply', $job->id) }}" method="POST" enctype="multipart/form-data" class="job-apply-form" id="jobApplicationForm">
                            @csrf
                            <div class="form-group mb-3">
                                <label style="font-weight: 600; color: #333; font-size: 14px; margin-bottom: 8px;">First Name *</label>
                                <input type="text" name="candidateName" value="{{ old('candidateName') }}" required style="width: 100%; height: 55px; padding: 0 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: #fcfcfc; transition: all 0.3s;">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label style="font-weight: 600; color: #333; font-size: 14px; margin-bottom: 8px;">Last Name *</label>
                                <input type="text" name="candidatelastName" value="{{ old('candidatelastName') }}" required style="width: 100%; height: 55px; padding: 0 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: #fcfcfc; transition: all 0.3s;">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label style="font-weight: 600; color: #333; font-size: 14px; margin-bottom: 8px;">Email Address *</label>
                                <input type="email" name="candidateemail" value="{{ old('candidateemail') }}" required style="width: 100%; height: 55px; padding: 0 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: #fcfcfc; transition: all 0.3s;">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label style="font-weight: 600; color: #333; font-size: 14px; margin-bottom: 8px;">Phone Number *</label>
                                <input type="text" name="candidatephoneno" value="{{ old('candidatephoneno') }}" required style="width: 100%; height: 55px; padding: 0 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: #fcfcfc; transition: all 0.3s;">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label style="font-weight: 600; color: #333; font-size: 14px; margin-bottom: 8px;">Resume (PDF, Word) *</label>
                                <div class="file-upload-wrapper" style="position: relative;">
                                    <input type="file" name="resume" accept=".pdf,.doc,.docx" required style="width: 100%; padding: 12px; border: 1px solid #e0e0e0; border-radius: 12px; background: #fcfcfc; font-size: 14px;">
                                </div>
                                <small style="color: #999; font-size: 12px;">Max size 5MB</small>
                            </div>
                            
                            <div class="form-group mb-4">
                                <label style="font-weight: 600; color: #333; font-size: 14px; margin-bottom: 8px;">Message / Cover Letter</label>
                                <textarea name="Message" style="width: 100%; height: 120px; padding: 15px 20px; border: 1px solid #e0e0e0; border-radius: 12px; background: #fcfcfc; resize: none; transition: all 0.3s;">{{ old('Message') }}</textarea>
                            </div>
                            
                            <button type="submit" class="thm-btn w-100" id="submitBtn" style="padding: 18px; border-radius: 12px; font-weight: 700; text-transform: none; font-size: 16px;">
                                <span class="btn-text">Submit Application</span>
                                <span class="btn-loader" style="display: none;"><i class="fas fa-spinner fa-spin mr-2"></i> Submitting...</span>
                            </button>
                        </form>

                        <script>
                            document.getElementById('jobApplicationForm').addEventListener('submit', function() {
                                var btn = document.getElementById('submitBtn');
                                var text = btn.querySelector('.btn-text');
                                var loader = btn.querySelector('.btn-loader');
                                
                                btn.disabled = true;
                                btn.style.opacity = '0.8';
                                btn.style.cursor = 'not-allowed';
                                text.style.display = 'none';
                                loader.style.display = 'inline-block';
                            });
                        </script>
                        
                        <style>
                            .job-apply-form input:focus, .job-apply-form textarea:focus {
                                border-color: #00bdd6;
                                outline: none;
                                background: #fff;
                                box-shadow: 0 0 10px rgba(0, 189, 214, 0.1);
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
