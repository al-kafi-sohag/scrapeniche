<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends BaseController
{
    public function index()
    {
        // Setup SEO for the landing page
        $this->setupSEO(
            'Professional Web Scraping Services | ScrapeNiche',
            'Custom web scraping solutions for businesses. Get tailor-made data extraction scripts, user-friendly dashboard, and comprehensive data management tools for e-commerce, market research, and more.',
            ['web scraping services', 'custom data extraction', 'web scraping scripts', 'data collection tools', 'e-commerce scraping'],
            asset('frontend/img/logo.png')
        );

        return view('frontend.home.index');
    }

}
