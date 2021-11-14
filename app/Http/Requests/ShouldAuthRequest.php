<?php

namespace App\Http\Requests;

use Auth;

class ShouldAuthRequest extends Request
{
    public function authorize(): bool
    {
        return Auth::check();
    }
}
