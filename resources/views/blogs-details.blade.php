<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Blog details - Amcare</title>

    <link rel="icon" href="{{ Vite::asset('resources/assets/images/favicon.ico') }}" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
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
            <div class="bg-layer"
                style="background-image: url('{{ asset('assets/images/background/page-title-4.jpg') }}');"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb">
                        <li><a href="/">Accueil</a></li>
                        <li>Détails du Blog</li>
                    </ul>
                    <h1>Détails du Blog</h1>
                </div>
            </div>
        </section>
        <section class="sidebar-page-container pt_120 pb_60">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content p_relative">
                            <div class="news-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{ asset('assets/images/news/news-14.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-info">
                                            <li><span>Ambulance aérienne</span></li>
                                            <li>16 Mai 2024</li>
                                        </ul>
                                        <h2>Ambulance aérienne internationale Transport de patients longue distance Innovations en ambulance</h2>
                                        <div class="text-box">
                                            <p class="mb_30">Les services d'ambulance aérienne internationale ont révolutionné le transport de patients sur de longues distances, offrant des soins critiques pendant les vols à travers de vastes étendues et les frontières internationales. Ces services sont essentiels pour les patients nécessitant une attention médicale urgente ou des soins spécialisés non disponibles localement. Les ambulances aériennes sont équipées de technologies médicales avancées telles que des ventilateurs portables, des défibrillateurs et des unités de soins intensifs, garantissant que les patients reçoivent des soins continus de haut niveau tout au long du voyage.</p>
                                            <p class="mb_40">Les innovations dans ce domaine incluent des capacités de télémédecine améliorées, permettant aux équipes médicales au sol de fournir un soutien et des consultations en temps réel pendant les vols. De plus, les avancées dans la conception des aéronefs et l'équipement médical ont amélioré l'efficacité et la sécurité des opérations d'ambulance aérienne.</p>
                                            <blockquote>
                                                <div class="icon-box"><i class="icon-52"></i></div>
                                                <p>"Lorsque mon père est tombé gravement malade alors que nous étions en vacances à l'étranger, nous étions terrifiés. Le service d'ambulance aérienne internationale a été une bouée de sauvetage. L'équipe médicale était professionnelle"</p>
                                                <h6>Brooklyn Simmons</h6>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-one">
                                <h3>Dernières Nouvelles</h3>
                                <p class="mb_55">Les innovations dans ce domaine incluent des capacités de télémédecine améliorées, permettant aux équipes médicales au sol de fournir un soutien et des consultations en temps réel pendant les vols. De plus, les avancées dans la conception des aéronefs et l'équipement médical ont amélioré l'efficacité et la sécurité des opérations d'ambulance aérienne.</p>
                                <div class="video-content"
                                    style="background-image: url('{{ asset('assets/images/news/news-19.jpg') }}');">
                                    <div class="video-btn">
                                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&t=28s"
                                            class="lightbox-image" data-caption=""><i class="icon-49"></i><span
                                                class="border-animation"></span><span
                                                class="border-animation border-1"></span><span
                                                class="border-animation border-2"></span><span
                                                class="border-animation border-3"></span></a>
                                    </div>
                                </div>
                                <p class="mt_55">Ces services sont essentiels pour les patients nécessitant une attention médicale urgente ou des soins spécialisés non disponibles localement. Les ambulances aériennes sont équipées de technologies médicales avancées telles que des ventilateurs portables, des défibrillateurs, des unités de soins intensifs, garantissant que les patients reçoivent des soins continus de haut niveau tout au long du voyage. Les innovations dans ce domaine incluent des capacités de télémédecine améliorées, permettant aux équipes médicales au sol de fournir un soutien et des consultations en temps réel pendant les vols. De plus, les avancées dans la conception des aéronefs et l'équipement médical ont amélioré l'efficacité et la sécurité des opérations d'ambulance aérienne.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar ml_30">
                            <div class="sidebar-widget search-widget mb_55">
                                <div class="widget-title mb_25">
                                    <h3>Rechercher</h3>
                                </div>
                                <div class="search-form">
                                    <form action="https://azim.hostlin.com/Amcare/blog-details.html" method="get"
                                        class="default-form">
                                        <div class="form-group">
                                            <input type="search" name="search-field" placeholder="Rechercher..."
                                                required>
                                            <button type="submit"><i class="icon-8"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget category-widget mb_45">
                                <div class="widget-title mb_20">
                                    <h3>Catégories</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="cagegory-list clearfix">
                                        <li><a href="blog-details.html">Ambulance d'urgence</a></li>
                                        <li><a href="blog-details.html">Ambulance aérienne</a></li>
                                        <li><a href="blog-details.html">Transport d'urgence</a></li>
                                        <li><a href="blog-details.html">Ambulance aérienne</a></li>
                                        <li><a href="blog-details.html">Services d'ambulance</a></li>
                                        <li><a href="blog-details.html">Néonatal et Pédiatrique</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget post-widget mb_55">
                                <div class="widget-title mb_25">
                                    <h3>Dernières Nouvelles</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img
                                                    src="{{ asset('assets/images/news/post-1.jpg') }}"
                                                    alt=""></a></figure>
                                        <article>
                                            <h5><a href="blog-details.html">Ambulance aérienne internationale Longue</a></h5>
                                            <span class="post-date"><i class="icon-29"></i>20 Août 2024</span>
                                        </article>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img
                                                    src="{{ asset('assets/images/news/post-2.jpg') }}"
                                                    alt=""></a></figure>
                                        <article>
                                            <h5><a href="blog-details.html">Soins de santé mentale après un événement médical</a></h5>
                                            <span class="post-date"><i class="icon-29"></i>19 Août 2024</span>
                                        </article>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img
                                                    src="{{ asset('assets/images/news/post-3.jpg') }}"
                                                    alt=""></a></figure>
                                        <article>
                                            <h5><a href="blog-details.html">Transformer le transport d'organes</a></h5>
                                            <span class="post-date"><i class="icon-29"></i>18 Août 2024</span>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget gallery-widget mb_45">
                                <div class="widget-title mb_25">
                                    <h3>Galerie de Photos</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="image-list clearfix">
                                        <li>
                                            <figure class="image"><a href="" class="lightbox-image"
                                                    data-fancybox="gallery"><img
                                                        src="{{ asset('assets/images/news/gallery-1.jpg') }}"
                                                        alt=""></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="assets/images/news/gallery-2.jpg"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="{{ asset('assets/images/news/gallery-2.jpg') }}"
                                                        alt=""></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="assets/images/news/gallery-3.jpg"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="{{ asset('assets/images/news/gallery-3.jpg') }}"
                                                        alt=""></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="assets/images/news/gallery-4.jpg"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="{{ asset('assets/images/news/gallery-4.jpg') }}"
                                                        alt=""></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="assets/images/news/gallery-5.jpg"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="{{ asset('assets/images/news/gallery-5.jpg') }}"
                                                        alt=""></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="assets/images/news/gallery-6.jpg"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="{{ asset('assets/images/news/gallery-6.jpg') }}"
                                                        alt=""></a>
                                            </figure>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget archive-widget mb_45">
                                <div class="widget-title mb_20">
                                    <h3>Archives</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="archive-list clearfix">
                                        <li><a href="blog-details.html">Janvier, 2023</a></li>
                                        <li><a href="blog-details.html">Février, 2023</a></li>
                                        <li><a href="blog-details.html">Mars, 2023</a></li>
                                        <li><a href="blog-details.html">Avril, 2023</a></li>
                                        <li><a href="blog-details.html">Juin, 2023</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget tags-widget">
                                <div class="widget-title mb_20">
                                    <h3>Tags Populaires</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="tags-list clearfix">
                                        <li><a href="blog-details.html">Ambulance aérienne</a></li>
                                        <li><a href="blog-details.html">USI d'urgence</a></li>
                                        <li><a href="blog-details.html">Yachts avec équipage</a></li>
                                        <li><a href="blog-details.html">Ambulance</a></li>
                                        <li><a href="blog-details.html">Ambulance d'urgence</a></li>
                                    </ul>
                                </div>
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