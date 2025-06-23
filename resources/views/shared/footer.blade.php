<footer class="main-footer home-3 pl_100 pr_100">
    <div class="widget-section pt_110 pb_110 pr_50 pl_50">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-content">
                            <h2>Le service d'ambulance le plus rapide et le plus sécurisé</h2>
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
                                <li><a href="{{ route('about') }}">À propos de nous</a></li>
                                <li><a href="{{ route('zones') }}">Zones de service</a></li>
                                <li><a href="{{ route('faqs') }}">FAQ</a></li>
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
                                @if (count($events) > 0 )
                                <li><a href="{{ route('events') }}">Événements</a></li>
                                @endif
                                <li><a href="{{ route('contact') }}">Contactez-nous</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-content">
                            <figure class="image-box mb_25"><img
                                    src="{{ asset('assets/images/resource/ambulance-3.png') }}" alt=""></figure>
                            <h3>
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
                                @endif
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
                    <p>
                        <a href="https://www.eureka-digital.ma/">© 2025 Eureka Digital. All rights reserved.</a>
                    </p>
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
