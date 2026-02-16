<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte\Client;
class WebScrapeCommand extends Command
{
    protected $signature = 'web:scrape';
    protected $description = 'Web scraping example in Laravel using Goutte';

    public function handle()
    {
        $url = 'https://vebsigns.com/cricmaths/';

        $client = new Client();
        $crawler = $client->request('GET', $url);

        // Example: Extracting page title
        $pageTitle = $crawler->filter('div')->text();
        $this->info('Page Title: ' . $pageTitle);

        // Example: Extracting links
        $crawler->filter('a')->each(function ($node) {
            $link = $node->attr('');
            $this->line('Link: ' . $link);
        });
    }
}
