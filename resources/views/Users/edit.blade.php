@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="card">
                <div class="card-body">
    {{--            TODO: display edit user error--}}
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

                    <form action="{{route('users.update', $users)}}" enctype="multipart/form-data" method="post" >
                        @csrf
                        <div>
                            <input type="hidden" name="id" id="id" value="{{$users->id}}">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="nis" class="form-control" id="nis" placeholder="NIS..." value="{{$users->nis}}">
                            <label for="nis" class="form-label">NIS</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anggota" value="{{$users->name}}">
                            <label for="name" class="form-label">Nama Anggota</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{$users->email}}">
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="tel" name="no_hp" class="form-control" id="no_hp" placeholder="No. Handphone" value="{{$users->no_hp}}">
                            <label for="no_hp" class="form-label">No. Handphone</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="alamat" class="form-control" id=alamat" placeholder="Jumlah buku" value="{{$users->alamat}}">
                            <label for="alamat" class="form-label">Alamat</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="akses" id="akses" value="{{$users->akses}}">
                                <option selected>Pilih akses</option>
                                <option value="1">Admin</option>
                                <option value="2">Moderator</option>
                                <option value="3">User</option>
                            </select>
                            <label for="akses" class="form-label">Akses</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Jumlah buku" value="{{$users->password}}">
                            <label for="password" class="form-label">Password</label>
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="../books" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>

@endsection

