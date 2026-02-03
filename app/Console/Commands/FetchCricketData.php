<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Http\Controllers\PublicController;
use App\Models\Level;

class FetchCricketData extends Command
{
    protected $signature = 'fetch:getDataAuto';
    protected $description = 'Fetch cricket data from the API';

    public function handle()
    {
        
   
        
        $controller = new PublicController();
        $controller->getDataAuto();
        $this->info('Cricket data fetched successfully!');
        
    }
}
