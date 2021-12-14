<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        return view('pengembalian.index');
    }
    public function laporan()
    {
        return view('pengembalian.laporan');
    }
}
