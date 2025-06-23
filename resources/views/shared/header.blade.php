@if ($settings && $settings->phones && is_array($settings->phones) && count($settings->phones) > 0)
    @php
        $firstPhoneNumber = $settings->phones[0]['value'] ?? null;
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
@endif
<div class="loader-wrap">
    <div class="preloader">
        <div id="handle-preloader" class="handle-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="a" class="letters-loading">a</span>
                    <span data-text-preloader="m" class="letters-loading">m</span>
                    <span data-text-preloader="b" class="letters-loading">b</span>
                    <span data-text-preloader="u" class="letters-loading">u</span>
                    <span data-text-preloader="l" class="letters-loading">l</span>
                    <span data-text-preloader="a" class="letters-loading">a</span>
                    <span data-text-preloader="n" class="letters-loading">n</span>
                    <span data-text-preloader="c" class="letters-loading">c</span>
                    <span data-text-preloader="e" class="letters-loading">e</span>
                    <span data-text-preloader="&nbsp" class="letters-loading">&nbsp</span>
                    <span data-text-preloader="t" class="letters-loading">t</span>
                    <span data-text-preloader="e" class="letters-loading">e</span>
                    <span data-text-preloader="a" class="letters-loading">a</span>
                    <span data-text-preloader="m" class="letters-loading">m</span>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="main-header header-style-three pl_100 pr_100">
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner">
                <ul class="info-list">
                    <li><i class="icon-48"></i>Appellez : <a href="tel:{{ $rawPhone }}">{{ $displayPhone }}</a>
                    </li>
                    <li><i class="icon-47"></i>Mail : <a
                            href="mailto:{{ $settings->email ?? 'info@example.com' }}">{{ strtolower($settings->email) ?? 'info@example.com' }}</a>
                    </li>
                </ul>
                <div class="right-column"></div>
            </div>
        </div>
    </div>
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box">
                <figure class="logo-box">
                    <a href="{{ route('home') }}">
                        @php
                            $imagePath = $settings->logo;
                            $imageUrl = null;
                            $defaultImageUrl = asset('assets/images/logo.png');

                            if ($imagePath) {
                                if (Illuminate\Support\Str::startsWith($imagePath, 'assets/seed_images/')) {
                                    $imageUrl = asset($imagePath);
                                } else {
                                    $imageUrl = Storage::url($imagePath);
                                }
                            }
                        @endphp
                        <img class="logo" src="{{ $imageUrl ?? $defaultImageUrl }}"
                            alt="{{ $settings->site_name ?? 'Amcare' }}">
                    </a>
                </figure>
                <div class="menu-area">
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light clearfix">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="{{ request()->is('/') ? 'current' : '' }}"><a
                                        href="{{ route('home') }}">Accueil</a>
                                </li>
                                <li class="dropdown {{ request()->is('services/zones') ? 'current' : '' }}">
                                    <a href="{{ route('zones') }}">Services</a>
                                    <ul>
                                        @forelse($services as $service)
                                            <li>
                                                <a href="{{ route('service', $service->slug) }}">
                                                    {{ mb_ucfirst(mb_strtolower($service->title)) }}
                                                </a>
                                            </li>
                                        @empty
                                            <div class="col-lg-12">
                                                <p>Aucun service pour le moment.</p>
                                            </div>
                                        @endforelse
                                        <li>
                                            <a href="{{ route('zones') }}">
                                                Zones de service
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                @if (count($events) > 0)
                                    <li class="dropdown {{ request()->is('events') ? 'current' : '' }}"><a
                                            href="{{ route('events') }}">Événements</a>
                                        <ul>
                                            @forelse($events as $event)
                                                <li><a
                                                        href="{{ route('event', $event->slug) }}">{{ mb_ucfirst(mb_strtolower($event->title)) }}</a>
                                                </li>
                                            @empty
                                                <div class="col-lg-12">
                                                    <p>Aucun événement pour le moment.</p>
                                                </div>
                                            @endforelse
                                        </ul>
                                    </li>
                                @endif
                                <li class="{{ request()->is('blog') ? 'current' : '' }}">
                                    <a href="{{ route('blog') }}">Blog</a>
                                </li>
                                @if ($pages->count() > 0)
                                    <li class="{{ request()->is('about') ? 'current' : '' }}">
                                        <a href="{{ route('about') }}">À propos</a>
                                    </li>
                                @endif
                                <li class="{{ request()->is('contact') ? 'current' : '' }}"><a
                                        href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <figure class="logo-box"><a href="/"><img class="logo"
                            src="{{ $imageUrl ?? $defaultImageUrl }}"
                            alt="{{ $settings->site_name ?? 'Ambulance Team' }}"></a>
                </figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="nav-logo"><a href="/"><img class="logo" src="{{ $imageUrl ?? $defaultImageUrl }}"
                    alt="{{ $settings->site_name ?? 'Ambulance Team' }}"></a>
        </div>
        <div class="menu-outer">
        </div>
        <div class="contact-info">
            <h4>Informations de contact</h4>
            <ul>
                <li>{{ $settings->address }}</li>
                <li>
                    Appelez :
                    <a href="tel:{{ $rawPhone }}">{{ $displayPhone }}</a>
                </li>
                <li><a href="mailto:{{ $settings->email }}">{{ strtolower($settings->email) }}</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="chat-icon whatsapp-icon">
    <a href="tel:{{ $rawPhone }}">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>
