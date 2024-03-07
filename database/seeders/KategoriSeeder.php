<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'KAT1', 'kategori_nama' => 'Kategori 1'],
            ['kategori_id' => 2, 'kategori_kode' => 'KAT2', 'kategori_nama' => 'Kategori 2'],
            ['kategori_id' => 3, 'kategori_kode' => 'KAT3', 'kategori_nama' => 'Kategori 3'],
            ['kategori_id' => 4, 'kategori_kode' => 'KAT4', 'kategori_nama' => 'Kategori 4'],
            ['kategori_id' => 5, 'kategori_kode' => 'KAT5', 'kategori_nama' => 'Kategori 5'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
