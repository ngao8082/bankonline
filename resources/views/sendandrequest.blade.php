@extends('layouts.app')

@section('withdrawcontent')

                <h1 class="fw-bolder">Send/Request Payment
                </h1>
                <p>send your payment or transfer cash online banking system</p>
                <div class="col-md-12">
                    <div class="progress" style="height: .4rem;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <p>Request your payment from client through online banking system.</p>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 border-2 border-bottom pb-5 rounded-end rounded-start border-muted border-end">
                    <h5 class="fw-bolder">From:</h5>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="inputGroup-sizing-lg"><i
                                class="fa fa-cloud-upload"></i></span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-lg" disabled>

                    </div>

                </div>
                <div class="col-md-6  border-2 border-top border-end pt-2 rounded-end  border-muted">
                    <h5 class="fw-bolder">To:</h5>
                    <form action="" method="post">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-lg">
                            <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa fa-search"></i></span>

                        </div>
                    </form>
                </div>
                <div
                    class="col-md-12 rounded-end border-2 border-start pt-4 border-end border-bottom rounded border-muted">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="shadow p-3 mb-5 bg-body rounded justify-conet">
                                <form class="row g-3">
                                    <h1 class="fw-bolder text-center text-decoration-underline">Send Money
                                    </h1>
                                    <div class="col-md-8">
                                        <label for="validationDefault01" class="form-label fw-bolder">Account
                                            Number</label>
                                        <input type="text" class="form-control" id="validationDefault01"
                                            placeholder="Enter your Account numnber" required>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="validationDefault02" class="form-label fw-bolder">Amount To
                                            Send</label>
                                        <input type="text" class="form-control" id="validationDefault02"
                                            placeholder="amount to withdraw" required>
                                    </div>
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-block btn-info btn-sm">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="shadow p-3 mb-5 bg-body rounded">
                                <form class="row g-3">
                                    <h1 class="fw-bolder text-center text-decoration-underline">Request Cash
                                    </h1>
                                    <div class="col-md-8">
                                        <label for="validationDefault01" class="form-label fw-bolder">Account
                                            Number</label>
                                        <input type="text" class="form-control" id="validationDefault01"
                                            placeholder="Enter your Account numnber" required>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="validationDefault02" class="form-label fw-bolder">Ammount To
                                            Request</label>
                                        <input type="text" class="form-control" id="validationDefault02"
                                            placeholder="amount to withdraw" required>
                                    </div>
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-block btn-info btn-sm">Request</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <h2 class="fw-bolder ps-5 pt-4 pb-4">Other form of online banks</h2>
                <div class="col-md-2">
                    <div class="shadow p-1 mb-1 bg-body rounded">
                        <h4 class="text-center text-primary fw-bolder pt-4">PayPal</h4>
                        <h4 class="text-center text-primary"><i class="fa fa-paypal"></i></h4>
                        <p class="card-text text-center">$0.00</p>
                        <p class="card-text text-center">Ksh0.00</p>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="shadow p-1 mb-1 bg-body rounded">
                        <h4 class="text-center fw-bolder pt-4" style="color: #d63384">Skrill</h4>
                        <h4 class="text-center text-primary"><i class="fa fa-alipay"></i></h4>
                        <p class="card-text text-center">$0.00</p>
                        <p class="card-text text-center">Ksh0.00</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="shadow p-1 mb-1 bg-body rounded">
                        <h4 class="text-center text-success fw-bolder pt-4">Mpesa</h4>
                        <h4 class="text-center text-primary"><i class="fa fa-paypal"></i></h4>
                        <p class="card-text text-center">$0.00</p>
                        <p class="card-text text-center">Ksh0.00</p>
                    </div>
                </div>
                <div class="col-md-2 ">
                    <div class="shadow p-1 mb-1 bg-body rounded">
                        <h4 class="text-center text-primary fw-bolder pt-4">Netller</h4>
                        <h4 class="text-center text-primary"><i class="fa fa-paypal"></i></h4>
                        <p class="card-text text-center">$0.00</p>
                        <p class="card-text text-center">Ksh0.00</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="shadow p-1 mb-1 bg-body rounded">
                        <h4 class="text-center fw-bolder pt-4" style="color: #6f42c1">Paxful</h4>
                        <h4 class="text-center text-primary"><i class="fa fa-paypal"></i></h4>
                        <p class="card-text text-center">$0.00</p>
                        <p class="card-text text-center">Ksh0.00</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="shadow p-1 mb-1 bg-body rounded">
                        <h4 class="text-center text-warning fw-bolder pt-4">Binance</h4>
                        <h4 class="text-center text-warning"><i class="fa fa-btc"></i></h4>
                        <p class="card-text text-center">$0.00</p>
                        <p class="card-text text-center">Ksh0.00</p>

                    </div>
                </div>            
@endsection
