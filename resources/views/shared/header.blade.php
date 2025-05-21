<header class="main-header header-style-three pl_100 pr_100">
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner">
                <ul class="info-list">
                    <li><i class="icon-48"></i>Appelez:<a href="tel:912345432">+91 (234) 5432</a></li>
                    <li><i class="icon-47"></i>Courriel:<a href="mailto:info@example.com">info@example.com</a>
                    </li>
                </ul>
                <div class="right-column">
                </div>
            </div>
        </div>
    </div>
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box">
                <figure class="logo-box"><a href="/"><img
                            src="{{ Vite::asset('resources/assets/images/logo.png') }}" alt=""></a>
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
                                <li class="dropdown {{ request()->is('services') ? 'current' : '' }}"><a
                                        href="{{ route('services') }}">Services</a>
                                    <ul>
                                        <li><a href="{{ url('services/1') }}">Ambulance routière</a></li>
                                        <li><a href="{{ url('services/2') }}">Ambulance aérienne</a></li>
                                        <li><a href="{{ url('services/3') }}">Ambulance nautique</a></li>
                                        <li><a href="{{ url('services/4') }}">Urgence médicale</a></li>
                                        <li><a href="{{ url('services/5') }}">Accident de la route</a></li>
                                        <li><a href="{{ url('services/6') }}">Ambulance de soins intensifs</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown {{ request()->is('events') ? 'current' : '' }}"><a
                                        href="{{ url('events') }}">Événements</a>
                                    <ul>
                                        <li><a href="{{ url('events/1') }}">Idées de soins de santé</a></li>
                                        <li><a href="{{ url('events/1') }}">Crise cardiaque réelle</a></li>
                                        <li><a href="{{ url('events/1') }}">Informations sur le sang</a></li>
                                        <li><a href="{{ url('events/1') }}">Soins infirmiers</a></li>
                                        <li><a href="{{ url('events/1') }}">Support d'anesthésie</a></li>
                                    </ul>
                                </li>
                                <li class="{{ request()->is('blogs') ? 'current' : '' }}">
                                    <a href="{{ url('blogs') }}">Blog</a>
                                </li>
                                {{-- <li><a href="{{ url('faqs') }}">FAQ</a></li> --}}
                                <li class="{{ request()->is('about') ? 'current' : '' }}"><a
                                        href="{{ url('about') }}">À propos</a></li>
                                <li class="{{ request()->is('contact') ? 'current' : '' }}"><a
                                        href="{{ url('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="menu-right-content">
                    <div class="search-toggler"><i class="icon-8"></i></div>
                    {{-- <div class="btn-box"><a href="index.html" class="theme-btn btn-one">Get a Quote</a></div> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <figure class="logo-box"><a href="index.html"><img
                            src="{{ Vite::asset('resources/assets/images/logo.png') }}" alt=""></a>
                </figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                    </nav>
                </div>
                <div class="menu-right-content">
                    <div class="search-toggler"><i class="icon-8"></i></div>
                    {{-- <div class="btn-box"><a href="index.html" class="theme-btn btn-one">Get a Quote</a></div> --}}
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="nav-logo"><a href="/"><img src="{{ Vite::asset('resources/assets/images/logo-2.png') }}"
                    alt="" title=""></a>
        </div>
        <div class="menu-outer">
        </div>
        <div class="contact-info">
            <h4>Informations de contact</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="chat-icon whatsapp-icon">
    <button type="button" class="chat-toggler">
        <i class="fab fa-whatsapp"></i>
    </button>
</div>


<div id="search-popup" class="search-popup">
    <div class="popup-inner">
        <div class="upper-box">
            <figure class="logo-box"><a href="index.html"><img
                        src="{{ Vite::asset('resources/assets/images/logo-2.png') }}" alt=""></a>
            </figure>
            <div class="close-search"><span class="fas fa-times"></span></div>
        </div>
        <div class="overlay-layer"></div>
        <div class="auto-container">
            <div class="search-form">
                <form method="post" action="https://azim.hostlin.com/Amcare/index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Tapez votre mot-clé et appuyez" required>
                            <button type="submit"><i class="icon-8"></i></button>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
