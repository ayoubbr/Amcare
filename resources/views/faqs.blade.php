<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>FAQ - {{ $settings->site_name ?? 'Amcare' }}</title>

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
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/page-title.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body class="ltr">
    <div class="boxed_wrapper">
        @include('shared.header')

        <section class="page-title centred">
            <div class="bg-layer">
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb">
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li>FAQ</li>
                    </ul>
                    <h1>FAQ</h1>
                </div>
            </div>
        </section>

        <section class="faq-section pt_60 pb_80 z_1">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_two">
                            <div class="image-box">
                                <div class="image-shape">
                                    <div class="shape-1"
                                        style="background-image: url({{ asset('assets/images/shape/shape-2.png') }});">
                                    </div>
                                    <div class="shape-2"
                                        style="background-image: url({{ asset('assets/images/shape/shape-2.png') }});">
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-image">
                                        <figure class="image image-hov-one mt_100"><img
                                                src="{{ asset('assets/images/resource/faq-1.jpg') }}"
                                                alt="FAQ Image 1"></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-image">
                                        <figure class="image image-hov-two mb_30"><img
                                                src="{{ asset('assets/images/resource/faq-2.jpg') }}"
                                                alt="FAQ Image 2"></figure>
                                        <div class="experience-box">
                                            <div class="year-box">
                                                <div class="inner">
                                                    <h2>{{ $expYears['value'] }}</h2>
                                                    <h5>Ans</h5>
                                                </div>
                                            </div>
                                            <h4>{{ $expYears['label'] }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_two">
                            <div class="content-box ml_60">
                                <div class="sec-title mb_25">
                                    <span class="sub-title mb_12">FAQ Générales</span>
                                    <h2>Toutes vos questions à la réalité.</h2>
                                </div>
                                @if (isset($faqs) && $faqs->count() > 0)
                                    <ul class="accordion-box">
                                        @foreach ($faqs as $index => $faq)
                                            <li class="accordion block {{ $index == 0 ? 'active-block' : '' }}">
                                                <div class="acc-btn {{ $index == 0 ? 'active' : '' }}">
                                                    <h4>{{ $faq->question }}</h4>
                                                    <div class="icon-box"><i class="icon-16"></i></div>
                                                </div>
                                                <div class="acc-content {{ $index == 0 ? 'current' : '' }}">
                                                    <div class="text">
                                                        <p>{!! nl2br(e($faq->answer)) !!}</p> {{-- Using nl2br(e()) to preserve line breaks and escape HTML --}}
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>Aucune FAQ disponible pour le moment. Veuillez consulter ultérieurement.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-wrapper pt_30">
                    {{ $faqs->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </section>


        @include('shared.footer')

    </div>
    @include('shared.js')
</body>

</html>
