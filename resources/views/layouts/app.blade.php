<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <div class="collapse navbar-collapse justify-content-sm-between" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{url('home')}}" class="nav-link">Home</a>
                        </li><li class="nav-item">
                            <a href="{{url('books')}}" class="nav-link">Buku</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('users')}}" class="nav-link">Users</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('cetakkartuanggota')}}" class="nav-link">Cek Kartu Anggota</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('category/create')}}" class="nav-link">Category</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('peminjaman')}}" class="nav-link">Peminjaman</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('pengembalian')}}" class="nav-link">Pengembalian</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('buat-pengembalian')}}" class="nav-link">Buat pengembalian</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="" class="nav-link">Laporan</a>
                        </li> -->
                    </ul>


                </div>
                <div class="collapse navbar-collapse justify-content-sm-between" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}


        <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
            <div class="container" id="navigation-bar">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <b>{{ config('app.name', 'Laravel') }}</b>
                </a>
                {{-- <button
                    class="navbar-toggler border-0"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class=""
                    ></span>
                </button> --}}

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div
                    class="collapse navbar-collapse justify-content-end"
                    id="navbarSupportedContent"
                >
                    <!-- Left Side Of Navbar -->
                    {{--guest--}}
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{url('home')}}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('#')}}" class="nav-link">Pinjam Buku</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('#')}}" class="nav-link">Daftar Buku</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('#')}}" class="nav-link">Katagori Buku</a>
                        </li>

                        @role('admin')
                        {{--admin--}}
                        <li class="nav-item">
                            <a href="{{url('home')}}" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('peminjaman')}}" class="nav-link">Data Peminjaman</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('book')}}" class="nav-link">Buku</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('cetakkartuanggota')}}" class="nav-link">Cek Kartu Anggota</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('category')}}" class="nav-link">Category</a>
                        </li>
                        @endrole

                        {{--super admin--}}
                        @role('super-admin')
                        <li class="nav-item">
                            <a href="{{url('home')}}" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('peminjaman')}}" class="nav-link">Data Peminjaman</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('book')}}" class="nav-link">Buku</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('cetakkartuanggota')}}" class="nav-link">Cek Kartu Anggota</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('category')}}" class="nav-link">Category</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('user')}}" class="nav-link">Users</a>
                        </li>
                        @endrole
                    </ul>
                </div>

                <div
                    class="collapse navbar-collapse justify-content-end"
                    id="navbarSupportedContent"
                >
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
          </nav>


        <main class="py-4">
            @yield('content')
        </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
</body>
</html>





