<?php

namespace App\Services\ZohoCRM\Providers\Deals;

use App\Services\ZohoCRM\Providers\Provider as BaseProvider;

class Provider extends BaseProvider
{
    public function create(array $data): ?array
    {
        try {

            $response = $this->client->post('Deals', ['data' => [$data]]);

            if ($response->successful() && $responseData = $response->json()) {
                return $responseData['data'][0]['details'] ?? null;
            }

        } catch (\Exception $e) {
            report($e);
        }

        return null;
    }
}
