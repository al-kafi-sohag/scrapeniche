<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Setup SEO for the home page
        $this->setupSEO(
            'Custom Web Scraping Solutions | ScrapeNiche',
            'Get professional custom web scraping solutions tailored to your business needs. Our platform offers personalized data extraction scripts and comprehensive support.',
            ['web scraping', 'data extraction', 'custom scripts', 'data collection', 'web automation'],
            asset('frontend/img/logo.png')
        );

        return view('home');
    }
}
