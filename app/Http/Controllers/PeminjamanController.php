<?php

namespace App\Http\Controllers;

use App\Book;
use App\Borrowing;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('peminjaman.index');
    }

    public function create(){
        $books = Book::paginate(5);
        return view('peminjaman.pinjaman', compact('books'));
    }

    public function store(Request $request){
        $request->validate([
            'name'              => ['required'],
            'nis'               => ['required'],
            'kelas'             => ['required'],
            'jurusan'           => ['required'],
            'tanggal_pinjam'    => ['required'],
            'tanggal_kembali'   => ['required'],
            'jumlah'            => ['required'],
            'book_id'           => ['required'],
        ]);

        $stock = Book::all()->where('id', 1);
        dd($stock);
        Borrowing::create([
            'name'              => $request->input('name'),
            'nis'               => $request->input('nis'),
            'kelas'             => $request->input('kelas'),
            'jurusan'           => $request->input('jurusan'),
            'tanggal_pinjam'    => $request->input('tanggal_pinjam'),
            'tanggal_kembali'   => $request->input('tanggal_kembali'),
            'jumlah'            => $request->input('jumlah'),
            'book_id'           => $request->input('book_id'),
        ]);
        return redirect('peminjaman');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $books = Book::where('name', 'LIKE', "%{$keyword}%")->paginate(5);

        return view('peminjaman.pinjaman', compact('books'));
    }

}
