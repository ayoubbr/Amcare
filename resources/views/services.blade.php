<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.hostlin.com/Amcare/service-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 May 2025 14:06:58 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Amcare - HTML 5 Template Preview</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

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
    @vite('resources/css/responsive.css')
    @vite('resources/css/module-css/page-title.css')
    @vite('resources/css/module-css/subscribe.css')

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


        <!-- page-title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Services</li>
                    </ul>
                    <h1>Our Services</h1>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- service-section -->
        <section class="service-section pt_120 pb_120">
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
                        <div class="shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>
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
                                        <a href="{{ url('services/1') }}" class="theme-btn btn-one">Know More</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image-box pl_110 pb_50">
                                        <figure class="image image-1 image-hov-one"><img
                                                src="assets/images/service/service-1.jpg" alt=""></figure>
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


        <!-- sevice-area -->
        <section class="sevice-area centred pt_120 pb_90">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-14.png);"></div>
            <div class="auto-container">
                <div class="sec-title mb_50">
                    <span class="sub-title mb_13">Service Areas</span>
                    <h2>Our Service Zones</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <figure class="image-box"><img src="assets/images/resource/service-area-1.jpg"
                                    alt=""></figure>
                            <h4><a href="index-4.html">Los Angeles</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <figure class="image-box"><img src="assets/images/resource/service-area-2.jpg"
                                    alt=""></figure>
                            <h4><a href="index-4.html">Houston</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <figure class="image-box"><img src="assets/images/resource/service-area-3.jpg"
                                    alt=""></figure>
                            <h4><a href="index-4.html">Philadelphia</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <figure class="image-box"><img src="assets/images/resource/service-area-4.jpg"
                                    alt=""></figure>
                            <h4><a href="index-4.html">New York</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <figure class="image-box"><img src="assets/images/resource/service-area-5.jpg"
                                    alt=""></figure>
                            <h4><a href="index-4.html">San Antonio</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <figure class="image-box"><img src="assets/images/resource/service-area-6.jpg"
                                    alt=""></figure>
                            <h4><a href="index-4.html">Phoenix</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <figure class="image-box"><img src="assets/images/resource/service-area-7.jpg"
                                    alt=""></figure>
                            <h4><a href="index-4.html">San Diego</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <figure class="image-box"><img src="assets/images/resource/service-area-8.jpg"
                                    alt=""></figure>
                            <h4><a href="index-4.html">Chicago</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sevice-area end -->


        @include('footer')

    </div>

    @include('js')

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.hostlin.com/Amcare/service-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 May 2025 14:06:58 GMT -->

</html>
