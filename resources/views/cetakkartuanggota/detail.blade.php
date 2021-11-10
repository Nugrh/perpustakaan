@extends('layouts.app')

@section('content')
@section('title', 'User Card | Detail')


<div class="card rounded mx-auto fs-5 mt-5" style="width: 600px; height: 320px">
        <div class="card-body">
            <strong>Detail Anggota</strong>
            <hr>
            <div class="row">
                <div class="col-5">ID Anggota</div>
                <div class="col">: {{ $users->id }}</div>
            </div>
            <div class="row">
                <div class="col-5">NIS</div>
                <div class="col">: {{ $users->nis }}</div>
            </div>
            <div class="row">
                <div class="col-5">Name</div>
                <div class="col">: {{ $users->name }}</div>
            </div>
            <div class="row">
                <div class="col-5">Email</div>
                <div class="col">: {{ $users->email }}</div>
            </div>
            <div class="row">
                <div class="col-5">Phone Number</div>
                <div class="col">: {{ $users->no_hp }}</div>
            </div>
            <div class="row">
                <div class="col-5">Address</div>
                <div class="col">: {{ $users->alamat }}</div>
            </div>

        </div>
        <a href="{{ route('CetakKartuAnggota.index') }}" class="btn btn-default btn-outline-secondary">Kembali</a>


    </div>


@endsection
