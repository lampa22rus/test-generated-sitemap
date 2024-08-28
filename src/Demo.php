<?php

require '../vendor/autoload.php';

use Lampa\GenerateSitemap;

$sitemapData = [
    [
        'url' => 'https://example.com/',
        'lastMod' => '2024-08-20',
        'priority' => '1.0',
        'frequency' => 'daily'
    ],
    [
        'url' => 'https://example.com/about',
        'lastMod' => '2024-08-18',
        'priority' => '0.8',
        'frequency' => 'monthly'
    ],
    [
        'url' => 'https://example.com/contact',
        'lastMod' => '2024-08-17',
        'priority' => '0.6',
        'frequency' => 'monthly'
    ],
    [
        'url' => 'https://example.com/blog',
        'lastMod' => '2024-08-19',
        'priority' => '0.7',
        'frequency' => 'weekly'
    ],
    \Lampa\Url::make(
        url: 'https://example.com/blog/post2',
        lastMod: '2024-08-21',
        priority: '0.9',
        frequency: 'weekly'
    ),
    [
        'url' => 'https://example.com/blog/post1',
        'lastMod' => '2024-08-15',
        'priority' => '0.5',
        'frequency' => 'weekly'
    ]
];

GenerateSitemap::make($sitemapData, __DIR__ . '/test.json')->generate();
GenerateSitemap::make($sitemapData, __DIR__ . '/test.csv',\Lampa\Enums\TypesEnum::CSV)->generate();
GenerateSitemap::make($sitemapData, __DIR__ . '/test.xml', 'xml')->generate();