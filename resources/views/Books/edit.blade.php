@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="alert alert-warning">Edit Data Buku</div>

{{--        TODO: display edit book error--}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <h2>Error!</h2>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('books.update', $book)}}" enctype="multipart/form-data" method="post" >
                @csrf
                <div>
                    <input type="hidden" name="id" id="id" value="{{$book->id}}">
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Judul buku" value="{{$book->name}}">
                    <label for="name" class="form-label">Judul Buku</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="description" class="form-control" id="deskripsi" placeholder="Deskripsi" value="{{$book->description}}">
                    <label for="deskripsi" class="form-label">Diskripsi</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="penerbit" class="form-control" id="penerbit" placeholder="Penerbit" value="{{$book->penerbit}}">
                    <label for="penerbit" class="form-label">Penerbit</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" name="tanggal_terbit" class="form-control" id="" placeholder="tanggal terbit" value="{{$book->tanggal_terbit}}">
                    <label for="" class="form-label">Tanggal terbit</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" name="stock" class="form-control" id="stock" placeholder="Jumlah buku" value="{{$book->stock}}">
                    <label for="stock" class="form-label">Jumlah buku</label>
                </div>
                <div class="mb-3">
                    <label for="katagori" class="form-label">Pilih katagori</label>
                    <select class="form-select" name="category_id" id="katagori">
                        <option selected>Pilih katagori</option>
                        @foreach($categorys as $category)
                            <option value="{{$category['no_rak']}}">{{$category['no_rak'] . ". " . $category['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image"  class="form-label">Cover Buku</label>
                    <input type="file" name="images" class="form-control" id="image" placeholder="Cover buku" value="{{$book->images}}">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
                <a href="../books" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection
