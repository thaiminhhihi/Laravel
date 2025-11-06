<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienControler extends Controller
{
    public function SVBK(request $request)
    {
        //         Họ tên: Nguyễn Văn B

        // Mã sinh viên: SV12345

        // Lớp: CNTT1

        // Ngành học: Công nghệ thông tin

        // Năm học: 2025
        $hoten = "Nguyễn Văn B";
        $masv = "SV12345";
        $lop = "CNTT1";
        $nganhhoc = "Công nghệ thông tin";
        $namhoc = 2025;
        return view('viewcuasinhvien')->with([
            'hoten' => $hoten,
            'masv' => $masv,
            'lop' => $lop,
            'nganhhoc' => $nganhhoc,
            'namhoc' => $namhoc,
        ]);
    }
}
