<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $post->title }} - {{ $settings->site_name ?? 'Amcare' }}</title>

    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/elpath.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Module CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/banner.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/news.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/page-title.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/blog-sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/blog-details.css') }}">

    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">


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
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li>{{ $post->title }}</li>
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
                                        <figure class="image">
                                            @php
                                                $imagePath = $post->image;
                                                $imageUrl = null;
                                                $defaultImageUrl = asset('assets/images/news/news-16.jpg');

                                                if ($imagePath) {
                                                    if (
                                                        Illuminate\Support\Str::startsWith(
                                                            $imagePath,
                                                            'assets/seed_images/',
                                                        )
                                                    ) {
                                                        $imageUrl = asset($imagePath);
                                                    } else {
                                                        $imageUrl = Storage::url($imagePath);
                                                    }
                                                }
                                            @endphp
                                            <img src="{{ $imageUrl ?? $defaultImageUrl }}" alt="{{ $post->title }}">
                                        </figure>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-info">
                                            <li><span>{{ $post->category->name ?? 'Non catégorisé' }}</span></li>
                                            <li>{{ \Carbon\Carbon::parse($post->published_at)->format('d M Y') }}</li>
                                        </ul>
                                        <h2>{{ $post->title }}</h2>
                                        <div class="text-box">
                                            {!! $post->content !!} {{-- Use {!! !!} to render HTML content --}}

                                            {{-- If you have a quote in your blog post, you can extract it or add a specific field for it --}}
                                            {{-- <blockquote>
                                                <div class="icon-box"><i class="icon-52"></i></div>
                                                <p>"Some inspirational quote related to the blog post."</p>
                                                <h6>Author of the quote</h6>
                                            </blockquote> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Related Posts Section --}}
                            @if ($relatedPosts->isNotEmpty())
                                <div class="content-one">
                                    <h3>Articles Similaires</h3>
                                    <div class="row clearfix">
                                        @foreach ($relatedPosts as $relatedPost)
                                            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                                <div class="news-block-two">
                                                    <div class="inner-box">
                                                        @php
                                                            $imagePath = $relatedPost->image;
                                                            $imageUrl = null;
                                                            $defaultImageUrl = asset('assets/images/news/news-16.jpg');

                                                            if ($imagePath) {
                                                                if (
                                                                    Illuminate\Support\Str::startsWith(
                                                                        $imagePath,
                                                                        'assets/seed_images/',
                                                                    )
                                                                ) {
                                                                    $imageUrl = asset($imagePath);
                                                                } else {
                                                                    $imageUrl = Storage::url($imagePath);
                                                                }
                                                            }
                                                        @endphp
                                                        <div class="bg-layer"
                                                            style="background-image: url({{ $imageUrl ?? $defaultImageUrl }});">
                                                        </div>
                                                        <span class="post-date"><i
                                                                class="icon-29"></i>{{ \Carbon\Carbon::parse($relatedPost->published_at)->format('d M, Y') }}</span>
                                                        <h4><a
                                                                href="{{ route('post', $relatedPost->slug) }}">{{ $relatedPost->title }}</a>
                                                        </h4>
                                                        <ul class="post-info">
                                                            <li><i class="icon-30"></i><a href="#">Admin</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar ml_30">
                            {{-- <div class="sidebar-widget search-widget mb_55">
                                <div class="widget-title mb_25">
                                    <h3>Rechercher</h3>
                                </div>
                                <div class="search-form">
                                    <form action="{{ route('blog') }}" method="get" class="default-form">
                                        <div class="form-group">
                                            <input type="search" name="search" placeholder="Rechercher..." required>
                                            <button type="submit"><i class="icon-8"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                            <div class="sidebar-widget category-widget mb_45">
                                <div class="widget-title mb_20">
                                    <h3>Catégories</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="cagegory-list clearfix">
                                        @foreach ($categories as $category)
                                            <li><a>{{ $category->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget post-widget mb_55">
                                <div class="widget-title mb_25">
                                    <h3>Dernières Nouvelles</h3>
                                </div>
                                <div class="post-inner">
                                    @foreach ($latestPosts as $latestPost)
                                        @php
                                            $imagePath = $latestPost->image;
                                            $imageUrl = null;
                                            $defaultImageUrl = asset('assets/images/news/news-16.jpg');

                                            if ($imagePath) {
                                                if (
                                                    Illuminate\Support\Str::startsWith(
                                                        $imagePath,
                                                        'assets/seed_images/',
                                                    )
                                                ) {
                                                    $imageUrl = asset($imagePath);
                                                } else {
                                                    $imageUrl = Storage::url($imagePath);
                                                }
                                            }
                                        @endphp
                                        <div class="post">
                                            <figure class="post-thumb"><a
                                                    href="{{ route('post', $latestPost->slug) }}"><img
                                                        src="{{ $imageUrl ?? $defaultImageUrl }}"
                                                        alt=""></a></figure>
                                            <article>
                                                <h5><a
                                                        href="{{ route('post', $latestPost->slug) }}">{{ $latestPost->title }}</a>
                                                </h5>
                                                <span class="post-date"><i
                                                        class="icon-29"></i>{{ \Carbon\Carbon::parse($latestPost->published_at)->format('d M Y') }}</span>
                                            </article>
                                        </div>
                                    @endforeach
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

</body>

</html>
