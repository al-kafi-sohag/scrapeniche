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
        $siteName = config('app.name');
        $siteUrl = config('app.url');

        // Clean and prepare values
        $title = strip_tags($title);
        $description = strip_tags($description ?? $defaultDescription);

        // Meta tags with enhanced SEO attributes
        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        if ($keywords) {
            SEOMeta::setKeywords($keywords);
        }

        // Additional meta tags for better SEO
        SEOMeta::addMeta('robots', 'index, follow');
        SEOMeta::addMeta('author', $siteName);
        SEOMeta::addMeta('viewport', 'width=device-width, initial-scale=1, shrink-to-fit=no');
        SEOMeta::addMeta('format-detection', 'telephone=no');

        // OpenGraph with enhanced social sharing
        OpenGraph::setTitle($title);
        OpenGraph::setDescription($description);
        OpenGraph::setSiteName($siteName);
        OpenGraph::setUrl($siteUrl);
        OpenGraph::setType('website');
        OpenGraph::addProperty('locale', 'en_US');
        if ($image) {
            OpenGraph::addImage($image);
        }

        // Twitter Card with enhanced social sharing
        TwitterCard::setTitle($title);
        TwitterCard::setDescription($description);
        TwitterCard::setSite('@' . str_replace(' ', '', $siteName)); // Assuming Twitter handle matches site name
        TwitterCard::setType('summary_large_image');
        if ($image) {
            TwitterCard::setImage($image);
        }

        // JSON-LD with enhanced structured data
        JsonLd::setType('WebPage');
        JsonLd::setTitle($title);
        JsonLd::setDescription($description);
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('url', $siteUrl);
        JsonLd::addValue('inLanguage', 'en-US');

        // Add Organization structured data
        JsonLd::addValue('publisher', [
            '@type' => 'Organization',
            'name' => $siteName,
            'url' => $siteUrl,
            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset('frontend/img/logos/logo.png')
            ]
        ]);

        if ($image) {
            JsonLd::addImage($image);
        }
    }
}
