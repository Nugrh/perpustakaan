@extends('layouts.app')

@section('content')
@section('title', 'User Card')


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

                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->nis }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->alamat }}</td>
                            <td>{{ $user->no_hp }}</td>
                            <td>
                                <a href="{{ route('CetakKartuAnggota.index') }}/{{ $user->id }}/detail" class="btn btn-sm btn-primary">
                                    Detail
                                </a>

                                <a href="{{ route('CetakKartuAnggota.index') }}/{{$user->id}}/pdf" class="btn btn-sm btn-info">
                                    Cetak Kartu
                                </a>
                            </td>
                        </tr>

                    @endforeach



                    </tbody>
                 </table>
            </div>
        </div>
    </div>

@endsection
