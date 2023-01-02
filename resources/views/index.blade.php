@extends('layouts.indexapp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="border: 0px">
                <div class="card-body">
                    {{--                    @if (session('status'))--}}
                    {{--                        <div class="alert alert-success" role="alert">--}}
                    {{--                            {{ session('status') }}--}}
                    {{--                        </div>--}}
                    {{--                    @endif--}}

                    {{--                    {{ __('You are logged in!') }}--}}
                    <h1 class="fw-bolder fst-italic text-muted">Your Online transaction account</h1>
                    <li class="list-unstyled py-2 fs-5">local transaction with less restriction</li>
                    <li class="list-unstyled py-2 fs-5">ensuring maximum security by ensuring that your in control of
                        the transaction being carried out</li>
                    <li class="list-unstyled py-1 fs-5">requires no minimum balance or monthly registration</li>
                    <div class="col-md-6 justify-content-end">
                        <li class="nav-item list-unstyled">
                            <a class="nav-link  btn btn-info text-white rounded-pill ms-3 my-4 py-2"
                               href="{{ route('register') }}">{{ __('Get Started') }}</a>
                        </li>
                        <li class="nav-item list-unstyled">
                            <a href="{{route('register')}}" class=" btn btn-outline-info ms-3 my-4 py-2"
                               style="border-radius: 0.5rem">{{('see How it works')}}</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="border: 0px;">
                <div class="card-body">
                    <img width="95%" src="\img\img8.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h1 class="text-info text-center">+1,000,000</h1>
            <h4 class="text-center text-muted">Happy members</h4>
        </div>
        <div class="col-md-3 align-content-center">
            <h1 class="text-info text-center">+1,634,533</h1>
            <h4 class="text-center text-muted">transaction completed</h4>
        </div>
        <div class="col-md-3 align-content-center">
            <h1 class="text-info text-center">+400</h1>
            <h4 class="text-center text-muted">Bank & E-money networks</h4>
        </div>
        <div class="col-md-3 align-content-center">
            <h1 class="text-info text-center">
                <10min</h1> <h4 class="text-center text-muted">Transaction speed</h4>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-6">
            <img src="img\istockphoto-1167809760-612x612.jpg" class="img-fluid" width=500" height="50%" alt="">
        </div>
        <div class="col-md-6 shadow p-3 mb-5 bg-body rounded">
            <h3 class="fw-bolder text-muted fst-italic  mx-0 py-2">Protect your money</h3>
            <p>Keep your money protected in digital dollars without the lose of valuation from unstable currency.
                A protect money is not worth accessible by intruders</p>
        </div>
        <div class="row">
            <div class="col-md-6 shadow p-3 mb-5 bg-body rounded">
                <h3 class="fw-bolder text-muted fst-italic  mx-0 py-2">Send you money globally</h3>
                <p>Keep your money protected in digital dollars without the lose of valuation from unstable currency.
                    A protect money is not worth accessible by intruders</p>

            </div>
            <div class="col-md-6">
                <img src="img\pickawood-gf8e6XvG_3E-unsplash.jpg" class="img-fluid" width=500" height="50%" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="img\joshua-mayo-PNodyzJcccA-unsplash.jpg" class="img-fluid" width=500" height="50%" alt="">
            </div>
            <div class="col-md-6 shadow p-3 mb-5 bg-body rounded">
                <h3 class="fw-bolder text-muted fst-italic  mx-0 py-2">Receive your Payment for online Work</h3>
                <p>Keep your money protected in digital dollars without the lose of valuation from unstable currency.
                    A protect money is not worth accessible by intruders</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 shadow p-2 mb-5 bg-body rounded mt-4 ">
                <h4 class="text-center fs-5">Free market rates</h4>
                <p class="text-center fs-5">send money across borders with real exchange rate without restriction</p>
            </div>
            <div class="col-md-4 shadow p-2 mb-5 bg-body rounded mt-4">
                <h4 class="text-center fs-5">safe and reliable</h4>
                <p class="text-center fs-5">escrowed transaction and verified experienced peer</p>
            </div>
            <div class="col-md-4 shadow p-2 mb-5 bg-body rounded mt-4">
                <h4 class="text-center fs-5">available 24 hours</h4>
                <p class="text-center fs-5">our support staff and peers available in 24 hours a day 365 days</p>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center fw-bold">See what others are saying about the Abp</h2>
            </div>
            <div class="col-md-4">
                <img  src="img\pickawood-gf8e6XvG_3E-unsplash.jpg" width="30%" style="border-radius: 70%">

            </div>
            <div class="col-md-4">
                <img src="img\pickawood-gf8e6XvG_3E-unsplash.jpg" width="30%" style="border-radius: 70%">
            </div>
            <div class="col-md-4">
                <img src="img\rupixen-com-Q59HmzK38eQ-unsplash.jpg" width="30%" style="border-radius: 70%">
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 py-4 my-4">
                <h2 class="text-center fw-bold">How to get started?</h2>
            </div>
            <div class="col-md-4">Create an account</div>
            <div class="col-md-4">add your local money</div>
            <div class="col-md-4">protect your money, send and spend</div>
        </div>

    </div>
@endsection
