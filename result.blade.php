@extends('layouts.app')

@section('content')
@if($action == 'store')
    <h3>Kết quả thêm sinh viên</h3>
    <table class="table table-bordered mt-3">
        @foreach ($student as $key => $value)
            <tr>
                <th>{{ ucfirst($key) }}</th>
                <td>{{ $value }}</td>
            </tr>
        @endforeach
    </table>
@elseif($action == 'search')
    <h3>Kết quả tìm kiếm: "{{ $keyword }}"</h3>
    @if(count($students) > 0)
        <table class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Họ tên</th>
                    <th>Mã SV</th>
                    <th>Tuổi</th>
                    <th>Lớp</th>
                    <th>Điểm TB</th>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-danger mt-3">Không tìm thấy sinh viên nào!</div>
    @endif
@endif
@endsection
