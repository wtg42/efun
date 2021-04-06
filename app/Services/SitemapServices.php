<?php

namespace App\Services;

use Spatie\Sitemap\SitemapGenerator;

class SitemapServices
{
    static public function NewSitemap()
    {
        SitemapGenerator::create('https://efun-cb.herokuapp.com/')->writeToFile(public_path('sitemap.xml'));
    }
}
