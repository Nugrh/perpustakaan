<?php

namespace App\Http\Controllers;

use App\Book;
use App\Borrowing;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $borrowers = Borrowing::paginate(10);
        $books = Book::all();

        return view('peminjaman.index', compact('borrowers', 'books'));
    }

    public function create(){
        $books = Book::paginate(5);
        return view('peminjaman.pinjaman', compact('books'));
    }

    public function store(Request $request){

//        dd($request->all());

        $request->validate([
            'name'              => 'required',
            'nis'               => 'required',
            'kelas'             => 'required',
            'jurusan'           => 'required',
            'tanggal_pinjam'    => 'required',
            'durasi'            => 'required',
            'no_hp'             => 'nullable|numeric',
            'jumlah'            => 'required',
            'book_id'           => 'required',
        ]);

//        membuat tanggal kembali berdasarkan durasi yang dipilih
        $tanggal_pinjam = $request->input('tanggal_pinjam');
        $hari_pinjam = Carbon::parse($tanggal_pinjam)->format('d');
        $tanggal_kembali = (new Carbon($tanggal_pinjam))->day($hari_pinjam + $request->input('durasi'));

        $book = Book::all()->find($request->book_id);

//        mengurangi jumlah buku sesuai dengan jumlah buku yang dipinjam
        $jumlah = $book->stock - $request->jumlah;

//        memperbarui record stock buku
        $book->update([
            'stock' => $jumlah
        ]);



        Borrowing::create([
            'name'              => $request->input('name'),
            'nis'               => $request->input('nis'),
            'kelas'             => $request->input('kelas'),
            'jurusan'           => $request->input('jurusan'),
            'tanggal_pinjam'    => $tanggal_pinjam,
            'durasi'            => $request->input('durasi'),
            'tanggal_kembali'   => $tanggal_kembali,
            'no_hp'             => $request->input('no_hp'),
            'jumlah'            => $request->input('jumlah'),
            'book_id'           => $request->input('book_id'),
        ]);

        Borrowing::all()->where('durasi');

        return redirect('peminjaman');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $books = Book::where('name', 'LIKE', "%{$keyword}%")->paginate(5);

        return view('peminjaman.pinjaman', compact('books'));
    }

}
