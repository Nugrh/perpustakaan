@extends('layouts.app')

@section('content')
@section('title', 'Book | Edit')

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="alert alert-warning">Edit Data Buku</div>

            <form action="{{route('book.update', $book)}}" enctype="multipart/form-data" method="post" >
                @csrf

                <div class="mb-3">
                    <input type="hidden" name="id" id="id" value="{{ $book->id }}">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Judul Buku</label>
                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{$book->name}}">

                    @if($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Diskripsi</label>
                    <input type="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="deskripsi" value="{{$book->description}}">

                    @if($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control{{ $errors->has('penerbit') ? ' is-invalid' : '' }}" id="penerbit" value="{{$book->penerbit}}">

                    @if($errors->has('penerbit'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('penerbit') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="tanggal_terbit" class="form-label">Tanggal terbit</label>
                    <input type="date" name="tanggal_terbit" class="form-control{{ $errors->has('tanggal_terbit') ? ' is-invalid' : '' }}" id="tanggal_terbit" value="{{$book->tanggal_terbit}}">

                    @if($errors->has('tanggal_terbit'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tanggal_terbit') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Jumlah buku</label>
                    <input type="number" name="stock" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" id="stock" value="{{$book->stock}}">

                    @if($errors->has('stock'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('stock') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="katagori" class="form-label">Pilih katagori</label>
                    <select class="form-select {{ $errors->has('category_id') ? 'is-invalid' : '' }}" name="category_id" id="katagori">
                        <option selected disabled>Pilih katagori</option>
                        @foreach($categorys as $category)
                            <option value="{{$category->no_rak}}" {{ $book->category_id == $category->no_rak ? 'selected' : '' }}>{{$category->no_rak . ". " . $category->name}}</option>
                        @endforeach
                    </select>

                    @if($errors->has('category_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('category_id') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="image"  class="form-label">Cover Buku</label>
                    <input type="file" name="images" class="form-control{{ $errors->has('images') ? ' is-invalid' : '' }}" id="image" value="{{$book->image}}">

                    @if($errors->has('images'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('images') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
                <a href="{{ route('book') }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection
