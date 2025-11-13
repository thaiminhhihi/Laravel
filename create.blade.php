@extends('adminlte::page')

@section('content')
<div class="container">
    <h2>Thêm sách mới</h2>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Tên sách</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tác giả</label>
            <input type="text" name="author" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Năm xuất bản</label>
            <input type="number" name="year" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Mô tả</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <button class="btn btn-success">Lưu</button>
    </form>
</div>
@endsection
