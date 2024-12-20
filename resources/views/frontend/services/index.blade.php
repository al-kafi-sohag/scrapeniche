@extends('frontend.layouts.master')

@section('title', 'Our Services - ScrapeNiche')

@push('css')
<style>
    .feature-box-icon {
        align-items: center !important;
        justify-content: center !important;
    }
    .custom-icon-box {
        padding: 30px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>
@endpush

@section('content')

<section class="my-0 border-0 section section-with-shape-divider page-header page-header-modern page-header-lg lazyload"
    data-bg-src="img/demos/business-consulting-3/backgrounds/background-5.jpg"
    style="background-size: cover; background-position: center;">
    <div class="container pb-5 my-3">
        <div class="mb-4 row">
            <div class="order-2 mt-2 mb-2 text-center col-md-12 align-self-center p-static">
                <h1 class="font-weight-bold text-color-dark text-12">Custom Web Scraping Solutions</h1>
                <p class="text-4 text-color-dark opacity-7">Tailored Data Extraction Services for Your Business</p>
            </div>
            <div class="order-1 mt-2 mb-2 col-md-12 align-self-center">
                <ul class="text-center breadcrumb d-block">
                    <li><a href="{{ route('f.home') }}">Home</a></li>
                    <li class="active">Services</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shape-divider shape-divider-bottom shape-divider-reverse-x" style="height: 123px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
            <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 " />
            <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 " />
        </svg>
    </div>
</section>

<div class="container pt-5 mt-4">
    <div class="mb-5 row align-items-center">
        <div class="col-lg-8 offset-lg-2 text-center">
            <p class="mb-1 text-uppercase font-weight-semibold text-color-primary appear-animation"
                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">
                <span class="line-pre-title bg-color-primary"></span>Welcome to ScrapeNiche
            </p>
            <h2 class="mb-4 text-color-secondary font-weight-bold text-capitalize custom-letter-spacing-2 custom-text-1 appear-animation"
                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                Your Partner in Data Extraction
            </h2>
            <p class="text-3-5 appear-animation" data-appear-animation="fadeInRightShorter"
                data-appear-animation-delay="300">
                We create personalized web scraping solutions that adapt to your unique business needs, helping you
                collect, manage, and utilize web data effortlessly.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="mb-5 accordion custom-accordion-style-1 appear-animation"
                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" id="accordionServices">

                <!-- Industry Solutions -->
                <div class="mb-3 card card-custom">
                    <div class="card-header">
                        <h4 class="m-0 card-title">
                            <a class="accordion-toggle text-color-primary font-weight-bold" data-bs-toggle="collapse"
                                data-bs-parent="#accordionServices" href="#collapseIndustries">
                                <i class="fas fa-industry me-2"></i>Industry-Specific Solutions
                            </a>
                        </h4>
                    </div>
                    <div id="collapseIndustries" class="collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="mb-5 text-center text-3-5">We serve diverse industries with specialized
                                        scraping solutions tailored to specific sector needs.</p>
                                </div>
                            </div>
                            <div class="mt-3 row justify-content-center">
                                <div class="mb-5 col-md-6 col-lg-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                                    <div
                                        class="p-4 text-center rounded-lg feature-box feature-box-style-4 h-100 bg-light-5 hover-effect-1">
                                        <div class="mb-3 feature-box-icon">
                                            <i class="fas fa-shopping-cart text-color-primary text-8"></i>
                                        </div>
                                        <div class="feature-box-info">
                                            <h4 class="mb-3 text-color-dark font-weight-bold">E-commerce</h4>
                                            <p class="text-color-dark-3">Extract product listings, pricing data, and
                                                customer reviews for competitive analysis</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5 col-md-6 col-lg-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                    <div
                                        class="p-4 text-center rounded-lg feature-box feature-box-style-4 h-100 bg-light-5 hover-effect-1">
                                        <div class="mb-3 feature-box-icon">
                                            <i class="fas fa-chart-pie text-color-primary text-8"></i>
                                        </div>
                                        <div class="feature-box-info">
                                            <h4 class="mb-3 text-color-dark font-weight-bold">Market Research</h4>
                                            <p class="text-color-dark-3">Gather industry trends, competitor analysis,
                                                and consumer sentiment data</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5 col-md-6 col-lg-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                    <div
                                        class="p-4 text-center rounded-lg feature-box feature-box-style-4 h-100 bg-light-5 hover-effect-1">
                                        <div class="mb-3 feature-box-icon">
                                            <i class="fas fa-home text-color-primary text-8"></i>
                                        </div>
                                        <div class="feature-box-info">
                                            <h4 class="mb-3 text-color-dark font-weight-bold">Real Estate</h4>
                                            <p class="text-color-dark-3">Collect property listings, pricing data, and
                                                market trends analysis</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5 col-md-6 col-lg-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                    <div
                                        class="p-4 text-center rounded-lg feature-box feature-box-style-4 h-100 bg-light-5 hover-effect-1">
                                        <div class="mb-3 feature-box-icon">
                                            <i class="fas fa-newspaper text-color-primary text-8"></i>
                                        </div>
                                        <div class="feature-box-info">
                                            <h4 class="mb-3 text-color-dark font-weight-bold">News & Media</h4>
                                            <p class="text-color-dark-3">Monitor news articles and online publications
                                                for specific topics</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5 col-md-6 col-lg-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                                    <div
                                        class="p-4 text-center rounded-lg feature-box feature-box-style-4 h-100 bg-light-5 hover-effect-1">
                                        <div class="mb-3 feature-box-icon">
                                            <i class="fas fa-dollar-sign text-color-primary text-8"></i>
                                        </div>
                                        <div class="feature-box-info">
                                            <h4 class="mb-3 text-color-dark font-weight-bold">Finance</h4>
                                            <p class="text-color-dark-3">Retrieve financial reports, stock data, and
                                                economic indicators</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5 col-md-6 col-lg-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                    <div
                                        class="p-4 text-center rounded-lg feature-box feature-box-style-4 h-100 bg-light-5 hover-effect-1">
                                        <div class="mb-3 feature-box-icon">
                                            <i class="fas fa-plane text-color-primary text-8"></i>
                                        </div>
                                        <div class="feature-box-info">
                                            <h4 class="mb-3 text-color-dark font-weight-bold">Travel & Hospitality</h4>
                                            <p class="text-color-dark-3">Scrape travel deals, hotel prices, and user
                                                reviews</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5 col-md-6 col-lg-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                                    <div
                                        class="p-4 text-center rounded-lg feature-box feature-box-style-4 h-100 bg-light-5 hover-effect-1">
                                        <div class="mb-3 feature-box-icon">
                                            <i class="fas fa-graduation-cap text-color-primary text-8"></i>
                                        </div>
                                        <div class="feature-box-info">
                                            <h4 class="mb-3 text-color-dark font-weight-bold">Academic Research</h4>
                                            <p class="text-color-dark-3">Collect data for studies, surveys, and academic
                                                projects</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5 col-md-6 col-lg-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                                    <div
                                        class="p-4 text-center rounded-lg feature-box feature-box-style-4 h-100 bg-light-5 hover-effect-1">
                                        <div class="mb-3 feature-box-icon">
                                            <i class="fas fa-microscope text-color-primary text-8"></i>
                                        </div>
                                        <div class="feature-box-info">
                                            <h4 class="mb-3 text-color-dark font-weight-bold">Research Analysis</h4>
                                            <p class="text-color-dark-3">Support in-depth analysis with comprehensive
                                                data collection</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Custom Web Scraping Scripts -->
                <div class="mb-3 card card-custom">
                    <div class="card-header">
                        <h4 class="m-0 card-title">
                            <a class="accordion-toggle text-color-primary font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-parent="#accordionServices"
                                href="#collapseCustomScripts">
                                <i class="fas fa-robot me-2"></i>Custom Web Scraping Scripts
                            </a>
                        </h4>
                    </div>
                    <div id="collapseCustomScripts" class="collapse">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <p class="mb-4 text-3-5">Get tailor-made scraping solutions designed specifically
                                        for your data needs. Our custom scripts ensure precise data extraction while
                                        maintaining efficiency and reliability.</p>
                                    <ul class="list list-icons list-primary">
                                        <li class="appear-animation" data-appear-animation="fadeInUpShorter"
                                            data-appear-animation-delay="100">
                                            <i class="fas fa-check"></i> Personalized script development
                                        </li>
                                        <li class="appear-animation" data-appear-animation="fadeInUpShorter"
                                            data-appear-animation-delay="200">
                                            <i class="fas fa-check"></i> Flexible data extraction patterns
                                        </li>
                                        <li class="appear-animation" data-appear-animation="fadeInUpShorter"
                                            data-appear-animation-delay="300">
                                            <i class="fas fa-check"></i> Regular updates and maintenance
                                        </li>
                                        <li class="appear-animation" data-appear-animation="fadeInUpShorter"
                                            data-appear-animation-delay="400">
                                            <i class="fas fa-check"></i> Download and run locally
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-center col-lg-5">
                                    <div class="custom-icon-box">
                                        <i class="fas fa-robot text-color-primary text-12 mb-3"></i>
                                        <p class="text-4 text-color-dark">Automated Data Extraction</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Advanced Dashboard -->
                <div class="mb-3 card card-custom">
                    <div class="card-header">
                        <h4 class="m-0 card-title">
                            <a class="accordion-toggle text-color-primary font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-parent="#accordionServices" href="#collapseDashboard">
                                <i class="fas fa-chart-line me-2"></i>Advanced User Dashboard
                            </a>
                        </h4>
                    </div>
                    <div id="collapseDashboard" class="collapse">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <p class="mb-4 text-3-5">Manage your scraping tasks efficiently through our
                                        intuitive dashboard. Schedule runs, view results, and organize your data all in
                                        one place.</p>
                                    <ul class="list list-icons list-primary">
                                        <li class="appear-animation" data-appear-animation="fadeInUpShorter"
                                            data-appear-animation-delay="100">
                                            <i class="fas fa-check"></i> User-friendly interface
                                        </li>
                                        <li class="appear-animation" data-appear-animation="fadeInUpShorter"
                                            data-appear-animation-delay="200">
                                            <i class="fas fa-check"></i> Task scheduling
                                        </li>
                                        <li class="appear-animation" data-appear-animation="fadeInUpShorter"
                                            data-appear-animation-delay="300">
                                            <i class="fas fa-check"></i> Data visualization
                                        </li>
                                        <li class="appear-animation" data-appear-animation="fadeInUpShorter"
                                            data-appear-animation-delay="400">
                                            <i class="fas fa-check"></i> Export in multiple formats
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-center col-lg-5">
                                    <div class="custom-icon-box">
                                        <i class="fas fa-chart-line text-color-primary text-12 mb-3"></i>
                                        <p class="text-4 text-color-dark">Smart Analytics Dashboard</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

@endsection
