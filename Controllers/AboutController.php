<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index(){
        return view('about', [
            "tittle" => "About",
            "about" => About::all() //karna static maka Post::
        ]);
    }
}
