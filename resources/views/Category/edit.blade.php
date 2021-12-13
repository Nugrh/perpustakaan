@extends('layouts.app')

@section('content')
@section('title', 'Category')


<div class="container">
    <div class="card">
        <div class="card-body">
                <span class="fs-4">
                    <div>Edit Katagori</div>
                </span>

            @if(session('create-message'))
                <div class="alert alert-success">{{ session('create-message') }}</div>
            @endif

            <form action="{{ route('category.update') }}" method="post">
                @csrf
                <div class="">
                    <input type="hidden" name="id" id="id" value="{{ $category->id }}">
                </div>
                <div class="mb-3 mt-4">
                    <label for="name">Katagori</label>
                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ $category->name}}">

                    @if($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="no_rak">No. Rak</label>
                    <input type="number" name="no_rak" class="form-control{{ $errors->has('no_rak') ? ' is-invalid' : '' }}" id="no_rak" value="{{ $category->no_rak }}">

                    @if($errors->has('no_rak'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('no_rak') }}</strong>
                            </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-outline-info">Tambah katagori</button>
            </form>
            <hr>
        </div>
    </div>
</div>

@endsection
