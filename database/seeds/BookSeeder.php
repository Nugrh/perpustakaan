<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'category_id' => '1',
            'name' => 'Buku 01',
            'description' => 'Deskripsi Buku 01',
            'penerbit' => 'Penerbit Buku 01',
            'tanggal_terbit' => '2000-1-1',
            'images' => 'no_image.png',
            'stock' => '1',
        ]);

        Book::create([
            'category_id' => '1',
            'name' => 'Buku 02',
            'description' => 'Deskripsi Buku 02',
            'penerbit' => 'Penerbit Buku 02',
            'tanggal_terbit' => '2000-1-1',
            'images' => 'no_image.png',
            'stock' => '1',
        ]);

        Book::create([
            'category_id' => '1',
            'name' => 'Buku 03',
            'description' => 'Deskripsi Buku 03',
            'penerbit' => 'Penerbit Buku 03',
            'tanggal_terbit' => '2000-1-1',
            'images' => 'no_image.png',
            'stock' => '1',
        ]);

    }
}
