<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $page->meta_title ?? ($settings->site_name ?? 'Amcare') . ' - À Propos' }} -
        {{ $settings->site_name ?? 'Amcare' }}</title>
    @if (isset($page) && $page->meta_description)
        <meta name="description" content="{{ $page->meta_description }}">
    @endif

    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
        rel="stylesheet">

    @vite([
        'resources/css/font-awesome-all.css',
        'resources/css/owl.css',
        'resources/css/flaticon.css',
        'resources/css/bootstrap.css',
        'resources/css/jquery.fancybox.min.css',
        'resources/css/animate.css',
        'resources/css/nice-select.css',
        'resources/css/odometer.css',
        'resources/css/elpath.css',
        'resources/css/color.css',
        'resources/css/style.css',
        'resources/css/module-css/header.css',
        'resources/css/module-css/footer.css',
        'resources/css/module-css/page-title.css',
        'resources/css/module-css/about.css',
        'resources/css/module-css/chooseus.css', //
        'resources/css/responsive.css',
    ])

</head>


<body>

    <div class="boxed_wrapper ltr">

        <div class="loader-wrap">
            <div class="preloader">
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="a" class="letters-loading">a</span>
                            <span data-text-preloader="m" class="letters-loading">m</span>
                            <span data-text-preloader="c" class="letters-loading">c</span>
                            <span data-text-preloader="a" class="letters-loading">a</span>
                            <span data-text-preloader="r" class="letters-loading">r</span>
                            <span data-text-preloader="e" class="letters-loading">e</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('shared.header')

        <section class="about-style-three pt_120 pb_120">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_four">
                            <div class="content-box">
                                <div class="sec-title mb_30">
                                    <span class="sub-title mb_12">Qui sommes-nous</span>
                                    <h2 class="about-h2">
                                        {{ $page->main_title ?? 'Excellence dans les services médicaux d\'urgence' }}
                                    </h2>
                                    @if (isset($page) && $page->content)
                                        {!! $page->content !!}
                                    @else
                                        <p>Chez Amcare, nous sommes fiers d'offrir l'excellence dans les services
                                            médicaux d'urgence. Notre équipe de professionnels hautement qualifiés et
                                            expérimentés.</p>
                                    @endif
                                </div>
                                @if (isset($page) && !empty($page->description) && is_array($page->description))
                                    <ul class="list-style-one mb_30 clearfix">
                                        @foreach ($page->description as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    {{-- Fallback static list if dynamic data is not available --}}
                                    <ul class="list-style-one mb_30 clearfix">
                                        <li>Les équipes inclusives prennent en compte un plus large éventail de points
                                            de vue</li>
                                        <li>Démontrer un engagement envers la diversité et l'inclusion améliore</li>
                                        <li>Adopter la diversité est conforme aux normes légales et éthiques</li>
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_four">
                            <div class="image-box pl_150 pb_100">
                                <figure class="image image-1">
                                    <img src="{{ $page && $page->image ? Storage::url($page->image) : Vite::asset('resources/assets/images/resource/about-3.jpg') }}"
                                        alt="{{ $page->title ?? 'À propos de nous' }}">
                                </figure>
                                <figure class="image image-2">
                                    <img src="{{ Vite::asset('resources/assets/images/resource/about-4.jpg') }}"
                                        alt="Image décorative">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- "Why Choose Us" section - This could be static or managed as a separate content block/model if it needs to be dynamic --}}
        <section class="chooseus-section centred pt_120 pb_90">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}'
                style="background-image: url({{ Vite::asset('resources/assets/images/background/chooseus-bg.jpg') }});">
            </div>
            <div class="auto-container">
                <div class="sec-title centred light mb_50">
                    <span class="sub-title mb_12">Caractéristiques</span>
                    <h2>Pourquoi nous choisir</h2>
                </div>
                <div class="row clearfix">
                    @forelse ($characteristics as $item)
                        <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    {{-- <div class="icon-box"> --}}
                                    <div class="choose-img-box">
                                        <img src="{{ Storage::url($item->image) }}" alt="">
                                    </div>
                                    {{-- </div> --}}
                                    <h3><a href="#">{{ $item->title }}</a></h3>
                                    {!! $item->content !!}
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse

                    {{-- <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-13"></i></div>
                                <h3><a href="#">Service sur demande</a></h3>
                                <p>Les services de transport sécurisé d'Amcare jouent un rôle essentiel dans le système
                                    de santé, en fournissant un transport sûr et fiable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-14"></i></div>
                                <h3><a href="#">Transport d'urgence</a></h3>
                                <p>Les services de transport sécurisé d'Amcare jouent un rôle essentiel dans le système
                                    de santé, en fournissant un transport sûr et fiable.</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        @include('shared.footer')

    </div>

    @include('shared.js')

</body>

</html>
