@extends('layouts.app')

@section('content')
@section('title', 'Peminjaman')


<div class="container">
    <div class="card">
        <div class="card-body border">

            <div class="row mb-5">
                <div class="col">
                    <form action="" method="get">

                        <div class="alert alert-info">Peminjam</div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <label for="nis" class="form-label">ID Siswa</label>
                                <label for="nis" class="form-label"><a href="{{ route('users') }}">Cek ID Siswa</a></label>
                            </div>
                            <input type="text" class="form-control" name="id" id="id" value="{{ $id }}">
                        </div>

                        <div class="row">
                            <strong>
                                @if(session('exist-message'))
                                    <strong>{{ session('exist-message') }}</strong>
                                @endif
                            </strong>
                            <div class="col-3">
                                <div class="mb-3">Nama Siswa</div>
                                <div class="mb-3">Alamat</div>
                                <div class="mb-3">Telp</div>
                            </div>
                            <div class="col">
                                <div class="mb-3">: {{ isset($user) ? $user->name : 'Data tidak ditemukan' }}</div>
                                <div class="mb-3">: {{ isset($user) ? $user->alamat : 'Data tidak ditemukan' }}</div>
                                <div class="mb-3">: {{ isset($user) ? $user->no_hp : 'Data tidak ditemukan' }}</div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col">
                    <form action="" method="post">
                        @csrf
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
                    </form>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>

@endsection
