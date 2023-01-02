<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Nexmo\Laravel\Facade\Nexmo;

class NexmoController extends Controller

{
    public function show()
    {
        return view('nexmo');
    }

    public function verify(Request $request)
    {
        $this->validate($request,[
            'code'=>'size:4'
        ]);
        $request_id=session('nexmo_request_id');
        $verification=new \Nexmo\Verify\Verification($request_id);
        Nexmo::verify()->check($verification, $request->code);
        $date=date_create();
        DB::table('users')->where('id', Auth::id())->update(['phone_verified_at'=>date_format($date, 'Y-m-d H:i:s')]);
        return redirect('/home');
    }
}
