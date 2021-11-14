@extends('layouts.main')

@section('title', 'Deals')

@section('content')

    <a href="{{ route('deals.create') }}" class="btn btn-primary">Create</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Stage</th>
                <th scope="col">Account</th>
                <th scope="col">Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deals as $key => $deal)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $deal->name }}</td>
                    <td>{{ $deal->stage }}</td>
                    <td>{{ $deal->account->name ?? '-' }}</td>
                    <td>{{ $deal->created_at->toDateTimeString() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
