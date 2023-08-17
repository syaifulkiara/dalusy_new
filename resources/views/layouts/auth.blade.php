<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->      
        <!-- Title -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('back/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('back/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">
        <!-- Theme Styles -->
        <link href="{{ asset('back/css/lime.min.css') }}" rel="stylesheet">
        <link href="{{ asset('back/css/custom.css') }}" rel="stylesheet">
    </head>
    <body class="login-page err-500">
        <div class="container">
            <div class="login-container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-sm-9 lfh">
                        <div class="card login-box">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascripts -->
        <script src="{{ asset('back/plugins/jquery/jquery-3.1.0.min.js') }}"></script>
        <script src="{{ asset('back/plugins/bootstrap/popper.min.js') }}"></script>
        <script src="{{ asset('back/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('back/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('back/js/lime.min.js') }}"></script>
    </body>
</html>