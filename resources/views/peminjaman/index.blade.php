@extends('layouts.app')
@section('title', 'Peminjaman')

@section('content')


<div class="container">
    <div class="alert alert-secondary">Data Peminjaman Buku</div>
    <div class="card">
        <div class="card-body">
            <h3 class="alert alert-info">
                <b>Data peminjaman</b>
            </h3>
            <div class="d-flex justify-content-between">
                <div class="">
                    <a href="{{ route('peminjaman.pinjam') }}" class="btn btn-secondary mt-2 mb-2 ">
                        Buat pinjaman
                    </a>
                </div>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Jumlah pinjaman</th>
                        <th scope="col">Buku</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($borrowers as $borrower)
                        <tr>
                            <td>{{ $borrower->name }}</td>
                            <td>
                                @if(!empty($borrower->no_hp))
                                {{ $borrower->no_hp }}
                                @else
                                    <p><i>Tidak ada</i></p>
                                @endif
                            </td>
                            <td>{{ $borrower->tanggal_pinjam }}</td>
                            <td>{{ $borrower->tanggal_kembali }}</td>
                            <td>{{ $borrower->jumlah }}</td>

                            {{--
                            Bug:
                             Tanpa diketahui penyebabnya kolom "book_id" bertambah 1
                             jadi saya mengurangi 1 untuk mendapatkan nilai yang sama dengan id book
                             --}}
                            <td>{{ $books[$borrower->book_id -1]->name}}</td>
                            <td>
                                @if($borrower->tanggal_pinjam > $borrower->tanggal_kembali)
                                    <a href="" class="btn btn-sm btn-danger">Denda 100k</a>
                                @else
                                    <a href="" class="btn btn-sm btn-info">Kembalikan</a>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <p><b>Tidak ada peminjaman</b></p>
                    @endforelse
                </tbody>
            </table>
            {{ $borrowers->links() }}
        </div>
    </div>
</div>

@endsection
