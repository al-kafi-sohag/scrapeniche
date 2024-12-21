<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends BaseController
{
    public function home()
    {
        $this->setupSEO(
            'Professional Web Scraping Services | ScrapeNiche',
            'Expert web scraping solutions for businesses. We provide custom data extraction scripts, user-friendly dashboards, and comprehensive tools to automate your data collection needs.',
            ['web scraping services', 'custom data extraction', 'web scraping scripts', 'data collection tools', 'e-commerce scraping'],
            asset('frontend/img/logo.png')
        );

        return view('frontend.home.index');
    }

    public function about()
    {
        $this->setupSEO(
            'About Us | ScrapeNiche',
            'Learn more about ScrapeNiche and our mission to provide professional web scraping solutions. Discover our expertise in custom data extraction and commitment to client success.',
            ['about scrapeniche', 'web scraping company', 'data extraction experts', 'custom scraping solutions'],
            asset('frontend/img/logo.png')
        );

        return view('frontend.about.index');
    }

    public function services()
    {
        $this->setupSEO(
            'Web Scraping & Data Extraction Services | ScrapeNiche',
            'Professional web scraping services with custom solutions for e-commerce, research, and business intelligence. Get accurate data extraction with our advanced tools.',
            ['web scraping services', 'data extraction', 'custom scraping solutions', 'e-commerce scraping', 'business intelligence'],
            asset('frontend/img/logo.png')
        );

        return view('frontend.services.index');
    }

    public function features()
    {
        $this->setupSEO(
            'Advanced Web Scraping Features & Capabilities | ScrapeNiche',
            'Discover our powerful web scraping features including real-time data extraction, API integration, and custom dashboards. Built for scalability and performance.',
            ['web scraping features', 'data extraction tools', 'scraping API', 'custom dashboards', 'real-time data'],
            asset('frontend/img/logo.png')
        );

        return view('frontend.features.index');
    }

    public function pricings()
    {
        $this->setupSEO(
            'Web Scraping Pricing Plans & Custom Solutions | ScrapeNiche',
            'Flexible web scraping pricing plans for businesses of all sizes. Choose from demo projects to enterprise solutions with custom features and dedicated support.',
            ['web scraping pricing', 'data extraction costs', 'scraping plans', 'enterprise solutions', 'custom pricing'],
            asset('frontend/img/logo.png')
        );

        return view('frontend.pricings.index');
    }

    public function contact($subject = null)
    {
        $this->setupSEO(
            'Contact ScrapeNiche | Web Scraping & Data Extraction Experts',
            'Get in touch with our web scraping experts. We provide 24/7 support and custom solutions for your data extraction needs. Start your project today.',
            ['contact scrapeniche', 'web scraping support', 'data extraction help', 'scraping consultation', 'custom solutions'],
            asset('frontend/img/logo.png')
        );

        $subjects = [
            'custom-solution' => 'I want to request a custom solution',
            'new-project' => 'I want to start a new project',
            'try-demo' => 'I would like to try the demo',
            'general-inquiry' => 'General Inquiry'
        ];

        $defaultSubject = $subjects['general-inquiry'];
        $formSubject = isset($subjects[$subject]) ? $subjects[$subject] : $defaultSubject;

        return view('frontend.contact.index', compact('formSubject'));
    }

    public function submitContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        try {
            Mail::send('emails.contact', [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'messageContent' => $request->message
            ], function($message) use ($request) {
                $message->to('aksohag16@gmail.com')
                       ->subject('New Contact Form Submission: ' . $request->subject)
                       ->replyTo($request->email, $request->name);
            });

            return redirect()->route('f.contact')
                            ->with('success', 'Thank you for your message. We will contact you as soon as possible.');
        } catch (\Exception $e) {
            return redirect()->back()
                           ->withInput()
                           ->with('error', 'Sorry, there was an error sending your message. Please try again later.');
        }
    }
}
