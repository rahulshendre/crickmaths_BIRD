<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cricket API Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for cricket data APIs with fallback support
    |
    */

    'cricbuzz' => [
        'api_key' => env('CRICBUZZ_API_KEY'),
        'base_url' => env('CRICBUZZ_BASE_URL', 'https://cricbuzz-cricket2.p.rapidapi.com'),
        'host' => env('CRICBUZZ_HOST', 'cricbuzz-cricket2.p.rapidapi.com'),
        'endpoints' => [
            'live_matches' => '/matches/v1/live',
            'scorecard' => '/mcenter/v1/{matchId}/scard',
        ],
    ],

    'backup' => [
        'api_key' => env('CRICKETDATA_API_KEY'),
        'base_url' => env('CRICKETDATA_BASE_URL', 'https://api.cricapi.com/v1'),
        'endpoints' => [
            'live_matches' => '/currentMatches',
            'scorecard' => '/match_info',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | API Priority
    |--------------------------------------------------------------------------
    |
    | Order of APIs to try (first to last)
    |
    */
    'priority' => ['cricbuzz', 'backup'],
];

