@extends('layouts.app')
@section('content')

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Họ tên</th>
            <th>Mã SV</th>
            <th>Tuổi</th>
            <th>Lớp</th>
            <th>Điểm TB</th>
            <th>Xếp loại</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $sv)
        <tr>
            <td>{{ $sv['hoten'] }}</td>
            <td>{{ $sv['masv'] }}</td>
            <td>{{ $sv['tuoi'] }}</td>
            <td>{{ $sv['lop'] }}</td>
            <td>{{ $sv['diemtb'] }}</td>
            <td>
                @if ($sv['diemtb'] >= 8)
                    <div class="badge bg-success">Giỏi</div>
                @elseif ($sv['diemtb'] >= 6.5)
                    <div class="badge bg-warning text-dark">Khá</div>
                @else
                    <span class="badge bg-danger">Trung bình</span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<form action="{{ route('students.search') }}" method="get" class="mb-4">
    <div class="input-group">
        <input type="text" name="keyword" class="form-control" placeholder="Tìm theo tên...">
        <button class="btn btn-primary" type="submit">Tìm kiếm</button>
    </div>
</form>
@endsection