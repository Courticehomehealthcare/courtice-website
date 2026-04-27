<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="{{ url('/') }}" aria-label="logo image"><img src="assets/images/logo.png" width="135"
                    alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:info@courticehomehealthcare.com">info@courticehomehealthcare.com</a>
            </li>
            <li>
                <i class="fas fa-phone"></i>
                <a href="tel:+19057210004">+1 905-721-0004</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                @if(optional($siteSettings)->twitter_link)
                    <a href="{{ $siteSettings->twitter_link }}" class="fab fa-twitter"></a>
                @endif
                @if(optional($siteSettings)->facebook_link)
                    <a href="{{ $siteSettings->facebook_link }}" class="fab fa-facebook-square"></a>
                @endif
                @if(optional($siteSettings)->instagram_link)
                    <a href="{{ $siteSettings->instagram_link }}" class="fab fa-instagram"></a>
                @endif
                @if(optional($siteSettings)->linkedin_link)
                    <a href="{{ $siteSettings->linkedin_link }}" class="fab fa-linkedin-in"></a>
                @endif
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->