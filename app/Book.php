<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['category_id', 'name', 'description', 'penerbit', 'tanggal_terbit', 'images', 'stock'];
}
