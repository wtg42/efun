<?php

namespace App\Services;

use Spatie\Sitemap\SitemapGenerator;

class SitemapServices
{
    public static function newSitemap()
    {
        SitemapGenerator::create('https://efun-cb.herokuapp.com/')->writeToFile(public_path('sitemap.xml'));
    }
}
