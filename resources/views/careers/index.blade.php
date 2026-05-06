@extends('layouts.layout3')

@section('title', 'Careers || Courtice Home Healthcare')

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
            <h2>Careers</h2>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span class="fas fa-chevron-right"></span></li>
                    <li>Careers</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Careers Start-->
<section class="careers-page py-5 my-5">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h6 class="section-title__tagline" style="color: #00bdd6; text-transform: uppercase; font-weight: 700; letter-spacing: 1px;">Join Our Team</h6>
            <h2 class="section-title__title" style="font-size: 42px; font-weight: 800;">Current Job Openings</h2>
            <p class="mt-3" style="color: #666; max-width: 700px; margin: 0 auto;">Build your career with a team that values compassion and excellence in healthcare. Explore our open positions and find your next opportunity.</p>
        </div>
        
        <div class="row">
            @forelse($jobs as $job)
                <div class="col-xl-4 col-lg-6 mb-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="career-card h-100" style="background: #fff; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); padding: 35px; transition: all 0.3s ease; border: 1px solid #f0f0f0; position: relative; overflow: hidden;">
                        <div class="career-card__type" style="background: rgba(0, 189, 214, 0.1); color: #00bdd6; padding: 5px 15px; border-radius: 50px; font-size: 12px; font-weight: 700; display: inline-block; margin-bottom: 20px;">
                            {{ $job->job_type ?? 'Full-time' }}
                        </div>
                        
                        <h3 class="career-card__title" style="font-size: 22px; font-weight: 700; margin-bottom: 15px; line-height: 1.3;">
                            <a href="{{ route('careers.show', $job->id) }}" style="color: #1a2c3d; transition: color 0.3s ease;">{{ $job->title }}</a>
                        </h3>
                        
                        <div class="career-card__info" style="margin-bottom: 25px;">
                            <p style="color: #666; margin-bottom: 8px; font-size: 15px;">
                                <i class="fas fa-map-marker-alt" style="color: #00bdd6; margin-right: 10px; width: 15px;"></i> {{ $job->location ?? 'Courtice, ON' }}
                            </p>
                            @if($job->salary_range)
                            <p style="color: #666; margin-bottom: 0; font-size: 15px;">
                                <i class="fas fa-money-bill-wave" style="color: #00bdd6; margin-right: 10px; width: 15px;"></i> {{ $job->salary_range }}
                            </p>
                            @endif
                        </div>
                        
                        <div class="career-card__btn">
                            <a href="{{ route('careers.show', $job->id) }}" class="thm-btn" style="width: 100%; text-align: center; border-radius: 12px; padding: 12px 25px;">
                                View Details <span class="icon-arrow-right"></span>
                            </a>
                        </div>
                        
                        <style>
                            .career-card:hover {
                                transform: translateY(-10px);
                                box-shadow: 0 15px 40px rgba(0, 189, 214, 0.12);
                                border-color: #00bdd6;
                            }
                            .career-card:hover .career-card__title a {
                                color: #00bdd6;
                            }
                        </style>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <div class="no-jobs-box" style="background: #f8f9fa; padding: 50px; border-radius: 20px; border: 2px dashed #ddd;">
                        <i class="fas fa-briefcase mb-3" style="font-size: 50px; color: #ccc;"></i>
                        <h4 style="color: #666;">Currently, there are no open positions.</h4>
                        <p style="color: #888;">Please check back later or send us your resume for future opportunities.</p>
                        <a href="{{ url('contact') }}" class="thm-btn mt-3">Contact Us</a>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
<!--Careers End-->

@endsection
