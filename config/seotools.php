<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "ScrapeNiche - Custom Web Scraping Solutions & Data Extraction Services", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Professional custom web scraping solutions for businesses. Get tailor-made data extraction scripts, user-friendly dashboard, and comprehensive data management tools for e-commerce, market research, and more.', // set false to total remove
            'separator'    => ' | ',
            'keywords'     => ['web scraping services', 'custom data extraction', 'web scraping scripts', 'data collection tools', 'e-commerce scraping', 'market research data', 'custom scraping solutions', 'data extraction api', 'web data collection', 'automated data gathering'],
            'canonical'    => 'current', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'ScrapeNiche - Custom Web Scraping & Data Extraction Platform', // set false to total remove
            'description' => 'Transform your data collection with custom web scraping solutions. Tailored scripts, user dashboard, and professional support for e-commerce, research, and business intelligence needs.', // set false to total remove
            'url'         => 'current', // Set null for using Url::current(), set false to total remove
            'type'        => 'website',
            'site_name'   => 'ScrapeNiche',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary_large_image',
            'site'        => '@scrapeniche',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'ScrapeNiche - Professional Web Scraping Services', // set false to total remove
            'description' => 'Get custom web scraping solutions tailored to your business needs. Our platform offers personalized data extraction scripts, secure dashboard, and comprehensive support for various industries.', // set false to total remove
            'url'         => 'current', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebSite',
            '@type'       => 'SoftwareApplication',
            'applicationCategory' => 'BusinessApplication',
            'operatingSystem' => 'Any',
            'offers' => [
                '@type' => 'Offer',
                'category' => 'Web Scraping Services'
            ],
            'images'      => [],
        ],
    ],
];
