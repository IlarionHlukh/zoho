<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">

    <title>Sign In</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="login-form bg-light mt-4 p-4">
                <form action="{{ route('login') }}" method="POST" class="row g-3">
                    @csrf
                    <h4>Sign In</h4>
                    <div class="col-12">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="col-12">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-dark float-end">
                            Sign In
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{mix('/js/app.js')}}"></script>

</body>
</html>
