<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Nexmo\Laravel\Facade\Nexmo;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function authenticated(Request $request,Authenticatable $user)
    {
        Auth::logout();
        $request->session()->put('nexmo:user:id', $user->id);
        $verification=Nexmo::verify()->start([
            'number'=>$user->phone_number,
            'brand'=>'Abp online bank'
        ]);
        $request->session()->put('nexmo:request_id', $verification->getRequestId());
        return redirect('/factor');
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
//    protected function authenticated(Request $request, $user)
//    {
////        $token = $request->User()->createToken($request->two_factor_secret);
////        User()->notify(new two_factor_secret);
//    }
}
