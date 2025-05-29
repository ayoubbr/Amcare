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
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Module CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/page-title.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/chooseus.css') }}">

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
                        <li>Qui sommes-nous</li>
                    </ul>
                    <h1>Qui sommes-nous</h1>
                </div>
            </div>
        </section>
        <section class="about-style-three pt_60 pb_100">
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
                                    @php
                                        $imagePath = $page->image;
                                        $imageUrl = null;
                                        $defaultImageUrl = asset('assets/images/resource/about-1.jpg');

                                        if ($imagePath) {
                                            if (Illuminate\Support\Str::startsWith($imagePath, 'assets/seed_images/')) {
                                                $imageUrl = asset($imagePath);
                                            } else {
                                                $imageUrl = Storage::url($imagePath);
                                            }
                                        }
                                    @endphp
                                    <img src="{{ $imageUrl ?? $defaultImageUrl }}"
                                        alt="{{ $page->title ?? 'À propos de nous' }}">
                                </figure>
                                <figure class="image image-2">
                                    <img src="{{ asset('assets/images/resource/about-4.jpg') }}"
                                        alt="Image décorative">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="chooseus-section centred pt_120 pb_90">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}'
                style="background-image: url({{ asset('assets/images/background/chooseus-bg.jpg') }});">
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
                                    <div class="choose-img-box">
                                        @php
                                            $imagePath = $item->image;
                                            $imageUrl = null;
                                            $defaultImageUrl = asset('assets/images/logo.png');

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
                                        <img src="{{ $imageUrl ?? $defaultImageUrl }}" alt="">
                                    </div>
                                    <h3><a href="#">{{ $item->title }}</a></h3>
                                    {!! $item->content !!}
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </section>
        @include('shared.footer')
    </div>
    @include('shared.js')
</body>

</html>
