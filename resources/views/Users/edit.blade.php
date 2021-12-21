@extends('layouts.app')

@section('content')
@section('title', 'User | Edit')

        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('users.update', $users)}}" enctype="multipart/form-data" method="post" >
                        @csrf
                        {{--TODO: Get ID--}}
                        <div class="mb-3">
                            <input type="hidden" name="id" id="id" value="{{ $users->id }}">
                        </div>

                        <div class="mb-3">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="text" name="nis" class="form-control{{ $errors->has('nis') ? ' is-invalid' : '' }}" id="nis" value="{{ $users->nis }}">

                            @if($errors->has('nis'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nis') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Anggota</label>
                            <input type="text" name="name" class="form-control{{$errors->has('name') ? ' is-invalid' : ''}}" id="name" value="{{ $users->name }}">

                            @if($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" value="{{ $users->email }}">

                            @if($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No. Handphone</label>
                            <input type="tel" name="no_hp" class="form-control{{ $errors->has('no_hp') ? ' is-invalid' : ''}}" id="no_hp" value="{{ $users->no_hp }}">

                            @if($errors->has('no_hp'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                            @endif

                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : ''}}" id=alamat" value="{{ $users->alamat }}">

                            @if($errors->has('alamat'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('alamat') }}</strong>
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
                        <a href="{{ route('users') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>

@endsection

