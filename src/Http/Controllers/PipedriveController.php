<?php

namespace Davenguyen\Pipedrive\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Davenguyen\Pipedrive\Request;
use Davenguyen\Pipedrive\Http\Requests\WebhookRequest;

class PipedriveController
{
    const EVENTS = [

    ];

    public function __construct(
        protected Request        $httpRequest,
        protected WebhookRequest $webhookRequest
    )
    {
    }

    public function test()
    {
        return $this->httpRequest->make('get', 'v1/dealFields');
    }

    public function getWebhook(\Illuminate\Http\Request $request)
    {
        if ($this->webhookRequest->validate($request->all())) {
//            TODO: handle
        }

        return response()->json([], 200);
    }
}