<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuatPengembalianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        return view('buat-pengembalian.index');
    }
}
