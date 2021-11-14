<?php

namespace App\Http\Requests\Account;

use App\Http\Requests\ShouldAuthRequest;

class CreateRequest extends ShouldAuthRequest
{
    public function rules(): array
    {
        return [
            'name'  => 'required|string|max:255',
            'type'  => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
        ];
    }
}
