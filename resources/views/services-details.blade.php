<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $service->title }} - {{ $settings->site_name ?? 'Amcare' }}</title>

 <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
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
    @vite('resources/css/module-css/page-title.css')
    @vite('resources/css/module-css/banner.css')
    @vite('resources/css/module-css/brand.css')
    @vite('resources/css/module-css/about.css')
    @vite('resources/css/module-css/chooseus.css')
    @vite('resources/css/module-css/service.css')
    @vite('resources/css/module-css/service-details.css')
    @vite('resources/css/module-css/feature.css')
    @vite('resources/css/module-css/funfact.css')
    @vite('resources/css/module-css/testimonial.css')
    @vite('resources/css/module-css/faq.css')
    @vite('resources/css/module-css/subscribe.css')
    @vite('resources/css/module-css/team.css')
    @vite('resources/css/module-css/event.css')
    @vite('resources/css/module-css/process.css')
    @vite('resources/css/module-css/news.css')
    @vite('resources/css/module-css/cta.css')
    @vite('resources/css/module-css/footer.css')
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
                style="background-image: url('{{ asset('assets/images/background/page-title.jpg') }}');"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb">
                        <li><a href="/">Accueil</a></li>
                        <li><a href="#">Services</a></li>
                        <li>{{ $service->title }}</li>
                    </ul>
                    <h1>Détails du service</h1>
                </div>
            </div>
        </section>
        <section class="service-details pt_60 pb_120">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar mr_30">
                            <div class="category-widget mb_60">
                                <ul class="category-list clearfix">
                                    @foreach ($allServices as $sidebarService)
                                        <li><a href="{{ route('service', $sidebarService->slug) }}"
                                                class="{{ $service->slug == $sidebarService->slug ? 'current' : '' }}">
                                                {{ $sidebarService->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="contact-widget centred">
                                <div class="inner-box">
                                    <div class="bg-layer"
                                        style="background-image: url('{{ asset('assets/real_images/ambulance-team-3.jpg') }}');">
                                    </div>
                                    <div class="text-box">
                                        <h4>{{ $service->title }} </h4>
                                        <a
                                            href="tel:{{ $settings->phones['urgence'] ?? $settings->phones['WhatsApp'] }}">{{ $settings->phones['urgence'] ?? $settings->phones['WhatsApp'] }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="service-details-content">   
                             <div class="content-one mb_50">
                                
                                <div class="text-box">
                                    <h2>{{ $service->title }}</h2>
                                    {!! $service->content !!}
                                </div>
                                <figure class="image-box pt_20">
                                    <img src="{{ $service->image ? Storage::url($service->image) : asset('assets/images/service/default-service-details.jpg') }}"
                                        alt="{{ $service->title }}">
                                </figure>
                            </div>
                            <div class="content-two mb_50">
                                <div class="inner-box centred">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <h3>Aidez-nous à sauver une vie</h3>
                                                <p>En soutenant les services d'ambulance, nous veillons à ce que
                                                    l'attention médicale vitale atteigne ceux qui en ont un besoin
                                                    critique</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <h3>Rejoignez notre grande famille</h3>
                                                <p>Rejoignez notre grande famille et faites partie d'une communauté
                                                    dédiée à faire la différence. Ici, vous trouverez un soutien</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-box">
                                    <p>Les innovations dans ce domaine comprennent des capacités de télémédecine
                                        améliorées, permettant aux équipes médicales au sol de fournir un support et des
                                        consultations en temps réel pendant les vols. De plus, les avancées dans la
                                        conception des aéronefs et l'équipement médical ont amélioré l'efficacité et la
                                        sécurité des opérations d'ambulance aérienne.</p>
                                </div>
                            </div>

{{--                            
                            <div class="content-three pb_20">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                        <div class="text-box">
                                            <h2>Avantages du service</h2>
                                            <p>Lorem ipsum est un texte de remplissage couramment utilisé pour démontrer
                                                la forme visuelle d'un document ou d'une police de caractères sans
                                                compter sur un contenu significatif.</p>
                                            <ul class="list-style-one clearfix">
                                                <li>En id diam nec nisi congue tincidunt</li>
                                                <li>Sed tristique lorem non tesque</li>
                                                <li>Les innovations dans ce domaine incluent des améliorations</li>
                                                <li>De plus, les avancées dans les aéronefs</li>
                                                <li>Lorem ipsum est un texte de remplissage</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image-box"><img
                                                src="{{ asset('assets/real_images/ambulance-team-1.jpg') }}"
                                                alt=""></figure>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="content-four">
                                <div class="title-text pb_20">
                                    <h2>Questions générales</h2>
                                </div>
                                <div class="content_block_six">
                                    <div class="faq-content">
                                        <ul class="accordion-box">
                                            @foreach ($faqs as $faq)
                                                <li class="accordion block">
                                                    <div class="acc-btn">
                                                        <h4>{{ $faq->question }}</h4>
                                                        <div class="icon-box"><i class="icon-27"></i></div>
                                                    </div>
                                                    <div class="acc-content">
                                                        <div class="text">
                                                            <p>{{ $faq->answer }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
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
