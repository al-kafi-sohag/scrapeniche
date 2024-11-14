<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class BaseController extends Controller
{
    protected function setupSEO($title, $description = null, $keywords = null, $image = null)
    {
        // Default values from config
        $defaultDescription = config('seotools.meta.defaults.description');
        $defaultKeywords = config('seotools.meta.defaults.keywords');
        
        // Meta tags
        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description ?? $defaultDescription);
        if ($keywords) {
            SEOMeta::setKeywords($keywords);
        }
        
        // OpenGraph
        OpenGraph::setTitle($title);
        OpenGraph::setDescription($description ?? $defaultDescription);
        OpenGraph::setSiteName(config('app.name'));
        if ($image) {
            OpenGraph::addImage($image);
        }
        
        // Twitter Card
        TwitterCard::setTitle($title);
        TwitterCard::setDescription($description ?? $defaultDescription);
        if ($image) {
            TwitterCard::setImage($image);
        }
        
        // JSON-LD
        JsonLd::setTitle($title);
        JsonLd::setDescription($description ?? $defaultDescription);
        JsonLd::setType('WebPage');
        if ($image) {
            JsonLd::addImage($image);
        }
    }
}
