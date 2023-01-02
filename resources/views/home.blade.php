@extends('layouts.app')


    @section('homesection')
    <div class="col-md-10 bg-white">
        <div class="card" style="border: 0px">
            <div class="card-body">
                <div class="row shadow p-1 mb-1 bg-body rounded">

                    <p>your account is 1/3 set:<span class="fw-bolder"> Upload your photo</span>
                    </p>
                    <div class="col-md-10">
                        <div class="progress border-bottom border-dark mt-3" style="height: 0.6rem">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 15%" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-block btn-info rounded-pill" href>Upload photo</a>
                    </div>
                    <p>upload a photo of yourself to uniquely identify yourself</p>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4"><img src="/img/on2.jpg" class="img-fluid rounded-3"></div>
                    <div class="col-md-8">
                        <h1 class="text-start fw-bolder">Claim you invitation reward</h1>
                        <p class="fs-5">Deposit into your account more than $3.00 and verify your identity to get $1.00
                        </p>
                        <div class="d-md-flex justify-content-md-end">
                            <a href=""
                                class="text-end fs-6 me-md-2 text-decoration-none btn btn-sm btn-light rounded-pill px-4">later</a>
                            <a href=""
                                class="text-end fs-6 text-decoration-none me-2 btn btn-sm btn-info rounded-pill px-4">Verify</a>
                        </div>

                    </div>
                </div>
                <div class="row mt-5 justify-content-md-center">
                    <div class="col-md-12">
                        <h1 class="fw-bolder">My Balances</h1>
                    </div>
                    <div class="col-md-6 justify-content-md-center">
                            <div class="card-body text-center shadow-sm p-3 mb-5 w-75 bg-body rounded">
                              <h5 class="card-title fw-bolder">Main balance</h5>
                              <p class="card-text">$0.00</p>
                              <p class="card-text">Ksh0.00</p>
                              <a href="#" class="btn btn-info btn-sm me-4 ">Deposit</a>
                              <a href="#" class="btn btn-info btn-sm ms-4 me-1">Send/Request</a>
                            </div>
                            <div class="card-footer w-75 text-center text-white" style="background-color: rgb(0, 255, 157)">
                             View Activity
                            </div>
                    </div>

                </div>
            </div>

            {{--            @if (!User()->all()->two_factor_secret)--}}
            {{--                you have not enabled two factor authentication--}}
            {{--            @else--}}
            {{--               you have two factor authentication enabled--}}
            {{--            @endif--}}
            {{--            <form method="POST" action="">--}}


            {{--            </form>--}}
        </div>

            <h2 class="fw-bolder ps-5 pt-4">Recent Activities</h2>


            <table class="table table-success">
                <thead>
                  <tr>

                    <th scope="col">Transaction</th>
                    <th scope="col">Ammount</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Last update</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>WITHDRAW</td>
                    <td>$2.49</td>
                    <td>M-Pesa</td>
                    <td>12/10/2021</td>
                    <td>Pending</td>
                  </tr>
                  <tr>
                    <td>WITHDRAW</td>
                    <td>$2.49</td>
                    <td>M-Pesa</td>
                    <td>12/10/2021</td>
                    <td>Pending</td>
                  </tr>
                  <tr>
                    <td>WITHDRAW</td>
                    <td>$2.49</td>
                    <td>M-Pesa</td>
                    <td>12/10/2021</td>
                    <td>Pending</td>
                  </tr>

                </tbody>
              </table>

    </div>

</div>
</div>
@endsection


