<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Blog - {{ $settings->site_name ?? 'Amcare' }}</title>

    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
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
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/cta.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/page-title.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/blog-sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/subscribe.css') }}">

    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <div class="boxed_wrapper ltr">
        @include('shared.header')
        <section class="page-title centred">
            <div class="bg-layer"></div>
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
        <section class="sidebar-page-container pt_60 pb_60">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-grid-content p_relative">
                            <div class="row clearfix">
                                @forelse($posts as $post)
                                    @php
                                        $imagePath = $post->image;
                                        $imageUrl = null;
                                        $defaultImageUrl = asset('assets/images/resource/event-1.jpg');

                                        if ($imagePath) {
                                            if (Illuminate\Support\Str::startsWith($imagePath, 'assets/seed_images/')) {
                                                $imageUrl = asset($imagePath);
                                            } else {
                                                $imageUrl = Storage::url($imagePath);
                                            }
                                        }
                                    @endphp
                                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                        <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms"
                                            data-wow-duration="1500ms">
                                            <div class="inner-box">
                                                <div class="bg-layer"
                                                    style="background-image: url({{ $imageUrl ?? $defaultImageUrl }});">
                                                </div>
                                                <h4><a
                                                        href="{{ route('post', $post->slug) }}">{{ Str::limit(strip_tags($post->title), 60) }}</a>
                                                </h4>
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
                                {{ $posts->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar ml_30">
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
                                            $defaultImageUrl = asset('assets/images/resource/event-1.jpg');

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
                                                        src="{{ $imageUrl ?? $defaultImageUrl }}" alt=""></a>
                                            </figure>
                                            <article>
                                                <h5><a
                                                        href="{{ route('post', $latestPost->slug) }}">{{ $latestPost->title }}</a>
                                                </h5>
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
