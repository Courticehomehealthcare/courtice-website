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
                            @if(isset($siteSettings) && optional($siteSettings)->facebook_link)
                                <a href="{{ $siteSettings->facebook_link }}"><i class="fab fa-facebook-f"></i></a>
                            @endif
                            @if(isset($siteSettings) && optional($siteSettings)->twitter_link)
                                <a href="{{ $siteSettings->twitter_link }}"><i class="fab fa-twitter"></i></a>
                            @endif
                            @if(isset($siteSettings) && optional($siteSettings)->instagram_link)
                                <a href="{{ $siteSettings->instagram_link }}"><i class="fab fa-instagram"></i></a>
                            @endif
                            @if(isset($siteSettings) && optional($siteSettings)->linkedin_link)
                                <a href="{{ $siteSettings->linkedin_link }}"><i class="fab fa-linkedin-in"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu main-menu-three">
            <div class="main-menu-three__wrapper">
                <div class="container-fluid">
                    <div class="main-menu-three__wrapper-inner">
                        <div class="main-menu-three__left">
                            <div class="main-menu-three__logo">
                                <a href="{{ url("/") }}"><img src="{{ asset("/assets/images/logo.png") }}" alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu-three__main-menu-box">
                            <a href="{{ url("#") }}" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <x-menuList />
                                                <div class="main-menu-three__right">
                            <!-- Cart Icon -->
                            <div class="main-menu-three__cart">
                                <a href="{{ route('cart') }}" class="cart-link">
                                    <i class="icon-shopping-bag"></i>
                                    @php
                                        $cartCount = count(session()->get('cart', []));
                                    @endphp
                                    @if($cartCount > 0)
                                        <span class="cart-badge">{{ $cartCount }}</span>
                                    @endif
                                </a>
                            </div>

                            <!-- Auth Section: Sign In/Up OR User Menu -->
                            @if(auth()->check())
                                <!-- User Logged In -->
                                <div class="main-menu-three__user-menu">
                                    <span class="user-name">{{ auth()->user()->name ?? 'User' }}</span>
                                    <a href="{{ route('logout') }}" class="logout-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            @else
                                <!-- User Not Logged In -->
                                <div class="main-menu-three__auth-buttons">
                                    <a href="{{ route('login') }}" class="sign-in-btn">Sign In</a>
                                    <a href="{{ route('sign-up') }}" class="sign-up-btn">Sign Up</a>
                                </div>
                            @endif
                            <div class="main-menu-three__call">
                                <div class="main-menu-three__call-icon">
                                    <img src="{{ asset("/assets/images/icon/chat-icon.png") }}" alt="">
                                </div>
                                <div class="main-menu-three__call-number">
                                    <p>Hotline</p>
                                    <h5><a href="{{ url("tel:+19057210004") }}">+1 (905)-721-0004</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<style>
    .main-menu-three__right {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .main-menu-three__cart {
        position: relative;
    }

    .cart-link {
        display: inline-block;
        font-size: 20px;
        color: #333;
        text-decoration: none;
        position: relative;
    }

    .cart-link:hover {
        color: #007bff;
    }

    .cart-badge {
        position: absolute;
        top: -8px;
        right: -8px;
        background-color: #dc3545;
        color: white;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: bold;
    }

    .main-menu-three__auth-buttons {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .sign-in-btn,
    .sign-up-btn {
        padding: 8px 16px;
        border-radius: 4px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .sign-in-btn {
        color: #333;
        border: 1px solid #333;
        background: transparent;
    }

    .sign-in-btn:hover {
        background: #f0f0f0;
    }

    .sign-up-btn {
        background: #007bff;
        color: white;
        border: 1px solid #007bff;
    }

    .sign-up-btn:hover {
        background: #0056b3;
    }

    .main-menu-three__user-menu {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 14px;
    }

    .user-name {
        font-weight: 500;
        color: #333;
    }

    .logout-btn {
        color: #dc3545;
        text-decoration: none;
        font-size: 13px;
        cursor: pointer;
    }

    .logout-btn:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .main-menu-three__right {
            gap: 10px;
        }

        .main-menu-three__call {
            display: none;
        }

        .main-menu-three__auth-buttons {
            flex-direction: column;
            gap: 5px;
        }

        .sign-in-btn,
        .sign-up-btn {
            padding: 6px 12px;
            font-size: 12px;
        }
    }
</style>
