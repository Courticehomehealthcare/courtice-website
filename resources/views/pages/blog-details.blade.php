@extends('layouts.layout3')
@section('title', 'Blog Details || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
                                                    <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';

@endphp
@php
    $title = $blog->name;
    $subtitle = 'Blog Details';
@endphp
@section('content')

    <x-strickyHeaderThree />

    <!--Blog Details Start-->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__left">
                        <div class="blog-details__img">
                            <img src="{{ $blog->image1 ? (str_contains($blog->image1, 'uploads/') ? asset($blog->image1) : asset('storage/' . $blog->image1)) : 'https://placehold.co/800x400?text=No+Image' }}"
                                alt="{{ $blog->name }}" style="height: 400px; width: 100%; object-fit: cover;">
                        </div>
                        <div class="blog-details__content">
                            <ul class="blog-details__meta list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-calender"></span>
                                    </div>
                                    <p>{{ $blog->last_updated ? $blog->last_updated->format('F d, Y') : '' }}</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-user"></span>
                                    </div>
                                    <p>By {{ $blog->writtenby ?? 'admin' }}</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-file"></span>
                                    </div>
                                    <p>{{ $blog->category ?? 'Category' }}</p>
                                </li>
                            </ul>
                            <h3 class="blog-details__title">{{ $blog->name }}</h3>
                            <div class="blog-details__text-1">
                                {!! $blog->description !!}
                            </div>
                            @if($blog->tags)
                                <style>
                                    .blog-details__tag-and-social {
                                        margin-top: 40px;
                                        padding-top: 40px;
                                        border-top: 1px solid #eee;
                                    }

                                    .blog-details__tag-title {
                                        font-size: 24px;
                                    }

                                    .blog-details__social a {
                                        width: 35px;
                                        height: 35px;
                                        font-size: 15px;
                                        border: 1px solid #eee;
                                        color: #333;
                                        transition: all 0.3s ease;
                                    }

                                    .blog-details__social a:hover {
                                        background-color: var(--careon-base, #2563eb);
                                        border-color: var(--careon-base, #2563eb);
                                        color: #fff;
                                    }
                                </style>
                                <div class="blog-details__tag-and-social">
                                    <div class="blog-details__tag">
                                        <span class="blog-details__tag-title">Tags:</span>
                                        <div class="blog-details__tag-list">
                                            @foreach(explode(',', $blog->tags) as $tag)
                                                <a href="#">{{ trim($tag) }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="blog-details__social">
                                        @if(isset($siteSettings->facebook_link))
                                            <a href="{{ $siteSettings->facebook_link }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        @endif
                                        @if(isset($siteSettings->twitter_link))
                                            <a href="{{ $siteSettings->twitter_link }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                        @endif
                                        @if(isset($siteSettings->linkedin_link))
                                            <a href="{{ $siteSettings->linkedin_link }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        @endif
                                        @if(isset($siteSettings->instagram_link))
                                            <a href="{{ $siteSettings->instagram_link }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                        @endif
                                    </div>
                                </div>
                            @endif



                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__post-box">
                            <h3 class="sidebar__title">Recent News</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach($recentBlogs as $recent)
                                    <li>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="{{ route('blog.details', $recent->blogurl) }}">{{ $recent->name }}</a>
                                            </h3>
                                            <p class="sidebar__post-date"><span
                                                    class="icon-calender"></span>{{ $recent->last_updated ? $recent->last_updated->format('d M, Y') : '' }}
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__all-category">
                            <h3 class="sidebar__title">Category</h3>
                            <ul class="sidebar__all-category-list list-unstyled">
                                <li>
                                    <a href="{{ url("#") }}"><span class="icon-arrow-right"></span>A Tradition of Healing
                                        There</a>
                                </li>
                                <li class="active">
                                    <a href="{{ url("#") }}"><span class="icon-arrow-right"></span>Compassionate Care
                                        Always</a>
                                </li>
                                <li>
                                    <a href="{{ url("#") }}"><span class="icon-arrow-right"></span>Caring for You,
                                        Always</a>
                                </li>
                                <li>
                                    <a href="{{ url("#") }}"><span class="icon-arrow-right"></span>Where Health Matters
                                        Most</a>
                                </li>
                            </ul>
                        </div>
                        @if($blog->tags)
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <div class="sidebar__tags-list">
                                    @foreach(explode(',', $blog->tags) as $tag)
                                        <a href="{{ url("#") }}">{{ trim($tag) }}</a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <div class="sidebar__single sidebar__need-help">
                            <h3 class="sidebar__need-help-title">Need Help?Call Us</h3>
                            <div class="sidebar__need-help-icon">
                                <span class="icon-call"></span>
                            </div>
                            <div class="sidebar__need-help-call">
                                <a href="{{ url("tel:888178456765") }}">+1 905-721-0004</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Details End-->

    <x-footerThree />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection