<header id="header" class="header-effect-shrink"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 85}">
    <div class="header-body border-top-0">
        <div class="header-top header-top-default header-top-borders border-bottom-0 bg-color-light">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-between">
                        <div class="header-row">
                            <nav class="header-nav-top w-100 w-md-50pct w-xl-100pct">
                                <ul class="nav nav-pills d-inline-flex custom-header-top-nav-background pe-5">
                                    <li class="py-2 nav-item d-inline-flex z-index-1">
                                        <span class="p-0 d-flex align-items-center">
                                            <span>
                                                <img width="25"
                                                    src="{{ asset('frontend/img/demos/business-consulting-3/icons/phone.svg') }}"
                                                    alt="Contact Phone Number - ScrapeNiche Web Scraping Services"
                                                    data-icon
                                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                            </span>
                                            <a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2"
                                                href="tel:+8801773301138" data-cursor-effect-hover="plus"
                                                data-cursor-effect-hover-color="light">(880) 01773301138</a>
                                        </span>
                                        <span class="px-0 font-weight-normal align-items-center d-none d-xl-flex ms-3">
                                            <span>
                                                <img width="25"
                                                    src="{{ asset('frontend/img/demos/business-consulting-3/icons/email.svg') }}"
                                                    alt="Contact Email - ScrapeNiche Customer Support" data-icon
                                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                            </span>
                                            <a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2"
                                                href="mailto:ceo@scrapeniche.com" data-cursor-effect-hover="plus"
                                                data-cursor-effect-hover-color="light">ceo@scrapeniche.com</a>
                                        </span>
                                    </li>
                                </ul>
                            </nav>
                            <div class="d-flex align-items-center w-100">
                                <ul class="mb-0 ps-0 ms-auto">
                                    <li
                                        class="nav-item font-weight-semibold text-1 text-lg-2 text-color-dark d-none d-md-flex justify-content-end me-3">
                                        24/7 Service Available
                                    </li>
                                </ul>
                                <ul
                                    class="m-0 social-icons social-icons-clean social-icons-icon-dark social-icons-big ms-lg-2">
                                    <li class="social-icons-linkedin">
                                        <a href="https://www.linkedin.com/in/al-kafi-sohag/" target="_blank"
                                            class="text-4" title="LinkedIn" data-cursor-effect-hover="fit"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="social-icons-github">
                                        <a href="https://github.com/al-kafi-sohag" target="_blank" class="text-4"
                                            title="GitHub" data-cursor-effect-hover="fit"><i
                                                class="fa-brands fa-github"></i></a>
                                    </li>
                                    <li class="social-icons-whatsapp">
                                        <a href="https://wa.me/8801773301138" target="_blank" class="text-4"
                                            title="WhatsApp" data-cursor-effect-hover="fit"><i
                                                class="fa-brands fa-whatsapp"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container header-container" style="height: 117px;">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('f.home') }}" class="text-logo">
                                <i class="fas fa-code"></i>
                                Scrape<span class="niche">Niche</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end w-100">
                    <div class="header-row">
                        <div class="order-2 header-nav header-nav-links order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-square header-nav-main-text-capitalize header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link {{ request()->routeIs('f.home') ? 'active' : '' }}"
                                                href="{{ route('f.home') }}">Home</a>
                                        </li>
                                        <li>
                                            <a class="nav-link {{ request()->routeIs('f.about') ? 'active' : '' }}"
                                                href="{{ route('f.about') }}">About Us</a>
                                        </li>
                                        <li>
                                            <a class="nav-link {{ request()->routeIs('f.services') ? 'active' : '' }}"
                                                href="{{ route('f.services') }}">Services</a>
                                        </li>
                                        <li>
                                            <a class="nav-link {{ request()->routeIs('f.features') ? 'active' : '' }}"
                                                href="{{ route('f.features') }}">Features</a>
                                        </li>
                                        <li><a class="nav-link {{ request()->routeIs('f.pricings') ? 'active' : '' }}"
                                                href="{{ route('f.pricings') }}">Pricings</a></li>

                                        <li class="d-lg-none">
                                            <a class="nav-link {{ request()->routeIs('f.contact') ? 'active' : '' }}"
                                                href="{{ route('f.contact') }}">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="flex-row w-auto header-column header-column-search justify-content-end align-items-center d-flex">
                    <a href="{{ route('f.contact') }}"
                        class="py-2 btn btn-dark custom-btn-style-1 font-weight-semibold text-3-5 btn-px-3 ws-nowrap ms-4 d-none d-lg-block"
                        data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                        <span>Contact Us</span>
                    </a>
                    <div class="header-nav-features header-nav-features-no-border">
                        <div class="header-nav-feature header-nav-features-search d-inline-flex">
                            <a href="javascript:void(0)" class="header-nav-features-toggle text-decoration-none"
                                data-focus="headerSearch" aria-label="Search">
                                <i
                                    class="top-3 fas fa-search header-nav-top-icon text-3-5 text-color-dark text-color-hover-primary font-weight-semibold"></i>
                            </a>
                            <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0"
                                id="headerTopSearchDropdown">
                                <div class="simple-search input-group">
                                    <div class="form-control text-1"> </div>
                                    <button class="btn" aria-label="Search">
                                        <i
                                            class="top-2 fas fa-search header-nav-top-icon text-color-dark text-color-hover-primary"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                        data-bs-target=".header-nav-main nav">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>