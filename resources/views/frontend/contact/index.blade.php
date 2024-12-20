@extends('frontend.layouts.master')

@section('title', 'Contact Us - ScrapeNiche')

@push('css')
<style>
    .contact-info-box {
        padding: 30px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 100%;
        border: 1px solid rgba(25, 143, 217, 0.1);
    }

    .contact-info-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
    }

    .contact-info-box i {
        font-size: 2.5rem;
        color: #198fd9;
        margin-bottom: 20px;
        display: inline-block;
        padding: 15px;
        background: rgba(25, 143, 217, 0.1);
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .contact-info-box:hover i {
        background: #198fd9;
        color: #fff;
        transform: rotateY(360deg);
    }

    .contact-info-box h4 {
        color: #333;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .contact-info-box p {
        color: #666;
        margin-bottom: 0;
        line-height: 1.6;
    }

    .contact-form {
        background: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .contact-form label {
        color: #333;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .contact-form .form-control {
        border: 2px solid #e9ecef;
        padding: 12px 15px;
        height: auto;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .contact-form .form-control:focus {
        border-color: #198fd9;
        box-shadow: none;
    }

    .contact-form textarea.form-control {
        min-height: 150px;
    }

    .custom-badge {
        background: linear-gradient(135deg, #198fd9, #0d6efd);
        color: #fff;
        padding: 8px 20px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 500;
        display: inline-block;
        margin-bottom: 20px;
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
                <h1 class="font-weight-bold text-color-dark text-12">Get in Touch</h1>
                <p class="text-4 text-color-dark opacity-7">We're Here to Help You Transform Your Data Collection</p>
            </div>
            <div class="order-1 mt-2 mb-2 col-md-12 align-self-center">
                <ul class="text-center breadcrumb d-block">
                    <li><a href="{{ route('f.home') }}">Home</a></li>
                    <li class="active">Contact</li>
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
    <!-- Contact Info Boxes -->
    <div class="mb-5 row">
        <div class="mb-4 col-lg-6 mb-lg-0">
            <div class="text-center contact-info-box">
                <i class="fab fa-whatsapp"></i>
                <h4>WhatsApp</h4>
                <p><a href="https://wa.me/8801773301138" target="_blank" class="text-color-default text-decoration-none">(880) 01773301138</a></p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="text-center contact-info-box">
                <i class="fas fa-envelope"></i>
                <h4>Email Us</h4>
                <p><a href="mailto:ceo@scrapeniche.com" class="text-color-default text-decoration-none">ceo@scrapeniche.com</a></p>
            </div>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div class="row align-items-center">
        <div class="mb-5 col-lg-6 mb-lg-0">
            <div class="pe-lg-5">
                <span class="custom-badge">Contact Us</span>
                <h2 class="mb-4 font-weight-bold text-color-dark text-7">Ready to Start Your Project?</h2>
                <p class="mb-4 text-4">Let's discuss your web scraping needs. Our team of experts is ready to help you
                    create the perfect solution for your data collection requirements.</p>

                <div class="mb-4 row">
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="fas fa-check text-color-primary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-2 font-weight-bold text-4">Custom Solutions</h4>
                                <p>Tailored to your needs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="fas fa-check text-color-primary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-2 font-weight-bold text-4">Quick Response</h4>
                                <p>24/7 support available</p>
                            </div>
                        </div>
                    </div>
                </div>

                <blockquote class="custom-blockquote bg-color-light">
                    <p class="mb-0 font-italic">Join hundreds of satisfied clients who trust ScrapeNiche for their data
                        collection needs.</p>
                </blockquote>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="contact-form">
                <form id="contactForm" class="contact-form" action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-modern">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('frontend.home.sections.how-we-work')
@endsection

@push('js')
<script>
    $(document).ready(function() {
        // Form validation and submission handling
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            // Add your form submission logic here
            // You can use AJAX to submit the form data
        });
    });
</script>
@endpush
