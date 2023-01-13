<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin1',
            'role' => 'admin',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('pw123')
        ]);

        DB::table('users')->insert([
            'name' => 'admin2',
            'role' => 'admin',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('pw123')
        ]);

        DB::table('users')->insert([
            'name' => 'Mimi',
            'role' => 'pelanggan',
            'email' => 'mimi@gmail.com',
            'password' => bcrypt('pw123')
        ]);

        DB::table('users')->insert([
            'name' => 'Tada',
            'role' => 'pelanggan',
            'email' => 'tada@gmail.com',
            'password' => bcrypt('pw123')
        ]);
    }
}
