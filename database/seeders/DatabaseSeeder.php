<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(100)->create();

        User::create([
            'nama' => 'Mimin 1',
            'username' => 'admin',
            'role' => 'Admin',
            'password' => bcrypt('password')
        ]);

        User::create([
            'nama' => 'Apriansyah Rizqi Setiawan',
            'username' => 'uixarss',
            'role' => 'Admin',
            'password' => bcrypt('password')
        ]);

        User::create([
            'nama' => 'Manager Japrut',
            'username' => 'manager',
            'role' => 'Manager',
            'password' => bcrypt('password')
        ]);

        User::create([
            'nama' => 'Kasir Kami',
            'username' => 'kasir',
            'role' => 'Cashier',
            'password' => bcrypt('password')
        ]);
    }
}
