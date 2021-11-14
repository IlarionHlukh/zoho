<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Redirector;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     */
    protected string $redirectTo = '/';

    public function logout(): RedirectResponse|Redirector
    {
        $this->guard()->logout();

        return redirect($this->redirectPath());
    }
}
