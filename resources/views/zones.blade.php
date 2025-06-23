<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Zones de service - {{ $settings->site_name ?? 'Amcare' }}</title>

    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
        rel="stylesheet">

    <link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/odometer.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/elpath.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/module-css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/page-title.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/service.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/subscribe.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
</head>

<body>
    <div class="boxed_wrapper">
        @include('shared.header')
        <section class="page-title centred">
            <div class="bg-layer"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li>Zones de service</li>
                    </ul>
                    <h1>Nos Zones de Service</h1>
                </div>
            </div>
        </section>
        <section class="sevice-area centred pt_120 pb_90">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-14.png);"></div>
            <div class="auto-container">
                <div class="row clearfix contact-row">
                    @forelse($zones as $zone)
                        @php
                            $imagePath = $zone->image;
                            $imageUrl = null;
                            $defaultImageUrl = asset('assets/images/sliderImage/sliderImage-1.jpg');

                            if ($imagePath) {
                                if (Illuminate\Support\Str::startsWith($imagePath, 'assets/seed_images/')) {
                                    $imageUrl = asset($imagePath);
                                } else {
                                    $imageUrl = Storage::url($imagePath);
                                }
                            }
                        @endphp
                        <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <figure class="image-box"><img src="{{ $imageUrl ?? $defaultImageUrl }}"
                                        alt="{{ $zone->name }}"></figure>
                                <h4><a>{{ $zone->name }}</a></h4>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>Aucune zone de service n'est disponible pour le moment.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
        @include('shared.footer')
    </div>
    @include('shared.js')
</body>

</html>
