<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\NexmoMessage;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function index(){
        Nexmo::message()->send([
             'to'=>'254794007861',
             'from'=>'254796694091',
             'text'=>'this is my text to the phone'
            ]);
        echo "hey puppy message send successfully";
    }
}
