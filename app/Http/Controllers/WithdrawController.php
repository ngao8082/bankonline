<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function withdrawindex(){
        return view('withdraw');
    }
    public function depositindex(){
        return view('deposit');
    }
    public function senandrequestindex(){
        return view('sendandrequest');
    }
    public function cryptoindex(){
        return view('crypto');
    }
    public function dashboardindex(){
        return view('dashboard');
    }
}
