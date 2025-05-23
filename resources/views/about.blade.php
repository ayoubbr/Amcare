<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>À Propos - Amcare</title>

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
    @vite('resources/css/module-css/blog-sidebar.css')
    @vite('resources/css/module-css/subscribe.css')
    @vite('resources/css/module-css/blog-details.css')
    @vite('resources/css/module-css/about.css')
    @vite('resources/css/module-css/chooseus.css')
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


        {{-- <section class="page-title centred">
            <div class="bg-layer blue-mask" style="background-image: url(assets/images/background/page-title-3.jpg);">
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb">
                        <li><a href="index.html">Accueil</a></li>
                        <li>À propos de nous</li>
                    </ul>
                    <h1>À propos de nous</h1>
                </div>
            </div>
        </section> --}}
        <section class="about-style-three pt_120 pb_120">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_four">
                            <div class="content-box">
                                <div class="sec-title mb_30">
                                    <span class="sub-title mb_12">Qui sommes-nous</span>
                                    <h2>Excellence dans les services médicaux d'urgence</h2>
                                    <p>Chez Amcare, nous sommes fiers d'offrir l'excellence dans les services médicaux d'urgence. Notre équipe de professionnels hautement qualifiés et expérimentés</p>
                                </div>
                                <ul class="list-style-one mb_30 clearfix">
                                    <li>Les équipes inclusives prennent en compte un plus large éventail de points de vue</li>
                                    <li>Démontrer un engagement envers la diversité et l'inclusion améliore</li>
                                    <li>Adopter la diversité est conforme aux normes légales et éthiques</li>
                                </ul>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="chooseus-section centred pt_120 pb_90">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}'
                style="background-image: url(assets/images/background/chooseus-bg.jpg);"></div>
            <div class="auto-container">
                <div class="sec-title centred light mb_50">
                    <span class="sub-title mb_12">Caractéristiques</span>
                    <h2>Pourquoi nous choisir</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-12"></i></div>
                                <h3><a href="index.html">Transport sécurisé</a></h3>
                                <p>Les services de transport sécurisé d'Amcare jouent un rôle essentiel dans le système de santé, en fournissant un transport sûr et fiable</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-13"></i></div>
                                <h3><a href="index.html">Service sur demande</a></h3>
                                <p>Les services de transport sécurisé d'Amcare jouent un rôle essentiel dans le système de santé, en fournissant un transport sûr et fiable</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-14"></i></div>
                                <h3><a href="index.html">Transport d'urgence</a></h3>
                                <p>Les services de transport sécurisé d'Amcare jouent un rôle essentiel dans le système de santé, en fournissant un transport sûr et fiable</p>
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