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

        {{-- <section class="page-title centred">
            <div class="bg-layer" style="background-image: url({{ asset('assets/images/background/page-title-4.jpg') }});"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb">
                        <li><a href="/">Accueil</a></li>
                        <li>Blog</li>
                    </ul>
                    <h1>Blog</h1>
                </div>
            </div>
        </section> --}}
        <section class="sidebar-page-container pt_120 pb_120">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-grid-content p_relative">
                            <div class="row clearfix">
                                @forelse($posts as $post)
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms"
                                        data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="bg-layer"
                                                style="background-image: url({{ $post->image ? Storage::url($post->image) : asset('assets/images/news/default-blog.jpg') }});"></div>
                                            <span class="post-date"><i class="icon-29"></i>{{ \Carbon\Carbon::parse($post->published_at)->format('d M, Y') }}</span>
                                            <h4><a href="{{ route('post', $post->slug) }}">{{ $post->title }}</a></h4>
                                            <ul class="post-info">
                                                <li><i class="icon-30"></i><a href="#">Admin</a></li>
                                                {{-- Assuming comments are not dynamic yet, keeping static or removing --}}
                                                <li><i class="icon-31"></i><span>0 Commentaire</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-lg-12">
                                    <p>Aucun article de blog trouvé pour le moment.</p>
                                </div>
                                @endforelse
                            </div>
                            <div class="pagination-wrapper pt_30">
                                {{ $posts->links('pagination::bootstrap-5') }}
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
                                    <form action="{{ route('blog') }}" method="get" class="default-form">
                                        <div class="form-group">
                                            <input type="search" name="search" placeholder="Rechercher..."
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
                                        @foreach($categories as $category)
                                            <li><a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget post-widget mb_55">
                                <div class="widget-title mb_25">
                                    <h3>Dernières Nouvelles</h3>
                                </div>
                                <div class="post-inner">
                                    @foreach($latestPosts as $latestPost)
                                    <div class="post">
                                        <figure class="post-thumb"><a href="{{ route('post', $latestPost->slug) }}"><img
                                                    src="{{ $latestPost->image ? Storage::url($latestPost->image) : asset('assets/images/news/post-default.jpg') }}"
                                                    alt=""></a></figure>
                                        <article>
                                            <h5><a href="{{ route('post', $latestPost->slug) }}">{{ $latestPost->title }}</a></h5>
                                            <span class="post-date"><i class="icon-29"></i>{{ \Carbon\Carbon::parse($latestPost->published_at)->format('d M Y') }}</span>
                                        </article>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="sidebar-widget gallery-widget mb_45">
                                <div class="widget-title mb_25">
                                    <h3>Galerie de Photos</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="image-list clearfix">
                                        <li>
                                            <figure class="image"><a href="{{ asset('assets/images/news/gallery-1.jpg') }}"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="{{ asset('assets/images/news/gallery-1.jpg') }}" alt=""></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="{{ asset('assets/images/news/gallery-2.jpg') }}"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="{{ asset('assets/images/news/gallery-2.jpg') }}" alt=""></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="{{ asset('assets/images/news/gallery-3.jpg') }}"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="{{ asset('assets/images/news/gallery-3.jpg') }}" alt=""></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="{{ asset('assets/images/news/gallery-4.jpg') }}"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="{{ asset('assets/images/news/gallery-4.jpg') }}" alt=""></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="{{ asset('assets/images/news/gallery-5.jpg') }}"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="{{ asset('assets/images/news/gallery-5.jpg') }}" alt=""></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image"><a href="{{ asset('assets/images/news/gallery-6.jpg') }}"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="{{ asset('assets/images/news/gallery-6.jpg') }}" alt=""></a>
                                            </figure>
                                        </li>
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
