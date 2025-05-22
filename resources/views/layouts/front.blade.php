<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title . ' - ' : '' }}{{ config('app.name', 'Amcare') }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Services d\'ambulance et de transport médical d\'urgence' }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/front/style.css') }}">

    @stack('styles')
</head>
<body>
    <div class="top-bar bg-danger text-white py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex align-items-center h-100">
                        <a href="tel:{{ \App\Models\Setting::getSetting('phone') ?? '+91(234)5432' }}" class="text-white mr-4">
                            <i class="fas fa-phone-alt mr-2"></i> CALL: {{ \App\Models\Setting::getSetting('phone') ?? '+91(234)5432' }}
                        </a>
                        <a href="mailto:{{ \App\Models\Setting::getSetting('email') ?? 'info@example.com' }}" class="text-white">
                            <i class="fas fa-envelope mr-2"></i> MAIL: {{ \App\Models\Setting::getSetting('email') ?? 'info@example.com' }}
                        </a>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="d-flex align-items-center justify-content-end h-100">
                        <span class="mr-3">
                            <i class="fas fa-globe mr-1"></i> FRANÇAIS
                            <i class="fas fa-chevron-down ml-1 small"></i>
                        </span>
                        <span>SHARE:</span>
                        <a href="#" class="text-white ml-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white ml-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white ml-2"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-white ml-2"><i class="fas fa-globe"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="header py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4">
                    <a href="{{ route('home') }}" class="logo">
                        @if(\App\Models\Setting::getSetting('logo'))
                            <img src="{{ asset('storage/' . \App\Models\Setting::getSetting('logo')) }}" alt="{{ \App\Models\Setting::getSetting('site_name') ?? 'Amcare' }}" class="img-fluid" style="max-height: 60px;">
                        @else
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/logo.png') }}" alt="{{ \App\Models\Setting::getSetting('site_name') ?? 'Amcare' }}" class="img-fluid" style="max-height: 60px;">
                            </div>
                        @endif
                    </a>
                </div>
                <div class="col-lg-9 col-md-8">
                    <nav class="main-nav">
                        <ul class="nav justify-content-end">
                            <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('services*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('services') }}">Services</a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('events*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('events') }}">Events</a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('page*') ? 'active' : '' }}">
                                <a class="nav-link" href="#">Pages</a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('blog*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-right">
                    <a href="{{ route('quote') }}" class="btn btn-outline-danger">Get a Quote</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer bg-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h3 class="mb-4">The Fastest and Secure Ambulance Service</h3>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h4 class="mb-4">Who we are</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('page', 'about-us') }}">About us</a></li>
                        <li><a href="{{ route('page', 'our-team') }}">Our Team</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('page', 'faq') }}">FAQ's</a></li>
                        <li><a href="{{ route('page', 'our-fleet') }}">Our Fleet</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h4 class="mb-4">More Links</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('events') }}">Events</a></li>
                        <li><a href="{{ route('page', 'training') }}">Training</a></li>
                        <li><a href="{{ route('contact') }}">Contact us</a></li>
                        <li><a href="{{ route('page', 'privacy-policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="emergency-contact p-4 bg-dark">
                        <img src="{{ asset('images/emergency-light.png') }}" alt="Emergency Light" class="img-fluid mb-3">
                        <h3 class="text-center">+1 (246) 333-0089</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="copyright text-center">
                        <p>{{ \App\Models\Setting::getSetting('footer_text') ?? '© ' . date('Y') . ' Amcare. All Rights Reserved.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>

    <div class="chat-widget">
        <button class="chat-button"><i class="fas fa-comments"></i></button>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/front/main.js') }}"></script>

    @stack('scripts')
</body>
</html>
