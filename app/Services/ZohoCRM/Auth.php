<?php

namespace App\Services\ZohoCRM;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Auth
{
    public function provideAuthUrl(): string
    {
        return config('services.zoho.crm.auth.url') . 'auth?' . http_build_query([
            'scope'         => config('services.zoho.crm.auth.scope'),
            'client_id'     => config('services.zoho.crm.api.clientId'),
            'response_type' => 'code',
            'access_type'   => 'offline',
            'redirect_uri'  => route('zoho.store'),
        ]);
    }

    public function auth(Request $request): ?bool
    {
        if (($data = $request->all()) && $code = ($data['code'] ?? null)) {

            $tokenUrl = config('services.zoho.crm.auth.url') . 'token?' . http_build_query([
                'code'          => $code,
                'client_id'     => config('services.zoho.crm.api.clientId'),
                'client_secret' => config('services.zoho.crm.api.clientSecret'),
                'redirect_uri'  => route('zoho.store'),
                'grant_type'    => 'authorization_code'
            ]);

            $response = Http::post($tokenUrl);

            if ($response->ok() && $token = $response->json('access_token')) {

                setting(['zohoCRMToken' => $token])->save();

                return true;
            }

            return false;
        }

        return null;
    }
}
