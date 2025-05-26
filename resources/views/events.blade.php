<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Événements - {{ $settings->site_name ?? 'Amcare' }}</title>

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
            <div class="bg-layer"
                style="background-image: url({{ asset('assets/images/background/page-title.jpg') }});"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb">
                        <li><a href="/">Accueil</a></li>
                        <li>Événements</li>
                    </ul>
                    <h1>Événements</h1>
                </div>
            </div>
        </section>
        <section class="event-section pt_60 pb_90 centred p_relative">
            <div class="pattern-layer" style="background-image: url({{ asset('assets/images/shape/shape-8.png') }});">
            </div>
            <div class="auto-container">
                <div class="sec-title mb_50">
                    <span class="sub-title mb_12">Événements</span>
                    <h2>Assurer la sécurité des spectateurs</h2>
                </div>
                <div class="row clearfix">
                    @forelse($events as $event)
                        <div class="col-lg-6 col-md-6 col-sm-12 event-block">
                            <div class="event-block-one">
                                <div class="inner-box">
                                    <h3><a href="{{ route('event', $event->slug) }}">{{ $event->title }}</a></h3>
                                    {!! $event->content !!}
                                    <div class="btn-box"><a href="{{ route('event', $event->slug) }}"
                                            class="theme-btn btn-one">En
                                            savoir plus</a>
                                    </div>
                                    <figure class="image-box">
                                        <img src="{{ $event->image ? Storage::url($event->image) : asset('assets/images/resource/default-event.jpg') }}"
                                            alt="{{ $event->title }}">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12">
                            <p>Aucun événement à venir pour le moment.</p>
                        </div>
                    @endforelse
                </div>
                <div class="pagination-wrapper pt_30">
                    {{ $events->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </section>
        @include('shared.footer')

    </div>


    @include('shared.js')

</body>

</html>
