<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
