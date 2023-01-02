<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function settingindex()
    {
        return view('/settings');
    }
}
