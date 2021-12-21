@extends('layouts.app')
@section('title', 'Perpustakaan | Home')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <!-- Atas -->
                    <div class="d-flex justify-content-between">
                        <div class="kiri">{{count($users)}}</div>
                        <div class="kanan">
                            <img src="{{url('/storage/icon/outline/document-text.svg')}}" alt="Paper.svg">
                        </div>
                    </div>
                    <!-- Label text -->
                    <div class="">
                        <div class="">
                            <label for="" class="text-secondary">Jumlah anggota</label>
                        </div>
                        <!-- Tombol -->
                        <div class="">
                            <a href="{{ route('users') }}" class="btn btn-info" type="submit">Anggota</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <!-- Atas -->
                    <div class="d-flex justify-content-between">
                        <div class="kiri">{{$total}}</div>
                        <img src="{{asset('storage/icon/outline/book-open.svg')}}" alt="Book.svg">
                    </div>
                    <!-- Label text -->
                    <div class="">
                        <div class="">
                            <label for="" class="text-secondary">Jumlah buku</label>
                        </div>
                        <!-- Tombol -->
                        <div class="">
                            <a href="{{ route('book') }}" class="btn btn-info" type="submit">Buku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-5">
        <div class="row p-2 rounded">
            <div class="col">
                <div class="alert alert-info">
                    <div class="row">
                        <div class="col">
                            <h3>List buku</h3>
                        </div>
                        <div class="col-5">
                            <form action="{{ route('home.category') }}">
                                <div class="col d-flex">
                                    <select class="form-select" name="category" id="">
                                        <option value="">Semua katagori</option>
                                        @forelse($categorys as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    <button class="btn btn-primary " type="submit">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row justify-content-center">
            @forelse($books as $book)
                <div class="col-sm-2 card border-0 shadow-sm m-2 p-2 d-flex bg-light">
                    <div class="justify-content-center" style="height: 223px">
                        <div class="img-fluid">
                            <img class="img-fluid p-2" src="{{ asset("storage/images/$book->images") }}" alt="">
                        </div>
                    </div>
                    <div class="alert-secondary text-center shadow-sm" style="">
                        {{ $book->name }}
                    </div>
                    <div class="alert-secondary text-center shadow-sm" style="">
                        {{ $categorys[$book->category_id - 1]->name }}
                    </div>
                </div>
            @empty
                <div class="row">
                    <div class="col">
                        <h5 class="text-center">Tidak ada buku</h5>
                    </div>
                </div>
            @endforelse
            </div>
        </div>
</div>
</div>
@endsection

