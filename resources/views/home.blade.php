@extends('layouts.app')

@section('content')
@section('title', 'Perpustakaan | Home')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border-0 shadow-sm">
                <div class="card-body">

                    <!-- Atas -->
                    <div class="d-flex justify-content-between">
                        <div class="kiri">{{count($users)}}</div>
                        <div class="kanan">
                            <img src="{{url('/storage/icon/outline/document-text.svg')}}" alt="">
                        </div>
                    </div>

                    <!-- Label text -->
                    <div class="">
                        <div class="">
                            <label for="" class="text-secondary">Teks label</label>
                        </div>

                        <!-- Tombol -->
                        <div class="">
                            <button class="btn btn-info" type="submit">Tombol kanan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card border-0 shadow-sm">
                <div class="card-body">

                    <!-- Atas -->
                    <div class="d-flex justify-content-between">
                        <div class="kiri">{{$total}}</div>
                        <img src="{{asset('storage/icon/outline/book-open.svg')}}" alt="Book.svg">
                    </div>

                    <!-- Label text -->
                    <div class="">
                        <div class="">
                            <label for="" class="text-secondary">Teks label</label>
                        </div>
                        <!-- Tombol -->
                        <div class="">
                            <button class="btn btn-info" type="submit">Tombol kiri</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
