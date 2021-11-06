@extends('layouts.app')

@section('content')
@section('title', 'Peminjaman')


<div class="container">
    <div class="card">
        <div class="card-body border">
            <form action="" method="post">
                @csrf
                <div class="row mb-5">
                    <div class="col">
                        <div class="alert alert-info">Peminjam</div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama peminjam</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="text" class="form-control" id="nis">
                        </div>
                        <a href="" class="btn btn-sm">Cek user</a>
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
