<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    public function index(){
        return view('info', [
            "tittle" => "Info",
            "posts" => Info::all() //karna static maka Post::
        ]);
    }

    public function show($slug){
        return view('inform', [
            "tittle" => "Single Post",
            "post" => Info::find($slug)
        ]);
    }
}
