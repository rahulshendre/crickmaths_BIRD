<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LineMessagingController extends Controller
{
    protected $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client([
            'base_uri' => 'https://api.line.me/v2/bot/',
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . env('LINE_CHANNEL_ACCESS_TOKEN')
            ]
        ]);
    }

    public function handleWebhook(Request $request)
    {
        // Handle incoming messages/events from LINE
    }

    public function sendMessage($userId, $message)
    {
        $response = $this->httpClient->post('message/push', [
            'json' => [
                'to' => $userId,
                'messages' => [
                    ['type' => 'text', 'text' => $message]
                ]
            ]
        ]);

        return $response->getBody();
    }
}