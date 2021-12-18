<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * membuat akun menggunakan seeder
         */

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@role.test',
            'password' => Hash::make('040405')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@role.test',
            'password' => Hash::make('040405')
        ]);

        $user->assignRole('user');

    }
}
