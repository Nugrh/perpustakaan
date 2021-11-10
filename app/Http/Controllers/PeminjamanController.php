<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PeminjamanController extends Controller
{
    public function index(){
        return view('peminjaman.index');
    }

    public function create(Request $request){
        $id = $request->input('id');

        $user = User::all()->find($id);
        return view('peminjaman.pinjaman', compact('id', 'user'));
    }

    public function search($nis){
        $user = User::all();
        $user->find($nis);

        return view('peminjaman.search', compact('user'));
    }
}
