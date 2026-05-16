<ul class="main-menu__list">
    <!-- Home Dropdown -->
    <li class=" {{ Request::is('/index4') ? 'current' : '' }}">
        <a href="{{ url('/') }}">Home</a>
        <!--<ul>-->
        <!--    <li class="{{ Request::is('/') ? 'current' : '' }}"><a href="{{ url('/') }}">Home One</a></li>-->
        <!--    <li class="{{ Request::is('index2') ? 'current' : '' }}"><a href="{{ url('index2') }}">Home Two</a></li>-->
        <!--    <li class="{{ Request::is('index3') ? 'current' : '' }}"><a href="{{ url('index3') }}">Home Three</a></li>-->
        <!--    <li class="{{ Request::is('index4') ? 'current' : '' }}"><a href="{{ url('index4') }}">Home Four</a></li>-->
        <!--    <li class="{{ Request::is('index5') ? 'current' : '' }}"><a href="{{ url('index5') }}">Home Five</a></li>-->
        <!--    <li class="{{ Request::is('index-dark') ? 'current' : '' }}"><a href="{{ url('index-dark') }}">Home Dark</a></li>-->

        <!--    <li class="dropdown">-->
        <!--        <a href="#">One Page Styles</a>-->
        <!--        <ul>-->
        <!--            <li class="{{ Request::is('index-one-page') ? 'current' : '' }}"><a href="{{ url('index-one-page') }}">One Page Styles One</a></li>-->
        <!--            <li class="{{ Request::is('index2-one-page') ? 'current' : '' }}"><a href="{{ url('index2-one-page') }}">One Page Styles Two</a></li>-->
        <!--            <li class="{{ Request::is('index3-one-page') ? 'current' : '' }}"><a href="{{ url('index3-one-page') }}">One Page Styles Three</a></li>-->
        <!--            <li class="{{ Request::is('index4-one-page') ? 'current' : '' }}"><a href="{{ url('index4-one-page') }}">One Page Styles Four</a></li>-->
        <!--            <li class="{{ Request::is('index5-one-page') ? 'current' : '' }}"><a href="{{ url('index5-one-page') }}">One Page Styles Five</a></li>-->
        <!--        </ul>-->
        <!--    </li>-->
        <!--</ul>-->
    </li>

    <!-- About Us -->
    <li class="{{ Request::is('about') ? 'current' : '' }}">
        <a href="{{ url('about') }}">About Us</a>
    </li>

    <!-- Pages Dropdown -->
    <!--<li class="dropdown">-->
    <!--    <a href="#">Pages</a>-->
    <!--    <ul>-->
    <!--        <li class="{{ Request::is('doctor') ? 'current' : '' }}"><a href="{{ url('doctor') }}">Doctors</a></li>-->
    <!--        <li class="{{ Request::is('doctor-carousel') ? 'current' : '' }}"><a href="{{ url('doctor-carousel') }}">Doctors Carousel</a></li>-->
    <!--        <li class="{{ Request::is('doctor-details') ? 'current' : '' }}"><a href="{{ url('doctor-details') }}">Doctor Details</a></li>-->
    <!--        <li class="{{ Request::is('project') ? 'current' : '' }}"><a href="{{ url('project') }}">Projects</a></li>-->
    <!--        <li class="{{ Request::is('project-carousel') ? 'current' : '' }}"><a href="{{ url('project-carousel') }}">Project Carousel</a></li>-->
    <!--        <li class="{{ Request::is('project-details') ? 'current' : '' }}"><a href="{{ url('project-details') }}">Project Details</a></li>-->
    <!--        <li class="{{ Request::is('testimonials') ? 'current' : '' }}"><a href="{{ url('testimonials') }}">Testimonials</a></li>-->
    <!--        <li class="{{ Request::is('testimonial-carousel') ? 'current' : '' }}"><a href="{{ url('testimonial-carousel') }}">Testimonial Carousel</a></li>-->
    <!--        <li class="{{ Request::is('pricing') ? 'current' : '' }}"><a href="{{ url('pricing') }}">Pricing</a></li>-->
    <!--        <li class="{{ Request::is('appoinment') ? 'current' : '' }}"><a href="{{ url('appoinment') }}">Appoinment</a></li>-->
    <!--        <li class="{{ Request::is('faq') ? 'current' : '' }}"><a href="{{ url('faq') }}">Faq</a></li>-->
    <!--        <li class="{{ Request::is('404') ? 'current' : '' }}"><a href="{{ url('404') }}">404 Error</a></li>-->
    <!--    </ul>-->
    <!--</li>-->


    <li class="dropdown {{ Request::is('services*') ? 'current' : '' }}">
        <a href="{{ url('services') }}">Services</a>
        <ul>
            <li><a href="{{ route('services') }}">All Services</a></li>
            <li><a href="{{ route('services.details', 'product-rentals') }}">Product rentals</a></li>
            <li><a href="{{ route('services.details', 'online-in-store-shipping-options') }}">Online Shopping</a></li>
            <li><a href="{{ route('services.details', 'online-in-store-shipping-options') }}">In-Store Shopping</a></li>
        </ul>
    </li>



    <!-- Services Dropdown -->
    <!--<li class="dropdown">-->
    <!--    <a href="#">Services</a>-->
    <!--    <ul>-->
    <!--        <li class="{{ Request::is('services') ? 'current' : '' }}"><a href="{{ url('services') }}">Services</a></li>-->
    <!--        <li class="{{ Request::is('service-carousel') ? 'current' : '' }}"><a href="{{ url('service-carousel') }}">Service Carousel</a></li>-->
    <!--        <li class="{{ Request::is('vitality-health-solutions') ? 'current' : '' }}"><a href="{{ url('vitality-health-solutions') }}">Vitality Health Solutions</a></li>-->
    <!--        <li class="{{ Request::is('wellSpring-wellness-center') ? 'current' : '' }}"><a href="{{ url('wellSpring-wellness-center') }}">WellSpring Wellness Center</a></li>-->
    <!--        <li class="{{ Request::is('harmony-family-health-medical') ? 'current' : '' }}"><a href="{{ url('harmony-family-health-medical') }}">Family Health Medical</a></li>-->
    <!--        <li class="{{ Request::is('evergreen-medical-center') ? 'current' : '' }}"><a href="{{ url('evergreen-medical-center') }}">Evergreen Medical Center</a></li>-->
    <!--        <li class="{{ Request::is('pure-life-health-services') ? 'current' : '' }}"><a href="{{ url('pure-life-health-services') }}">PureLife Health Services</a></li>-->
    <!--    </ul>-->
    <!--</li>-->

    <li class="{{ Request::is('products*') || Request::is('product-details*') || Request::is('coming-soon') ? 'current' : '' }}">
        <a href="{{ route('coming-soon') }}">Products</a>
    </li>

    <li class="{{ Request::is('careers*') ? 'current' : '' }}">
        <a href="{{ route('careers') }}">Careers</a>
    </li>

    <li class="{{ Request::is('blog') ? 'current' : '' }}">
        <a href="{{ url('blog') }}">Blogs</a>
    </li>

    <!-- Blog Dropdown -->
    <!--<li class="dropdown">-->
    <!--    <a href="#">Blog</a>-->
    <!--    <ul>-->
    <!--        <li class="{{ Request::is('blog') ? 'current' : '' }}"><a href="{{ url('blog') }}">Blog</a></li>-->
    <!--<li class="{{ Request::is('blog-carousel') ? 'current' : '' }}"><a href="{{ url('blog-carousel') }}">Blog Carousel</a></li>-->
    <!--<li class="{{ Request::is('blog-list') ? 'current' : '' }}"><a href="{{ url('blog-list') }}">Blog List V-01</a></li>-->
    <!--<li class="{{ Request::is('blog-list-2') ? 'current' : '' }}"><a href="{{ url('blog-list-2') }}">Blog List V-02</a></li>-->
    <!--<li class="{{ Request::is('blog-details') ? 'current' : '' }}"><a href="{{ url('blog-details') }}">Blog Details</a></li>-->
    <!--    </ul>-->
    <!--</li>-->

    <!-- Contact -->
    <li class="{{ Request::is('contact') ? 'current' : '' }}">
        <a href="{{ url('contact') }}">Contact</a>
    </li>
</ul>