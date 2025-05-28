<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Événements - {{ $settings->site_name ?? 'Amcare' }}</title>

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
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Module CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/banner.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/event.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/page-title.css') }}">

    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">


</head>


<body>

    <div class="boxed_wrapper ltr">
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
        <section class="event-section pt_60 pb_60 centred p_relative">
            <div class="pattern-layer" style="background-image: url({{ asset('assets/images/shape/shape-8.png') }});">
            </div>
            <div class="auto-container">
                <div class="sec-title mb_50">
                    {{-- <span class="sub-title mb_12">Événements</span> --}}
                    <h2>Assurer la sécurité des spectateurs</h2>
                </div>
                <div class="row clearfix">
                    @forelse($events as $event)
                        @php
                            $imagePath = $event->image;
                            $imageUrl = null;
                            $defaultImageUrl = asset('assets/images/resource/event-1.jpg');

                            if ($imagePath) {
                                if (Illuminate\Support\Str::startsWith($imagePath, 'assets/seed_images/')) {
                                    $imageUrl = asset($imagePath);
                                } else {
                                    $imageUrl = Storage::url($imagePath);
                                }
                            }
                        @endphp
                        {{-- <img src="{{ $imageUrl ?? $defaultImageUrl }}" alt="{{ $event->title }}"> --}}
                        <div class="col-lg-6 col-md-6 col-sm-12 event-block">
                            <div class="event-block-one">
                                <div class="inner-box">
                                    <h3><a href="{{ route('event', $event->slug) }}">{{ $event->title }}</a></h3>
                                    {!! Str::limit($event->content, 90) !!}
                                    <div class="btn-box"><a href="{{ route('event', $event->slug) }}"
                                            class="theme-btn btn-one">En
                                            savoir plus</a>
                                    </div>
                                    <figure class="image-box">
                                        <img src="{{ $imageUrl ?? $defaultImageUrl }}"
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
                    {{ $events->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </section>
        @include('shared.footer')

    </div>


    @include('shared.js')

</body>

</html>
