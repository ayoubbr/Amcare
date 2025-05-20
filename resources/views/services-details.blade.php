<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.hostlin.com/Amcare/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 May 2025 14:06:59 GMT -->

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
    @vite('resources/css/module-css/page-title.css')
    @vite('resources/css/module-css/banner.css')
    @vite('resources/css/module-css/brand.css')
    @vite('resources/css/module-css/about.css')
    @vite('resources/css/module-css/chooseus.css')
    @vite('resources/css/module-css/service.css')
    @vite('resources/css/module-css/service-details.css')
    @vite('resources/css/module-css/feature.css')
    @vite('resources/css/module-css/funfact.css')
    @vite('resources/css/module-css/testimonial.css')
    @vite('resources/css/module-css/faq.css')
    @vite('resources/css/module-css/subscribe.css')
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


        <!-- page-title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url('{{asset('assets/images/background/page-title.jpg')}}');"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb">
                        <li><a href="/">Home</a></li>
                        <li>Service Details</li>
                    </ul>
                    <h1>Road Ambulance</h1>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- service-details -->
        <section class="service-details pt_120 pb_120">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar mr_30">
                            <div class="category-widget mb_60">
                                <ul class="category-list clearfix">
                                    <li><a href="{{ url('services/1') }}"
                                            class="{{ request()->is('services/1') ? 'current' : '' }}">Road
                                            Ambulance</a></li>
                                    <li><a href="{{ url('services/2') }}"
                                            class="{{ request()->is('services/2') ? 'current' : '' }}">Air
                                            Ambulance</a></li>
                                    <li><a href="{{ url('services/3') }}"
                                            class="{{ request()->is('services/3') ? 'current' : '' }}">Water
                                            Ambulance</a></li>
                                    <li><a href="{{ url('services/4') }}"
                                            class="{{ request()->is('services/4') ? 'current' : '' }}">Emergency
                                            Medical</a></li>
                                    <li><a href="{{ url('services/5') }}"
                                            class="{{ request()->is('services/5') ? 'current' : '' }}">Road
                                            Accident</a></li>
                                    <li><a href="{{ url('services/6') }}"
                                            class="{{ request()->is('services/6') ? 'current' : '' }}">ICU
                                            Ambulance</a></li>
                                </ul>
                            </div>
                            <div class="contact-widget centred">
                                <div class="inner-box">
                                    <div class="bg-layer"
                                        style="background-image: url('{{asset('assets/images/resource/sidebar-1.jpg')}}');"></div>
                                    <div class="text-box">
                                        <h4>Emergency Suport?</h4>
                                        <a href="tel:12463330089">+ 1 (246) 333-0089</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="service-details-content">
                            <div class="content-one mb_50">
                                <figure class="image-box"><img
                                        src="{{ asset('assets/images/service/service-15.jpg') }}" alt="">
                                </figure>
                                <div class="text-box">
                                    <h2>Road Ambulances Enhance Emergency Medical Response</h2>
                                    <p>International air ambulance services have revolutionized long-distance patient
                                        transport, offering critical care during flights across vast distances and
                                        international borders. These services are essential for patients requiring
                                        urgent medical attention or specialized care not available locally. Road
                                        ambulances are equipped with advanced medical technologies such as portable
                                        ventilators, defibrillators, and intensive care units, ensuring patients receive
                                        continuous, high-level care throughout the journey.</p>
                                    <p>Innovations in this field include enhanced telemedicine capabilities, allowing
                                        ground-based medical teams to provide real-time support and consultations during
                                        flights. Additionally, advancements in aircraft design and medical equipment
                                        have improved the efficiency and safety of air ambulance operations.</p>
                                </div>
                            </div>
                            <div class="content-two mb_50">
                                <div class="inner-box centred">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <h3>Help us save a life</h3>
                                                <p>By supporting ambulance services, we ensure that life-saving medical
                                                    attention reaches those in critical need</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <h3>Join our big family</h3>
                                                <p>Join our big family and become a part of a community dedicated to
                                                    making a difference. Here, you will find a supportive</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-box">
                                    <p>Innovations in this field include enhanced telemedicine capabilities, allowing
                                        ground-based medical teams to provide real-time support and consultations during
                                        flights. Additionally, advancements in aircraft design and medical equipment
                                        have improved the efficiency and safety of air ambulance operations.</p>
                                </div>
                            </div>
                            <div class="content-three pb_20">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                        <div class="text-box">
                                            <h2>Service Benefits</h2>
                                            <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual
                                                form of a document or a typeface without relying on meaningful content.
                                            </p>
                                            <ul class="list-style-one clearfix">
                                                <li>In id diam nec nisi congue tincidunt</li>
                                                <li>Sed tristique lorem non tesque</li>
                                                <li>Innovations in this field include enhanced</li>
                                                <li>Additionally advancements in aircraft</li>
                                                <li>Lorem ipsum is a placeholder text</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image-box"><img src="{{asset('assets/images/service/service-16.jpg')}}"
                                                alt=""></figure>
                                    </div>
                                </div>
                            </div>
                            <div class="content-four">
                                <div class="title-text pb_20">
                                    <h2>General Questions</h2>
                                </div>
                                <div class="content_block_six">
                                    <div class="faq-content">
                                        <ul class="accordion-box">
                                            <li class="accordion block active-block">
                                                <div class="acc-btn active">
                                                    <h4>How Can I Prepare for an Interview?</h4>
                                                    <div class="icon-box"><i class="icon-27"></i></div>
                                                </div>
                                                <div class="acc-content current">
                                                    <div class="text">
                                                        <p>To prepare for an interview, research the company, understand
                                                            the job role and responsibilities, and prepare questions to
                                                            ask the interviewer.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="accordion block">
                                                <div class="acc-btn">
                                                    <h4>Hiring Nursev and Candidates?</h4>
                                                    <div class="icon-box"><i class="icon-27"></i></div>
                                                </div>
                                                <div class="acc-content">
                                                    <div class="text">
                                                        <p>To prepare for an interview, research the company, understand
                                                            the job role and responsibilities, and prepare questions to
                                                            ask the interviewer.</p>
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
                                                        <p>To prepare for an interview, research the company, understand
                                                            the job role and responsibilities, and prepare questions to
                                                            ask the interviewer.</p>
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
                                                        <p>To prepare for an interview, research the company, understand
                                                            the job role and responsibilities, and prepare questions to
                                                            ask the interviewer.</p>
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
                                                        <p>To prepare for an interview, research the company, understand
                                                            the job role and responsibilities, and prepare questions to
                                                            ask the interviewer.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-details end -->


        @include('footer')

    </div>


    @include('js')

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.hostlin.com/Amcare/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 May 2025 14:06:59 GMT -->

</html>
