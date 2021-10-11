@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
{{--            TODO: display create user error--}}
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

                <form action="{{route('users.store')}}" enctype="multipart/form-data" method="post" >
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="nis" class="form-control" id="nis" placeholder="nis">
                        <label for="nis" class="form-label">NIS</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anggota">
                        <label for="name" class="form-label">Nama Anggota</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        <label for="email" class="form-label">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="tel" name="no_hp" class="form-control" id="no_hp" placeholder="No. Handphone">
                        <label for="no_hp" class="form-label">No. Handphone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="alamat" class="form-control" id=alamat" placeholder="Jumlah buku">
                        <label for="alamat" class="form-label">Alamat</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="akses" id="akses">
                            <option selected>Pilih Akses</option>
                            <option value="1">Katagori 1</option>
                            <option value="2">Katagori 2</option>
                            <option value="3">Katagori 3</option>
                        </select>
                        <label for="akses" class="form-label">Akses</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Jumlah buku">
                        <label for="password" class="form-label">Password</label>
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                    <a href="../books" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>

@endsection

