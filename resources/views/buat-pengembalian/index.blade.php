@extends('layouts.app')

@section('content')


<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="alert alert-secondary">Data Pengembalian Buku</div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Buku</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Durasi Peminjaman</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @for($i = 1; $i <= 10; $i++)
                    <tr>
                        <td><i>undefined</i></td>
                        <td><i>undefined</i></td>
                        <td><i>dd/mm/yyyy</i></td>
                        <td><i>dd/mm/yyyy</i></td>
                        <td>-0 Hari</td>
                        <td><a href="" class="btn btn-outline-primary">Kembalikan buku</a></td>
                    </tr>

                    @endfor

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
