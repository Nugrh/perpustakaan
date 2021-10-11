@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="alert alert-secondary">Laporan Data Pengembalian Buku</div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label">Dari tanggal</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Dari tanggal</label>
                        <input type="date" class="form-control">
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="">
                        <a href="" class="btn btn-secondary mt-2 mb-2 ">
                            Rekap Seluruh Laporan
                        </a>
                    </div>
                    <div class="">
                        <a href="" class="btn btn-primary mt-2 mb-2 text-right">
                            Cari Laporan
                        </a>
                    </div>
                </div>


                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Buku</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Drasi Peminjaman</th>
                        <th scope="col">Denda</th>
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
                            <td>Rp.0</td>
                        </tr>

                    @endfor

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
