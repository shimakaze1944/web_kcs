<!DOCTYPE html>
@extends('layouts/app')
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/style1/styles.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">

    <title>@yield('title')</title>
</head>

<body>
<nav class="navbar navbar-light navbar-expand-md fixed-top text-justify rtl" style="background-color: #ffffff;">
    <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link active text-right" href="/">Home</a></li>
                
                <li class="nav-item active" role="presentation"><a class="nav-link text-right" href="/lagu">Lagu</a></li>
                <li class="nav-item active" role="presentation"><a class="nav-link text-right" href="/penyanyi">Penyanyi</a></li>
            </ul>
        </div>
{{--            <a class="navbar-brand text-justify" href="#" style="margin-left: auto;margin-right: 0;">דף הבית</a>--}}

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

    </div>
</nav>

@yield('container')

<div class="footer-clean">
    <footer>
        <div class="container">
            <div class="row justify-content-center">
                
                <div class="col-sm-8 col-md-3 item">
                <div class="row justify-content-center"><h3>About us</h3></div>
                    <ul><div class="row justify-content-center">

                        <li class="despre-noi"></i>&nbsp;Puri Menganti Indah B3/1, Gresik</li>
                        <li class="despre-noi"></i>&nbsp;Email: susena.kevin@gmail.com</li>
                        <li class="despre-noi"></i>&nbsp;Telp: 031 791 341</li>
                    </div></ul>
                    <ul></ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
