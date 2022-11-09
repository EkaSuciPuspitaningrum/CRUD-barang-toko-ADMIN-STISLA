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
            ['id' => "A01", 'jenis_nama' => 'Makanan Kering'],
            ['id' => "A02", 'jenis_nama' => 'Makanan Basah'],
            ['id' => "B01", 'jenis_nama' => 'Mainan'],
            ['id' => "C01", 'jenis_nama' => 'Alat Makan'],
            ['id' => "D01", 'jenis_nama' => 'Obat Oral'],
            ['id' => "D02", 'jenis_nama' => 'Obat Injeksi'],
            ['id' => "D03", 'jenis_nama' => 'Obat Luar'],
        ]);
    }
}
