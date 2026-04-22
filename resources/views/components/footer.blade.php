<!--Site Footer Start-->
<footer class="site-footer">
    <div class="site-footer__bg-shape" style="background-image: url(assets/images/shapes/site-footer-bg-shape.png);">
    </div>
    <div class="site-footer__newsletter">
        <div class="container">
            <div class="site-footer__newsletter-inner">
                <div class="site-footer__newsletter-inner-title-box">
                    <div class="footer-widget__logo">
                        <a href="{{ url("/") }}"><img src="{{ asset("/assets/images/logo.png") }}" alt=""
                                style="height:50px;"></a>
                    </div>
                    <h2 class="site-footer__newsletter-title">Subscribe To Our <br>Newsletter</h2>
                </div>
                <div class="site-footer__newsletter-form">
                    <form class="site-footer__newsletter-form" data-url="MC_FORM_URL" novalidate="novalidate">
                        <div class="site-footer__newsletter-input">
                            <input type="email" placeholder="Your email..." name="email">
                        </div>
                        <button type="submit" class="thm-btn">Subscribe Now <span class="icon-plus"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__contact-info">
                            <h4 class="footer-widget__title">Contact</h4>
                            <ul class="footer-widget__contact-list list-unstyled">
                                <li>
                                    <div class="footer-widget__contact-icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="footer-widget__contact-content">
                                        <span>Address</span>
                                        <p class="footer-widget__contact-text">66 Broklyant,India</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget__contact-icon">
                                        <span class="icon-call"></span>
                                    </div>
                                    <div class="footer-widget__contact-content">
                                        <span>Phone Number</span>
                                        <p class="footer-widget__contact-text"><a
                                                href="{{ url("tel:0123456789101") }}">012
                                                345
                                                678 9101</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget__contact-icon">
                                        <span class="icon-envolope"></span>
                                    </div>
                                    <div class="footer-widget__contact-content">
                                        <span>Email</span>
                                        <p class="footer-widget__contact-text"><a href="{{ url(" mailto:abcd@gmail.com")
                                                }}">abcd@gmail.com</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__services">
                            <h4 class="footer-widget__title">Department</h4>
                            <ul class="footer-widget__services-link-list list-unstyled">
                                <li>
                                    <a href="{{ url("harmony-family-health-medical") }}">Compassionate Care, Always
                                        There</a>
                                </li>
                                <li>
                                    <a href="{{ url("evergreen-medical-center") }}">Medical Heath Care</a>
                                </li>
                                <li>
                                    <a href="{{ url("wellSpring-wellness-center") }}">NovaHealth Specialists Evergreen
                                        Medical Center</a>
                                </li>
                                <li>
                                    <a href="{{ url("vitality-health-solutions") }}">Your Partner in Health Where Health
                                        Matters Most</a>
                                </li>
                                <li>
                                    <a href="{{ url("pure-life-health-services") }}">Renewal Rehab Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__social-media">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">Social Media</h3>
                            </div>
                            <ul class="footer-widget__services-link-list list-unstyled">
                                <li>
                                    <a href="{{ url("contact") }}">Facebook</a>
                                </li>
                                <li>
                                    <a href="{{ url("contact") }}">Instagram</a>
                                </li>
                                <li>
                                    <a href="{{ url("contact") }}">Twitter</a>
                                </li>
                                <li>
                                    <a href="{{ url("contact") }}">Pinterest</a>
                                </li>
                                <li>
                                    <a href="{{ url("contact") }}">Linkedin</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__page-link">
                            <h4 class="footer-widget__title">Page</h4>
                            <ul class="footer-widget__services-link-list list-unstyled">
                                <li>
                                    <a href="{{ url("about") }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ url("services") }}">Services</a>
                                </li>
                                <li>
                                    <a href="{{ url("about") }}">Why Chose Us</a>
                                </li>
                                <li>
                                    <a href="{{ url("doctor") }}">Doctors</a>
                                </li>
                                <li>
                                    <a href="{{ url("blog") }}">Blog And News</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <div class="site-footer__copyright">
                            <p class="site-footer__copyright-text">Copyright ©2025 <a
                                    href="{{ url("about") }}">Careon</a>.
                                All rights reserved.</p>
                        </div>
                        <div class="site-footer__bottom-menu-box">
                            <ul class="list-unstyled site-footer__bottom-menu">
                                <li><a href="{{ url("about") }}">Trems & Condition</a></li>
                                <li><a href="{{ url("about") }}">Privacy Policy</a></li>
                                <li><a href="{{ url("about") }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->
</div><!-- /.page-wrapper -->