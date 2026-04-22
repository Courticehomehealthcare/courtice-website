<header class="main-header-three">
    <div class="main-header-three__wrapper">
        <div class="main-menu-three__top">
            <div class="container">
                <div class="main-menu-three__top-inner">
                    <ul class="list-unstyled main-menu-three__contact-list">
                        <li>
                            <div class="icon">
                                <i class="icon-envolope"></i>
                            </div>
                            <div class="text">
                                <p><a href="{{ url(" mailto:info@courticehomehealthcare.com")
                                        }}">info@courticehomehealthcare.com</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="icon-pin"></i>
                            </div>
                            <div class="text">
                                <p>1423 King St E Unit 5, Courtice, ON L1E 2J6, Canada</p>
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
                    <div class="main-menu-three__top-right">
                        <div class="main-menu-three__social">
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
                </div>
            </div>
        </div>
        <nav class="main-menu main-menu-three">
            <div class="main-menu-three__wrapper">
                <div class="container">
                    <div class="main-menu-three__wrapper-inner">
                        <div class="main-menu-three__left">
                            <div class="main-menu-three__logo">
                                <a href="{{ url("/") }}"><img src="{{ asset("/assets/images/logo.png") }}" alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu-three__main-menu-box">
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
                                    <a href="{{ url("#project") }}">Project</a>
                                </li>
                                <li class="scrollToLink">
                                    <a href="{{ url("#contact") }}">Contact</a>
                                </li>
                                <li class="scrollToLink">
                                    <a href="{{ url("#blog") }}">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-menu-three__right">
                            <div class="main-menu-three__call">
                                <div class="main-menu-three__call-icon">
                                    <img src="{{ asset("/assets/images/icon/chat-icon.png") }}" alt="">
                                </div>
                                <div class="main-menu-three__call-number">
                                    <p>Hotline</p>
                                    <h5><a href="{{ url("tel:+19057210004") }}">+1 905-721-0004</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
