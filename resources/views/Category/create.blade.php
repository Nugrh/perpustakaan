@extends('layouts.app')

@section('content')
@section('title', 'Category')


<div class="container">
        <div class="card">
            <div class="card-body">
                <span class="fs-4">
                    <div>Tambah Katagori</div>
                </span>

                @if(session('create-message'))
                    <div class="alert alert-success">{{ session('create-message') }}</div>
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

                <table class="table">
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
                                    <a href="category/{{ $category->id }}/change" class="btn btn-sm btn-warning">Change</a>
                                    <a href="category/{{ $category->id }}/delete" onclick="return confirm('Are you sure want to delete this record')" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

{{--    <!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<img src="{{url('public/icon/outline/book-open.svg')}}" alt="asda">--}}
{{--</body>--}}
{{--</html>--}}
