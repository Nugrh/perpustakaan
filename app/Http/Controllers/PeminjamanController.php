<?php

namespace App\Http\Controllers;

use App\Book;
use App\Borrowing;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PeminjamanController extends Controller
{
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
