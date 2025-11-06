<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userinfo extends Controller
{
    public function info (Request $request){
        $fullname = "thaiminh";
        $age = 20;
        return view("userinfo") -> with ([
            'ten_that'=> $fullname,
            'tuoi' => $age,
        ]);
    }
}
