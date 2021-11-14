@extends('layouts.main')

@section('title', 'Zoho CRM Auth')

@section('content')

    @if($auth === null)
        <div class="alert alert-dark" role="alert">
            Please click Auth Zoho CRM!
        </div>
    @elseif($auth === false)
        <div class="alert alert-danger" role="alert">
            Failed to auth in Zoho CRM!
        </div>
    @else
        <div class="alert alert-success" role="alert">
            You have been authorized successfully!
            Now you can use Zoho CRM!
        </div>
    @endif

@endsection
