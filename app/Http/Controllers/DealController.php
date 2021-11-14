<?php

namespace App\Http\Controllers;

use App\Services\Deal\DealService;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Deal\CreateRequest;
use App\Repositories\Deal\DealRepository;
use App\Repositories\Account\AccountRepository;

class DealController extends Controller
{
    public function __construct
    (
        private DealRepository $deal,
        private AccountRepository $account,
        private DealService $dealService
    )
    {}

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('deal.index', [
            'deals' => $this->deal->all()
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('deal.create', [
            'accounts' => $this->account->all()
        ]);
    }

    public function store(CreateRequest $request): RedirectResponse
    {
        $this->dealService->create($request->validated());

        return redirect()->route('deals.index');
    }
}
