<?php

namespace Irabbi360\LaravelVideoable;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Irabbi360\LaravelVideoable\Models\Video;

class VideoController extends Controller
{
    public function __construct()
{

}

    public function showyoutube(){
                 $getalldata=Video::all();

                 foreach($getalldata as $getalldatum){
                       $code =$getalldatum->code;
                 }
//                $code=Video::findOrFail(Request('code'));
               return view('laravel-videoable::sources.youtube', compact('code'));
    }

    public function showvimeo(){
        $getalldata=Video::all();
        foreach($getalldata as $getalldatum){
            $code =$getalldatum->code;
        }
        return view('laravel-videoable::sources.vimeo', compact('code'));

    }
}
