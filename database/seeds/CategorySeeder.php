<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Novel',
            'no_rak' => '1'
        ]);

        Category::create([
            'name' => 'Cerita Gambar',
            'no_rak' => '2'
        ]);

        Category::create([
            'name' => 'Komik',
            'no_rak' => '3'
        ]);

        Category::create([
            'name' => 'Ensiklopedia',
            'no_rak' => '4'
        ]);

        Category::create([
            'name' => 'Antologi',
            'no_rak' => '5'
        ]);

        Category::create([
            'name' => 'Dongeng',
            'no_rak' => '6'
        ]);

        Category::create([
            'name' => 'Biografi',
            'no_rak' => '7'
        ]);


    }
}
