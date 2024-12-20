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
            'Custom web scraping solutions for businesses. Get tailor-made data extraction scripts, user-friendly dashboard, and comprehensive data management tools for e-commerce, market research, and more.',
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
            'Services | ScrapeNiche',
            'Explore our range of web scraping services, including custom data extraction, user-friendly dashboard, and comprehensive data management tools for e-commerce, market research, and more.',
            ['web scraping services', 'custom data extraction', 'web scraping scripts', 'data collection tools', 'e-commerce scraping'],
            asset('frontend/img/logo.png')
        );

        return view('frontend.services.index');
    }

    public function features()
    {
        $this->setupSEO(
            'Features | ScrapeNiche',
            'Discover the features of ScrapeNiche, including user-friendly dashboard, custom data extraction, and comprehensive data management tools for e-commerce, market research, and more.',
            ['web scraping features', 'user-friendly dashboard', 'custom data extraction', 'data management tools', 'e-commerce scraping'],
            asset('frontend/img/logo.png')
        );

        return view('frontend.features.index');
    }

    public function pricings()
    {
        $this->setupSEO(
            'Pricings | ScrapeNiche',
            'Compare our pricing plans and choose the one that suits your needs. Get tailor-made web scraping solutions for businesses.',
            ['web scraping pricings', 'custom data extraction', 'user-friendly dashboard', 'data management tools', 'e-commerce scraping'],
            asset('frontend/img/logo.png')
        );

        return view('frontend.pricings.index');
    }

    public function contact()
    {
        $this->setupSEO(
            'Contact Us | ScrapeNiche',
            'Get in touch with ScrapeNiche for professional web scraping solutions. Contact us for custom data extraction services and solutions.',
            ['contact scrapeniche', 'web scraping contact', 'data extraction services contact'],
            asset('frontend/img/logo.png')
        );

        return view('frontend.contact.index');
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
