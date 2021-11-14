<?php

namespace App\Services\Deal;

use App\Models\Deal;
use App\Services\ZohoCRM\Zoho;
use App\Repositories\Deal\DealRepository;

class DealService
{
    public function __construct(private Zoho $zoho, private DealRepository $deal)
    {
    }

    public function create(array $data): ?Deal
    {
        if ($deal = $this->deal->create($data)) {

            $this->zoho->deals()->create($deal->zohoCRMFields());

            return $deal;
        }

        return null;
    }
}
