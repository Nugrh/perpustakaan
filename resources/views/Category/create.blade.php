@extends('layouts.app')
@section('title', 'Category')

@section('content')
<div class="container">
        <div class="card">
            <div class="card-body">
                <span class="fs-4">
                    <div>Tambah Katagori</div>
                </span>
                @if(session('create-message'))
                    <div class="alert alert-success">{{ session('create-message') }}</div>
                @elseif(session('update-message'))
                    <div class="alert alert-success">{{ session('update-message') }}</div>
                @endif

                <form action="{{route('category.store')}}" method="post">
                    @csrf

                    <div class="mb-3 mt-4">
                        <label for="name">Nama Katagori</label>
                        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ old('name') }}">

                        @if($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="no_rak">No. Rak</label>
                        <input type="text" name="no_rak" class="form-control{{ $errors->has('no_rak') ? ' is-invalid' : '' }}" id="no_rak" value="{{ old('no_rak') }}">

                        @if($errors->has('no_rak'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('no_rak') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-outline-info">Tambah katagori</button>
                </form>
                <hr>
                <span class="fs-4">
                    <div>List Katagori</div>
                </span>
                @if(session('delete-message'))
                    <div class="alert alert-success">{{ session('delete-message') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">No. Rak</th>
                            <th scope="col">Katagori</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                $num = 1;
                            ?>
                            @foreach($categorys as $category)
                                <tr>
                                    <th class="col-1 align-middle">{{ $category->no_rak }}</th>
                                    <td class="align-middle">{{ $category->name }}</td>
                                    <td class="col-2 align-middle">
                                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-warning">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.2322 5.23223L18.7677 8.76777M16.7322 3.73223C17.7085 2.75592 19.2914 2.75592 20.2677 3.73223C21.244 4.70854 21.244 6.29146 20.2677 7.26777L6.5 21.0355H3V17.4644L16.7322 3.73223Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                        <a href="{{ route('category.delete', $category->id) }}" onclick="return confirm('Are you sure want to delete this record')" class="btn btn-sm btn-danger">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19 7L18.1327 19.1425C18.0579 20.1891 17.187 21 16.1378 21H7.86224C6.81296 21 5.94208 20.1891 5.86732 19.1425L5 7M10 11V17M14 11V17M15 7V4C15 3.44772 14.5523 3 14 3H10C9.44772 3 9 3.44772 9 4V7M4 7H20" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
