@extends('adminlte::page')

@section('content')
<div class="container">
    <h2>Sửa thông tin sách</h2>
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Tên sách</label>
            <input type="text" name="title" value="{{ $book->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tác giả</label>
            <input type="text" name="author" value="{{ $book->author }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Năm xuất bản</label>
            <input type="number" name="year" value="{{ $book->year }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Mô tả</label>
            <textarea name="description" class="form-control">{{ $book->description }}</textarea>
        </div>
        <button class="btn btn-primary">Cập nhật</button>
    </form>
</div>
@endsection
