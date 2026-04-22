<header class="main-header-five">
    <div class="main-header-five__wrapper">
        <nav class="main-menu main-menu-five">
            <div class="main-menu-five__wrapper">
                <div class="container">
                    <div class="main-menu-five__wrapper-inner">
                        <div class="main-menu-five__left">
                            <div class="main-menu-five__logo">
                                <a href="{{ url("/") }}"><img src="{{ asset("/assets/images/resources/logo-3.png") }}"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu-five__main-menu-box">
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
                                    <a href="{{ url("#about") }}">About</a>
                                </li>
                                <li class="scrollToLink">
                                    <a href="{{ url("#services") }}">Services</a>
                                </li>
                                <li class="scrollToLink">
                                    <a href="{{ url("#project") }}">Project</a>
                                </li>
                                <li class="scrollToLink">
                                    <a href="{{ url("#team") }}">Team</a>
                                </li>
                                <li class="scrollToLink">
                                    <a href="{{ url("#contact") }}">Contact</a>
                                </li>
                                <li class="scrollToLink">
                                    <a href="{{ url("#blog") }}">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-menu-five__right">
                            <div class="main-menu-five__call">
                                <div class="main-menu-five__call-icon">
                                    <img src="{{ asset("/assets/images/icon/chat-icon.png") }}" alt="">
                                </div>
                                <div class="main-menu-five__call-number">
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