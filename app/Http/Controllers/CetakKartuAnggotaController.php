<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\User;
class CetakKartuAnggotaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users = User::all();
        return view('cetakkartuanggota.index', compact('users'));
    }

    public function detail($id){
        $users = User::all()->find($id);
        return view('cetakkartuanggota.detail', compact('users'));
    }

    public function pdfView($id){
        $users = User::all()->find($id);

        return view('cetakkartuanggota.pdf', compact('users'));
    }

//    print user data
    public function exportPDF($id){
        $users = User::all()->find($id);

        $pdf = PDF::loadView('cetakkartuanggota.pdf', ['users' => $users])->setOptions(['defaultFont' => 'sans-serif']);
        $pdf->setPaper('letter', 'landscape');
        return $pdf->download("kartu-anggota.pdf");
    }

}
