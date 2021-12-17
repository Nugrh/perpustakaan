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
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ old('alamat') }}">
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">Nomor HP</label>
                            <input type="tel" class="form-control" no_hp="no_hp" id="no_hp" value="{{ old('no_hp') }}">
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
                        </div>
                    </div>

                    <div class="col">
                        <div class="alert alert-info">Buku yang dipinjam</div>
                        <div class="row">
                            <form action="{{ route('peminjaman.search') }}" method="get">
                                <div class="col-md-10 mb-3">
                                    <label for="keyword" class="form-label">Nama buku</label>
                                    <input type="text" class="form-control" name="keyword" id="keyword">
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
                                            <th>{{ asset("storage/images/$book->images") }}</th>
                                            <td>{{ $book->name }}</td>
                                            <td>{{ $book->penulis }}</td>
                                            <td>
                                                <button type="submit">Select</button>
                                            </td>
                                       </tr>
                                    @empty
                                        <p>Cari buku</p>
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
