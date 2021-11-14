<?php

namespace App\Services\Account;

use App\Models\Account;
use App\Services\ZohoCRM\Zoho;
use App\Repositories\Account\AccountRepository;

class AccountService
{
    public function __construct(private Zoho $zoho, private AccountRepository $account)
    {
    }

    public function create(array $data): ?Account
    {
        if ($account = $this->account->create($data)) {

            $zohoData = $this->zoho->accounts()->create($account->zohoCRMFields());

            if ($zohoData !== null) {
                $this->account->update($account, ['zoho_crm_id' => $zohoData['id']]);
            }

            return $account;
        }

        return null;
    }
}
