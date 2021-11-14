<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">

    <title>@yield('title')</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('deals*')) active @endif" href="{{ route('deals.index') }}">
                        Deals
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('accounts*')) active @endif" href="{{ route('accounts.index') }}">
                        Accounts
                    </a>
                </li>
            </ul>
            <div class="d-flex">
                <a class="nav-link" href="{{ route('zoho.auth') }}">
                    Auth Zoho CRM
                </a>
                <a class="nav-link" href="{{ route('logout') }}">
                    Logout
                </a>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<script src="{{mix('/js/app.js')}}"></script>
@yield('script')

</body>
</html>
