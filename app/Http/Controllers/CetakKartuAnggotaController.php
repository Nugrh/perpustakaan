<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CetakKartuAnggotaController extends Controller
{
    //
    public function index(){
        return view('cetakkartuanggota.index');
    }
}
