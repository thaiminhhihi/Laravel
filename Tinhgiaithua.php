<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tinhgiaithua extends Controller
{
    public function Tinhgiaithua(request $request ,$n)
    {
        // chỉ trả về view, truyền biến number qua
        return view('tinhgiaithua')-> with ('n', $n);
    }
}
