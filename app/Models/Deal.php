<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Deal extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'account_id',
        'name',
        'stage'
    ];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    public function zohoCRMFields(): array
    {
        $data = [
            'Deal_Name' => $this->name,
            'Stage' => $this->stage
        ];

        if ($id = ($this->account->zoho_crm_id ?? null)) {
            $data['Account_Name'] = $id;
        }

        return $data;
    }
}
