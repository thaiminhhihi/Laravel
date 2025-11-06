<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerXinchaotest extends Controller
{
    public function Sayhello (Request $request){
        return "xin chao cac ban";
    }
    public function WelcometoLaravel (Request $request){
        return view("welcometolaravel");
    }
}
