<header class="main-header-three">
    <div class="main-header-three__wrapper">
        <div class="main-menu-three__top">
            <div class="container-fluid">
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
                                    Monday-Friday 9 am - 5 pm |
                                   
                                    Saturday 11 am - 2 pm |
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
                            <x-menuList />
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
