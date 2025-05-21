<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Blog - Amcare</title>

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
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title-4.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb">
                        <li><a href="/">Accueil</a></li>
                        <li>Blog</li>
                    </ul>
                    <h1>Blog</h1>
                </div>
            </div>
        </section>
        <section class="sidebar-page-container pt_120 pb_120">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-grid-content p_relative">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated animated" data-wow-delay="00ms"
                                        data-wow-duration="1500ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                        <div class="inner-box">
                                            <div class="bg-layer"
                                                style="background-image: url(assets/images/news/news-4.jpg);"></div>
                                            <span class="post-date"><i class="icon-29"></i>19 Avr, 2025</span>
                                            <h4><a href="{{ url('blogs/1') }}">Visites autoguidées et promenades dans la Grande Ville</a></h4>
                                            <ul class="post-info">
                                                <li><i class="icon-30"></i><a href="blog-details.html">Admin</a></li>
                                                <li><i class="icon-31"></i><span>0 Commentaire</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated animated" data-wow-delay="300ms"
                                        data-wow-duration="1500ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                                        <div class="inner-box">
                                            <div class="bg-layer"
                                                style="background-image: url(assets/images/news/news-5.jpg);"></div>
                                            <span class="post-date"><i class="icon-29"></i>18 Avr, 2025</span>
                                            <h4><a href="{{ url('blogs/2') }}">Assistance pour les maisons et les propriétés immobilières</a></h4>
                                            <ul class="post-info">
                                                <li><i class="icon-30"></i><a href="blog-details.html">Admin</a></li>
                                                <li><i class="icon-31"></i><span>6 Commentaires</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated animated" data-wow-delay="600ms"
                                        data-wow-duration="1500ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                                        <div class="inner-box">
                                            <div class="bg-layer"
                                                style="background-image: url(assets/images/news/news-6.jpg);"></div>
                                            <span class="post-date"><i class="icon-29"></i>Apr 17, 2025</span>
                                            <h4><a href="blog-details.html">Long-Term Vision Of Health &amp; Attractive
                                                    Facility</a></h4>
                                            <ul class="post-info">
                                                <li><i class="icon-30"></i><a href="blog-details.html">Admin</a></li>
                                                <li><i class="icon-31"></i><span>2 Comment</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated animated" data-wow-delay="600ms"
                                        data-wow-duration="1500ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                                        <div class="inner-box">
                                            <div class="bg-layer"
                                                style="background-image: url(assets/images/news/news-7.jpg);"></div>
                                            <span class="post-date"><i class="icon-29"></i>Apr 16, 2025</span>
                                            <h4><a href="blog-details.html">Repatriation Stories Spain Ireland with a
                                                    medical escort</a></h4>
                                            <ul class="post-info">
                                                <li><i class="icon-30"></i><a href="blog-details.html">Admin</a></li>
                                                <li><i class="icon-31"></i><span>3 Comment</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated animated" data-wow-delay="600ms"
                                        data-wow-duration="1500ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                                        <div class="inner-box">
                                            <div class="bg-layer"
                                                style="background-image: url(assets/images/news/news-8.jpg);"></div>
                                            <span class="post-date"><i class="icon-29"></i>Apr 15, 2025</span>
                                            <h4><a href="blog-details.html">Emergency Ambulance Service Ambulance
                                                    services play</a></h4>
                                            <ul class="post-info">
                                                <li><i class="icon-30"></i><a href="blog-details.html">Admin</a></li>
                                                <li><i class="icon-31"></i><span>5 Comment</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated animated" data-wow-delay="600ms"
                                        data-wow-duration="1500ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                                        <div class="inner-box">
                                            <div class="bg-layer"
                                                style="background-image: url(assets/images/news/news-9.jpg);"></div>
                                            <span class="post-date"><i class="icon-29"></i>Apr 14, 2025</span>
                                            <h4><a href="blog-details.html">In the realm of the medical 24/7
                                                    emergencies counts</a></h4>
                                            <ul class="post-info">
                                                <li><i class="icon-30"></i><a href="blog-details.html">Admin</a></li>
                                                <li><i class="icon-31"></i><span>4 Comment</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated animated" data-wow-delay="600ms"
                                        data-wow-duration="1500ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                                        <div class="inner-box">
                                            <div class="bg-layer"
                                                style="background-image: url(assets/images/news/news-10.jpg);"></div>
                                            <span class="post-date"><i class="icon-29"></i>Apr 13, 2025</span>
                                            <h4><a href="blog-details.html">Emergency medical repatriation when time is
                                                    of the essence</a></h4>
                                            <ul class="post-info">
                                                <li><i class="icon-30"></i><a href="blog-details.html">Admin</a></li>
                                                <li><i class="icon-31"></i><span>9 Comment</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated animated" data-wow-delay="600ms"
                                        data-wow-duration="1500ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                                        <div class="inner-box">
                                            <div class="bg-layer"
                                                style="background-image: url(assets/images/news/news-11.jpg);"></div>
                                            <span class="post-date"><i class="icon-29"></i>Apr 12, 2025</span>
                                            <h4><a href="blog-details.html">Mental health care after a medical
                                                    emergency abroad</a></h4>
                                            <ul class="post-info">
                                                <li><i class="icon-30"></i><a href="blog-details.html">Admin</a></li>
                                                <li><i class="icon-31"></i><span>0 Comment</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated animated" data-wow-delay="600ms"
                                        data-wow-duration="1500ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                                        <div class="inner-box">
                                            <div class="bg-layer"
                                                style="background-image: url(assets/images/news/news-12.jpg);"></div>
                                            <span class="post-date"><i class="icon-29"></i>Apr 11, 2025</span>
                                            <h4><a href="blog-details.html">International patient transport via Air
                                                    Ambulance explained</a></h4>
                                            <ul class="post-info">
                                                <li><i class="icon-30"></i><a href="blog-details.html">Admin</a></li>
                                                <li><i class="icon-31"></i><span>11 Comment</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated animated" data-wow-delay="600ms"
                                        data-wow-duration="1500ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                                        <div class="inner-box">
                                            <div class="bg-layer"
                                                style="background-image: url(assets/images/news/news-13.jpg);"></div>
                                            <span class="post-date"><i class="icon-29"></i>Apr 10, 2025</span>
                                            <h4><a href="blog-details.html">International air ambulance Long distance
                                                    patient transport</a></h4>
                                            <ul class="post-info">
                                                <li><i class="icon-30"></i><a href="blog-details.html">Admin</a></li>
                                                <li><i class="icon-31"></i><span>2 Comment</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="pagination-wrapper pt_30">
                                <ul class="pagination">
                                    <li><a href="blog-2.html"><i class="icon-50"></i></a></li>
                                    <li><a href="blog-2.html" class="current">1</a></li>
                                    <li><a href="blog-2.html">2</a></li>
                                    <li><a href="blog-2.html">3</a></li>
                                    <li><a href="blog-2.html"><i class="icon-51"></i></a></li>
                                </ul>
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
                                    <form action="" method="get" class="default-form">
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
                                        <li><a href="{{ url('categories/1/blogs') }}">Ambulance d'urgence</a></li>
                                        <li><a href="{{ url('categories/2/blogs') }}">Ambulance aérienne</a></li>
                                        <li><a href="{{ url('categories/3/blogs') }}">Transport d'urgence</a></li>
                                        <li><a href="{{ url('categories/4/blogs') }}">Ambulance aérienne</a></li>
                                        <li><a href="{{ url('categories/5/blogs') }}">Services d'ambulance</a></li>
                                        <li><a href="{{ url('categories/6/blogs') }}">Néonatal et Pédiatrique</a></li>
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
                                                    src="assets/images/news/post-2.jpg" alt=""></a></figure>
                                        <article>
                                            <h5><a href="blog-details.html">Soins de santé mentale après un événement médical</a></h5>
                                            <span class="post-date"><i class="icon-29"></i>19 Août 2024</span>
                                        </article>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img
                                                    src="assets/images/news/post-3.jpg" alt=""></a></figure>
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
                                            <figure class="image"><a href="assets/images/news/gallery-1.jpg"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="assets/images/news/gallery-1.jpg" alt=""></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="assets/images/news/gallery-2.jpg"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="assets/images/news/gallery-2.jpg" alt=""></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="assets/images/news/gallery-3.jpg"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="assets/images/news/gallery-3.jpg" alt=""></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="assets/images/news/gallery-4.jpg"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="assets/images/news/gallery-4.jpg" alt=""></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="assets/images/news/gallery-5.jpg"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="assets/images/news/gallery-5.jpg" alt=""></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="assets/images/news/gallery-6.jpg"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="assets/images/news/gallery-6.jpg" alt=""></a>
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