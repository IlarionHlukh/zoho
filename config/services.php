<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'zoho' => [
        'crm' => [
            'auth' => [
                'url'   => env('ZOHO_CRM_API_AUTH_URL'),
                'scope' => env('ZOHO_CRM_API_AUTH_SCOPE'),
            ],
            'api'  => [
                'url'          => env('ZOHO_CRM_API_URL'),
                'clientId'     => env('ZOHO_CRM_CLIENT_ID'),
                'clientSecret' => env('ZOHO_CRM_CLIENT_SECRET'),
            ]
        ]
    ],
];
