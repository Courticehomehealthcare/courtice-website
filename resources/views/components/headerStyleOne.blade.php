<header class="main-header">
    <div class="main-header__wrapper">
        <nav class="main-menu">
            <div class="main-menu__wrapper">
                <div class="container">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="{{ url("/") }}"><img src="{{ asset("/assets/images/logo.png") }}" alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <a href="{{ url("#") }}" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                            <x-menuList/>

                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__thm-btn">
                                <a href="{{ url("appoinment") }}" class="thm-btn">Appoinment Now <span
                                        class="icon-plus"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
