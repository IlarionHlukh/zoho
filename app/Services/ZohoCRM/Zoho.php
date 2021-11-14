<?php

namespace App\Services\ZohoCRM;

use Illuminate\Support\Facades\Http;
use App\Services\ZohoCRM\Providers\Deals\Provider as DealsProvider;
use App\Services\ZohoCRM\Providers\Accounts\Provider as AccountsProvider;

class Zoho
{
    private DealsProvider $deals;
    private AccountsProvider $accounts;

    public function __construct()
    {
        $client = Http::baseUrl(config('services.zoho.crm.api.url'))
            ->withToken(setting('zohoCRMToken', ''));

        $this->deals = new DealsProvider($client);
        $this->accounts = new AccountsProvider($client);
    }

    public function deals(): DealsProvider
    {
        return $this->deals;
    }

    public function accounts(): AccountsProvider
    {
        return $this->accounts;
    }
}
