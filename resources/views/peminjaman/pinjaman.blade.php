@extends('layouts.app')

@section('content')
@section('title', 'Peminjaman')

<div class="container">
    <div class="card">
        <div class="card-body border">

            <form action="{{ route('peminjaman.store') }}" method="post">
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
                            <div class="col mb-3">
                                <label for="book_id" class="form-label">Nama buku</label>
                                <input type="text" class="form-control" name="book_id" id="book_id">
                            </div>
                            <div class="col mb-3">
                                <label for="jumlah" class="form-label">Jumlah buku</label>
                                <input type="number" class="form-control" name="jumlah" id="jumlah">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="book_id" class="form-label">Tanggal pinjam</label>
                                <input type="date" class="form-control" name="book_id" id="book_id">
                            </div>
                            <div class="col mb-3">
                                <label for="jumlah" class="form-label">Tanggal kembali</label>
                                <input type="date" class="form-control" name="jumlah" id="jumlah">
                            </div>
                        </div>


                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-outline-secondary">Cancel</a>

            </form>
        </div>
    </div>
</div>

@endsection
