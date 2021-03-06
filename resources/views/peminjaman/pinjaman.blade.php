@extends('layouts.app')
@section('title', 'Peminjaman')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body border">
            <form id="form_keyword" action="{{ route('peminjaman.book.search') }}" method="get">@csrf</form>
            <form action="{{ route('peminjaman.store') }}" method="post">
                @csrf
                <div class="peminjam">
                    <div class="alert alert-info">Peminjam</div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Anggota</label>
                                <input type="text" name="name" class="form-control{{$errors->has('name') ? ' is-invalid' : ''}}" id="name" value="{{ old('name') }}">

                                @if($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="nis" class="form-label">NIS</label>
                                <input type="number" name="nis" class="form-control{{$errors->has('nis') ? ' is-invalid' : ''}}" id="nis" value="{{ old('nis') }}">

                                @if($errors->has('nis'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nis') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Nomor HP <i>(opsional)</i></label>
                                <input type="text" name="no_hp" class="form-control{{$errors->has('no_hp') ? ' is-invalid' : ''}}" id="no_hp" value="{{ old('no_hp') }}">

                                @if($errors->has('no_hp'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('no_hp') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select name="kelas" id="kelas" class="form-select{{$errors->has('kelas') ? ' is-invalid' : ''}}">
                                <option selected disabled>pilih kelas</option>
                                <option value="10" {{ old('kelas') == '10' ? 'selected' : '' }}>10</option>
                                <option value="11" {{ old('kelas') == '11' ? 'selected' : '' }}>11</option>
                                <option value="12" {{ old('kelas') == '12' ? 'selected' : '' }}>12</option>
                            </select>

                            @if($errors->has('kelas'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('kelas') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-sm-3 mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-select{{ $errors->has('jurusan') ? ' is-invalid' : '' }}">
                                <option selected disabled>pilih jurusan</option>
                                <option value="RPL" {{ old('jurusan') == 'RPL' ? 'selected' : '' }}>RPL</option>
                                <option value="MM" {{ old('jurusan') == 'MM' ? 'selected' : '' }}>MM</option>
                                <option value="TKJ" {{ old('jurusan') == 'TKJ' ? 'selected' : '' }}>TKJ</option>
                            </select>

                            @if($errors->has('jurusan'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('jurusan') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="tanggal_pinjam" class="form-label">Tanggal pinjam</label>
                            <input type="date" name="tanggal_pinjam" class="form-control{{ $errors->has('tanggal_pinjam') ? ' is-invalid' : '' }}" value="{{ old('tanggal_pinjam') }}">

                            @if($errors->has('tanggal_pinjam'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('tanggal_pinjam') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="durasi" name="durasi" class="form-label">Durasi</label>
                            <select name="durasi" id="durasi" class="form-select{{ $errors->has('durasi') ? ' is-invalid' : '' }}">
                                <option selected disabled>Pilih durasi peminjaman</option>
                                <option value="1" {{ old('durasi') == '1' ? 'selected' : '' }}>1 Hari</option>
                                <option value="7" {{ old('durasi') == '7' ? 'selected' : '' }}>7 Hari</option>
                                <option value="30" {{ old('durasi') == '30' ? 'selected' : '' }}>30 Hari</option>
                            </select>

                            @if($errors->has('durasi'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('durasi') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                {{--Buku--}}
                <div class="buku">
                    <div class="alert alert-info">Buku yang dipinjam</div>
                    <div class="row">
                        <div class="col-9 mb-3 ">
                            <label for="keyword" class="form-label">Cari buku</label>
                            <input type="text" class="form-control" name="keyword" id="keyword" form="form_keyword" value="{{ old('keyword') }}" placeholder="Cari buku">
                        </div>
                        <div class="mb-3 col-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="text" class="form-control{{ $errors->has('jumlah') ? ' is-invalid' : '' }}" name="jumlah" id="jumlah" value="{{ old('jumlah') }}" min="1" max="5" placeholder="Maksimal 5 buku">
                            @if($errors->has('jumlah'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('jumlah') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
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
                            @if(session('stock'))
                                <span class="text-danger">
                                <strong><i>{{ session('stock') }}</i></strong>
                            </span>
                            @endif
                            @forelse($books as $book)
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input{{ $errors->has('book_id') ? ' is-invalid' : '' }}" id="book_id" type="radio" name="book_id" value="{{ $book->id }}">
                                        </div>
                                    </th>
                                    <td>
                                        <img src="{{ asset("storage/images/$book->images") }}" alt="" width="128px" class="img-thumbnail img-fluid">
                                    </td>
                                    <td>{{ $book->name }}</td>
                                    <td>{{ $book->penerbit }}</td>
                                    <td class="col-1">
                                        <input type="hidden" name="stock" value="{{ $book->stock }}">
                                        {{ $book->stock }}
                                    </td>
                                </tr>
                            @empty
                                <p><i><b>Buku tidak ditemukan, silahkan masukkan keyword dengan benar</b></i></p>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{ $books->links() }}
                </div>
                <button type="submit" class="btn btn-primary">submit</button>
                <a href="{{ route('peminjaman') }}" class="btn btn-outline-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>


@endsection
