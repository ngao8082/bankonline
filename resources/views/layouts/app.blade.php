<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="my-0" src="/img/bpc-logo_1.png" alt="" width="12%">

                    <span class="fw-bolder fst-italic">The security in transaction</span>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link text-decoration-none rounded-pill btn-info mx-2 py-1" href="{{ route('home') }}">{{ __('Home') }}</a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-decoration-none rounded-pill btn-info mx-2 py-1" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-decortaion-none btn btn-outline-info rounded-pill mx-2 py-1" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

        <main class="py-4">


<div class="row  gx-0">
    <div class="col-md-2 mt-0">
        <ul class="nav flex-column shadow-lg ps-2 p-5 mt-0 me-5 bg-body rounded">

            <li class="nav-item pt-0 mt-0">
                <a class="nav-link active fw-bolder pb-2 text-muted pt-0 mt-0" aria-current="page" href="{{route('home')}}"><i class="fa fa-bars"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bolder py-3 text-muted" href="{{route('deposit')}}">Deposit </a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bolder py-3 text-muted" href="{{route('withdraw')}}">Withdraw</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bolder py-2 text-muted" href="{{route('sendandrequest')}}"><i class="fa fa-caret-right"></i>Request</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bolder py-3 text-muted" href="{{route('crypto')}}"><i class="fa fa-bitcoin"></i> Crpto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bolder py-3 text-muted" href="">Invite friend</a>
            </li>
            <li class="nav-item">

                <a class="nav-link fw-bolder py-3 text-muted" href="{{route('settings')}}"><i class="fa fa-bolt"></i> Setting</a>
            </li>
            <li class="nav-item">

                <a class="nav-link fw-bolder py-3 text-muted" href=""> <i class="fa fa-question-circle"></i> Help</a>
            </li>
            <li class="nav-item">

                <a class="nav-link fw-bolder py-3 text-muted" href=""><i class="fa fa-chevron-circle-right"></i> Log out</a>
            </li>

        </ul>
    </div>
            @yield('homesection')
            @if(route('withdraw'))
                <div class="col-md-10 bg-white">
      <div class="card" style="border: 0px">
        <div class="card-body">
            <div class="row shadow p-1 mb-1 bg-body rounded">
                @yield('withdrawcontent') 
                {{--            @if (!User()->all()->two_factor_secret)--}}
        {{--                you have not enabled two factor authentication--}}
        {{--            @else--}}
        {{--               you have two factor authentication enabled--}}
        {{--            @endif--}}
        {{--            <form method="POST" action="">--}}


        {{--            </form>--}}
            </div>
        </div>
    </div>
    </div>
            @endif
            @yield('logcontent')
        </main>
    </div>
</body>
</html>
