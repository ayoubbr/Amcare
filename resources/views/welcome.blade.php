<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $settings->site_name ?? 'Amcare' }} - Acceuil</title>

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
        {{-- Dynamic Header Inclusion --}}
        @include('shared.header')

        {{-- Dynamic Main Slider --}}
        <section class="banner-style-three pl_100 pr_100">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none owl-dots-none">
                @forelse($sliderImages as $sliderImage)
                    <div class="slide-item p_relative">
                        <div class="bg-layer"
                            style="background-image: url({{ $sliderImage->image_path ? Storage::url($sliderImage->image_path) : asset('assets/images/banner/default-banner.jpg') }});">
                        </div>
                        <div class="auto-container">
                            <div class="content-box">
                                {{-- <span class="upper-text">{{ $sliderImage->subtitle ?? 'Disponible 24/7' }}</span> --}}
                                <h2>{{ $sliderImage->title }}</h2>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="slide-item p_relative">
                        <div class="bg-layer" style="background-image: url(assets/images/banner/banner-7.jpg);"></div>
                        <div class="auto-container">
                            <div class="content-box">
                                {{-- <span class="upper-text">Disponible 24/7</span> --}}
                                <h2>Meilleurs <span>Services</span> d'Ambulance</h2>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </section>

        {{-- Dynamic Partners Slider --}}
        <section class="brand-style-two pl_100 pr_100">
            <div class="outer-container b_radius pl_0">
                <div class="brand-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    @forelse($partners as $partner)
                        <div class="brand-logo-box">
                            <a href="{{ $partner->website_url ?? '#' }}"
                                {{ $partner->website_url ? 'target="_blank"' : '' }}>
                                <img src="{{ $partner->logo_path ? Storage::url($partner->logo_path) : asset('assets/images/brand/default-brand.png') }}"
                                    alt="{{ $partner->name }}">
                            </a>
                        </div>
                    @empty
                        {{-- Default static partners if no dynamic partners are found --}}
                        <div class="brand-logo-box"><a href="index.html"><img
                                    src="{{ Vite::asset('resources/assets/images/brand/brand-1.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="brand-logo-box"><a href="index.html"><img
                                    src="{{ Vite::asset('resources/assets/images/brand/brand-2.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="brand-logo-box"><a href="index.html"><img
                                    src="{{ Vite::asset('resources/assets/images/brand/brand-3.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="brand-logo-box"><a href="index.html"><img
                                    src="{{ Vite::asset('resources/assets/images/brand/brand-4.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="brand-logo-box"><a href="index.html"><img
                                    src="{{ Vite::asset('resources/assets/images/brand/brand-5.png') }}"
                                    alt=""></a>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        @if ($page)
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
                                                médicaux d'urgence. Notre équipe de professionnels hautement qualifiés
                                                et
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
                                            <li>Les équipes inclusives prennent en compte un plus large éventail de
                                                points
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
                                        <img src="{{ asset('assets/real_images/sahara-1-copy.jpg') }}"
                                            alt="Image décorative">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif


        <section class="processing-style-two pl_100 pr_100 centred">
            <div class="auto-container">
                <div class="inner-container pt_90 pb_90">
                    <div class="sec-title mb_50">
                        <span class="sub-title mb_12">Processus</span>
                        <h2>Comment obtenir un service</h2>
                    </div>
                    <div class="content-box">
                        <div class="processing-block-two">
                            <div class="inner-box">
                                <div class="count-box">
                                    <div class="inner">
                                        <h4>01</h4><span>Étape</span>
                                    </div>
                                </div>
                                <h3>Appeler la ligne directe</h3>
                                <p>Suspendisse varius etiam est vitae duitempus nec vitae orci sodales metus velit</p>
                            </div>
                        </div>
                        <div class="processing-block-two">
                            <div class="inner-box">
                                <div class="count-box">
                                    <div class="inner">
                                        <h4>02</h4><span>Étape</span>
                                    </div>
                                </div>
                                <h3>Définir la direction</h3>
                                <p>Suspendisse varius etiam est vitae duitempus nec vitae orci sodales metus velit</p>
                            </div>
                        </div>
                        <div class="processing-block-two">
                            <div class="inner-box">
                                <div class="count-box">
                                    <div class="inner">
                                        <h4>03</h4><span>Étape</span>
                                    </div>
                                </div>
                                <h3>Obtenir une ambulance</h3>
                                <p>Suspendisse varius etiam est vitae duitempus nec vitae orci sodales metus velit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Dynamic Phone Numbers Section --}}
        @php
            $phoneCount = count($settings->phones);
            $colLg = $phoneCount > 0 ? floor(12 / $phoneCount) : 12;
            $colMd = $phoneCount > 1 ? floor(12 / min($phoneCount, 2)) : 12; // max 2 columns for md
        @endphp
        <section class="support-style-two centred pl_100 pr_100 pb_90">
            <div class="auto-container">
                <div class="row clearfix">
                    @forelse($settings->phones as $key => $phone)
                        <div class="col-lg-{{ $colLg }} col-md-{{ $colMd }} col-sm-12 single-column">
                            <div class="single-item">
                                <h5>{{ $key }}:</h5>
                                <h2>
                                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $phone) }}">{{ $phone }}</a>
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

        {{-- Dynamic Services Section --}}
        <section class="service-section">
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
                            style="background-image: url('{{ asset('assets/images/shape/shape-1.png') }}');"></div>
                        @forelse($services as $index => $service)
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
                                                <img src="{{ $service->image ? Storage::url($service->image) : asset('assets/images/service/default-service-tab-1.jpg') }}"
                                                    alt="{{ $service->title }}">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="tab active-tab" id="tab-default">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 text-center">
                                        <p>Aucun service disponible pour le moment.</p>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>

        <section class="funfact-style-three pl_100 pr_100 pb_40 pt_40">
            <div class="pattern-layer"
                style="background-image: url('{{ asset('assets/images/shape/shape-8.png') }}');"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-three">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-36"></i></div>
                                    <div class="inner">
                                        <div class="count-outer">
                                            <span class="odometer" data-count="300">00</span><span
                                                class="symble">+</span>
                                        </div>
                                        <p>Personnel de première ligne</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-three">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-37"></i></div>
                                    <div class="inner">
                                        <div class="count-outer">
                                            <span class="odometer" data-count="100">00</span><span
                                                class="symble">+</span>
                                        </div>
                                        <p>Véhicules spécialisés</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-three">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-38"></i></div>
                                    <div class="inner">
                                        <div class="count-outer">
                                            <span class="odometer" data-count="15">00</span><span
                                                class="symble">k+</span>
                                        </div>
                                        <p>Patients servis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Dynamic FAQ Section --}}
        <section class="faq-style-two pt_120 pb_120">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}'
                style="background-image: url('{{ asset('assets/images/background/faq-bg.jpg') }}');"></div>
            <div class="auto-container faq-style-two-auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title mb_50 light">
                                <span class="sub-title mb_12">FAQ Générales</span>
                                <h2>Question les plus fréquentes</h2>
                            </div>
                            <div class="support-box">
                                <div class="text-box" style="    padding: 15px;">
                                    <h4>Vous avez d'autres questions ?</h4>
                                    <h2>Appelez-nous</h2>
                                </div>
                                {{-- Display first phone number from settings if available --}}
                                @if ($settings && $settings->phones && count($settings->phones) > 0)
                                    @php
                                        $firstPhoneKey = array_key_first($settings->phones);
                                        $firstPhoneNumber = $settings->phones[$firstPhoneKey];
                                    @endphp
                                    <h3><a
                                            href="tel:{{ preg_replace('/[^0-9+]/', '', $firstPhoneNumber) }}">{{ $firstPhoneNumber }}</a>
                                    </h3>
                                @else
                                    <h3><a href="tel:12463330089">+ 1 (246) 333-0089</a></h3>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 faq-column">
                        <div class="content_block_six">
                            <div class="faq-content">
                                <ul class="accordion-box">
                                    @forelse($faqs as $index => $faq)
                                        <li class="accordion block {{ $index === 0 ? 'active-block' : '' }}">
                                            <div class="acc-btn {{ $index === 0 ? 'active' : '' }}">
                                                <h4>{{ $faq->question }}</h4>
                                                <div class="icon-box"><i class="icon-27"></i></div>
                                            </div>
                                            <div class="acc-content {{ $index === 0 ? 'current' : '' }}">
                                                <div class="text">
                                                    <p>{{ $faq->answer }}</p>
                                                </div>
                                            </div>
                                        </li>
                                    @empty
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <h4>Aucune FAQ disponible pour le moment.</h4>
                                                <div class="icon-box"><i class="icon-27"></i></div>
                                            </div>
                                            <div class="acc-content">
                                                <div class="text">
                                                    <p>Veuillez consulter l'administrateur pour ajouter des questions
                                                        fréquemment posées.</p>
                                                </div>
                                            </div>
                                        </li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Dynamic Footer Inclusion --}}
        @include('shared.footer')

    </div>

    @include('shared.js')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab switching logic for Services section (copied from services.blade.php)
            const serviceTabButtons = document.querySelectorAll('.service-section .tabs-box .tab-btn');
            const serviceTabContents = document.querySelectorAll('.service-section .tabs-box .tab');

            serviceTabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    serviceTabButtons.forEach(btn => btn.classList.remove('active-btn'));
                    serviceTabContents.forEach(content => content.classList.remove('active-tab'));

                    this.classList.add('active-btn');
                    const targetTabId = this.dataset.tab;
                    document.querySelector(targetTabId).classList.add('active-tab');
                });
            });

            // FAQ Accordion Logic (copied from welcome.blade.php's original JS or common JS)
            const accordionButtons = document.querySelectorAll('.accordion-box .acc-btn');
            accordionButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const parentBlock = this.closest('.accordion.block');
                    const accContent = parentBlock.querySelector('.acc-content');

                    if (parentBlock.classList.contains('active-block')) {
                        parentBlock.classList.remove('active-block');
                        this.classList.remove('active');
                        accContent.style.display =
                            'none'; // Or use slideUp/slideToggle if you have jQuery
                    } else {
                        // Close all other open accordions in the same box
                        document.querySelectorAll('.accordion-box .active-block').forEach(
                            openBlock => {
                                openBlock.classList.remove('active-block');
                                openBlock.querySelector('.acc-btn').classList.remove('active');
                                openBlock.querySelector('.acc-content').style.display = 'none';
                            });

                        parentBlock.classList.add('active-block');
                        this.classList.add('active');
                        accContent.style.display = 'block'; // Or use slideDown
                    }
                });
            });
        });
    </script>

</body>

</html>
