<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Services\Account\AccountService;
use App\Http\Requests\Account\CreateRequest;
use App\Repositories\Account\AccountRepository;

class AccountController extends Controller
{
    public function __construct(private AccountRepository $account, private AccountService $accountService)
    {
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('account.index', [
            'accounts' => $this->account->all()
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('account.create');
    }

    public function store(CreateRequest $request): RedirectResponse
    {
        $this->accountService->create($request->validated());

        return redirect()->route('accounts.index');
    }
}
