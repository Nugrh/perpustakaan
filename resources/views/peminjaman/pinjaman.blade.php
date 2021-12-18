@extends('layouts.app')

@section('content')
@section('title', 'Peminjaman')

<div class="container">
    <div class="card">
        <div class="card-body border">

{{--            <form action="{{ route('peminjaman.store') }}" method="post">--}}
                <div class="row">
                    <div class="col">
                        <div class="alert alert-info">Peminjam</div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">NIS</label>
                                    <input type="text" class="form-control" name="alamat" id="alamat" value="{{ old('alamat') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <select name="kelas" id="kelas" class="form-select">
                                    <option selected disabled>pilih kelas</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="col mb-3">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-select">
                                    <option selected disabled>pilih jurusan</option>
                                    <option value="RPL">RPL</option>
                                    <option value="MM">MM</option>
                                    <option value="TKJ">TKJ</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="kelas" class="form-label">Tanggal pinjam</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col">
                                <label for="kelas" class="form-label">Tanggal kembali</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="alert alert-info">Buku yang dipinjam</div>
                        <form action="{{ route('peminjaman.search') }}" method="get">
                            <div class="mb-3">
                                <label for="keyword" class="form-label">Nama buku</label>
                                <input type="text" class="form-control" name="keyword" id="keyword" value="{{ old('keyword') }}">
                            </div>
                        </form>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Sampul</th>
                                        <th scope="col">Nama Buku</th>
                                        <th scope="col">Penulis</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($books as $book)
                                        <tr>
                                            <form action="{{ route('peminjaman.store') }}" method="post">
                                                @csrf
                                                <div class="">
                                                    <input type="hidden" name="images" value="{{ $book->images }}">
                                                    <th>
                                                        <img src="{{ asset("storage/images/$book->images") }}" alt="" width="128px" class="img-thumbnail img-fluid">
                                                    </th>
                                                </div>
                                                <div class="">
                                                    <input type="hidden" name="book_name" value="{{ $book->name }}">
                                                    <td>{{ $book->name }}</td>
                                                </div>
                                                <div class="">
                                                    <input type="hidden" name="book_penerbit" value="{{ $book->penerbit }}">
                                                    <td>{{ $book->penerbit }}</td>
                                                </div>
                                                <td>
                                                    <button type="submit">Select</button>
                                                </td>
                                            </form>
                                        </tr>
                                    @empty
                                        <p><i>Buku tidak ditemukan, silahkan untuk menambahkan buku terlebih dahulu!</i></p>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('peminjaman') }}" class="btn btn-outline-secondary">Cancel</a>
{{--            </form>--}}
        </div>
    </div>
</div>

@endsection
