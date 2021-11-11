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

                        <div class="mb-3">
                            <label for="book" class="form-label">Nama buku</label>
                            <input type="text" class="form-control" id="book">
                        </div>
                        <label for="duration" class="form-label">Durasi peminjaman</label>

                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Pilih durasi peminjaman</option>
                            <option value="1">1 Hari</option>
                            <option value="3">3 Hari</option>
                            <option value="7">7 Hari</option>
                            <option value="15">15 Hari</option>
                            <option value="30">30 Hari</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ">Submit</button>
                <a class="btn btn-outline-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection
