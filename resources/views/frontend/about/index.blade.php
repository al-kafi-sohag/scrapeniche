@extends('frontend.layouts.master')

@section('title', 'About Us')

@section('content')

<div role="main" class="main">
    <section
        class="my-0 border-0 section section-with-shape-divider page-header page-header-modern page-header-lg lazyload"
        data-bg-src="{{ asset('frontend/img/demos/business-consulting-3/backgrounds/background-5.jpg') }}"
        style="background-size: cover; background-position: center;">
        <div class="container pb-5 my-3">
            <div class="mb-4 row">
                <div class="order-2 text-center col-md-12 align-self-center p-static">
                    <h1 class="font-weight-bold text-color-dark text-10">Transforming Data Collection Through Innovation
                    </h1>
                    <p class="text-4 text-color-dark opacity-7">Custom Web Scraping Solutions for Modern Businesses</p>
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
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 " />
                <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 " />
            </svg>
        </div>
    </section>

    <div class="container pt-3 mt-4">
        <div class="row">
            <div class="col">
                <h2 class="mb-4 text-9 text-lg-5 text-xl-9 line-height-3 text-transform-none font-weight-semibold mb-lg-3 mb-xl-4 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Empowering Businesses with
                    Intelligent Data Collection</h2>
                <p class="text-3-5 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="500">At Scrape Niche, we revolutionize data collection with AI-powered
                    web scraping solutions that adapt to your unique business requirements. Our platform combines
                    cutting-edge technology with expert support to deliver reliable, scalable data extraction services.
                </p>
                <p class="mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="750">From e-commerce insights to market research, our intelligent
                    scraping solutions provide you with accurate, real-time data through a user-friendly dashboard.
                    Experience the power of automated data collection with professional support at every step.</p>
                <div class="pb-3 mb-5 row row-gutter-sm align-items-center">
                    <div class="col-lg-6 col-xl-7">
                        <div class="mb-4 row flex-xl-nowrap align-items-center mb-lg-0">
                            <div class="mb-4 col-sm-auto mb-sm-0">
                                <div class="d-flex appear-animation" data-appear-animation="fadeInRightShorter"
                                    data-appear-animation-delay="1000">
                                    <img width="63" height="63"
                                        src="{{ asset('frontend/img/demos/business-consulting-3/icons/label.svg') }}"
                                        alt="ScrapeNiche Project Success Metrics - 100+ Projects Delivered" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'd-lg-none d-xl-block'}" />
                                    <div class="ms-3">
                                        <strong class="mb-1 d-block font-weight-bold text-10">100+</strong>
                                        <span class="text-3 font-weight-bold text-color-dark">Projects Delivered</span>
                                        <p class="mb-0 text-2">Across 20+ Industries</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7 col-md-8">
                                <blockquote class="pt-1 pb-2 m-0 custom-blockquote-style-1 appear-animation"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1200">
                                    <p class="mb-0">Delivering precise, actionable data that drives business growth and
                                        innovation.</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="row row-gutter-sm align-items-center">
                            <div class="col-auto appear-animation" data-appear-animation="fadeInRightShorter"
                                data-appear-animation-delay="1400">
                                <a href="{{ route('f.contact') }}"
                                    class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                                    data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                                    <span>Start Your Project</span>
                                </a>
                            </div>
                            <div class="col-auto appear-animation" data-appear-animation="fadeInRightShorter"
                                data-appear-animation-delay="1600">
                                <a href="{{ route('f.contact') }}"
                                    class="btn btn-dark custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                                    data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                                    <span>Schedule Demo</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5 m-0 border-0 section bg-color-light">
        <div class="container">
            <div class="pb-5 text-center row">
                <div class="mb-4 col-md-4 mb-md-0">
                    <div class="d-flex flex-column align-items-center">
                        <strong class="mb-2 text-color-dark font-weight-extra-bold text-12 line-height-1">50+</strong>
                        <label class="mb-0 text-4 font-weight-medium text-color-dark">Active Clients</label>
                    </div>
                </div>
                <div class="mb-4 col-md-4 mb-md-0">
                    <div class="d-flex flex-column align-items-center">
                        <strong class="mb-2 text-color-dark font-weight-extra-bold text-12 line-height-1">100%</strong>
                        <label class="mb-0 text-4 font-weight-medium text-color-dark">Success Rate</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column align-items-center">
                        <strong class="mb-2 text-color-dark font-weight-extra-bold text-12 line-height-1">24/7</strong>
                        <label class="mb-0 text-4 font-weight-medium text-color-dark">Support Available</label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pb-5 mt-5 mb-0 section section-height-4 section-with-shape-divider bg-color-grey"
        style="border-top: none !important;">
        <div class="shape-divider" style="height: 123px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 " />
                <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 " />
            </svg>
        </div>
        <div class="container pt-5 pb-5">
            <div class="row align-items-center">
                <div class="mb-4 col-lg-4 pe-lg-5 mb-lg-0">
                    <img src="{{ asset('frontend/img/team/founder.png') }}" class="img-fluid rounded-circle"
                        alt="Kafi - Founder of Scrape Niche">
                </div>
                <div class="col-lg-8">
                    <h2 class="mb-4 text-7 line-height-3 text-transform-none font-weight-semibold">Leadership & Vision
                    </h2>
                    <p class="pb-3 text-3-5">As the founder of Scrape Niche, I combine my expertise in software
                        development with a passion for innovation to deliver cutting-edge web scraping solutions. With a
                        background in Electronics and Communication Engineering and years of experience in web
                        development, I understand the critical role that accurate data plays in business success.</p>

                    <div class="pb-3 row">
                        <div class="col-lg-6">
                            <h3 class="mb-2 text-4 line-height-8 font-weight-semibold">Our Approach</h3>
                            <p class="text-3">We leverage AI and advanced web scraping technology to create adaptive
                                solutions that handle complex data extraction challenges. Our platform is built on the
                                principles of flexibility, reliability, and user empowerment, ensuring you get exactly
                                the data you need.</p>
                        </div>
                        <div class="col-lg-6">
                            <h3 class="mb-2 text-4 line-height-8 font-weight-semibold">Our Impact</h3>
                            <p class="text-3">From helping e-commerce businesses track market trends to enabling
                                researchers access to vital data, we've transformed how organizations collect and
                                utilize web data. Our success is measured by the growth and achievements of our clients.
                            </p>
                        </div>
                    </div>

                    <blockquote class="custom-blockquote-style-1">
                        <p class="mb-0 text-4">"Our mission is to democratize web data access through intelligent
                            automation. We're not just providing scripts; we're building a future where any business can
                            harness the power of web data efficiently and reliably."</p>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="shape-divider shape-divider-bottom shape-divider-reverse-x" style="height: 123px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 " />
                <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 " />
            </svg>
        </div>
    </section>

    @include('frontend.home.sections.logos')
    @include('frontend.home.sections.how-we-work')

    <section class="pb-5 m-0 border-0 section section-height-4 section-with-shape-divider bg-color-grey">
        <div class="shape-divider" style="height: 123px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 " />
                <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 " />
            </svg>
        </div>
        <div class="container pb-5">
            <div class="py-2 my-5 row align-items-center mb-lg-0 my-xl-5">
                <div class="mb-5 col-lg-7 mb-lg-0">
                    <h2 class="mb-4 text-9 line-height-3 text-transform-none font-weight-semibold">Capabilities That
                        Drive Your Data Collection Success</h2>
                    <p class="pb-3 mb-4 text-3-5">Our expertise in web scraping and data collection enables businesses
                        to make informed decisions based on accurate, real-time data.</p>
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
                    <img src="{{ asset('frontend/img/demos/business-consulting-3/generic/generic-4-grey.jpg') }}"
                        class="img-fluid" alt="" data-img-suffix-primary />
                </div>
            </div>
        </div>
        <div class="shape-divider shape-divider-bottom shape-divider-reverse-x" style="height: 123px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 " />
                <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 " />
            </svg>
        </div>
    </section>

</div>

@endsection
