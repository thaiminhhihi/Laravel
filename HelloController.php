<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function showHello(request $request)   {
        return "xin chao cac ban";
        
    }
}
