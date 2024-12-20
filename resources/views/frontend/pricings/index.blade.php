@extends('frontend.layouts.master')

@section('title', 'Pricing Plans - ScrapeNiche')

@push('css')
<style>
    .pricing-box {
        border-radius: 20px;
        transition: all 0.4s ease;
        background: #fff;
        height: 100%;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(25, 143, 217, 0.1);
    }

    .pricing-box.featured {
        transform: scale(1.02);
        border: 2px solid #198fd9;
        z-index: 2;
    }

    .pricing-box:hover {
        transform: translateY(-15px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .pricing-header {
        padding: 35px 25px;
        color: #fff !important;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .pricing-header.demo {
        background: linear-gradient(135deg, #2196F3, #1976D2);
    }

    .pricing-header.custom {
        background: linear-gradient(135deg, #1976D2, #0D47A1);
    }

    .pricing-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%);
        transform: skewY(-4deg);
    }

    .pricing-header h3 {
        font-size: 28px;
        color: #fff !important;
        margin-bottom: 15px;
        position: relative;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 700;
    }

    .pricing-header p {
        opacity: 0.9;
        color: #fff !important;
        font-size: 16px;
        margin: 0;
        letter-spacing: 1px;
    }

    .pricing-body {
        padding: 40px 30px;
        background: #fff;
    }

    .price-tag {
        text-align: center;
        margin: 25px 0 35px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .price-value {
        font-size: 3.5rem;
        font-weight: 700;
        color: #1976D2;
        line-height: 1;
        margin-bottom: 10px;
    }

    .price-label {
        font-size: 1.2rem;
        color: #666;
        text-transform: uppercase;
        letter-spacing: 2px;
        background: rgba(25, 118, 210, 0.1);
        padding: 5px 15px;
        border-radius: 20px;
        margin-top: 10px;
    }

    .price-period {
        font-size: 1rem;
        color: #888;
        margin-top: 5px;
    }

    .feature-list {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .feature-list li {
        padding: 12px 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        color: #555;
        font-size: 15px;
        display: flex;
        align-items: center;
    }

    .feature-list li:last-child {
        border-bottom: none;
    }

    .feature-list li i {
        color: #1976D2;
        margin-right: 12px;
        font-size: 16px;
        background: rgba(25, 118, 210, 0.1);
        padding: 6px;
        border-radius: 50%;
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .pricing-footer {
        padding: 20px 30px 40px;
        text-align: center;
    }

    .pricing-footer .btn {
        padding: 12px 35px;
        border-radius: 30px;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
        transition: all 0.3s ease;
        background: linear-gradient(135deg, #2196F3, #1976D2);
        border: none;
    }

    .pricing-footer .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(25, 118, 210, 0.3);
        background: linear-gradient(135deg, #1976D2, #0D47A1);
    }

    .custom-badge {
        position: absolute;
        top: 20px;
        right: -35px;
        transform: rotate(45deg);
        background: linear-gradient(135deg, #4CAF50, #388E3C);
        color: #fff;
        padding: 8px 40px;
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 2px 10px rgba(76, 175, 80, 0.2);
    }
</style>
@endpush

@section('content')
<section class="my-0 border-0 section section-with-shape-divider page-header page-header-modern page-header-lg lazyload"
    data-bg-src="{{ asset('frontend/img/demos/business-consulting-3/backgrounds/background-5.jpg') }}"
    style="background-size: cover; background-position: center;">
    <div class="container pb-5 my-3">
        <div class="mb-4 row">
            <div class="order-2 mt-2 mb-2 text-center col-md-12 align-self-center p-static">
                <h1 class="font-weight-bold text-color-dark text-12">Simple, Transparent Pricing</h1>
                <p class="text-4 text-color-dark opacity-7">Choose the Perfect Plan for Your Data Needs</p>
            </div>
            <div class="order-1 mt-2 mb-2 col-md-12 align-self-center">
                <ul class="text-center breadcrumb d-block">
                    <li><a href="{{ route('f.home') }}">Home</a></li>
                    <li class="active">Pricing</li>
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
    <!-- Value Proposition -->
    <div class="mb-5 text-center row">
        <div class="mx-auto col-md-10">
            <div class="overflow-hidden mb-3">
                <h2 class="pt-0 mt-0 mb-0 text-color-dark font-weight-bold text-8 appear-animation"
                    data-appear-animation="maskUp" data-appear-animation-delay="100">
                    Transform Your Data Collection Strategy
                </h2>
            </div>
            <p class="mb-0 text-4 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="200">
                Get started with our powerful web scraping solution today and unlock the potential of automated data
                extraction
            </p>
        </div>
    </div>

    <!-- Pricing Plans -->
    <div class="mb-5 row">
        <!-- Demo Plan -->
        <div class="mb-4 col-md-6 col-lg-6 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="200">
            <div class="pricing-box">
                <div class="pricing-header demo">
                    <h3>Demo Version</h3>
                    <p>Perfect for Testing</p>
                </div>
                <div class="pricing-body">
                    <div class="price-tag">
                        <div class="price-value">FREE</div>
                        <div class="price-period">No Credit Card Required</div>
                    </div>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Basic Scraping Capabilities</li>
                        <li><i class="fas fa-check"></i> Sample Dashboard Access</li>
                        <li><i class="fas fa-check"></i> 100 Requests per Day</li>
                        <li><i class="fas fa-check"></i> Basic Support</li>
                        <li><i class="fas fa-check"></i> Export to CSV</li>
                    </ul>
                </div>
                <div class="pricing-footer">
                    <a href="#" class="btn btn-primary btn-modern">
                        Try Demo
                    </a>
                </div>
            </div>
        </div>

        <!-- Custom Plan -->
        <div class="mb-4 col-md-6 col-lg-6 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="400">
            <div class="pricing-box featured">
                <div class="custom-badge">Popular</div>
                <div class="pricing-header custom">
                    <h3>Custom Solution</h3>
                    <p>Tailored to Your Needs</p>
                </div>
                <div class="pricing-body">
                    <div class="price-tag">
                        <div class="price-value">Starting at</div>
                        <div class="price-label">$50</div>
                        <div class="price-period">Custom Development</div>
                    </div>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Custom Script Development</li>
                        <li><i class="fas fa-check"></i> Advanced Dashboard</li>
                        <li><i class="fas fa-check"></i> Unlimited Requests</li>
                        <li><i class="fas fa-check"></i> Priority Support</li>
                        <li><i class="fas fa-check"></i> Multiple Export Formats</li>
                        <li><i class="fas fa-check"></i> API Access</li>
                        <li><i class="fas fa-check"></i> Custom Features</li>
                    </ul>
                </div>
                <div class="pricing-footer">
                    <a href="#" class="btn btn-primary btn-modern">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="mt-5 row">
        <div class="m-auto col-lg-12 offset-lg-2">
            <div class="overflow-hidden mb-4">
                <h2 class="pt-0 mt-0 mb-0 text-color-dark font-weight-bold text-7 appear-animation"
                    data-appear-animation="maskUp" data-appear-animation-delay="100">
                    Why Choose Our Custom Solution?
                </h2>
            </div>

            <div class="mt-4 row">
                <div class="col-md-6 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="fas fa-cogs text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="mb-2 font-weight-bold text-4">Tailored Development</h4>
                            <p>Custom scripts designed specifically for your data extraction needs</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="fas fa-clock text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="mb-2 font-weight-bold text-4">Time-Saving</h4>
                            <p>Automate your data collection and focus on analysis</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 row">
                <div class="col-md-6 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="400">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="fas fa-headset text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="mb-2 font-weight-bold text-4">Dedicated Support</h4>
                            <p>Expert assistance and regular maintenance included</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="500">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="fas fa-shield-alt text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="mb-2 font-weight-bold text-4">Secure & Reliable</h4>
                            <p>Enterprise-grade security and dependable performance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="mt-5 row">
        <div class="m-auto col-lg-12 offset-lg-2">
            <div class="overflow-hidden mb-4">
                <h2 class="pt-0 mt-0 mb-0 text-color-dark font-weight-bold text-7 appear-animation"
                    data-appear-animation="maskUp" data-appear-animation-delay="100">
                    Frequently Asked Questions
                </h2>
            </div>

            <div class="accordion custom-accordion-style-1 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="200" id="pricingFAQ">
                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="m-0 card-title">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false">
                                What's included in the demo version?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="collapse" data-bs-parent="#pricingFAQ">
                        <div class="card-body">
                            <p class="mb-0">Our demo version includes basic scraping capabilities, sample dashboard
                                access,
                                and limited daily requests to help you evaluate our service.</p>
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="m-0 card-title">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false">
                                How is custom pricing calculated?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse2" class="collapse" data-bs-parent="#pricingFAQ">
                        <div class="card-body">
                            <p class="mb-0">Custom pricing is based on factors such as data volume, complexity of
                                extraction,
                                frequency of updates, and specific features needed for your project.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.home.sections.how-we-work')
@endsection
