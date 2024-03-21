<?php

namespace Davenguyen\Pipedrive;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class Request
{
    protected string $apiKey;
    protected string $baseURL;

    public function __construct()
    {
        $this->apiKey = config('services.pipedrive.api_key');
        $this->baseURL = config('services.pipedrive.base_url');
    }

    /**
     * @param string $path
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    public function get(string $path)
    {
        return Http::acceptJson()
            ->get("{$this->baseURL}{$path}", [
                'api_token' => $this->apiKey
            ])
            ;
    }

    public function make($method, $path)
    {
        /**
         * @var Response $response
         */
        try {
            $response = $this->{$method}($path);
            Log::info("Http Request: {$method} {$path}", $response->json());

            if ($response->successful()) {
                return $response->json();
            }

            return [];
        } catch (\Exception $e) {
            Log::alert($e);
        }
    }

}