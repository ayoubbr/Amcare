<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.hostlin.com/Amcare/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 May 2025 14:07:01 GMT -->

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
    @vite('resources/css/module-css/page-title.css')
    @vite('resources/css/module-css/subscribe.css')
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


        <!-- page-title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Events</li>
                    </ul>
                    <h1>Events</h1>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- event-section -->
        <section class="event-section pt_120 pb_90 centred p_relative">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-8.png);"></div>
            <div class="auto-container">
                <div class="sec-title mb_50">
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
                                <figure class="image-box"><img src="assets/images/resource/event-1.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 event-block">
                        <div class="event-block-one">
                            <div class="inner-box">
                                <h3><a href="event-details.html">Community Events</a></h3>
                                <p>Finding individuals who share your company's values and vision can contribute to a
                                    cohesive</p>
                                <div class="btn-box"><a href="event-details.html" class="theme-btn btn-one">Know
                                        More</a></div>
                                <figure class="image-box"><img src="assets/images/resource/event-2.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- event-section end -->

        @include('footer')

    </div>


    @include('js')

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.hostlin.com/Amcare/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 May 2025 14:07:01 GMT -->

</html>
