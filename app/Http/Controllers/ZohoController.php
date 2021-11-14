<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ZohoCRM\Auth;

class ZohoController extends Controller
{
    public function __construct(private Auth $zohoAuth)
    {
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function auth()
    {
        return redirect($this->zohoAuth->provideAuthUrl());
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\View
     */
    public function store(Request $request)
    {
        return view('zoho.index', [
            'auth' => $this->zohoAuth->auth($request)
        ]);
    }
}
