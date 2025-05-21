<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Événements - Amcare</title>

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
    @vite('resources/css/module-css/page-title.css')
    @vite('resources/css/module-css/subscribe.css')
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


        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb">
                        <li><a href="/">Accueil</a></li>
                        <li>Événements</li>
                    </ul>
                    <h1>Événements</h1>
                </div>
            </div>
        </section>
        <section class="event-section pt_120 pb_90 centred p_relative">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-8.png);"></div>
            <div class="auto-container">
                <div class="sec-title mb_50">
                    <span class="sub-title mb_12">Événements</span>
                    <h2>Assurer la sécurité des spectateurs</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 event-block">
                        <div class="event-block-one">
                            <div class="inner-box">
                                <h3><a href="event-details.html">Événements sportifs</a></h3>
                                <p>Équipe médicale sur place prête à fournir une attention médicale complète pour les concurrents, les spectateurs et l'événement</p>
                                <div class="btn-box"><a href="{{ url('events/1') }}" class="theme-btn btn-one">En savoir plus</a></div>
                                <figure class="image-box"><img src="assets/images/resource/event-1.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 event-block">
                        <div class="event-block-one">
                            <div class="inner-box">
                                <h3><a href="event-details.html">Événements communautaires</a></h3>
                                <p>Trouver des personnes qui partagent les valeurs et la vision de votre entreprise peut contribuer à une cohésion</p>
                                <div class="btn-box"><a href="{{ url('events/1') }}" class="theme-btn btn-one">En savoir plus</a></div>
                                <figure class="image-box"><img src="assets/images/resource/event-2.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('shared.footer')

    </div>


    @include('shared.js')

</body></html>