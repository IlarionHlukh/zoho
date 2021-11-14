@extends('layouts.main')

@section('title', 'Create deal')

@section('content')

    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="login-form bg-light mt-4 p-4">
                <div class="alert alert-primary" role="alert">
                    <b>Note</b>: Please make sure that you are authorized in Zoho CRM!
                </div>
                <form action="{{ route('deals.store') }}" method="POST" class="row g-3">
                    @csrf
                    <h4>Create deal</h4>
                    <div class="col-12">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="col-12">
                        <label>Stage</label>
                        <input type="text" name="stage" class="form-control" placeholder="Stage">
                    </div>
                    <div class="col-12">
                        <label>Account</label>
                        <select name="account_id" id="account" class="form-select">
                            <option value="">-</option>
                            @foreach($accounts as $account)
                                <option value="{{ $account->id }}">{{ $account->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success float-end">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
