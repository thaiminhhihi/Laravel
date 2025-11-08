<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    private $students = [
        ['hoten' => 'Nguyễn Văn A', 'masv' => 'SV001', 'tuoi' => 20, 'lop' => 'CNTT1', 'diemtb' => 8.5],
        ['hoten' => 'Trần Thị B', 'masv' => 'SV002', 'tuoi' => 21, 'lop' => 'CNTT2', 'diemtb' => 7.8],
        ['hoten' => 'Lê Văn C', 'masv' => 'SV003', 'tuoi' => 19, 'lop' => 'CNTT1', 'diemtb' => 9.2],
    ];

    public function index(Request $request)
    {
        $students = $this->students;
        return view('students.index', compact('students'));
    }

    public function create(Request $request)
    {
        return view('students.create');
    }

  public function store(Request $request)
    {
        $student = $request->only(['hoten', 'masv', 'tuoi', 'lop', 'diemtb']);
        return view('students.result', ['student' => $student, 'action' => 'store']);
    }


    public function search(Request $request)
    {
        $keyword = strtolower($request->input('keyword', ''));
        $filtered = array_filter($this->students, function ($s) use ($keyword) {
            return str_contains(strtolower($s['hoten']), $keyword);
        });

        return view('students.result', ['students' => $filtered, 'action' => 'search', 'keyword' => $keyword]);
    }
}

