<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>FAQ - {{ $settings->site_name ?? 'Amcare' }}</title>

    <link rel="icon" href="{{ Vite::asset('resources/assets/images/favicon.ico') }}" type="image/x-icon">

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
        'resources/css/module-css/faq.css', 
        'resources/css/responsive.css'
    ])

</head>


<body class="ltr"> {{-- Added ltr for consistency, adjust if needed --}}

    <div class="boxed_wrapper">


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

        {{-- Include header (ensure $settings is passed if header needs it) --}}
        @include('shared.header', ['settings' => $settings ?? null])

        <section class="page-title centred">
            <div class="bg-layer blue-mask" style="background-image: url({{ Vite::asset('resources/assets/images/background/page-title-3.jpg') }});">
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

        <section class="faq-section pt_120 pb_120 z_1">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_two">
                            <div class="image-box">
                                <div class="image-shape">
                                    <div class="shape-1"
                                        style="background-image: url({{ Vite::asset('resources/assets/images/shape/shape-2.png') }});"></div>
                                    <div class="shape-2"
                                        style="background-image: url({{ Vite::asset('resources/assets/images/shape/shape-2.png') }});"></div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-image">
                                        <figure class="image image-hov-one mt_100"><img
                                                src="{{ Vite::asset('resources/assets/images/resource/faq-1.jpg') }}" alt="FAQ Image 1"></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-image">
                                        <figure class="image image-hov-two mb_30"><img
                                                src="{{ Vite::asset('resources/assets/images/resource/faq-2.jpg') }}" alt="FAQ Image 2"></figure>
                                        <div class="experience-box">
                                            <div class="year-box">
                                                <div class="inner">
                                                    <h2>25</h2>
                                                    <h5>Ans</h5>
                                                </div>
                                            </div>
                                            <h4>d'expérience dans le service financier</h4>
                                            {{-- This text can be made dynamic if needed via settings or a page section --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_two">
                            <div class="content-box ml_60"> {{-- Consider if ml_60 is always needed or responsive --}}
                                <div class="sec-title mb_25">
                                    <span class="sub-title mb_12">FAQ Générales</span>
                                    <h2>Toutes vos questions à la réalité.</h2>
                                    {{-- This title can also be made dynamic if needed --}}
                                </div>
                                @if(isset($faqs) && $faqs->count() > 0)
                                <ul class="accordion-box">
                                    @foreach($faqs as $index => $faq)
                                    <li class="accordion block {{ $index == 0 ? 'active-block' : '' }}">
                                        {{-- The first item is often open by default --}}
                                        <div class="acc-btn {{ $index == 0 ? 'active' : '' }}">
                                            <h4>{{ $faq->question }}</h4>
                                            <div class="icon-box"><i class="icon-16"></i></div> {{-- Ensure this icon class exists and provides +/ - behavior or adjust JS --}}
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
            </div>
        </section>

        {{-- Include footer (ensure $settings is passed if footer needs it) --}}
        @include('shared.footer', ['settings' => $settings ?? null])

    </div>

    @include('shared.js')
    {{-- Ensure your shared.js or a script here handles the accordion functionality.
         The accordion JS from welcome.blade.php was similar.
         If it's not global, you might need to add it here or ensure it's in shared.js.
    --}}
    <script>
        // Basic Accordion Functionality (if not already in shared.js)
        document.addEventListener('DOMContentLoaded', function () {
            const accordionButtons = document.querySelectorAll('.accordion-box .acc-btn');
            accordionButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const parentBlock = this.closest('.accordion.block');
                    const accContent = parentBlock.querySelector('.acc-content');
                    const isActive = parentBlock.classList.contains('active-block');

                    // Close all other open accordions in the same box
                    document.querySelectorAll('.accordion-box .accordion.block').forEach(block => {
                        if (block !== parentBlock) {
                            block.classList.remove('active-block');
                            block.querySelector('.acc-btn').classList.remove('active');
                            block.querySelector('.acc-content').style.display = 'none';
                        }
                    });

                    // Toggle current accordion
                    if (isActive) {
                        parentBlock.classList.remove('active-block');
                        this.classList.remove('active');
                        accContent.style.display = 'none';
                    } else {
                        parentBlock.classList.add('active-block');
                        this.classList.add('active');
                        accContent.style.display = 'block';
                    }
                });
            });
        });
    </script>

</body>
</html>