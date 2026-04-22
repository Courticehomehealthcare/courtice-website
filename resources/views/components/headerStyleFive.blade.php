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
                            <x-menuList />
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