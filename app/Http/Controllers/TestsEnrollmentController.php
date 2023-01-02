<?php

namespace App\Http\Controllers;
use App\Notifications\TestEnrollment;
use Illuminate\Http\Request;
use App\Models\User;

class TestsEnrollmentController extends Controller
{
    public function sendTestNotification()
    {    $user= User::first();
        $enrollmentData=[
            'body'=>'you received a new test notification',
        'enrollmentText'=>'You are allowed to enroll',
        'url'=>url('/'),
        'thankyou'=>'You have 14 days of enrollment'
        ];
        $user->notify(new TestEnrollment($enrollmentData));
    }
}
