@extends('frontend.layouts.master')

@section('title', 'About Us')

@section('content')

<div role="main" class="main">
    <section class="my-0 border-0 section section-with-shape-divider page-header page-header-modern page-header-lg lazyload" data-bg-src="{{ asset('frontend/img/demos/business-consulting-3/backgrounds/background-5.jpg') }}" style="background-size: cover; background-position: center;">
        <div class="container pb-5 my-3">
            <div class="mb-4 row">
                <div class="order-2 text-center col-md-12 align-self-center p-static">
                    <h1 class="font-weight-bold text-color-dark text-10">About Scrape Niche</h1>
                </div>
                <div class="order-1 col-md-12 align-self-center">
                    <ul class="text-center breadcrumb d-block">
                        <li><a href="{{ route('f.home') }}">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shape-divider shape-divider-bottom shape-divider-reverse-x" style="height: 123px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "/>
                <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "/>
            </svg>
        </div>
    </section>

    <div class="container pt-3 mt-4">
        <div class="row">
            <div class="col">
                <h2 class="mb-4 text-9 text-lg-5 text-xl-9 line-height-3 text-transform-none font-weight-semibold mb-lg-3 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Custom Web Scraping Solutions for Your Business</h2>
                <p class="text-3-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">At Scrape Niche, we specialize in creating custom, tailor-made web scraping scripts that adapt to your unique business needs. Our platform empowers you with personalized solutions for efficient data extraction, management, and utilization.</p>
                <p class="mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">Whether you're in e-commerce, market research, real estate, or any other industry, our custom scripts and user-friendly dashboard make data collection effortless. With Scrape Niche, you get full control over your scripts and data, along with professional support to ensure optimal performance.</p>
                <div class="pb-3 mb-5 row row-gutter-sm align-items-center">
                    <div class="col-lg-6 col-xl-7">
                        <div class="mb-4 row flex-xl-nowrap align-items-center mb-lg-0">
                            <div class="mb-4 col-sm-auto mb-sm-0">
                                <div class="d-flex appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000">
                                    <img width="63" height="63" src="{{ asset('frontend/img/demos/business-consulting-3/icons/label.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'd-lg-none d-xl-block'}" />
                                    <span class="pt-2 text-3 font-weight-bold text-color-dark ms-3">
                                        <strong class="mb-0 d-block font-weight-bold text-10">100+</strong>
                                        Satisfied Clients
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-7 col-md-8">
                                <blockquote class="pt-1 pb-2 m-0 custom-blockquote-style-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1200">
                                    <p class="mb-0">Empowering businesses with custom web scraping solutions that deliver accurate, timely data.</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="row row-gutter-sm align-items-center">
                            <div class="col-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1400">
                                <a href="" class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-3 btn-py-2 text-3-5" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>Get a Quote</span></a>
                            </div>
                            <div class="col-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1600">
                                <a href="" class="btn btn-dark custom-btn-style-1 font-weight-semibold btn-px-3 btn-py-2 text-3-5" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>Contact Us</span></a>
                            </div>
                            <div class="col-auto mt-4 mt-sm-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1800">
                                <span class="p-0 d-flex align-items-center">
                                    <span>
                                        <img width="25" height="25" src="{{ asset('frontend/img/demos/business-consulting-3/icons/phone.svg') }}" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}" />
                                    </span>
                                    <a class="text-color-dark text-color-hover-primary text-decoration-none font-weight-semibold text-3 ms-2" href="tel:8801773301138">(800)1773301138</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-gutter-sm">
            <div class="mb-4 col-sm-6 mb-sm-0">
                <img src="{{ asset('frontend/img/demos/business-consulting-3/generic/generic-5.jpg') }}" class="img-fluid box-shadow-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800" alt="" />
            </div>
            <div class="col-6 col-sm-3">
                <img src="{{ asset('frontend/img/demos/business-consulting-3/generic/generic-1.jpg') }}" class="img-fluid box-shadow-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600" alt="" />
            </div>
            <div class="col-6 col-sm-3">
                <img src="{{ asset('frontend/img/demos/business-consulting-3/generic/generic-2.jpg') }}" class="mb-4 img-fluid box-shadow-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" alt="" />
                <img src="{{ asset('frontend/img/demos/business-consulting-3/generic/generic-3.jpg') }}" class="img-fluid box-shadow-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" alt="" />
            </div>
        </div>
    </div>

    <section class="pt-5 pb-5 mt-5 mb-0 section section-height-4 section-with-shape-divider bg-color-grey" style="border-top: none !important;">
        <div class="shape-divider" style="height: 123px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "/>
                <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "/>
            </svg>
        </div>
        <div class="container pt-5 pb-5">
            <div class="row align-items-center">
                <div class="mb-4 col-lg-4 pe-lg-5 mb-lg-0">
                    <img src="{{ asset('frontend/img/team/founder.jpg') }}" class="img-fluid rounded-circle" alt="Kafi - Founder of Scrape Niche">
                </div>
                <div class="col-lg-8">
                    <h2 class="mb-4 text-7 line-height-3 text-transform-none font-weight-semibold">A Message from the Founder</h2>
                    <p class="pb-3 text-3-5">Hi, I'm Kafi, a professional software developer since 2021 and the founder of Scrape Niche. My journey in software development began during the global pandemic in 2020, where I transformed a challenging time into an opportunity for growth and innovation.</p>

                    <p class="pb-3 text-3-5">With a background in Electronics and Communication Engineering from Hajee Mohammad Danesh Science and Technology University and years of experience in web development, I've witnessed firsthand the growing need for efficient data collection solutions. My work with European IT Solutions and experience as a freelancer on platforms like Fiverr and Upwork has shown me the diverse challenges businesses face when trying to gather and utilize web data.</p>

                    <div class="pb-3 row">
                        <div class="col-lg-6">
                            <h3 class="mb-2 text-4 line-height-8 font-weight-semibold">Why Scrape Niche?</h3>
                            <p class="text-3">The inspiration for Scrape Niche came from my recent journey into Python web development and web scraping. I noticed that most projects required real-world data, yet existing solutions weren't flexible enough to handle diverse website structures. By combining AI with web scraping technology, we've created a solution that adapts to any data collection challenge.</p>
                        </div>
                        <div class="col-lg-6">
                            <h3 class="mb-2 text-4 line-height-8 font-weight-semibold">Our Promise</h3>
                            <p class="text-3">Scrape Niche isn't just another web scraping tool – it's your partner in data collection. We provide tailored scripts, secure data storage, and a user-friendly platform that puts you in control. Whether you're a small business or a large enterprise, we're here to transform the way you gather and utilize web data.</p>
                        </div>
                    </div>

                    <blockquote class="custom-blockquote-style-1">
                        <p class="mb-0 text-4">"My vision for Scrape Niche is to be the ultimate solution for all scraping needs. We're not just hosting scripts; we're building a comprehensive platform that empowers businesses to collect, store, and utilize data efficiently. Together, we're making web data collection accessible, reliable, and powerful."</p>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="shape-divider shape-divider-bottom shape-divider-reverse-x" style="height: 123px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "/>
                <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "/>
            </svg>
        </div>
    </section>

    @include('frontend.home.sections.logos')

    <section class="pb-5 m-0 border-0 section section-height-4 section-with-shape-divider bg-color-grey">
        <div class="shape-divider" style="height: 123px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "/>
                <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "/>
            </svg>
        </div>
        <div class="container pb-5">
            <div class="py-2 my-5 row align-items-center mb-lg-0 my-xl-5">
                <div class="mb-5 col-lg-7 mb-lg-0">
                    <h2 class="mb-4 text-9 line-height-3 text-transform-none font-weight-semibold">Capabilities That Drive Your Data Collection Success</h2>
                    <p class="pb-3 mb-4 text-3-5">Our expertise in web scraping and data collection enables businesses to make informed decisions based on accurate, real-time data.</p>
                    <div class="pb-5 progress-bars">
                        <div class="progress-label d-flex justify-content-between">
                            <span class="text-color-dark font-weight-semibold text-2">CUSTOM SCRIPT DEVELOPMENT</span>
                            <span class="text-color-dark font-weight-semibold text-2">95%</span>
                        </div>
                        <div class="mb-4 progress progress-xs progress-no-border-radius bg-color-grey-200">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="95%"></div>
                        </div>

                        <div class="pt-2 progress-label d-flex justify-content-between">
                            <span class="text-color-dark font-weight-semibold text-2">DATA ACCURACY</span>
                            <span class="text-color-dark font-weight-semibold text-2">90%</span>
                        </div>
                        <div class="mb-4 progress progress-xs progress-no-border-radius bg-color-grey-200">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="90%"></div>
                        </div>

                        <div class="pt-2 progress-label d-flex justify-content-between">
                            <span class="text-color-dark font-weight-semibold text-2">CLIENT SATISFACTION</span>
                            <span class="text-color-dark font-weight-semibold text-2">85%</span>
                        </div>
                        <div class="mb-4 progress progress-xs progress-no-border-radius bg-color-grey-200">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('frontend/img/demos/business-consulting-3/generic/generic-4-grey.jpg') }}" class="img-fluid" alt="" data-img-suffix-primary />
                </div>
            </div>
        </div>
        <div class="shape-divider shape-divider-bottom shape-divider-reverse-x" style="height: 123px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "/>
                <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "/>
            </svg>
        </div>
    </section>

    <div class="container py-5 mb-5">
        <div class="row">
            <div class="col">
                <div class="tabs tabs-bottom tabs-center tabs-simple custom-tabs-style-1">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#tabsNavigationManifesto" data-bs-toggle="tab">Manifesto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabsNavigationVision" data-bs-toggle="tab">Vision</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabsNavigationMission" data-bs-toggle="tab">Mission</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabsNavigationManifesto">
                            <div class="text-center">
                                <p class="text-3-5">At Scrape Niche, we believe in empowering businesses with accurate, timely, and relevant data. Our custom web scraping solutions are built on the foundation of flexibility, reliability, and user control.</p>
                                <p class="text-3">We understand that every business has unique data requirements, which is why we create personalized scraping scripts that perfectly match your needs. Our commitment to excellence ensures that you get exactly the data you need, when you need it.</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabsNavigationVision">
                            <div class="text-center">
                                <p class="text-3-5">Our vision is to become the leading provider of custom web scraping solutions, making data collection accessible and efficient for businesses of all sizes.</p>
                                <p class="text-3">We strive to continuously innovate and improve our services, ensuring that our clients always have access to the most effective and reliable data collection tools.</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabsNavigationMission">
                            <div class="text-center">
                                <p class="text-3-5">Our mission is to simplify web data collection through custom-built scraping scripts and user-friendly tools that empower businesses to make data-driven decisions.</p>
                                <p class="text-3">We are committed to providing exceptional service, maintaining high data accuracy, and ensuring complete client satisfaction through our tailored solutions and comprehensive support.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
