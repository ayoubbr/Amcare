<footer class="main-footer home-3 pl_100 pr_100">
    <div class="widget-section pt_110 pb_110 pr_50 pl_50">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-content">
                            <h2>Le service d'ambulance le plus rapide et le plus sécurisé</h2>
                            {{-- <ul class="social-links">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h4>Qui sommes-nous</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{ url('about') }}">À propos de nous</a></li>
                                <li><a href="{{ url('services') }}">Services</a></li>
                                <li><a href="{{ url('faqs') }}">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h4>Plus de liens</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{ url('events') }}">Événements</a></li>
                                <li><a href="{{ url('contact') }}">Contactez-nous</a></li>
                                <li><a href="{{ url('blog') }}">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-content">
                            <figure class="image-box mb_25"><img
                                    src="{{ asset('assets/images/resource/ambulance-3.png') }}" alt=""></figure>
                            <h3><a
                                    href="tel:{{ preg_replace('/[^0-9+]/', '', $settings->phones['WhatsApp'] ?? '') }}">{{ $settings->phones['WhatsApp'] ?? '+91 (234) 5432' }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="bottom-inner">
                <div class="copyright">
                    <p>{{ $settings->footer_text }}</p>
                </div>
                <div class="location-box">
                    <p><i class="icon-17"></i>{{ $settings->address }}</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="scroll-to-top">
    <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
