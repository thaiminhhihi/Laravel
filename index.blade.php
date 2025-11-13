@extends('adminlte::page')

@section('title', 'Danh sách sách')

@section('content')
<div class="container">
    <h2>Danh sách Sách</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">+ Thêm sách</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Tên sách</th>
            <th>Tác giả</th>
            <th>Năm XB</th>
            <th>Mô tả</th>
            <th>Hành động</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->year }}</td>
            <td>{{ $book->description }}</td>
            <td>
                <a href="{{ route('books.edit', $book) }}" class="btn btn-warning btn-sm">Sửa</a>
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Xóa sách này?')">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
