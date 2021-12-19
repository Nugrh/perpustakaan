<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    protected $table = 'borrowings';

    protected $fillable = [
        'name',
        'book_id',
        'nis',
        'kelas',
        'jurusan',
        'tanggal_pinjam',
        'durasi',
        'tanggal_kembali',
        'jumlah',
        'no_hp'
    ];
}
