<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggan')->insert([
            'nama' => 'Mimi', 'plg_id' => '101'
        ]);
        DB::table('pelanggan')->insert([
            'nama' => 'Tada', 'plg_id' => '102'
        ]);
    }
}
