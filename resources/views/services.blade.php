<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Services - {{ $settings->site_name ?? 'Amcare' }}</title>

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
    @vite('resources/css/responsive.css')
    @vite('resources/css/module-css/page-title.css')
    @vite('resources/css/module-css/subscribe.css')

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
            <div class="bg-layer" style="background-image: url({{ asset('assets/images/background/page-title.jpg') }});"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb">
                        <li><a href="/">Accueil</a></li>
                        <li>Services</li>
                    </ul>
                    <h1>Nos services</h1>
                </div>
            </div>
        </section> --}}
        <section class="service-section pt_80 ">
            <div class="auto-container">
                <div class="sec-title mb_50 centred">
                    <span class="sub-title mb_12">Nos services</span>
                    <h2>Services d'ambulance experts</h2>
                </div>
                <div class="tabs-box">
                    <div class="tab-btn-box">
                        <div class="tab-btns tab-buttons clearfix">
                            @foreach ($services as $index => $service)
                                <div class="tab-btn {{ $index === 0 ? 'active-btn' : '' }}"
                                    data-tab="#tab-{{ $service->id }}">
                                    {{ $service->title }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tabs-content">
                        <div class="shape"
                            style="background-image: url({{ asset('assets/images/shape/shape-1.png') }});"></div>
                        @foreach ($services as $index => $service)
                            <div class="tab {{ $index === 0 ? 'active-tab' : '' }}" id="tab-{{ $service->id }}">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                        <div class="content-box">
                                            <h2>{{ $service->title }}</h2>
                                            <p>{{ $service->short_description ?? Str::limit(strip_tags($service->content), 200) }}
                                            </p>
                                            <ul class="list-style-one clearfix">
                                                <li>Nécessité médicale</li>
                                                <li>Paiement flexible</li>
                                                <li>Assistance 24/7</li>
                                                <li>Support client</li>
                                                <li>Avantages supplémentaires</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                        <div class="image-box pl_110 pb_50">
                                            <figure class="image image-1 image-hov-one">
                                                <img src="{{ $service->image ? Storage::url($service->image) : asset('assets/images/service/service-1.jpg') }}"
                                                    alt="{{ $service->title }}">
                                            </figure>
                                            {{-- <figure class="image image-2 image-hov-two">
                                                <img src="{{ asset('assets/images/service/service-1.jpg') }}" alt="{{ $service->title }} secondary">
                                            </figure> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @include('shared.footer')

    </div>

    @include('shared.js')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tabs-box .tab-btn');
            const tabContents = document.querySelectorAll('.tabs-box .tab');

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active classes from all buttons and content
                    tabButtons.forEach(btn => btn.classList.remove('active-btn'));
                    tabContents.forEach(content => content.classList.remove('active-tab'));

                    // Add active class to the clicked button
                    this.classList.add('active-btn');

                    // Show the corresponding tab content
                    const targetTabId = this.dataset.tab;
                    document.querySelector(targetTabId).classList.add('active-tab');
                });
            });
        });
    </script>

</body>

</html>
