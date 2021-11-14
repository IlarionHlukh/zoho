<?php

namespace App\Services\ZohoCRM\Providers;

use Illuminate\Http\Client\PendingRequest;

abstract class Provider
{
    public function __construct(protected PendingRequest $client)
    {
    }
}
