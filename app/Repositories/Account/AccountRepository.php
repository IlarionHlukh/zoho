<?php

namespace App\Repositories\Account;

use App\Models\Account;

class AccountRepository
{
    public function create(array $data): ?Account
    {
        $account = new Account($data);

        return $account->save() ? $account : null;
    }

    public function update(Account $account, array $data): ?Account
    {
        return $account->update($data) ? $account : null;
    }

    /**
     * @return Account[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Account::all();
    }
}
