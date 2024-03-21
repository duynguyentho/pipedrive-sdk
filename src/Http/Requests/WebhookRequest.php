<?php

namespace Davenguyen\Pipedrive\Http\Requests;

class WebhookRequest
{
    public function validate($data)
    {
        $isApi = data_get($data, 'meta.change_source') === 'api';
        $ownerName = data_get($data, 'current.owner_name');
//    TODO: add more condition
        if ($isApi) {
            return true;
        }

        return false;
    }
}