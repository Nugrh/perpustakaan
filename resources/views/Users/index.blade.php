@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="alert alert-secondary">Data Users</div>

        <div class="card">
            <div class="card-body">
                <div class="alert alert-warning fs-4">Data Users</div>

                @if(session('insert-message'))
                    <div class="alert alert-success">{{session('insert-message')}}</div>
                @elseif(session('update-message'))
                    <div class="alert alert-success">{{session('update-message')}}</div>
                @elseif(session('delete-message'))
                    <div class="alert alert-success">{{session('delete-message')}}</div>
                @endif

                <div class="mb-2 mt-2">
                    <a href="{{route('users.create')}}" class="btn btn-primary">Tambah Anggota Baru</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">NIS</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Handphone</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>

{{--                        @for($i = 1; $i <= 5; $i++)--}}
                    @foreach($user as $user)
                        <tr>
                            <td>{{ $user->nis }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->no_hp }}</td>
                            <td>{{ $user->alamat }}</td>

                            <td>
                            <a href="/users/{{$user->id}}/edit" class="btn btn-sm btn-warning">
                                Edit
                            </a>

                            <a href="/users/{{$user->id}}/delete" onclick="return confirm('Are you sure want to delete this user?')" class="btn btn-sm btn-danger">
                                Delete
                            </a>
                            </td>
                        </tr>
                    @endforeach
{{--                        @endfor--}}
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection


