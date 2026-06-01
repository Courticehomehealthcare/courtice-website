<!DOCTYPE html>
<html lang="en">
<x-head css='{!! isset($css) ? $css : "" !!}' :seo="isset($seo) ? $seo : null"/>
<body class="{{ isset($bodyClass) ? $bodyClass . ' custom-cursor' : 'custom-cursor' }}">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <div class="page-wrapper">
        <x-headerStyleThree />
        <style>
            .page-header__inner {
                text-align: left;
            }
            .thm-breadcrumb {
                justify-content: flex-start !important;
            }
        </style>
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h3>{{ $title }}</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><span class="icon-arrow-left"></span></li>
                            <li>{{ $subtitle }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        @yield('content')
        <x-loader />
        <x-scripts />
</body>
</html>