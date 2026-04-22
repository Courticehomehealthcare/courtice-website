        <header class="main-header-four">
            <div class="main-header-four__wrapper">
                <div class="main-menu-four__top">
                    <div class="container">
                        <div class="main-menu-four__top-inner">
                            <div class="main-menu-four__social-box">
                                <h4 class="main-menu-four__social-title">Social Connect :</h4>
                                <div class="main-menu-four__social">
                                    @if(optional($siteSettings)->facebook_link)
                                        <a href="{{ $siteSettings->facebook_link }}"><i class="icon-facebook"></i></a>
                                    @endif
                                    @if(optional($siteSettings)->twitter_link)
                                        <a href="{{ $siteSettings->twitter_link }}"><i class="icon-twitter"></i></a>
                                    @endif
                                    @if(optional($siteSettings)->instagram_link)
                                        <a href="{{ $siteSettings->instagram_link }}"><i class="icon-instagram"></i></a>
                                    @endif
                                </div>
                            </div>
                            <div class="main-menu-four__top-right">
                                <ul class="list-unstyled main-menu-four__contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="icon-envolope"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="{{ url("mailto:info@courticehomehealthcare.com") }}">info@courticehomehealthcare.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="icon-date"></i>
                                        </div>
                                        <div class="text">
                                            <p>
                                                Monday 9 am - 5 pm<br>
                                                Tuesday 9 am - 5 pm<br>
                                                Wednesday 9 am - 5 pm<br>
                                                Thursday 9 am - 5 pm<br>
                                                Friday 9 am - 5 pm<br>
                                                Saturday 11 am - 2 pm<br>
                                                Sunday Closed
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="main-menu main-menu-three main-menu-four">
                    <div class="main-menu-four__wrapper">
                        <div class="container">
                            <div class="main-menu-four__wrapper-inner">
                                <div class="main-menu-four__left">
                                    <div class="main-menu-four__logo">
                                        <a href="{{ url("/") }}"><img src="{{ asset("/assets/images/logo.png") }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="main-menu-four__main-menu-box">
                                    <a href="{{ url("#") }}" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list one-page-scroll-menu">
                                        <li class="dropdown scrollToLink">
                                            <a href="{{ url("#home") }}">Home </a>
                                            <ul>
                                                <li><a href="{{ url("/") }}">Home One</a></li>
                                                <li><a href="{{ url("index2") }}">Home Two</a></li>
                                                <li><a href="{{ url("index3") }}">Home Three</a></li>
                                                <li><a href="{{ url("index4") }}">Home Four</a></li>
                                                <li><a href="{{ url("index5") }}">Home Five</a></li>
                                                <li><a href="{{ url("index-dark") }}">Home Dark</a></li>
                                                <li class="dropdown">
                                                    <a href="{{ url("#") }}">One Page Styles</a>
                                                    <ul>
                                                        <li><a href="{{ url("index-one-page") }}">One Page Styles One</a></li>
                                                        <li><a href="{{ url("index2-one-page") }}">One Page Styles Two</a></li>
                                                        <li><a href="{{ url("index3-one-page") }}">One Page Styles Three</a>
                                                        <li><a href="{{ url("index4-one-page") }}">One Page Styles Four</a>
                                                        <li><a href="{{ url("index5-one-page") }}">One Page Styles Five</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="{{ url("#services") }}">Services</a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="{{ url("#about") }}">About</a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="{{ url("#team") }}">Team</a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="{{ url("#testimonial") }}">Testimonial</a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="{{ url("#contact") }}">Contact</a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="{{ url("#blog") }}">Blog</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu-four__right">
                                    <div class="main-menu-four__btn">
                                        <a href="{{ url("appoinment") }}" class="thm-btn">Get Appointment<span
                                                class="icon-arrow-right"></span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
