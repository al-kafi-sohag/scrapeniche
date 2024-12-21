<footer id="footer" class="m-0 border-top-0 lazyload"
    data-bg-src="{{ asset('frontend/img/demos/business-consulting-3/backgrounds/background-4.jpg') }}"
    style="background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container pt-3">
        <div class="py-5 mb-3 row justify-content-between align-items-center">
            <div class="col-auto mb-4 mb-lg-0">
                <a href="{{ route('f.home') }}" class="text-logo">
                    <i class="fas fa-code"></i>
                    Scrape<span class="niche">Niche</span>
                </a>
            </div>
            <div class="col-auto">
                <a href="{{ route('f.contact', 'new-project') }}"
                    class="btn btn-primary custom-btn-style-1 font-weight-medium btn-px-4 btn-py-2 text-4"
                    data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                    <span class="text-color-light">Start Your Project</span>
                </a>
            </div>
        </div>
        <hr class="my-0 bg-color-light opacity-1">
        <div class="pt-3 mt-5 row">
            <div class="mb-4 col-lg-4 mb-lg-0">
                <a href="#" class="text-decoration-none">
                    <h3 class="mb-2 text-color-light font-weight-bold text-5">Your Data, Your Way, Automated</h3>
                </a>
                <p class="text-3-5">Custom web scraping solutions tailored to your business needs. Transform your data
                    collection process with our expert services.</p>
                <ul
                    class="social-icons social-icons-clean social-icons-clean-with-border social-icons-medium social-icons-icon-light">
                    <li class="social-icons-linkedin">
                        <a href="https://www.linkedin.com/in/al-kafi-sohag/" target="_blank" class="text-4"
                            title="LinkedIn" data-cursor-effect-hover="fit">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li class="mx-2 social-icons-github">
                        <a href="https://github.com/al-kafi-sohag" target="_blank" class="text-4" title="GitHub"
                            data-cursor-effect-hover="fit">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </li>
                    <li class="social-icons-whatsapp">
                        <a href="https://wa.me/8801773301138" target="_blank" class="text-4" title="WhatsApp"
                            data-cursor-effect-hover="fit">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mb-6 col-lg-4 mb-lg-0">
                <ul class="list list-icons list-icons-lg">
                    <li class="px-0 mb-1 d-flex">
                        <img width="25" src="{{ asset('frontend/img/demos/business-consulting-3/icons/phone.svg') }}"
                            alt="24/7 Customer Support Phone - ScrapeNiche" data-icon
                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        <a href="tel:+8801773301138" class="text-color-light font-weight-semibold text-3-4 ms-2">(880)
                            01773301138</a>
                    </li>
                    <li class="px-0 my-3 d-flex">
                        <img width="25" src="{{ asset('frontend/img/demos/business-consulting-3/icons/email.svg') }}"
                            alt="Business Inquiries Email - ScrapeNiche" data-icon
                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        <a href="mailto:ceo@scrapeniche.com"
                            class="text-color-light font-weight-semibold text-3-4 ms-2">ceo@scrapeniche.com</a>
                    </li>
                    <li class="px-0 mb-1 d-flex font-weight-semibold text-color-light">
                        <img width="25" src="{{ asset('frontend/img/demos/business-consulting-3/icons/map-pin.svg') }}"
                            alt="ScrapeNiche Office Location - Dhaka" data-icon
                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light me-2'}" />
                        Dhaka, Bangladesh
                    </li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h4 class="font-weight-bold text-5">Quick Links</h4>
                <ul class="list list-icons list-icons-sm">
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="{{ route('f.contact') }}" class="link-hover-style-1 ms-1">Contact Us</a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="{{ route('f.services') }}" class="link-hover-style-1 ms-1">Our Services</a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="{{ route('f.pricings') }}" class="link-hover-style-1 ms-1">Pricing Plans</a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="{{ route('f.features') }}" class="link-hover-style-1 ms-1">Features</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container bg-transparent footer-copyright">
        <div class="pb-5 row">
            <div class="m-0 text-center col-lg-12">
                <hr class="mt-5 mb-4 bg-color-light opacity-1">
                <p class="text-3-4">Scrape Niche {{ date('Y') }}. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
