@extends('layouts.app')

@section('content')
<h3 class="mb-3">Thêm sinh viên mới</h3>

<form action="{{ route('students.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label">Họ tên</label>
        <input type="text" name="hoten" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Mã SV</label>
        <input type="text" name="masv" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Tuổi</label>
        <input type="number" name="tuoi" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Lớp</label>
        <input type="text" name="lop" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Điểm TB</label>
        <input type="number" step="0.1" name="diemtb" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Lưu thông tin</button>
</form>
@endsection
