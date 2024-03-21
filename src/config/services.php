<?php
return [
    'pipedrive' => [
        'api_key' => env('PIPEDRIVE_APIKEY'),
        'base_url' => env('PIPEDRIVE_BASE_URL', 'https://api.pipedrive.com/')
    ]
];