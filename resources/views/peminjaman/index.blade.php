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
            @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            <div class="row d-flex justify-content-between">
                <div class="col">
                    <a href="{{ route('peminjaman.pinjam') }}" class="btn btn-secondary mt-2 mb-2 ">
                        Buat pinjaman
                    </a>
                </div>
                <div class="col-md-3">
                    <form action="{{ route('peminjaman.search') }}" method="get">
                        <input type="text" name="keyword" class="form-control" value="{{ old('keyword') }}" placeholder="Cari nama siswa">
                    </form>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Nomor HP</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Jumlah</th>
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
                                 jadi saya mengurangi 1 nilai untuk mendapatkan nilai yang sama dengan id book
                                 --}}
                                <td>{{ $books[$borrower->book_id -1]->name}}</td>
                                <td>
                                    @if($borrower->tanggal_pinjam > $borrower->tanggal_kembali)
                                        <a href="" class="btn btn-sm btn-danger">Denda 100k</a>
                                    @else
                                        <a href="{{ route('peminjaman.delete', $borrower->id) }}" onclick="return confirm('Apakah anda yakin \'{{ $books[$borrower->book_id -1]->name }}\' ini telah dikembalikan??')" class="btn btn-sm btn-info">Kembalikan</a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <td class="my-3" colspan="7"><b>Tidak ada peminjaman</b></td>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{ $borrowers->links() }}
        </div>
    </div>
</div>

@endsection
