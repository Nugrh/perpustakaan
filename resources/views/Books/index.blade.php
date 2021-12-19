<?php

$num = 1;

?>

@extends('layouts.app')
@section('title', 'Books')

@section('content')

<div class="container">
    <div class="alert alert-secondary fs-6">
        List Buku
    </div>
    <div class="card">
        <div class="card-body">
            <div class="alert alert-warning" role="alert">
                <div class="font-weight-bold fs-4 ">
                    Data Buku
                </div>
            </div>
            @if(session('insert-message'))
                <div class="alert alert-success">{{session('insert-message')}}</div>
            @elseif(session('update-message'))
                <div class="alert alert-success">{{session('update-message')}}</div>
            @elseif(session('delete-message'))
                <div class="alert alert-success">{{session('delete-message')}}</div>
            @endif
                <div class="row">
                <div class="col mb-2">
                    <a href="./book/create" class="btn btn-primary">Tambah stock buku</a>
                    <a href="" class="btn btn-outline-dark">Rekap semua buku</a>
                </div>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" class="">Nama Buku</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col" class="">Tanggal terbit</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

{{--                    @for($i = 1; $i <= 10; $i++)--}}
                    @foreach($books as $book)
                        <tr>
                            <th scope="row">{{ $num++ }}</th>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->penerbit }}</td>
                            <td>{{ $book->tanggal_terbit }}</td>
                            <td>{{ $book->stock }}</td>
                            <td>
                                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-warning">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.2322 5.23223L18.7677 8.76777M16.7322 3.73223C17.7085 2.75592 19.2914 2.75592 20.2677 3.73223C21.244 4.70854 21.244 6.29146 20.2677 7.26777L6.5 21.0355H3V17.4644L16.7322 3.73223Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>

                                <a href="{{ route('book.delete', $book->id) }}" onclick="return confirm('Are you sure want to delete this book?')" class="btn btn-sm btn-danger">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 7L18.1327 19.1425C18.0579 20.1891 17.187 21 16.1378 21H7.86224C6.81296 21 5.94208 20.1891 5.86732 19.1425L5 7M10 11V17M14 11V17M15 7V4C15 3.44772 14.5523 3 14 3H10C9.44772 3 9 3.44772 9 4V7M4 7H20" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
{{--                    @endfor--}}

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
