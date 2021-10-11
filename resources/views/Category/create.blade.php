@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="fs-4 mb-3">Form tambah katagori</div>
                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Katagori...">
                        <label for="name">Nama Katagori</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="no_rak" class="form-control" id="no_rak" placeholder="Nomor rak...">
                        <label for="no_rak">No. Rak</label>
                    </div>
                    <button type="submit" class="btn btn-outline-info">Tambah katagori</button>
                </form>
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
