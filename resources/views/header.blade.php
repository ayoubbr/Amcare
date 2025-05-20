<!-- main header -->
<header class="main-header header-style-three pl_100 pr_100">
    <!-- header-top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner">
                <ul class="info-list">
                    <li><i class="icon-48"></i>Call:<a href="tel:912345432">+91 (234) 5432</a></li>
                    <li><i class="icon-47"></i>Mail:<a href="mailto:info@example.com">info@example.com</a>
                    </li>
                </ul>
                <div class="right-column">
                    <div class="language-box">
                        <div class="language-dropdown">
                            <button id="dropdown-btn"></button>
                            <ul class="dropdown-content" id="dropdown-content"></ul>
                        </div>
                    </div>
                    <ul class="social-links">
                        <li><span>Share:</span></li>
                        <li><a href="index.html"><i class="icon-4"></i></a></li>
                        <li><a href="index.html"><i class="icon-5"></i></a></li>
                        <li><a href="index.html"><i class="icon-6"></i></a></li>
                        <li><a href="index.html"><i class="icon-7"></i></a></li>
                    </ul>
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
                                        href="{{ route('home') }}">Home</a>
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
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li class="dropdown"><a href="#">Team</a>
                                            <ul>
                                                <li><a href="team.html">Our Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Testimonials</a>
                                            <ul>
                                                <li><a href="testimonial.html">Testimonials One</a></li>
                                                <li><a href="testimonial-2.html">Testimonials Two</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Faq's</a>
                                            <ul>
                                                <li><a href="faq.html">Faq's One</a></li>
                                                <li><a href="faq-2.html">Faq's Two</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="error.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Grid One</a></li>
                                        <li><a href="blog-2.html">Blog Grid Two</a></li>
                                        <li><a href="blog-3.html">Blog Standard</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="menu-right-content">
                    <div class="search-toggler"><i class="icon-8"></i></div>
                    <div class="btn-box"><a href="index.html" class="theme-btn btn-one">Get a Quote</a></div>
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
                    <div class="btn-box"><a href="index.html" class="theme-btn btn-one">Get a Quote</a></div>
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
        <div class="nav-logo"><a href="index.html"><img
                    src="{{ Vite::asset('resources/assets/images/logo-2.png') }}" alt="" title=""></a>
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

<!-- page-direction -->
<div class="page_direction">
    <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
    <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
</div>
<!-- page-direction end -->


<div class="chat-icon"><button type="button" class="chat-toggler"><i class="icon-31"></i></button></div>
<div class="chat-icon whatsapp-icon"><button type="button" class="chat-toggler"><i
            class="fab fa-whatsapp"></i></button></div>


<!--chat popup-->
<div id="chat-popup" class="chat-popup">
    <div class="popup-inner">
        <div class="close-chat"><i class="far fa-times"></i></div>
        <div class="chat-form">
            <p>Please fill out the form below and we will get back to you as soon as possible.</p>
            <form method="post" action="https://azim.hostlin.com/Amcare/index.html">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Your Text"></textarea>
                </div>
                <div class="form-group message-btn">
                    <button type="submit" class="theme-btn btn-one">Submit</button>
                </div>
            </form>
        </div>
    </div>
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
