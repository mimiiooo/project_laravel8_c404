<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'kd_barang' => '001', 'nm_barang' => 'Oriflame', 'jml_barang' => '100', 'harga' => '50000'
        ]);

        DB::table('product')->insert([
            'kd_barang' => '002', 'nm_barang' => 'Maybeline', 'jml_barang' => '78', 'harga' => '120000'
        ]);

        DB::table('product')->insert([
            'kd_barang' => '003', 'nm_barang' => 'CNF', 'jml_barang' => '60', 'harga' => '85000'
        ]);

        DB::table('product')->insert([
            'kd_barang' => '004', 'nm_barang' => 'Beaute', 'jml_barang' => '45', 'harga' => '90000'
        ]);

        DB::table('product')->insert([
            'kd_barang' => '005', 'nm_barang' => 'Purbasari', 'jml_barang' => '35', 'harga' => '40000'
        ]);

        DB::table('product')->insert([
            'kd_barang' => '006', 'nm_barang' => 'Pixy', 'jml_barang' => '76', 'harga' => '78000'
        ]);
    }
}
