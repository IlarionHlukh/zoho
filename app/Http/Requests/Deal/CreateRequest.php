<?php

namespace App\Http\Requests\Deal;

use App\Http\Requests\ShouldAuthRequest;

class CreateRequest extends ShouldAuthRequest
{
    public function rules(): array
    {
        return [
            'name'       => 'required|string|max:255',
            'stage'      => 'required|string|max:255',
            'account_id' => 'nullable|int|exists:accounts,id'
        ];
    }
}
