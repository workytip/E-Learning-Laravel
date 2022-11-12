{{--@extends('layouts.appy')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}

{{--                                @if ($errors->has('name'))--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('name') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

{{--                                @if ($errors->has('email'))--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

{{--                                @if ($errors->has('password'))--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}

<html lang="en"><head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="/frontend/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/frontend/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
       Sign Up
    </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="/frontend/css/now-ui-kit.css?v=1.3.0" rel="stylesheet">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/frontend/demo/demo.css" rel="stylesheet">
</head>

<body class="login-page sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
        <div class="dropdown button-dropdown">
            <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                <span class="button-bar"></span>
                <span class="button-bar"></span>
                <span class="button-bar"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="#">About Us</a>
                <a class="dropdown-item" href="#">Contact Us</a>

            </div>
        </div>
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{route('front.landing')}}" >
                Mediato
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(/frontend/img/login.jpg)"></div>
    <div class="content">
        <div class="container">
            <div class="col-md-4 ml-auto mr-auto">
                <div class="card card-login card-plain">



                    <form class="form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="card-header text-center">
                            <div class="logo-container">
                                <img src="/frontend/img/now-logo.png" alt="">
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="now-ui-icons business_badge"></i>
                                    </span>
                                </div>
                        <input placeholder="Enter Your Name " id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>



                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="now-ui-icons users_circle-08"></i>
                                    </span>
                                </div>
                                <input placeholder="Enter Your Email" id="email" type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                       value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                @endif
                            </div>






                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                 <span class="input-group-text">
                        <i class="now-ui-icons objects_key-25"></i>  </span>
                                </span>
                                </div>
                                <input placeholder="Enter Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                @endif
                            </div>


                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                 <span class="input-group-text">
                                           <i class="now-ui-icons arrows-1_refresh-69"></i>

                                </span>
                                </div>
                            <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">
                                {{ __('Register') }}
                            </button>




                            <div class="pull-left">
                                <h6>
                                    <a href="{{url('/login')}}" class="link">Already have an account?</a>
                                </h6>
                            </div>
                            <div class="pull-right">
                                @if (Route::has('password.request'))
                                    <h6 >
                                        <a  href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </h6>
                                @endif
                            </div>

                        </div></form>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div>
<!--   Core JS Files   -->
<script src="/frontend/js/core/jquery.min.js" type="text/javascript"></script>
<script src="/frontend/js/core/popper.min.js" type="text/javascript"></script>
<script src="/frontend/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="/frontend/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/frontend/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="/frontend/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="/frontend/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>


</body></html>
