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
    @vite('resources/css/module-css/testimonial.css')
    @vite('resources/css/module-css/faq.css')
    @vite('resources/css/module-css/team.css')
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

        @include('header')

        <!-- banner-section -->
        <section class="banner-style-three pl_100 pr_100">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none owl-dots-none">
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url(assets/images/banner/banner-7.jpg);"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="upper-text">24/7 Available</span>

                            <h2>Meilleurs <span>Services</span> d'Ambulance</h2>
                            <p>Ces services sont conçus pour atteindre les lieux d'une urgence <br />rapidement, équipé
                                d'équipements médicaux de pointe.</p>
                        </div>
                    </div>
                </div>
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url(assets/images/banner/banner-5.jpg);"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="upper-text">24/7 Disponible</span>
                            <h2>Meilleurs <span>Services</span> d'Ambulance</h2>
                            <p>Ces services sont conçus pour atteindre les lieux d'une urgence <br />rapidement, équipé
                                d'équipements médicaux de pointe.</p>
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
                            <span class="upper-text">24/7 Disponible</span>
                            <h2>Meilleurs <span>Services</span> d'Ambulance</h2>
                            <p>Ces services sont conçus pour atteindre les lieux d'une urgence <br />rapidement, équipé
                                d'équipements médicaux de pointe.</p>
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
                                src="{{ Vite::asset('resources/assets/images/brand/brand-1.png') }}" alt=""></a>
                    </div>
                    <div class="brand-logo-box"><a href="index.html"><img
                                src="{{ Vite::asset('resources/assets/images/brand/brand-2.png') }}" alt=""></a>
                    </div>
                    <div class="brand-logo-box"><a href="index.html"><img
                                src="{{ Vite::asset('resources/assets/images/brand/brand-3.png') }}" alt=""></a>
                    </div>
                    <div class="brand-logo-box"><a href="index.html"><img
                                src="{{ Vite::asset('resources/assets/images/brand/brand-4.png') }}" alt=""></a>
                    </div>
                    <div class="brand-logo-box"><a href="index.html"><img
                                src="{{ Vite::asset('resources/assets/images/brand/brand-5.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand-style-two end -->

        {{-- <!-- about-style-three -->
        <section class="about-style-three pl_100 pr_100 pt_120 pb_55">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-8.png);"></div>
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_four">
                            <div class="content-box">
                                <div class="sec-title mb_30">
                                    <span class="sub-title mb_12">Who We are</span>
                                    <h2>Excellence in Emergency Medical Services</h2>
                                    <p>At Amcare we pride ourselves on delivering excellence in emergency medical
                                        services. Our team of highly trained and experienced professionals</p>
                                </div>
                                <ul class="list-style-one mb_30 clearfix">
                                    <li>Inclusive teams consider a wider range of viewpoints</li>
                                    <li>Demonstrating a commitment to diversity and inclusion enhances</li>
                                    <li>Embracing diversity aligns with legal and ethical standards</li>
                                </ul>
                                <div class="btn-box"><a href="about.html" class="theme-btn btn-one">Know More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_four">
                            <div class="image-box pl_150 pb_100">
                                <figure class="image image-1"><img src="assets/images/resource/about-3.jpg"
                                        alt=""></figure>
                                <figure class="image image-2"><img src="assets/images/resource/about-4.jpg"
                                        alt=""></figure>
                                <div class="rotate-box">
                                    <span class="curved-circle">30 Years Experience&nbsp;&nbsp;-&nbsp;&nbsp;30 Years
                                        Experience&nbsp;&nbsp;-&nbsp;&nbsp;</span>
                                    <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-three end --> --}}

        <!-- about-style-three -->
        <section class="about-style-three pl_100 pr_100 pt_120 pb_120">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-8.png);"></div>
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_four">
                            <div class="content-box">
                                <div class="sec-title mb_30">
                                    <span class="sub-title mb_12">Who We are</span>
                                    <h2>Excellence in Emergency Medical Services</h2>
                                    <p>At Amcare we pride ourselves on delivering excellence in emergency medical services. Our team of highly trained and experienced professionals</p>
                                </div>
                                <ul class="list-style-one mb_30 clearfix">
                                    <li>Inclusive teams consider a wider range of viewpoints</li>
                                    <li>Demonstrating a commitment to diversity and inclusion enhances</li>
                                    <li>Embracing diversity aligns with legal and ethical standards</li>
                                </ul>
                                <div class="btn-box"><a href="about.html" class="theme-btn btn-one">Know More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_four">
                            <div class="image-box pl_150 pb_100">
                                <figure class="image image-1"><img src="assets/images/resource/about-3.jpg" alt=""></figure>
                                <figure class="image image-2"><img src="assets/images/resource/about-4.jpg" alt=""></figure>
                                <div class="rotate-box">
                                    <span class="curved-circle">30 Years Experience&nbsp;&nbsp;-&nbsp;&nbsp;30 Years Experience&nbsp;&nbsp;-&nbsp;&nbsp;</span>
                                    <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-three end -->


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


        <!-- service-section -->
        <section class="service-section">
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
        <section class="funfact-style-three pl_100 pr_100 pb_40 pt_40">
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

        {{-- <!-- event-section -->
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
        <!-- event-section end --> --}}

        <!-- faq-style-two -->
        <section class="faq-style-two pt_120 pb_120">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}'
                style="background-image: url('{{ asset('assets/images/background/faq-bg.jpg') }}');"></div>
            <div class="auto-container faq-style-two-auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title mb_50 light">
                                <span class="sub-title mb_12">General FAQ’S</span>
                                <h2>Most Asked Question</h2>
                            </div>
                            <div class="support-box">
                                <div class="text-box">
                                    <h4>Have more question?</h4>
                                    <h2>Call us</h2>
                                </div>
                                <h3><a href="tel:12463330089">+ 1 (246) 333-0089</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 faq-column">
                        <div class="content_block_six">
                            <div class="faq-content">
                                <ul class="accordion-box">
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <h4>How Can I Prepare for an Interview?</h4>
                                            <div class="icon-box"><i class="icon-27"></i></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>To prepare for an interview, research the company, understand the job
                                                    role and responsibilities, and prepare questions to ask the
                                                    interviewer.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <h4>Hiring Nursev and Candidates?</h4>
                                            <div class="icon-box"><i class="icon-27"></i></div>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="text">
                                                <p>To prepare for an interview, research the company, understand the job
                                                    role and responsibilities, and prepare questions to ask the
                                                    interviewer.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <h4>Clarifying Recruitment Concepts?</h4>
                                            <div class="icon-box"><i class="icon-27"></i></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>To prepare for an interview, research the company, understand the job
                                                    role and responsibilities, and prepare questions to ask the
                                                    interviewer.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <h4>Employers look for in candidates?</h4>
                                            <div class="icon-box"><i class="icon-27"></i></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>To prepare for an interview, research the company, understand the job
                                                    role and responsibilities, and prepare questions to ask the
                                                    interviewer.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <h4>Doctors look for in candidates?</h4>
                                            <div class="icon-box"><i class="icon-27"></i></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>To prepare for an interview, research the company, understand the job
                                                    role and responsibilities, and prepare questions to ask the
                                                    interviewer.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-style-two end -->


        @include('footer')

    </div>

    @include('js')

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.hostlin.com/Amcare/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 May 2025 14:06:47 GMT -->

</html>
