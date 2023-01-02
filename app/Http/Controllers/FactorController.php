<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nexmo\Laravel\Facade\Nexmo;

class FactorController extends Controller

{
    public function show()
    {
        return view('factor');
    }

    public function verify(Request $request)
    {
        $this->validate($request,[
            'code'=>'size:4'
        ]);
//        $user=new User();
//        $user->email=$request->email;
//        $user->code=$code;
//        $user->save();
//        $check=User::Where('code',$request->code)->first();
//        if ($check){
//           $check->code="";
//           $check->save();
//        }else{
//          return back()->withErrors('you enter the wrong code');
//        }
        $request_id=$request->Session()->get('nexmo:request_id');

        $verification= new \Nexmo\Verify\Verification($request_id);

        Nexmo::verify()->check($verification, $request->code);
        Auth::loginUsingId($request->session()->pull('nexmo:user:id'),true);
        return redirect('/home');
    }
}
