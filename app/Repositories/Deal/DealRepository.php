<?php

namespace App\Repositories\Deal;

use App\Models\Deal;

class DealRepository
{
    public function create(array $data): ?Deal
    {
        $deal = new Deal($data);

        return $deal->save() ? $deal : null;
    }

    /**
     * @return Deal[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Deal::all();
    }
}
