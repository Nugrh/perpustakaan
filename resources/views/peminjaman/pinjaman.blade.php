@extends('layouts.app')
@section('title', 'Peminjaman')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body border">

            <form id="form_keyword" action="{{ route('peminjaman.search') }}" method="get">@csrf</form>


            <form action="{{ route('peminjaman.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="alert alert-info">Peminjam</div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control{{ $errors->has('name') ? ' is invalid' : '' }}" name="name" id="name" value="{{ old('name') }}">

                                @if($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="nis" class="form-label">NIS</label>
                                <input type="text" class="form-control{{ $errors->has('nis') ? ' is invalid' : '' }}" name="nis" id="nis" value="{{ old('nis') }}">

                                @if($errors->has('nis'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select name="kelas" id="kelas" class="form-select{{ $errors->has('kelas') ? ' is invalid' : '' }}">
                                <option selected disabled>pilih kelas</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            @if($errors->has('kelas'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('kelas') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-select{{ $errors->has('jurusan') ? ' is invalid' : '' }}">
                                <option selected disabled>pilih jurusan</option>
                                <option value="RPL">RPL</option>
                                <option value="MM">MM</option>
                                <option value="TKJ">TKJ</option>
                            </select>
                            @if($errors->has('jurusan'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('jurusan') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col">
                            <label for="tanggal_pinjam" class="form-label">Tanggal pinjam</label>
                            <input type="date" class="form-control{{ $errors->has('tanggal_pinjam') ? ' is invalid' : '' }}">
                            @if($errors->has('tanggal_pinjam'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tanggal_pinjam') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="col">
                            <label for="tanggal_kembali" name="tanggal_kembali" class="form-label">Tanggal kembali</label>
                            <input type="date" name="tanggal_kembali{{ $errors->has('tanggal_kembali') ? ' is invalid' : '' }}" class="form-control">
                            @if($errors->has('tanggal_kembali'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tanggal_kembali') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="alert alert-info">Buku yang dipinjam</div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="keyword" class="form-label">Cari buku</label>
                                <input type="text" class="form-control" name="keyword" id="keyword" form="form_keyword" value="{{ old('keyword') }}" placeholder="Cari buku">
                            </div>
                            <div class="mb-3 col-2">
                                <label for="stock" class="form-label">Jumlah buku</label>
                                <input type="number" class="form-control{{ $errors->has('stock') ? ' is invalid' : '' }}" name="stock" id="stock" value="{{ old('stock') }}" min="1" max="5" placeholder="Maksimal 5 buku">
                                @if($errors->has('stock'))
                                    <span class="invalid-feedback">
                                            <strong>{{ $errors->first('stock') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Pilih Buku</th>
                                    <th scope="col">Sampul</th>
                                    <th scope="col">Buku</th>
                                    <th scope="col">Penerbit</th>
                                    <th scope="col">Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($books as $book)
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" id="book_id" type="radio" name="book_id" value="{{ $book->id }}">
                                            </div>
                                        </th>
                                        <td>
                                            <img src="{{ asset("storage/images/$book->images") }}" alt="" width="128px" class="img-thumbnail img-fluid">
                                        </td>
                                        <td>{{ $book->name }}</td>
                                        <td>{{ $book->penerbit }}</td>
                                        <td class="col-1">
                                            {{ $book->stock }}
                                        </td>
                                    </tr>
                                @empty
                                    <p><i><b>Buku tidak ditemukan, silahkan masukkan keyword dengan benar</b></i></p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <button type="submit">submit</button>
            </form>
        </div>
            <a href="{{ route('peminjaman') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </div>
</div>

@endsection
