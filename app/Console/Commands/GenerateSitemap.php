<?php

namespace App\Console\Commands;

use App\Services\SitemapServices;
use Illuminate\Console\Command;

// sitemap artisan command

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate sitemap.xml in public folder';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // SitemapGenerator::create('https://efun-cb.herokuapp.com/')->writeToFile(public_path('sitemap.xml'));
        SitemapServices::newSitemap();
    }
}
