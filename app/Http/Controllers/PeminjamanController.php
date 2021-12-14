<?php

namespace App\Http\Controllers;

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
        return view('peminjaman.pinjaman');

    }

    public function store(Request $request){

        $request->validate([
            'name' => ['required'],
            'kelas' => ['required'],
            'jurusan' => ['required'],
            'book_id' => ['required'],
            'duration' => ['required'],
        ]);

        Borrowing::create($request,[
            $request->input('name'),
            $request->input('kelas'),
            $request->input('book'),
            $request->input('duration'),
        ]);

//        $book = Book::where('name', '=', Input::get($request->input('book')))->first();
        return redirect('peminjaman');
    }

}
