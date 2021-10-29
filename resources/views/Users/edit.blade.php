@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('users.update', $user)}}" enctype="multipart/form-data" method="post" >
                        @csrf
                        <div class="mb-3">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="text" name="nis" class="form-control{{ $errors->has('nis') ? ' is-invalid' : '' }}" id="nis" value="{{ $user->nis }}">

                            @if($errors->has('nis'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nis') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Anggota</label>
                            <input type="text" name="name" class="form-control{{$errors->has('name') ? ' is-invalid' : ''}}" id="name" value="{{ $user->name }}">

                            @if($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" value="{{ $user->email }}">

                            @if($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No. Handphone</label>
                            <input type="tel" name="no_hp" class="form-control{{ $errors->has('no_hp') ? ' is-invalid' : ''}}" id="no_hp" value="{{ $user->no_hp }}">

                            @if($errors->has('no_hp'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                            @endif

                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : ''}}" id=alamat" value="{{ $user->alamat }}">

                            @if($errors->has('alamat'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="akses" class="form-label">Akses</label>
                            <select class="form-select{{ $errors->has('akses') ? ' is-invalid' : ''}}" name="akses" id="akses" value="{{ $user->akses }}">
                                <option selected disabled>Pilih Akses</option>
                                <option value="1">Admin</option>
                                <option value="2">Moderator</option>
                                <option value="3">User</option>
                            </select>

                            @if($errors->has('akses'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('akses') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : ''}}" id="password">

                            @if($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="../books" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>

@endsection

