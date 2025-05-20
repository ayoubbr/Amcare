<!-- main header -->
<header class="main-header header-style-three pl_100 pr_100">
    <!-- header-top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner">
                <ul class="info-list">
                    <li><i class="icon-48"></i>Appellez:<a href="tel:912345432">+91 (234) 5432</a></li>
                    <li><i class="icon-47"></i>Mail:<a href="mailto:info@example.com">info@example.com</a>
                    </li>
                </ul>
                <div class="right-column">
                </div>
            </div>
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box">
                <figure class="logo-box"><a href="index.html"><img
                            src="{{ Vite::asset('resources/assets/images/logo.png') }}" alt=""></a>
                </figure>
                <div class="menu-area">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light clearfix">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="{{ request()->is('/') ? 'current' : '' }}"><a
                                        href="{{ route('home') }}">Acceuil</a>
                                </li>
                                <li class="dropdown {{ request()->is('services') ? 'current' : '' }}"><a
                                        href="{{ route('services') }}">Services</a>
                                    <ul>
                                        <li><a href="{{ url('services/1') }}">Road Ambulance</a></li>
                                        <li><a href="{{ url('services/2') }}">Air Ambulance</a></li>
                                        <li><a href="{{ url('services/3') }}">Water Ambulance</a></li>
                                        <li><a href="{{ url('services/4') }}">Emergency Medical</a></li>
                                        <li><a href="{{ url('services/5') }}">Road Accident</a></li>
                                        <li><a href="{{ url('services/6') }}">ICU Ambulance</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{ url('events') }}">Events</a>
                                    <ul>
                                        <li><a href="{{ url('events/1') }}">Health Care Ideas</a></li>
                                        <li><a href="{{ url('events/1') }}">Real Heart Attack</a></li>
                                        <li><a href="{{ url('events/1') }}">Blood Information</a></li>
                                        <li><a href="{{ url('events/1') }}">Nursing Care</a></li>
                                        <li><a href="{{ url('events/1') }}">Anesthesia Support</a></li>
                                    </ul>
                                </li>
                                <li class="{{ request()->is('blogs') ? 'current' : '' }}">
                                    <a href="{{ url('blogs') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{ url('faqs') }}">FAQ's</a>
                                </li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="error.html">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="menu-right-content">
                    <div class="search-toggler"><i class="icon-8"></i></div>
                    {{-- <div class="btn-box"><a href="index.html" class="theme-btn btn-one">Get a Quote</a></div> --}}
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <figure class="logo-box"><a href="index.html"><img
                            src="{{ Vite::asset('resources/assets/images/logo.png') }}" alt=""></a>
                </figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <div class="menu-right-content">
                    <div class="search-toggler"><i class="icon-8"></i></div>
                    {{-- <div class="btn-box"><a href="index.html" class="theme-btn btn-one">Get a Quote</a></div> --}}
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->


<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="{{ Vite::asset('resources/assets/images/logo-2.png') }}"
                    alt="" title=""></a>
        </div>
        <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->

<div class="chat-icon whatsapp-icon">
    <button type="button" class="chat-toggler">
        <i class="fab fa-whatsapp"></i>
    </button>
</div>


<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="popup-inner">
        <div class="upper-box">
            <figure class="logo-box"><a href="index.html"><img
                        src="{{ Vite::asset('resources/assets/images/logo-2.png') }}" alt=""></a>
            </figure>
            <div class="close-search"><span class="fas fa-times"></span></div>
        </div>
        <div class="overlay-layer"></div>
        <div class="auto-container">
            <div class="search-form">
                <form method="post" action="https://azim.hostlin.com/Amcare/index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Type your keyword and hit" required>
                            <button type="submit"><i class="icon-8"></i></button>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
