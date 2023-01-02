@extends('layouts.app')

@section('withdrawcontent')


                <h1 class="fw-bolder">Settings
                </h1>
                <div class="col-md-12">
                    <div class="progress" style="height: .4rem;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <p>Set up your online banking system.</p>
            </div>
        </div>

        {{--            @if (!User()->all()->two_factor_secret)--}}
        {{--                you have not enabled two factor authentication--}}
        {{--            @else--}}
        {{--               you have two factor authentication enabled--}}
        {{--            @endif--}}
        {{--            <form method="POST" action="">--}}


        {{--            </form>--}}


        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item col-3" role="presentation">
                <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                    type="button" role="tab" aria-controls="Profile" aria-selected="true">
                    <h4 class="fw-bolder">Profile</h4>
                </button>
            </li>
            <li class="nav-item col-3" role="presentation">
                <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" type="button"
                    role="tab" aria-controls="security" aria-selected="false">
                    <h4 class="fw-bolder">Security</h4>
                </button>
            </li>
            <li class="nav-item col-3" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                    role="tab" aria-controls="contact" aria-selected="false">
                    <h4 class="fw-bolder">Contact</h4>
                </button>
            </li>
            <li class="nav-item col-3" role="presentation">
                <button class="nav-link btn-block" id="verification-tab" data-bs-toggle="tab"
                    data-bs-target="#verification" type="button" role="tab" aria-controls="verification"
                    aria-selected="false">
                    <h4 class="fw-bolder">Verification</h4>
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class=" row tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card-body border-muted  p-1 mt-4 ms-2 bg-body rounded">
                            <h3 class="card-title text-center fw-bolder text-muted p-2 text-underline">Profile</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="\img\profileimage.png" alt="" srcset="" style="border-radius: 120px"
                                        width="110rem" height="110rem">
                                </div>
                                <div class="col-md-8">
                                    <h5 class="card-title fw-bolder text-muted p-2">Name:Daniel Ngao muema</h5>
                                    <p class="card-text fw-bolder text-muted p-2">Location:Kerugoya</p>
                                    <form action="" method="post" class="row">
                                        <div class="mb-3 me-4">
                                            <label for="formFileSm" class="form-label">Upload your Photo</label>
                                            <input class="form-control form-control-sm" id="formFileSm" type="file">

                                        </div>
                                        <div class="col-auto flex-center">
                                            <button type="submit" class="btn btn-info btn-sm mb-3">Upload Photo</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-body text-center p-1 mt-4 ms-1 bg-body rounded">
                            <form class="row g-3 m-2">
                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>

                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Account No</label>
                                    <input type="text" class="form-control" id="inputAddress"
                                        placeholder="Add account number">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Update Name</label>
                                    <input type="text" class="form-control" id="inputAddress2"
                                        placeholder="update your name">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">State</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="inputZip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-info">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                <div class="row justify-content-center">
                    <div class="card text-center">
                 <div class="col-md-6 shadow-lg p-1 m-4 ms-1 bg-body rounded">
                    <h3 class="fw-bolder p-3 text-decoration-underline text-center">Enable 2FA Authentication</h3>
                    <p class="fw-bolder p-3">Click the button below to enable two factor authentication</p>
                    <a href="" class="btn btn-info p-2 m-4">Clikc to Enable</a>
                 </div>
                </div>
               </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="card-body text-center p-1 mt-4 ms-1 bg-body rounded">
                    <form class="row g-3 m-2">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>

                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Account No</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Add account number">
                        </div>

                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="verification" role="tabpanel" aria-labelledby="verification-tab">
                <div class="card-body text-center p-1 mt-4 ms-1 rounded">
                    <div class="row justify-content-center">
                    <div class="col-md-4 shadow-lg p-1 m-4 ms-1 bg-body rounded ">
                        <h3 class="fw-bolder p-3 text-decoration-underline">Verification your Email</h3>
                        <p class="fw-bolder p-3">click the link below to verify your email as well as the your phone number</p>
                        <a href="welcome.blade.php" class="btn btn-info p-2 m-4">Click to enable</a>
                    </div>
                    <div class="col-md-4 shadow-lg p-1 m-4 ms-1 bg-body rounded ">
                        <h3 class="fw-bolder p-3 text-decoration-underline">Verification your Phone</h3>
                        <p class="fw-bolder p-3">click the link below to verify your email as well as the your phone number</p>
                        <a href="" class="btn btn-info p-2 m-4">Clikc to verify</a>
                    </div>
                    </div>
                </div>
            
@endsection
