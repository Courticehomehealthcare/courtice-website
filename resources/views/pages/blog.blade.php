@extends('layouts.layout3')
@section('title', 'Blog || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
                                <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';

@endphp
@php
    $title = 'Blog';
    $subtitle = 'Blog';
@endphp
@section('content')

    <x-strickyHeaderThree />

    <!--Blog Page Start-->
    <section class="blog-page">
        <div class="container">
            <div class="row">
                @foreach($blogs as $index => $blog)
                    @php
                        $animationClass = 'fadeInUp';
                        if ($index % 3 == 0)
                            $animationClass = 'fadeInLeft';
                        if (($index + 1) % 3 == 0)
                            $animationClass = 'fadeInRight';
                        $delay = (($index % 3) + 1) * 100 . 'ms';
                    @endphp
                    <!--blog Four Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow {{ $animationClass }}" data-wow-delay="{{ $delay }}">
                        <div class="blog-four__single">
                            <div class="blog-four__img-box">
                                <div class="blog-four__img">
                                    <img src="{{ str_contains($blog->image1, 'uploads/') ? asset($blog->image1) : asset('storage/' . $blog->image1) }}" 
                                         alt="{{ $blog->name }}"
                                         style="height:410px; width:100%; object-fit:cover;">
                                </div>
                                <div class="blog-four__content">
                                    <ul class="blog-four__meta list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-user"></span>
                                            </div>
                                            <p>{{ $blog->writtenby ?? 'Admin' }}</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-calender"></span>
                                            </div>
                                            <p>{{ $blog->last_updated ? $blog->last_updated->format('d M, Y') : '' }}</p>
                                        </li>
                                    </ul>
                                    <h3 class="blog-four__title">
                                        <a href="{{ route('blog.details', $blog->blogurl) }}">
                                            {{ $blog->name }}
                                        </a>
                                    </h3>
                                    <div class="blog-four__btn-box">
                                        <a href="{{ route('blog.details', $blog->blogurl) }}" class="thm-btn">
                                            Read More <span class="icon-arrow-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--blog Four Single End-->
                @endforeach
            </div>
        </div>
    </section>
    <!--Blog Page End-->



    <x-footerThree />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection