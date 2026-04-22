        <header class="main-header-two">
            <div class="main-header-two__wrapper">
                <nav class="main-menu main-menu-two">
                    <div class="main-menu-two__wrapper">
                        <div class="container">
                            <div class="main-menu-two__wrapper-inner">
                                <div class="main-menu-two__left">
                                    <div class="main-menu-two__logo">
                                        <a href="{{ url("/") }}"><img src="{{ asset("/assets/images/resources/logo-2.png") }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="main-menu-two__main-menu-box">
                                    <a href="{{ url("#") }}" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <x-menuList/>
                                </div>
                                <div class="main-menu-two__right">
                                    <div class="main-menu-two__btn">
                                        <a href="{{ url("contact") }}" class="thm-btn">Gey In Touch <span
                                                class="icon-plus"></span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
