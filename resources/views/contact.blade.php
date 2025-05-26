<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Contact - {{ $settings->site_name ?? 'Amcare' }}</title>

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
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/page-title.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">

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
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title-4.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb">
                        <li><a href="/">Accueil</a></li>
                        <li>Nous contacter</li>
                    </ul>
                    <h1>Nous contacter</h1>
                </div>
            </div>
        </section>
        <section class="support-style-two p_0 centred">
            <div class="auto-container">
                <div class="inner-container pt_60 pb_60">
                    <div class="sec-title mb_50">
                        <span class="sub-title mb_12">Nous contacter</span>
                        <h2>Informations de contact</h2>
                    </div>
                    {{-- Dynamic Phone Numbers Section --}}
                    @php
                        $phoneCount = count($settings->phones);
                        $colLg = $phoneCount > 0 ? floor(12 / $phoneCount) : 12;
                        $colMd = $phoneCount > 1 ? floor(12 / min($phoneCount, 2)) : 12; // max 2 columns for md
                    @endphp
                    <section class="support-style-two centred pl_100 pr_100">
                        <div class="auto-container">
                            <div class="row clearfix">
                                @forelse($settings->phones as $key => $phone)
                                    <div
                                        class="col-lg-{{ $colLg }} col-md-{{ $colMd }} col-sm-12 single-column">
                                        <div class="single-item">
                                            <h5>{{ $key }}:</h5>
                                            <h2>
                                                <a
                                                    href="tel:{{ preg_replace('/[^0-9+]/', '', $phone) }}">{{ $phone }}</a>
                                            </h2>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12 text-center">
                                        <p>Aucun numéro de téléphone de support configuré.</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        @include('shared.footer')

    </div>


    @include('shared.js')

</body>

</html>
