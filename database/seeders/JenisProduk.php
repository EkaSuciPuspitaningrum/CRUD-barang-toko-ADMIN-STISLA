<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisProduk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_products')->insert([
            ['id' => 1, 'jenis_nama' => 'Makanan Kering'],
            ['id' => 2, 'jenis_nama' => 'Makanan Basah'],
            ['id' => 3, 'jenis_nama' => 'Mainan'],
            ['id' => 4, 'jenis_nama' => 'Alat Makan'],
            ['id' => 5, 'jenis_nama' => 'Obat Oral'],
            ['id' => 6, 'jenis_nama' => 'Obat Injeksi'],
            ['id' => 7, 'jenis_nama' => 'Obat Luar'],
        ]);
    }
}
