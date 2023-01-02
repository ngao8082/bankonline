<?php

use Illuminate\Support\Facades\Route;
use Irabbi360\LaravelVideoable\VideoController;

    Route::get('vimeo', 'VideoController@showvimeo');
    Route::get('youtube', 'VideoController@showyoutube');
    Route::get('youtube', [VideoController::class,'showyoutube']);
    Route::get('vimeo', [VideoController::class,'showvimeo']);

