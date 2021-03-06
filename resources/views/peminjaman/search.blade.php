@extends('layouts.app')

@section('content')
@section('title', 'Peminjaman')


<div class="container">
    <div class="card">
        <div class="card-body border">

            <div class="row mb-5">
                <div class="col">
                    <form action="{{ route('peminjaman.search') }}" method="post">
                        @csrf
                        @if(session('success'))
                            <strong>{{ session('success') }}</strong>
                        @elseif(session('fail'))
                            <strong>{{ session('fail') }}</strong>
                        @endif
                        <div class="alert alert-info">Peminjam</div>
                        <div class="mb-3">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="text" class="form-control" name="nis" id="nis" value="{{ old('nis') }}">
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
                                    <div class="mb-3">: </div>
                                    <div class="mb-3">: </div>
                                    <div class="mb-3">: </div>
                                </div>
                            </div>
                        <button type="submit" class="btn btn-primary">Submiat</button>
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
