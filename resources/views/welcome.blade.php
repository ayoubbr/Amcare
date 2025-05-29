<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $settings->site_name ?? 'Amcare' }} - Acceuil</title>

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
    <link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/banner.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/brand.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/service.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/funfact.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/faq.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/process.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
</head>

<body>
    <div class="boxed_wrapper ltr">
        @include('shared.header')

        <section class="banner-style-three">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none owl-dots-none">
                @forelse($sliderImages as $sliderImage)
                    @php
                        $imagePath = $sliderImage->image_path;
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
                    <div class="slide-item p_relative">
                        <div class="bg-layer" style="background-image: url({{ $imageUrl ?? $defaultImageUrl }});">
                        </div>
                        <div class="auto-container">
                            <div class="content-box">
                                <h2>{{ $sliderImage->title }}</h2>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="slide-item p_relative">
                        <div class="bg-layer" style="background-image: url(assets/images/banner/banner-7.jpg);">
                        </div>
                        <div class="auto-container">
                            <div class="content-box">
                                <h2>Meilleurs <span>Services</span> d'Ambulance</h2>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </section>

        <section class="brand-style-two">
            <div class="outer-container b_radius pl_0">
                <div class="brand-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    @forelse($partners as $partner)
                        @php
                            $imagePath = $partner->logo_path;
                            $imageUrl = null;
                            $defaultImageUrl = asset('assets/images/partner/partner-1.jpg');

                            if ($imagePath) {
                                if (Illuminate\Support\Str::startsWith($imagePath, 'assets/seed_images/')) {
                                    $imageUrl = asset($imagePath);
                                } else {
                                    $imageUrl = Storage::url($imagePath);
                                }
                            }
                        @endphp
                        <div class="brand-logo-box">
                            <a href="{{ $partner->website_url ?? '#' }}"
                                {{ $partner->website_url ? 'target="_blank"' : '' }}>
                                <img src="{{ $imageUrl ?? $defaultImageUrl }}" alt="{{ $partner->name }}">
                            </a>
                        </div>
                    @empty
                        <div class="brand-logo-box"><a><img src="{{ asset('assets/images/brand/brand-1.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="brand-logo-box"><a><img src="{{ asset('assets/images/brand/brand-2.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="brand-logo-box"><a><img src="{{ asset('assets/images/brand/brand-3.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="brand-logo-box"><a><img src="{{ asset('assets/images/brand/brand-4.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="brand-logo-box"><a><img src="{{ asset('assets/images/brand/brand-5.png') }}"
                                    alt=""></a>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        @if ($page)
            <section class="about-style-three pt_120">
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
                                            {!! $page->meta_description !!}
                                        @else
                                            <p>Chez Amcare, nous sommes fiers d'offrir l'excellence dans les
                                                services
                                                médicaux d'urgence. Notre équipe de professionnels hautement
                                                qualifiés
                                                et
                                                expérimentés.</p>
                                        @endif
                                    </div>
                                    <div class="btn-box"><a href="{{ route('about') }}" class="theme-btn btn-one">En
                                            savoir plus</a>
                                    </div>
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
                                        <img src="{{ $imageUrl ?? $defaultImageUrl }}"
                                            alt="{{ $page->title ?? 'À propos de nous' }}">
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
                                <p>Suspendisse varius etiam est vitae duitempus nec vitae orci sodales metus velit
                                </p>
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
                                <p>Suspendisse varius etiam est vitae duitempus nec vitae orci sodales metus velit
                                </p>
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
                                <p>Suspendisse varius etiam est vitae duitempus nec vitae orci sodales metus velit
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @php
            $phoneCount = count($settings->phones);
            $colLg = $phoneCount > 0 ? floor(12 / min($phoneCount, 3)) : 12;
            $colMd = $phoneCount > 1 ? floor(12 / min($phoneCount, 2)) : 12; 
        @endphp
        <section class="support-style-two centred pl_100 pr_100 pb_90">
            <div class="auto-container">
                <div class="row clearfix contact-row">
                    @forelse($settings->phones as $phoneObject)
                        <div class="col-lg-{{ $colLg }} col-md-{{ $colMd }} col-sm-12 single-column">
                            <div class="single-item">
                                <h5>{{ $phoneObject['key'] }}:</h5> 
                                <h2>
                                    @php
                                        $rawPhone = preg_replace(
                                            '/[^0-9+]/',
                                            '',
                                            $phoneObject['value'] ?? '+212661241832',
                                        );

                                        if (str_starts_with($rawPhone, '+')) {
                                            $prefix = '+';
                                            $digits = substr($rawPhone, 1);
                                        } else {
                                            $prefix = '';
                                            $digits = $rawPhone;
                                        }

                                        $formattedDigits = trim(implode(' ', str_split($digits, 3)));
                                        $displayPhone = $prefix . $formattedDigits;
                                    @endphp
                                    <a href="tel:{{ $rawPhone }}">{{ $displayPhone }}</a>
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

        <section class="service-section pt_60">
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
                            style="background-image: url('{{ asset('assets/images/shape/shape-1.png') }}');">
                        </div>
                        @forelse($services as $index => $service)
                            @php
                                $imagePath = $service->image;
                                $imageUrl = null;
                                $defaultImageUrl = asset('assets/images/service/service-1.jpg');

                                if ($imagePath) {
                                    if (Illuminate\Support\Str::startsWith($imagePath, 'assets/seed_images/')) {
                                        $imageUrl = asset($imagePath);
                                    } else {
                                        $imageUrl = Storage::url($imagePath);
                                    }
                                }
                            @endphp
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
                                        <div class="btn-box"><a href="{{ route('service', $service->slug) }}"
                                                class="theme-btn btn-one">En
                                                savoir plus</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                        <div class="image-box">
                                            <figure class="image image-1 image-hov-one">
                                                <img src="{{ $imageUrl ?? $defaultImageUrl }}"
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
                style="background-image: url('{{ asset('assets/images/shape/shape-8.png') }}');">
            </div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        @if (isset($extraSettings) && $extraSettings->count() > 0)
                            @foreach ($extraSettings as $stat)
                                <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                                    <div class="funfact-block-three">
                                        <div class="inner-box">
                                            @if ($stat->icon_class)
                                                <div class="icon-box"><i class="{{ $stat->icon_class }}"></i></div>
                                            @endif
                                            <div class="inner">
                                                <div class="count-outer">
                                                    <span class="odometer" data-count="{{ $stat->value }}">00</span>
                                                    @if ($stat->value_suffix)
                                                        <span class="symble">{{ $stat->value_suffix }}</span>
                                                    @endif
                                                </div>
                                                <p>{{ $stat->label }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            {{-- Fallback static content if no extraSettings are found --}}
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
                        @endif
                    </div>
                </div>
            </div>
        </section>

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
                                @if ($settings && $settings->phones && is_array($settings->phones) && count($settings->phones) > 0)
                                    @php
                                        $firstPhoneNumber = $settings->phones[0]['value'] ?? null;
                                    @endphp
                                    @php
                                        $rawPhone = preg_replace('/[^0-9+]/', '', $firstPhoneNumber ?? '+212661241832');

                                        if (str_starts_with($rawPhone, '+')) {
                                            $prefix = '+';
                                            $digits = substr($rawPhone, 1);
                                        } else {
                                            $prefix = '';
                                            $digits = $rawPhone;
                                        }

                                        $formattedDigits = trim(implode(' ', str_split($digits, 3)));
                                        $displayPhone = $prefix . $formattedDigits;
                                    @endphp
                                    <h3><a href="tel:{{ $rawPhone }}">{{ $displayPhone }}</a>
                                    </h3>
                                @else
                                    <h3><a href="tel:12463330089">+ 1 (246) 333-0089</a></h3>
                                @endif
                                <a href="{{ route('faqs') }}" class="theme-btn btn-one">En
                                    savoir plus</a>
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
                                                    <p>Veuillez consulter l'administrateur pour ajouter des
                                                        questions
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
