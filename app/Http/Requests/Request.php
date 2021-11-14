<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\{
    Factory, Validator
};
use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
{
    public function validator(Factory $factory): Validator
    {
        $this->before();

        return $this->createDefaultValidator($factory);
    }

    /**
     * @param Validator $validator
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $this->after($validator);
        });
    }

    /**
     * @param Validator $validator
     */
    protected function after(Validator $validator)
    {

    }

    /**
     *
     */
    protected function before()
    {

    }
}
