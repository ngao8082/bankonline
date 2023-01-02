<?php

// namespace App\Http\Controllers\Payment;
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Victorybiz\LaravelCryptoPaymentGateway\LaravelCryptoPaymentGateway;

class PaymentController extends Controller
{
    /**
     * Cryptobox callback.
     */
    public function callback(Request $request)
    {   
      return LaravelCryptoPaymentGateway::callback();
    }
}