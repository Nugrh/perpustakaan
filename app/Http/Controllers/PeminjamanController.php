<?php

namespace App\Http\Controllers;

use App\Book;
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
            'book' => ['required'],
            'duration' => ['required'],
        ]);

        $book = Book::where('name', '=', Input::get($request->input('book')))->first();
        if ($book === null) {
            echo 'Data not found';
        } else {

        }

        return redirect('peminjaman/pinjam');
    }

}
