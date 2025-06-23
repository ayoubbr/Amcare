<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $event->title }} - {{ $settings->site_name ?? 'Amcare' }}</title>

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
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/event.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/page-title.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/event-details.css') }}">

    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <div class="boxed_wrapper ltr">
        @include('shared.header')
        <section class="page-title centred">
            <div class="bg-layer"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb">
                        <li><a href="{{route('home')}}">Accueil</a></li>
                        <li><a href="{{ route('events') }}">Événements</a></li>
                        <li>{{ $event->title }}</li>
                    </ul>
                    <h1>Détails de l'événement</h1>
                </div>
            </div>
        </section>
        <section class="event-details pt_60 pb_60">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="event-details-content">
                            <div class="content-one mb_55 ">
                                <div class="mb_35">
                                    <h2>{{ $event->title }}</h2>
                                    {!! $event->content !!}
                                </div>
                                <figure class="image-box">
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
                                    <img src="{{ $imageUrl ?? $defaultImageUrl }}" alt="{{ $event->title }}">
                                </figure>
                                <div class="text-box">
                                    <ul class="post-info">
                                        <li><i
                                                class="icon-29"></i><span>{{ \Carbon\Carbon::parse($event->event_date)->format('d M') }}</span>
                                        </li>
                                        <li><i class="icon-41"></i><span>{{ $event->location ?? 'N/A' }}</span></li>
                                    </ul>

                                </div>
                            </div>
                            @if ($relatedEvents->isNotEmpty())
                                <div class="content-one mt_50">
                                    <h3>Événements Similaires</h3>
                                    <div class="row clearfix">
                                        @foreach ($relatedEvents as $relatedEvent)
                                            @php
                                                $imagePath = $relatedEvent->image;
                                                $imageUrl = null;
                                                $defaultImageUrl = asset('assets/images/resource/event-1.jpg');

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
                                            <div class="col-lg-6 col-md-6 col-sm-12 event-block">
                                                <div class="event-block-one">
                                                    <div class="inner-box">
                                                        <h3><a
                                                                href="{{ route('event', $relatedEvent->slug) }}">{{ Str::limit($relatedEvent->title, 40) }}</a>
                                                        </h3>
                                                        <p>{!! Str::limit($relatedEvent->content, 80) !!}</p>
                                                        <div class="btn-box"><a
                                                                href="{{ route('event', $relatedEvent->slug) }}"
                                                                class="theme-btn btn-one">En savoir plus</a></div>
                                                        <figure class="image-box similar-event">
                                                            <img class="similar-event"
                                                                src="{{ $imageUrl ?? $defaultImageUrl }}"
                                                                alt="{{ $relatedEvent->title }}">
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="event-sidebar ml_30">
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h3>Tous les Événements</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        @foreach ($allEvents as $sidebarEvent)
                                            <li><a href="{{ route('event', $sidebarEvent->slug) }}"
                                                    class="{{ $event->id == $sidebarEvent->id ? 'current' : '' }}">
                                                    {{ $sidebarEvent->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget schedule-widget">
                                <div class="widget-title">
                                    <h3>Lieu de l'événement</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li><span>Date :</span>
                                            {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}</li>
                                        <li><span>Heure :</span>
                                            {{ \Carbon\Carbon::parse($event->event_date)->format('H:i') }}</li>
                                        <li><span>Lieu :</span> {{ $event->location ?? 'N/A' }}</li>
                                        <li>
                                            <span style="width: auto">E-mail : </span>
                                            <a
                                                href="mailto:{{ $settings->email }}">{{ strtolower($settings->email) }}</a>
                                        </li>
                                        @if ($settings && $settings->phones && is_array($settings->phones) && count($settings->phones) > 0)
                                            @php
                                                $firstPhoneNumber = $settings->phones[0]['value'] ?? null;

                                                $rawPhone = preg_replace(
                                                    '/[^0-9+]/',
                                                    '',
                                                    $firstPhoneNumber ?? '+212661241832',
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
                                            <li><span>Téléphone : </span>
                                                <a href="tel:{{ $rawPhone }}">{{ $displayPhone }}</a>
                                            </li>
                                        @endif
                                    </ul>
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