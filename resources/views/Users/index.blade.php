@extends('layouts.app')
@section('title', 'User')

@section('content')
    <div class="container">
        <div class="alert alert-secondary">Data Users</div>
        <div class="card">
            <div class="card-body">
                <div class="alert alert-warning fs-4">Tabel Users</div>

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
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->nis }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->no_hp }}</td>
                            <td>{{ $user->alamat }}</td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.2322 5.23223L18.7677 8.76777M16.7322 3.73223C17.7085 2.75592 19.2914 2.75592 20.2677 3.73223C21.244 4.70854 21.244 6.29146 20.2677 7.26777L6.5 21.0355H3V17.4644L16.7322 3.73223Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>

                                <a href="{{ route('users.delete', $user->id) }}" onclick="return confirm('Are you sure want to delete this user?')" class="btn btn-sm btn-danger">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 7L18.1327 19.1425C18.0579 20.1891 17.187 21 16.1378 21H7.86224C6.81296 21 5.94208 20.1891 5.86732 19.1425L5 7M10 11V17M14 11V17M15 7V4C15 3.44772 14.5523 3 14 3H10C9.44772 3 9 3.44772 9 4V7M4 7H20" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>

    </div>

@endsection


