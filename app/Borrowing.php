<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    protected $table = 'borrowings';

    protected $fillable = [
        'jumlah', 'book_id', 'name', 'nis', 'kelas', 'jurusan', 'tanggal_pinjam', 'tanggal_kembali'
    ];
}
