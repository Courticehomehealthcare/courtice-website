
@extends('layouts.layout-inner-page')
@section('title', 'FAQ || Careon || Careon Laravel Template')
@php
    $css = '<link rel="stylesheet" href="' . asset('assets/css/module-css/sliding-text.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/newsletter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/why-choose.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/appiontment.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/counter.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/module-css/page-header.css') . '"/>';
            
@endphp
@php
    $title = 'Our Faq';
    $subtitle = 'Faq';
@endphp
@section('content')

<x-strickyHeader/>
 

        <!--Faq Page Start-->
        <section class="faq-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-one__left">
                            <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <div class="faq-one-accrodion__count"></div>
                                        <h4>What should I do in case of a medical emergency?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Healthcare is a crucial aspect of our well-being. From hospitals to
                                                the a clinics, the encompasses a wide range Healthcare</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion  active">
                                    <div class="accrodion-title">
                                        <div class="faq-one-accrodion__count"></div>
                                        <h4>What are Dedicated to Better Health?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Healthcare is a crucial aspect of our well-being. From hospitals to
                                                the a clinics, the encompasses a wide range Healthcare</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <div class="faq-one-accrodion__count"></div>
                                        <h4>What should I do in case of a medical emergency?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Healthcare is a crucial aspect of our well-being. From hospitals to
                                                the a clinics, the encompasses a wide range Healthcare</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <div class="faq-one-accrodion__count"></div>
                                        <h4>What should I do in case of a medical emergency?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Healthcare is a crucial aspect of our well-being. From hospitals to
                                                the a clinics, the encompasses a wide range Healthcare</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-one__left">
                            <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <div class="faq-one-accrodion__count"></div>
                                        <h4>What should I do in case of a medical emergency?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Healthcare is a crucial aspect of our well-being. From hospitals to
                                                the a clinics, the encompasses a wide range Healthcare</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <div class="faq-one-accrodion__count"></div>
                                        <h4>What are Dedicated to Better Health?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Healthcare is a crucial aspect of our well-being. From hospitals to
                                                the a clinics, the encompasses a wide range Healthcare</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <div class="faq-one-accrodion__count"></div>
                                        <h4>What should I do in case of a medical emergency?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Healthcare is a crucial aspect of our well-being. From hospitals to
                                                the a clinics, the encompasses a wide range Healthcare</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <div class="faq-one-accrodion__count"></div>
                                        <h4>What should I do in case of a medical emergency?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Healthcare is a crucial aspect of our well-being. From hospitals to
                                                the a clinics, the encompasses a wide range Healthcare</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Faq Page End-->
       
<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection