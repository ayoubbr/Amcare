<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.hostlin.com/Amcare/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 May 2025 14:06:43 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Amcare - HTML 5 Template Preview</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ Vite::asset('resources/assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    @vite('resources/css/font-awesome-all.css')
    @vite('resources/css/owl.css')
    @vite('resources/css/flaticon.css')
    @vite('resources/css/bootstrap.css')
    @vite('resources/css/jquery.fancybox.min.css')
    @vite('resources/css/animate.css')
    @vite('resources/css/nice-select.css')
    @vite('resources/css/odometer.css')
    @vite('resources/css/elpath.css')
    @vite('resources/css/color.css')
    @vite('resources/css/rtl.css')
    @vite('resources/css/style.css')
    @vite('resources/css/module-css/header.css')
    @vite('resources/css/module-css/banner.css')
    @vite('resources/css/module-css/brand.css')
    @vite('resources/css/module-css/about.css')
    @vite('resources/css/module-css/chooseus.css')
    @vite('resources/css/module-css/service.css')
    @vite('resources/css/module-css/feature.css')
    @vite('resources/css/module-css/funfact.css')
    @vite('resources/css/module-css/event.css')
    @vite('resources/css/module-css/process.css')
    @vite('resources/css/module-css/news.css')
    @vite('resources/css/module-css/cta.css')
    @vite('resources/css/module-css/footer.css')
    @vite('resources/css/responsive.css')

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper ltr">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="m" class="letters-loading">
                                m
                            </span>
                            <span data-text-preloader="c" class="letters-loading">
                                c
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- page-direction -->
        <div class="page_direction">
            <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
            <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
        </div>
        <!-- page-direction end -->


        <div class="chat-icon"><button type="button" class="chat-toggler"><i class="icon-31"></i></button></div>


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
                                        <li class="current dropdown"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                                <li><a href="index-3.html">Home Three</a></li>
                                                <li><a href="index-4.html">Home Four</a></li>
                                                <li><a href="index-5.html">Home Five</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>
                                                <li><a href="service.html">Services One</a></li>
                                                <li><a href="service-2.html">Services Two</a></li>
                                                <li><a href="service-3.html">Services Three</a></li>
                                                <li><a href="service-4.html">Service Area</a></li>
                                                <li><a href="service-details.html">Road Ambulance</a></li>
                                                <li><a href="service-details-2.html">Air Ambulance</a></li>
                                                <li><a href="service-details-3.html">Water Ambulance</a></li>
                                                <li><a href="service-details-4.html">Emergency Medical</a></li>
                                                <li><a href="service-details-5.html">Road Accident</a></li>
                                                <li><a href="service-details-6.html">ICU Ambulance</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Events</a>
                                            <ul>
                                                <li><a href="event.html">Events</a></li>
                                                <li><a href="event-details.html">Health Care Ideas</a></li>
                                                <li><a href="event-details-2.html">Real Heart Attack</a></li>
                                                <li><a href="event-details-3.html">Blood Information</a></li>
                                                <li><a href="event-details-4.html">Nursing Care</a></li>
                                                <li><a href="event-details-5.html">Anesthesia Support</a></li>
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
                            src="{{ Vite::asset('resources/assets/images/logo-2.png') }}" alt=""
                            title=""></a></div>
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


        <!-- banner-section -->
        <section class="banner-style-three pl_100 pr_100">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none owl-dots-none">
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url(assets/images/banner/banner-7.jpg);"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="upper-text">24/7 Available</span>
                            <h2>Top <span>Ambulance</span> Services</h2>
                            <p>These services are designed to reach the scene of an emergency <br />quickly, equipped
                                with advanced medical equipment.</p>
                            <div class="btn-box"><a href="index.html" class="theme-btn btn-one">Get a Quote</a></div>
                        </div>
                    </div>
                </div>
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url(assets/images/banner/banner-5.jpg);"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="upper-text">24/7 Available</span>
                            <h2>Top <span>Ambulance</span> Services</h2>
                            <p>These services are designed to reach the scene of an emergency <br />quickly, equipped
                                with advanced medical equipment.</p>
                            <div class="btn-box"><a href="index.html" class="theme-btn btn-one">Get a Quote</a></div>
                        </div>
                    </div>
                </div>
                <div class="slide-item p_relative">
                    <div class="bg-layer"
                        style="background-image: url('{{ asset('assets/images/banner/banner-6.jpg') }}');"></div>
                    <div class="shape"
                        style="background-image: url('{{ asset('assets/images/shape/shape-6.png') }}');"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="upper-text">24/7 Available</span>
                            <h2>Top <span>Ambulance</span> Services</h2>
                            <p>These services are designed to reach the scene of an emergency <br />quickly, equipped
                                with advanced medical equipment.</p>
                            <div class="btn-box"><a href="index.html" class="theme-btn btn-one">Get a Quote</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- brand-style-two -->
        <section class="brand-style-two pl_100 pr_100">
            <div class="outer-container b_radius pl_0">
                <div class="brand-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <div class="brand-logo-box"><a href="index.html"><img
                                src="{{ Vite::asset('resources/assets/images/brand/brand-1.png') }}"
                                alt=""></a></div>
                    <div class="brand-logo-box"><a href="index.html"><img
                                src="{{ Vite::asset('resources/assets/images/brand/brand-2.png') }}"
                                alt=""></a></div>
                    <div class="brand-logo-box"><a href="index.html"><img
                                src="{{ Vite::asset('resources/assets/images/brand/brand-3.png') }}"
                                alt=""></a></div>
                    <div class="brand-logo-box"><a href="index.html"><img
                                src="{{ Vite::asset('resources/assets/images/brand/brand-4.png') }}"
                                alt=""></a></div>
                    <div class="brand-logo-box"><a href="index.html"><img
                                src="{{ Vite::asset('resources/assets/images/brand/brand-5.png') }}"
                                alt=""></a></div>
                </div>
            </div>
        </section>
        <!-- brand-style-two end -->


        <!-- about-style-two -->
        <section class="about-style-two pt_120 pb_120">
            <div class="rotate-box">
                <span class="curved-circle">30 Years Experience&nbsp;&nbsp;-&nbsp;&nbsp;30 Years
                    Experience&nbsp;&nbsp;-&nbsp;&nbsp;</span>
                <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></div>
            </div>
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_three">
                            <div class="image-box mr_40 pr_70">
                                <figure class="image"><img src="assets/images/resource/about-1.jpg" alt="">
                                </figure>
                                <div class="funfact-inner clearfix r_0">
                                    <div class="funfact-block">
                                        <div class="count-outer">
                                            <span class="odometer" data-count="15">00</span><span
                                                class="symble">+</span>
                                        </div>
                                        <p>Years Experience</p>
                                    </div>
                                    <div class="funfact-block">
                                        <div class="count-outer">
                                            <span class="odometer" data-count="10">00</span><span
                                                class="symble">k</span>
                                        </div>
                                        <p>Happy Customers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_three">
                            <div class="content-box">
                                <div class="sec-title mb_35">
                                    <span class="sub-title mb_12">Who We are</span>
                                    <h2>Learn more About us</h2>
                                    <p>At Amcare we pride ourselves on delivering excellence in emergency medical
                                        services. Our team of highly trained experienced professionals.</p>
                                </div>
                                <div class="inner-box">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-18"></i></div>
                                        <div class="text">
                                            <h3>Patient-Centered Approach</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur. Nam quis biben dum lacinia eu id
                                                in. Quisque </p>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-19"></i></div>
                                        <div class="text">
                                            <h3>Impeccable Safety</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur. Nam quis biben dum lacinia eu id
                                                in. Quisque </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-two end -->

        <!-- support-style-two -->
        <section class="support-style-two centred pl_100 pr_100 pb_90">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <h5>Emergency Booking:</h5>
                            <h2><a href="tel:912345431">+91 (234) 5431</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <h5>Emergency Booking:</h5>
                            <h2><a href="tel:912345432">+91 (234) 5432</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <h5>Emergency Booking:</h5>
                            <h2><a href="tel:912345433">+91 (234) 5433</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- support-style-two end -->


        <!-- chooseus-style-three -->
        <section class="chooseus-style-three centred pl_100 pr_100">
            <div class="outer-container pt_120 pb_90">
                <div class="auto-container">
                    <div class="sec-title centred light mb_50">
                        <span class="sub-title mb_12">We are best</span>
                        <h2>Why Choose Us</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-three wow fadeInUp animated" data-wow-delay="00ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-12"></i></div>
                                    <h3><a href="index-3.html">Secure Ride</a></h3>
                                    <p>Providing clear career paths & growth opportunities is key to retaining top
                                        talent.</p>
                                    <div class="link"><a href="index-3.html"><span>Learn More</span><i
                                                class="icon-39"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-three wow fadeInUp animated" data-wow-delay="200ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-13"></i></div>
                                    <h3><a href="index-3.html">On Demand</a></h3>
                                    <p>Educate employees about compliance requirements through regular training</p>
                                    <div class="link"><a href="index-3.html"><span>Learn More</span><i
                                                class="icon-39"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-three wow fadeInUp animated" data-wow-delay="400ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-14"></i></div>
                                    <h3><a href="index-3.html">Emergency Care</a></h3>
                                    <p>Invest in employee training and development programs to enhance skills.</p>
                                    <div class="link"><a href="index-3.html"><span>Learn More</span><i
                                                class="icon-39"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-three wow fadeInUp animated" data-wow-delay="600ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-32"></i></div>
                                    <h3><a href="index-3.html">24/7 Support</a></h3>
                                    <p>Providing clear career paths & growth opportunities is key to retaining top
                                        talent.</p>
                                    <div class="link"><a href="index-3.html"><span>Learn More</span><i
                                                class="icon-39"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-style-three end -->


        {{-- <!-- service-style-three -->
        <section class="service-style-three centred pl_100 pr_100 pt_120 pb_90">
            <div class="auto-container">
                <div class="sec-title mb_100">
                    <span class="sub-title mb_12">Our services</span>
                    <h2>Expert Ambulance Services</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms">
                            <div class="inner-box">
                                <div class="content-box">
                                    <div class="icon-box"><i class="icon-33"></i></div>
                                    <h3><a href="service-details-2.html">Air Ambulance</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur lorem us adipiscing elit. Donec felis,
                                    </p>
                                    <div class="btn-box">
                                        <a href="service-details-2.html" class="theme-btn btn-one">Know More</a>
                                    </div>
                                </div>
                                <figure class="image-box"><a href="service-details-2.html"><img
                                            src="{{ Vite::asset('resources/assets/images/service/service-6.jpg') }}"
                                            alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInUp animated" data-wow-delay="300ms">
                            <div class="inner-box">
                                <div class="content-box">
                                    <div class="icon-box"><i class="icon-34"></i></div>
                                    <h3><a href="service-details-5.html">On Road Service</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur lorem us adipiscing elit. Donec felis,
                                    </p>
                                    <div class="btn-box">
                                        <a href="service-details-5.html" class="theme-btn btn-one">Know More</a>
                                    </div>
                                </div>
                                <figure class="image-box"><a href="service-details-5.html"><img
                                            src="{{ Vite::asset('resources/assets/images/service/service-7.jpg') }}"
                                            alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInUp animated" data-wow-delay="600ms">
                            <div class="inner-box">
                                <div class="content-box">
                                    <div class="icon-box"><i class="icon-35"></i></div>
                                    <h3><a href="service-details-3.html">Naval Ambulance</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur lorem us adipiscing elit. Donec felis,
                                    </p>
                                    <div class="btn-box">
                                        <a href="service-details-3.html" class="theme-btn btn-one">Know More</a>
                                    </div>
                                </div>
                                <figure class="image-box"><a href="service-details-3.html"><img
                                            src="{{ Vite::asset('resources/assets/images/service/service-8.jpg') }}"
                                            alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-style-three end --> --}}
        <!-- service-section -->
        <section class="service-section pt_120">
            <div class="auto-container">
                <div class="sec-title mb_50 centred">
                    <span class="sub-title mb_12">Our services</span>
                    <h2>Expert Ambulance Services</h2>
                </div>
                <div class="tabs-box">
                    <div class="tab-btn-box">
                        <div class="tab-btns tab-buttons clearfix">
                            <div class="tab-btn active-btn" data-tab="#tab-4">Ambulance Service</div>
                            <div class="tab-btn" data-tab="#tab-5">ICU Ambulance</div>
                            <div class="tab-btn" data-tab="#tab-6">Air Ambulance</div>
                            <div class="tab-btn" data-tab="#tab-7">Medical Support</div>
                        </div>
                    </div>
                    <div class="tabs-content">
                        <div class="shape"
                            style="background-image: url('{{ asset('assets/images/shape/shape-1.png') }}');"></div>
                        <div class="tab active-tab" id="tab-4">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content-box">
                                        <h2>Ambulance Service</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis,
                                            suscipit you take action against fraud. See it the Security Center for and
                                            Mobile and Online Banking.</p>
                                        <ul class="list-style-one clearfix">
                                            <li>Medical Necessity</li>
                                            <li>Flexible Payment</li>
                                            <li>24/7 Assistance</li>
                                            <li>Customer Support</li>
                                            <li>Additional Benefits</li>
                                        </ul>
                                        <a href="service-details.html" class="theme-btn btn-one">Get a Quote</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image-box pl_110 pb_50">
                                        <figure class="image image-1 image-hov-one"><img
                                                src="{{ asset('assets/images/service/service-1.jpg') }}"
                                                alt=""></figure>
                                        <figure class="image image-2 image-hov-two"><img
                                                src="assets/images/service/service-2.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-5">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content-box">
                                        <h2>ICU Ambulance</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis,
                                            suscipit you take action against fraud. See it the Security Center for and
                                            Mobile and Online Banking.</p>
                                        <ul class="list-style-one clearfix">
                                            <li>Medical Necessity</li>
                                            <li>Flexible Payment</li>
                                            <li>24/7 Assistance</li>
                                            <li>Customer Support</li>
                                            <li>Additional Benefits</li>
                                        </ul>
                                        <a href="service-details-6.html" class="theme-btn btn-one">Get a Quote</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image-box pl_110 pb_50">
                                        <figure class="image image-1 image-hov-one"><img
                                                src="assets/images/service/service-22.jpg" alt=""></figure>
                                        <figure class="image image-2 image-hov-two"><img
                                                src="assets/images/service/service-23.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-6">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content-box">
                                        <h2>Air Ambulance</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis,
                                            suscipit you take action against fraud. See it the Security Center for and
                                            Mobile and Online Banking.</p>
                                        <ul class="list-style-one clearfix">
                                            <li>Medical Necessity</li>
                                            <li>Flexible Payment</li>
                                            <li>24/7 Assistance</li>
                                            <li>Customer Support</li>
                                            <li>Additional Benefits</li>
                                        </ul>
                                        <a href="service-details-2.html" class="theme-btn btn-one">Get a Quote</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image-box pl_110 pb_50">
                                        <figure class="image image-1 image-hov-one"><img
                                                src="assets/images/service/service-24.jpg" alt=""></figure>
                                        <figure class="image image-2 image-hov-two"><img
                                                src="assets/images/service/service-25.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-7">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content-box">
                                        <h2>Medical Support</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis,
                                            suscipit you take action against fraud. See it the Security Center for and
                                            Mobile and Online Banking.</p>
                                        <ul class="list-style-one clearfix">
                                            <li>Medical Necessity</li>
                                            <li>Flexible Payment</li>
                                            <li>24/7 Assistance</li>
                                            <li>Customer Support</li>
                                            <li>Additional Benefits</li>
                                        </ul>
                                        <a href="service-details-2.html" class="theme-btn btn-one">Get a Quote</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image-box pl_110 pb_50">
                                        <figure class="image image-1 image-hov-one"><img
                                                src="assets/images/service/service-26.jpg" alt=""></figure>
                                        <figure class="image image-2 image-hov-two"><img
                                                src="assets/images/service/service-27.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- funfact-style-three -->
        <section class="funfact-style-three pl_100 pr_100">
            <div class="pattern-layer"
                style="background-image: url('{{ asset('assets/images/shape/shape-8.png') }}');"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-three">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-36"></i></div>
                                    <div class="inner">
                                        <div class="count-outer">
                                            <span class="odometer" data-count="300">00</span><span
                                                class="symble">+</span>
                                        </div>
                                        <p>Frontline Staff</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-three">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-37"></i></div>
                                    <div class="inner">
                                        <div class="count-outer">
                                            <span class="odometer" data-count="100">00</span><span
                                                class="symble">+</span>
                                        </div>
                                        <p>Specialized Vehicles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-three">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-38"></i></div>
                                    <div class="inner">
                                        <div class="count-outer">
                                            <span class="odometer" data-count="15">00</span><span
                                                class="symble">k+</span>
                                        </div>
                                        <p>Patients Served</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-style-three end -->


        <!-- feature-section -->
        <section class="feature-section pb_100">
            <div class="pattern-layer"
                style="background-image: url('{{ asset('assets/images/shape/shape-9.png') }}');"></div>
            <div class="auto-container">
                <div class="sec-title centred mb_50">
                    <span class="sub-title mb_12">Features</span>
                    <h2>Enhanced Patient Safety</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-20"></i></div>
                                <h3>Major Injuries</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-21"></i></div>
                                <h3>Cardiovascular Dieases</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-22"></i></div>
                                <h3>Cancer Support</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-23"></i></div>
                                <h3>Infants & Babies</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-24"></i></div>
                                <h3>Road Accidents</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-25"></i></div>
                                <h3>Emergency Situation</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-section end -->


        <!-- event-section -->
        <section class="event-section centred pl_100 pr_100">
            <div class="outer-container p_relative pt_120">
                <div class="bg-layer"
                    style="background-image: url('{{ asset('assets/images/background/event-bg.jpg') }}');"></div>
                <div class="auto-container">
                    <div class="sec-title light mb_50">
                        <span class="sub-title mb_12">Events</span>
                        <h2>Keeping Spectators Safe</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 event-block">
                            <div class="event-block-one">
                                <div class="inner-box">
                                    <h3><a href="event-details.html">Sports Events</a></h3>
                                    <p>On-site medical team ready to provide full medical attention, for Competitors,
                                        spectators & event</p>
                                    <div class="btn-box"><a href="event-details.html" class="theme-btn btn-one">Know
                                            More</a></div>
                                    <figure class="image-box"><img
                                            src="{{ Vite::asset('resources/assets/images/resource/event-1.jpg') }}"
                                            alt=""></figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 event-block">
                            <div class="event-block-one">
                                <div class="inner-box">
                                    <h3><a href="event-details.html">Community Events</a></h3>
                                    <p>Finding individuals who share your company's values and vision can contribute to
                                        a cohesive</p>
                                    <div class="btn-box"><a href="event-details.html" class="theme-btn btn-one">Know
                                            More</a></div>
                                    <figure class="image-box"><img
                                            src="{{ Vite::asset('resources/assets/images/resource/event-2.jpg') }}"
                                            alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- event-section end -->


        <!-- processing-style-two -->
        <section class="processing-style-two pl_100 pr_100 centred">
            <div class="auto-container">
                <div class="inner-container pt_90 pb_90">
                    <div class="sec-title mb_50">
                        <span class="sub-title mb_12">Process</span>
                        <h2>How to get Service</h2>
                    </div>
                    <div class="content-box">
                        <div class="processing-block-two">
                            <div class="inner-box">
                                <div class="count-box">
                                    <div class="inner">
                                        <h4>01</h4><span>Step</span>
                                    </div>
                                </div>
                                <h3>Call at Hotline</h3>
                                <p>Suspendisse varius etiam est vitae duitempus nec vitae orci sodales metus velit</p>
                            </div>
                        </div>
                        <div class="processing-block-two">
                            <div class="inner-box">
                                <div class="count-box">
                                    <div class="inner">
                                        <h4>02</h4><span>Step</span>
                                    </div>
                                </div>
                                <h3>Set Direction</h3>
                                <p>Suspendisse varius etiam est vitae duitempus nec vitae orci sodales metus velit</p>
                            </div>
                        </div>
                        <div class="processing-block-two">
                            <div class="inner-box">
                                <div class="count-box">
                                    <div class="inner">
                                        <h4>03</h4><span>Step</span>
                                    </div>
                                </div>
                                <h3>Get Ambulance</h3>
                                <p>Suspendisse varius etiam est vitae duitempus nec vitae orci sodales metus velit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- processing-style-two end -->


        <!-- news-style-three -->
        <section class="news-style-three pl_100 pr_100 pt_120 pb_90">
            <div class="pattern-layer">
                <div class="pattern-1"
                    style="background-image: url('{{ asset('assets/images/shape/shape-9.png') }}');"></div>
                <div class="pattern-2"
                    style="background-image: url('{{ asset('assets/images/shape/shape-8.png') }}');"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-12 col-sm-12 title-column">
                        <div class="sec-title mb_40">
                            <span class="sub-title mb_12">Media Report</span>
                            <h2>Get <span>AmCare</span> Media informations</h2>
                            <p class="mb_30">On-site medical team ready to provide full medical attention, for
                                Competitors, spectators & event.</p>
                            <a href="blog.html" class="theme-btn btn-one">View All News</a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content">
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="author-box">
                                        <figure class="author-image"><img
                                                src="{{ Vite::asset('resources/assets/images/news/author-1.png') }}"
                                                alt=""></figure>
                                        <div class="inner">
                                            <h6>Ralph Edwards</h6>
                                            <span class="designation">Doctor</span>
                                        </div>
                                    </div>
                                    <div class="content-box">
                                        <ul class="post-info">
                                            <li><span>Business</span></li>
                                            <li>May 14,2024</li>
                                        </ul>
                                        <h3><a href="blog-details.html">Stories of medical repatriation from Spain to
                                                Ireland</a></h3>
                                        <div class="link-box"><a href="blog-details.html"><span>Read More</span><i
                                                    class="icon-39"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="author-box">
                                        <figure class="author-image"><img
                                                src="{{ Vite::asset('resources/assets/images/news/author-2.png') }}"
                                                alt=""></figure>
                                        <div class="inner">
                                            <h6>Arlene McCoy</h6>
                                            <span class="designation">President of Sales</span>
                                        </div>
                                    </div>
                                    <div class="content-box">
                                        <ul class="post-info">
                                            <li><span>Business</span></li>
                                            <li>May 13,2024</li>
                                        </ul>
                                        <h3><a href="blog-details.html">Medical services for repatriation from Spain to
                                                Ireland</a></h3>
                                        <div class="link-box"><a href="blog-details.html"><span>Read More</span><i
                                                    class="icon-39"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="author-box">
                                        <figure class="author-image"><img
                                                src="{{ Vite::asset('resources/assets/images/news/author-3.png') }}"
                                                alt=""></figure>
                                        <div class="inner">
                                            <h6>Cody Fisher</h6>
                                            <span class="designation">Cody Fisher</span>
                                        </div>
                                    </div>
                                    <div class="content-box">
                                        <ul class="post-info">
                                            <li><span>Business</span></li>
                                            <li>May 12,2024</li>
                                        </ul>
                                        <h3><a href="blog-details.html">Repatriation Stories Spain to Irish land with a
                                                medical escort</a></h3>
                                        <div class="link-box"><a href="blog-details.html"><span>Read More</span><i
                                                    class="icon-39"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="author-box">
                                        <figure class="author-image"><img
                                                src="{{ Vite::asset('resources/assets/images/news/author-4.png') }}"
                                                alt=""></figure>
                                        <div class="inner">
                                            <h6>Dianne Russell</h6>
                                            <span class="designation">Marketer</span>
                                        </div>
                                    </div>
                                    <div class="content-box">
                                        <ul class="post-info">
                                            <li><span>Business</span></li>
                                            <li>May 11,2024</li>
                                        </ul>
                                        <h3><a href="blog-details.html">Tales of repatriation from Spain to Ireland,
                                                accompanied by medical</a></h3>
                                        <div class="link-box"><a href="blog-details.html"><span>Read More</span><i
                                                    class="icon-39"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-style-three end -->


        <!-- cta-section -->
        <section class="cta-section b_radius ml_100 mr_100">
            <div class="pattern-layer"
                style="background-image: url('{{ asset('assets/images/shape/shape-3.png') }}');"></div>
            <div class="bubble-shape">
                <div class="bubble bubble-1"></div>
                <div class="bubble bubble-2"></div>
            </div>
            <div class="auto-container">
                <div class="inner-container p_relative pt_110 pb_100">
                    <div class="bubble-shape">
                        <div class="bubble bubble-3"></div>
                        <div class="bubble bubble-4"></div>
                    </div>
                    <span class="big-text">Hotline</span>
                    <div class="text-box">
                        <h2>Find out Why Patients Trust Our Ambulance</h2>
                        <a href="tel:12463330089">+ 1- (246) 333-0089</a>
                    </div>
                    <figure class="image-box-2"><img
                            src="{{ Vite::asset('resources/assets/images/resource/cta-1.png') }}" alt="">
                    </figure>
                </div>
            </div>
        </section>
        <!-- cta-section end -->


        <!-- main-footer -->
        <footer class="main-footer home-3 pl_100 pr_100">
            <div class="widget-section pt_110 pb_110">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-5 col-md-12 col-sm-12 footer-column">
                            <div class="footer-widget about-widget">
                                <div class="widget-content">
                                    <h2>The Fastest and Secure Ambulance Service</h2>
                                    <ul class="social-links">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>Who we are</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="service.html">Services</a></li>
                                        <li><a href="faq.html">FAQ’s</a></li>
                                        <li><a href="index.html">Our Fleet</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>More Links</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="event.html">Events</a></li>
                                        <li><a href="index.html">Training</a></li>
                                        <li><a href="contact.html">Contact us</a></li>
                                        <li><a href="index.html">Privacy Policy</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget subscribe-widget">
                                <div class="widget-title">
                                    <h4>Subscribe for updates</h4>
                                </div>
                                <div class="widget-content">
                                    <form method="post" action="https://azim.hostlin.com/Amcare/index-3.html">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email Address"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn btn-one">Subscribe Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="bottom-inner">
                        <div class="copyright">
                            <p>Copyright 2025 by <a href="index.html">Amcare</a> All Right Reserved.</p>
                        </div>
                        <div class="location-box">
                            <p><i class="icon-17"></i>88 broklyn silver street, USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <div class="scroll-to-top">
            <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>


    <!-- jequery plugins -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrolltop.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.js') }}"></script>
    <script src="{{ asset('assets/js/language.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.circleType.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.hostlin.com/Amcare/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 May 2025 14:06:47 GMT -->

</html>
