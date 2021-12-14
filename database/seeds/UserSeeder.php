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

        $super_admin = User::create([
            'name' => 'Super Admin',
            'email' => 'super-admin@role.test',
            'password' => Hash::make('040405')
        ]);

        $super_admin->assignRole('super-admin');

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
