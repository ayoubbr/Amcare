<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Acceuil - Amcare</title>

    <link rel="icon" href="{{ Vite::asset('resources/assets/images/favicon.ico') }}" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
        rel="stylesheet">

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


<body>

    <div class="boxed_wrapper ltr">


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
        @include('shared.header')

        <section class="banner-style-three pl_100 pr_100">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none owl-dots-none">
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url(assets/images/banner/banner-7.jpg);"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="upper-text">Disponible 24/7</span>

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
                            <span class="upper-text">Disponible 24/7</span>
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
                            <span class="upper-text">Disponible 24/7</span>
                            <h2>Meilleurs <span>Services</span> d'Ambulance</h2>
                            <p>Ces services sont conçus pour atteindre les lieux d'une urgence <br />rapidement, équipé
                                d'équipements médicaux de pointe.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        <section class="about-style-three pl_100 pr_100 pt_120 pb_120">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-8.png);"></div>
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_four">
                            <div class="content-box">
                                <div class="sec-title mb_30">
                                    <span class="sub-title mb_12">Qui sommes-nous</span>
                                    <h2>L'excellence dans les services médicaux d'urgence</h2>
                                    <p>Chez Amcare, nous sommes fiers d'offrir l'excellence en matière de services
                                        médicaux d'urgence. Notre équipe de professionnels hautement qualifiés et
                                        expérimentés</p>
                                </div>
                                <ul class="list-style-one mb_30 clearfix">
                                    <li>Les équipes inclusives considèrent un éventail plus large de points de vue</li>
                                    <li>Démontrer un engagement envers la diversité et l'inclusion améliore</li>
                                    <li>Adopter la diversité est conforme aux normes légales et éthiques</li>
                                </ul>
                                <div class="btn-box"><a href="{{ url('about') }}" class="theme-btn btn-one">En savoir
                                        plus</a></div>
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
                                    <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="processing-style-two pl_100 pr_100 centred">
            <div class="auto-container">
                <div class="inner-container pt_90 pb_90">
                    <div class="sec-title mb_50">
                        <span class="sub-title mb_12">Processus</span>
                        <h2>Comment obtenir un service</h2>
                    </div>
                    <div class="content-box">
                        <div class="processing-block-two">
                            <div class="inner-box">
                                <div class="count-box">
                                    <div class="inner">
                                        <h4>01</h4><span>Étape</span>
                                    </div>
                                </div>
                                <h3>Appeler la ligne directe</h3>
                                <p>Suspendisse varius etiam est vitae duitempus nec vitae orci sodales metus velit</p>
                            </div>
                        </div>
                        <div class="processing-block-two">
                            <div class="inner-box">
                                <div class="count-box">
                                    <div class="inner">
                                        <h4>02</h4><span>Étape</span>
                                    </div>
                                </div>
                                <h3>Définir la direction</h3>
                                <p>Suspendisse varius etiam est vitae duitempus nec vitae orci sodales metus velit</p>
                            </div>
                        </div>
                        <div class="processing-block-two">
                            <div class="inner-box">
                                <div class="count-box">
                                    <div class="inner">
                                        <h4>03</h4><span>Étape</span>
                                    </div>
                                </div>
                                <h3>Obtenir une ambulance</h3>
                                <p>Suspendisse varius etiam est vitae duitempus nec vitae orci sodales metus velit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="support-style-two centred pl_100 pr_100 pb_90">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <h5>Réservation d'urgence:</h5>
                            <h2><a href="tel:912345431">+91 (234) 5431</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <h5>Réservation d'urgence:</h5>
                            <h2><a href="tel:912345432">+91 (234) 5432</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <h5>Réservation d'urgence:</h5>
                            <h2><a href="tel:912345433">+91 (234) 5433</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-section">
            <div class="auto-container">
                <div class="sec-title mb_50 centred">
                    <span class="sub-title mb_12">Nos services</span>
                    <h2>Services d'ambulance experts</h2>
                </div>
                <div class="tabs-box">
                    <div class="tab-btn-box">
                        <div class="tab-btns tab-buttons clearfix">
                            <div class="tab-btn active-btn" data-tab="#tab-4">Service d'ambulance</div>
                            <div class="tab-btn" data-tab="#tab-5">Ambulance de soins intensifs</div>
                            <div class="tab-btn" data-tab="#tab-6">Ambulance aérienne</div>
                            <div class="tab-btn" data-tab="#tab-7">Support médical</div>
                        </div>
                    </div>
                    <div class="tabs-content">
                        <div class="shape"
                            style="background-image: url('{{ asset('assets/images/shape/shape-1.png') }}');"></div>
                        <div class="tab active-tab" id="tab-4">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content-box">
                                        <h2>Service d'ambulance</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis,
                                            suscipit you take action against fraud. See it the Security Center for and
                                            Mobile and Online Banking.</p>
                                        <ul class="list-style-one clearfix">
                                            <li>Nécessité médicale</li>
                                            <li>Paiement flexible</li>
                                            <li>Assistance 24/7</li>
                                            <li>Support client</li>
                                            <li>Avantages supplémentaires</li>
                                        </ul>
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
                                        <h2>Ambulance de soins intensifs</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis,
                                            suscipit you take action against fraud. See it the Security Center for and
                                            Mobile and Online Banking.</p>
                                        <ul class="list-style-one clearfix">
                                            <li>Nécessité médicale</li>
                                            <li>Paiement flexible</li>
                                            <li>Assistance 24/7</li>
                                            <li>Support client</li>
                                            <li>Avantages supplémentaires</li>
                                        </ul>
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
                                        <h2>Ambulance aérienne</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis,
                                            suscipit you take action against fraud. See it the Security Center for and
                                            Mobile and Online Banking.</p>
                                        <ul class="list-style-one clearfix">
                                            <li>Nécessité médicale</li>
                                            <li>Paiement flexible</li>
                                            <li>Assistance 24/7</li>
                                            <li>Support client</li>
                                            <li>Avantages supplémentaires</li>
                                        </ul>
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
                                        <h2>Support médical</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis,
                                            suscipit you take action against fraud. See it the Security Center for and
                                            Mobile and Online Banking.</p>
                                        <ul class="list-style-one clearfix">
                                            <li>Nécessité médicale</li>
                                            <li>Paiement flexible</li>
                                            <li>Assistance 24/7</li>
                                            <li>Support client</li>
                                            <li>Avantages supplémentaires</li>
                                        </ul>
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
                                        <p>Personnel de première ligne</p>
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
                                        <p>Véhicules spécialisés</p>
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
                                        <p>Patients servis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="faq-style-two pt_120 pb_120">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}'
                style="background-image: url('{{ asset('assets/images/background/faq-bg.jpg') }}');"></div>
            <div class="auto-container faq-style-two-auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title mb_50 light">
                                <span class="sub-title mb_12">FAQ Générales</span>
                                <h2>Question les plus fréquentes</h2>
                            </div>
                            <div class="support-box">
                                <div class="text-box">
                                    <h4>Vous avez d'autres questions ?</h4>
                                    <h2>Appelez-nous</h2>
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
                                            <h4>Comment puis-je me préparer à un entretien ?</h4>
                                            <div class="icon-box"><i class="icon-27"></i></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>Pour vous préparer à un entretien, recherchez l'entreprise, comprenez
                                                    le rôle et les responsabilités du poste, et préparez des questions à
                                                    poser à l'intervieweur.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <h4>Embaucher des infirmières et des candidats ?</h4>
                                            <div class="icon-box"><i class="icon-27"></i></div>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="text">
                                                <p>Pour vous préparer à un entretien, recherchez l'entreprise, comprenez
                                                    le rôle et les responsabilités du poste, et préparez des questions à
                                                    poser à l'intervieweur.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <h4>Clarifier les concepts de recrutement ?</h4>
                                            <div class="icon-box"><i class="icon-27"></i></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>Pour vous préparer à un entretien, recherchez l'entreprise, comprenez
                                                    le rôle et les responsabilités du poste, et préparez des questions à
                                                    poser à l'intervieweur.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <h4>Que recherchent les employeurs chez les candidats ?</h4>
                                            <div class="icon-box"><i class="icon-27"></i></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>Pour vous préparer à un entretien, recherchez l'entreprise, comprenez
                                                    le rôle et les responsabilités du poste, et préparez des questions à
                                                    poser à l'intervieweur.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <h4>Que recherchent les médecins chez les candidats ?</h4>
                                            <div class="icon-box"><i class="icon-27"></i></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>Pour vous préparer à un entretien, recherchez l'entreprise, comprenez
                                                    le rôle et les responsabilités du poste, et préparez des questions à
                                                    poser à l'intervieweur.</p>
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
        @include('shared.footer')

    </div>

    @include('shared.js')

</body>

</html>
