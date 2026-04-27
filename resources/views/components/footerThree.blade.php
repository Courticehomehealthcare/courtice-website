<!--Site Footer Three Start-->
<footer class="site-footer-three">
    <div class="site-footer-three__shape-1">
        <img src="{{ asset("/assets/images/shapes/site-footer-three-shape-1.png") }}" alt="">
    </div>
    <div class="container">
        <div class="site-footer-three__logo-and-social">
            <div class="footer-widget-three__logo" style="background-color:white;border-radius:15px">
                <a href="{{ url("/") }}">
                    <img src="{{ asset(optional($siteSettings)->logoimage ?? "/assets/images/logo.png") }}"
                        alt="{{ optional($siteSettings)->companyname ?? '' }}">
                </a>
            </div>
            <div class="site-footer-three__social">
                @if(optional($siteSettings)->facebook_link)
                    <a href="{{ $siteSettings->facebook_link }}"><span class="icon-facebook"></span></a>
                @endif
                @if(optional($siteSettings)->twitter_link)
                    <a href="{{ $siteSettings->twitter_link }}"><span class="icon-twitter"></span></a>
                @endif
                @if(optional($siteSettings)->instagram_link)
                    <a href="{{ $siteSettings->instagram_link }}"><span class="icon-instagram"></span></a>
                @endif
                @if(optional($siteSettings)->linkedin_link)
                    <a href="{{ $siteSettings->linkedin_link }}"><span class="fab fa-linkedin-in"></span></a>
                @endif
            </div>
        </div>
    </div>
    <div class="site-footer-three__top">
        <div class="container">
            <div class="site-footer-three__top-inner">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget-three__contact-info">
                            <h4 class="footer-widget-three__title">Contact</h4>
                            <ul class="footer-widget-three__contact-list list-unstyled">
                                <li>
                                    <div class="footer-widget-three__contact-icon">
                                        <span class="icon-envolope"></span>
                                    </div>
                                    <div class="footer-widget-three__contact-content">
                                        <span>Email</span>
                                        <p class="footer-widget-three__contact-text">
                                            <a
                                                href="mailto:{{ optional($siteSettings)->email ?? '' }}">{{ optional($siteSettings)->email ?? 'N/A' }}</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget-three__contact-icon">
                                        <span class="icon-call"></span>
                                    </div>
                                    <div class="footer-widget-three__contact-content">
                                        <span>Phone</span>
                                        <p class="footer-widget-three__contact-text">
                                            <a href="tel:+19057210004">+1 (905)-721-0004</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget-three__contact-icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="footer-widget-three__contact-content">
                                        <span>Location</span>
                                        <span class="footer-widget-three__contact-text" style="color:white;">
                                            {!! optional($siteSettings)->address ?? 'N/A' !!}
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget-three__page-link">
                            <h4 class="footer-widget-three__title">Page</h4>
                            <ul class="footer-widget-three__services-link-list list-unstyled">
                                <li>
                                    <a href="{{ url("/") }}"><i class="fas fa-angle-double-right"
                                            style="font-size: 15px; margin-right: 5px; color: white;"></i>Home</a>
                                </li>
                                <li>
                                    <a href="{{ url("about") }}"><i class="fas fa-angle-double-right"
                                            style="font-size: 15px; margin-right: 5px; color: white;"></i>About</a>
                                </li>
                                <li>
                                    <a href="{{ route('collections') }}"><i class="fas fa-angle-double-right"
                                            style="font-size: 15px; margin-right: 5px; color: white;"></i>Shop</a>
                                </li>
                                <li>
                                    <a href="{{ url("blog") }}"><i class="fas fa-angle-double-right"
                                            style="font-size: 15px; margin-right: 5px; color: white;"></i>Blog</a>
                                </li>
                                <li>
                                    <a href="{{ url("contact") }}"><i class="fas fa-angle-double-right"
                                            style="font-size: 15px; margin-right: 5px; color: white;"></i>Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget-three__services">
                            <h4 class="footer-widget-three__title">Services</h4>
                            <ul class="footer-widget-three__services-link-list list-unstyled">
                                @foreach($footerServices as $service)
                                    <li>
                                        <a href="{{ url('services/' . $service->servicesUrl) }}">
                                            <i class="fas fa-angle-double-right"
                                                style="font-size: 15px; margin-right: 5px; color: white;"></i>
                                            {{ $service->ServicesTitle }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget-three__newsletter-box">
                            <h4 class="footer-widget-three__title">Stay Connected</h4>
                            <span class="footer-widget-three__newsletter-text" style="color:white;">
                                {!! optional($siteSettings)->description ?? 'Dental care is essential for maintaining oral health and overall well-being' !!}
                            </span>
                            <form id="newsletterForm" class="footer-widget-three__newsletter">
                                @csrf
                                <input type="email" placeholder="Email address" name="email" required>
                                <button type="submit" class="thm-btn" id="subscribeBtn">
                                    <span id="subscribeBtnText">Subcribe Now</span>
                                    <i class="fa fa-spinner fa-spin btn-loader" id="subscribeLoader"
                                        style="display: none; margin-left: 5px;"></i>
                                    <span class="icon-paper-plane" id="subscribeBtnIcon"></span>
                                </button>
                            </form>
                            <div id="subscribeMessage" style="margin-top: 10px; font-weight: bold;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer-three__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer-three__bottom-inner">
                        <div class="site-footer-three__copyright">
                            <p class="site-footer-three__copyright-text">© <a
                                    href="{{ url("/") }}">{{ optional($siteSettings)->companyname ?? 'Careon' }}</a>
                                {{ optional($siteSettings)->copyrightyear ?? date('Y') }}
                                |
                                All Rights Reserved</p>
                        </div>
                        <div class="site-footer-three__bottom-menu-box">
                            <ul class="list-unstyled site-footer-three__bottom-menu">
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
<!--Site Footer Three End-->
</div><!-- /.page-wrapper -->

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#newsletterForm').on('submit', function (e) {
                e.preventDefault();

                var $form = $(this);
                var $btn = $('#subscribeBtn');
                var $btnText = $('#subscribeBtnText');
                var $loader = $('#subscribeLoader');
                var $icon = $('#subscribeBtnIcon');
                var $message = $('#subscribeMessage');

                var email = $form.find('input[name="email"]').val();

                if (!email) return;

                // Reset message
                $message.text('').css('color', '');

                // Loading state
                $btn.prop('disabled', true);
                $btnText.text('Subscribing...');
                $loader.show();
                $icon.hide();

                $.ajax({
                    url: "{{ route('subscribe') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        email: email
                    },
                    success: function (response) {
                        $message.text('Thank you for your subscription!').css('color', '#3bb18f');
                        $form[0].reset();
                    },
                    error: function (xhr) {
                        var errorMsg = 'Something went wrong. Please try again.';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMsg = xhr.responseJSON.message;
                        }
                        $message.text(errorMsg).css('color', '#e74c3c');
                    },
                    complete: function () {
                        // Revert state
                        $btn.prop('disabled', false);
                        $btnText.text('Subcribe Now');
                        $loader.hide();
                        $icon.show();
                    }
                });
            });
        });
    </script>
@endpush