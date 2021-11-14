@extends('layouts.main')

@section('title', 'Create account')

@section('content')

    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="login-form bg-light mt-4 p-4">
                <div class="alert alert-primary" role="alert">
                    <b>Note</b>: Please make sure that you are authorized in Zoho CRM!
                </div>
                <form action="{{ route('accounts.store') }}" method="POST" class="row g-3">
                    @csrf
                    <h4>Create account</h4>
                    <div class="col-12">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="col-12">
                        <label>Type</label>
                        <input type="text" name="type" class="form-control" placeholder="Type">
                    </div>
                    <div class="col-12">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone">
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
