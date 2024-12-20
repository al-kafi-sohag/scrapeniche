@extends('frontend.layouts.master')

@section('title', 'Features - ScrapeNiche')

@push('css')
<style>
    .feature-box-icon {
        align-items: center !important;
        justify-content: center !important;
    }

    .custom-feature-box {
        padding: 2rem;
        border-radius: 15px;
        transition: all 0.3s ease;
        height: 100%;
        background: #fff;
        border: 1px solid rgba(0, 0, 0, 0.08);
    }

    .custom-feature-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .feature-icon {
        width: 70px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(25, 143, 217, 0.1);
        margin: 0 auto 1.5rem;
    }

    .feature-icon i {
        font-size: 2rem;
        color: #198fd9;
    }

    .tech-stack-item {
        padding: 1rem;
        border-radius: 10px;
        background: #f8f9fa;
        text-align: center;
        margin-bottom: 1rem;
    }

    .tech-stack-item i {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
        color: #198fd9;
    }
</style>
@endpush

@section('content')
<section class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 lazyload"
    data-bg-src="{{ asset('frontend/img/demos/business-consulting-3/backgrounds/background-5.jpg') }}"
    style="background-size: cover; background-position: center;">
    <div class="container pb-5 my-3">
        <div class="row mb-4">
            <div class="col-md-12 align-self-center p-static order-2 text-center mt-2 mb-2">
                <h1 class="font-weight-bold text-color-dark text-12">Powerful Features</h1>
                <p class="text-4 text-color-dark opacity-7">Advanced Web Scraping Tools at Your Fingertips</p>
            </div>
            <div class="col-md-12 align-self-center order-1 mt-2 mb-2">
                <ul class="breadcrumb d-block text-center">
                    <li><a href="{{ route('f.home') }}">Home</a></li>
                    <li class="active">Features</li>
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

<div class="container py-5">
    <!-- Core Features Section -->
    <div class="row text-center mb-5">
        <div class="col-md-10 mx-auto">
            <div class="overflow-hidden">
                <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation"
                    data-appear-animation="maskUp" data-appear-animation-delay="100">Core Features</h2>
                <p class="text-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">Discover what makes ScrapeNiche your ideal web scraping partner</p>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Custom Scripts -->
        <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="200">
            <div class="custom-feature-box">
                <div class="feature-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h4 class="font-weight-bold text-5 mb-3">Custom Scripts</h4>
                <p class="mb-3">Tailor-made scraping solutions designed specifically for your data needs. Each script is
                    crafted to ensure precise and efficient data extraction.</p>
                <ul class="list list-icons list-primary mb-0">
                    <li><i class="fas fa-check"></i> Personalized Development</li>
                    <li><i class="fas fa-check"></i> Flexible Extraction</li>
                    <li><i class="fas fa-check"></i> Regular Updates</li>
                </ul>
            </div>
        </div>

        <!-- Smart Dashboard -->
        <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="400">
            <div class="custom-feature-box">
                <div class="feature-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <h4 class="font-weight-bold text-5 mb-3">Smart Dashboard</h4>
                <p class="mb-3">Intuitive control panel for managing your scraping tasks, viewing results, and organizing
                    data efficiently.</p>
                <ul class="list list-icons list-primary mb-0">
                    <li><i class="fas fa-check"></i> Task Scheduling</li>
                    <li><i class="fas fa-check"></i> Data Visualization</li>
                    <li><i class="fas fa-check"></i> Export Options</li>
                </ul>
            </div>
        </div>

        <!-- Data Management -->
        <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="600">
            <div class="custom-feature-box">
                <div class="feature-icon">
                    <i class="fas fa-database"></i>
                </div>
                <h4 class="font-weight-bold text-5 mb-3">Data Management</h4>
                <p class="mb-3">Complete control over your scraped data with secure storage, easy access, and flexible
                    organization options.</p>
                <ul class="list list-icons list-primary mb-0">
                    <li><i class="fas fa-check"></i> Secure Storage</li>
                    <li><i class="fas fa-check"></i> Easy Organization</li>
                    <li><i class="fas fa-check"></i> Quick Access</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Technology Stack Section -->
    <div class="row align-items-center mt-5 pt-3">
        <div class="col-lg-6 pe-lg-5 mb-5 mb-lg-0">
            <div class="overflow-hidden">
                <h2 class="text-color-dark font-weight-bold text-7 mb-2 pt-0 mt-0 appear-animation"
                    data-appear-animation="maskUp" data-appear-animation-delay="100">Technology Stack</h2>
                <p class="text-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">Built with cutting-edge technologies to ensure reliability and
                    performance</p>
            </div>

            <div class="row">
                <div class="col-sm-6 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="300">
                    <div class="tech-stack-item">
                        <i class="fab fa-python"></i>
                        <h5 class="font-weight-bold text-4">Python</h5>
                        <p class="mb-0">Core Scraping Engine</p>
                    </div>
                </div>
                <div class="col-sm-6 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="400">
                    <div class="tech-stack-item">
                        <i class="fab fa-laravel"></i>
                        <h5 class="font-weight-bold text-4">Laravel</h5>
                        <p class="mb-0">Web Interface</p>
                    </div>
                </div>
                <div class="col-sm-6 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="500">
                    <div class="tech-stack-item">
                        <i class="fas fa-robot"></i>
                        <h5 class="font-weight-bold text-4">Selenium</h5>
                        <p class="mb-0">Automated Extraction</p>
                    </div>
                </div>
                <div class="col-sm-6 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="600">
                    <div class="tech-stack-item">
                        <i class="fas fa-brain"></i>
                        <h5 class="font-weight-bold text-4">AI Integration</h5>
                        <p class="mb-0">Smart Processing</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Features -->
        <div class="col-lg-6">
            <div class="overflow-hidden mb-4">
                <h2 class="text-color-dark font-weight-bold text-7 mb-2 pt-0 mt-0 appear-animation"
                    data-appear-animation="maskUp" data-appear-animation-delay="100">Additional Features</h2>
            </div>

            <div class="accordion custom-accordion-style-1 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="700" id="additionalFeatures">
                <div class="card card-default">
                    <div class="card-header" id="collapse1HeadingOne">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapse1One" aria-expanded="false" aria-controls="collapse1One">
                                <i class="fas fa-shield-alt me-2"></i>Security & Privacy
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1One" class="collapse" aria-labelledby="collapse1HeadingOne"
                        data-bs-parent="#additionalFeatures">
                        <div class="card-body">
                            <p class="mb-0">Enhanced security measures including data encryption, secure access controls,
                                and regular security audits to protect your data.</p>
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header" id="collapse1HeadingTwo">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapse1Two" aria-expanded="false" aria-controls="collapse1Two">
                                <i class="fas fa-clock me-2"></i>Task Automation
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1Two" class="collapse" aria-labelledby="collapse1HeadingTwo"
                        data-bs-parent="#additionalFeatures">
                        <div class="card-body">
                            <p class="mb-0">Schedule and automate your scraping tasks with our advanced scheduling system.
                                Set intervals and manage multiple tasks efficiently.</p>
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header" id="collapse1HeadingThree">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapse1Three" aria-expanded="false" aria-controls="collapse1Three">
                                <i class="fas fa-file-export me-2"></i>Export Options
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1Three" class="collapse" aria-labelledby="collapse1HeadingThree"
                        data-bs-parent="#additionalFeatures">
                        <div class="card-body">
                            <p class="mb-0">Export your data in multiple formats including CSV, Excel, and JSON. Easy
                                integration with your existing systems and workflows.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
