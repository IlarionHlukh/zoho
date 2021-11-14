<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'type',
        'phone',
        'zoho_crm_id'
    ];

    public function deals(): HasMany
    {
        return $this->hasMany(Deal::class);
    }

    public function zohoCRMFields(): array
    {
        return [
            'Account_Name' => $this->name,
            'Account_Type' => $this->type,
            'Phone'        => $this->phone
        ];
    }
}
