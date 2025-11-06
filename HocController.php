<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HocController extends Controller
{
    public function tenaido (Request $request){
        $name = " thai minh ";
        return view("tenbanhoc")->with("name", $name);
    }
}
