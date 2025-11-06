<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KhachSanController extends Controller
{
    public function khachsantuyetvoinhat(Request $request){
        $tenkhachsan ="khach san anh duong";
        $diachi = "123 tran phu, da nang";
        $sosao =4;
        $averageprice = "1.200.000 VNĐ / đêm";
        $note =" Khách sạn nằm gần biển, có hồ bơi và nhà hàng sang trọng.";
        return view("viewcuakhachsan")-> with ([
            'tenkhachsan' => $tenkhachsan,
            'diachi' => $diachi,
            'sosao' => $sosao,
            'averageprice' => $averageprice,
            'note' => $note,
        ]);

    }
}
