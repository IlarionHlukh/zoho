@extends('layouts.main')

@section('title', 'Accounts')

@section('content')

    <a href="{{ route('accounts.create') }}" class="btn btn-primary">Create</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Phone</th>
                <th scope="col">Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accounts as $key => $account)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $account->name }}</td>
                    <td>{{ $account->type }}</td>
                    <td>{{ $account->phone }}</td>
                    <td>{{ $account->created_at->toDateTimeString() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
