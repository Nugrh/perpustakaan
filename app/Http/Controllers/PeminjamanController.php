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
//        $books = Book::query();
        return view('peminjaman.pinjaman', compact('books'));
    }

    public function store(Request $request){

        $request->validate([
            'name'      => ['required'],
            'kelas'     => ['required'],
            'jurusan'   => ['required'],
            'book_id'   => ['required'],
            'duration'  => ['required'],
        ]);

        Borrowing::create($request,[
            $request->input('name'),
            $request->input('kelas'),
            $request->input('book'),
            $request->input('duration'),
        ]);
        return redirect('peminjaman');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $books = Book::where('name', 'LIKE', "%{$keyword}%");

        return view('peminjaman.pinjaman', compact('books'));
    }

}
