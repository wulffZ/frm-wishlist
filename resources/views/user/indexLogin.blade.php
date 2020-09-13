<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ asset('stylesheet.css') }}" rel="stylesheet">

    <title>Login</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div id="left-panel" class="col-sm-6 d-none d-md-block">
        </div>
        <div class="col-sm-6 my-auto ">
            <div class="col-12 offset-0 col-md-8 offset-md-2 col-xl-6 offset-xl-3 dark-color-3 p-5">
                <div class="row pb-4">
                    <div class="col d-flex">
                        <img src="https://seeklogo.com/images/L/laravel-logo-9B01588B1F-seeklogo.com.png"
                             alt="logo" class="mx-auto ">
                    </div>
                </div>

                <form class="row" method="post" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <input type="text" placeholder="Email" name="email"
                           class="form-control form-control-lg dark-color-4 my-3"/>
                    <input type="password" placeholder="Password" name="password"
                           class="form-control form-control-lg dark-color-4 my-3"/>

                    <div class="col-12 px-0 text-center">
                        <span style="color: red;">{{ Session::get('error') }}</span>
                        @foreach($errors->all() as $error)
                            <span style="color: red;">{{ $error }}</span><br/>
                        @endforeach
                    </div>

                    <input type="submit" name="login"
                           class="btn btn-dark btn-lg btn--no-border-radius my-3 mt-4 w-100" value="LOGIN"/>

                    <a href="/register">Register here</a>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
