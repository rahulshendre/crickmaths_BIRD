<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class PuppeteerController extends Controller
{
    public function getData()
    {
        // Use Symfony Process to execute a Node.js script with Puppeteer
        $process = new Process(['node', base_path('resources/js/scrapeCricbuzz.js')]);

        try {
            $process->mustRun();
            $output = $process->getOutput();
        } catch (ProcessFailedException $exception) {
            $output = $exception->getMessage();
        }

        return response()->json(['liveScore' => $output]);
    }
}