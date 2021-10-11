@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="alert alert-secondary">Cetak Kartu Anggota</div>
        <div class="card">
            <div class="card-body">
                <div class="alert alert-warning">Silahkan pilih data anggota yang ingin di cetak</div>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Alamat</th>
                        <th scope="col" class="">Telp</th>
                        <th scope="col">Option</th>
                    </tr>
                    </thead>
                    <tbody>

                    @for($i = 1; $i <= 10; $i++)
                        <tr>
                            <td>00000000000000000</td>
                            <td><i>undefined</i></td>
                            <td><i>undefined</i></td>
                            <td><i>08000000000</i></td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning">
                                    Detail
                                </a>

                                <a href="" class="btn btn-sm btn-danger">
                                    Cetak Kartu
                                </a>
                            </td>
                        </tr>

                    @endfor

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
