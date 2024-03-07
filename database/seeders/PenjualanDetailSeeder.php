<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'detail_id' => $i + 1,
                'penjualan_id' => fake()->numberBetween(1, 10),
                'barang_id' => fake()->numberBetween(1, 5),
                'harga' => fake()->randomNumber(5),
                'jumlah' => fake()->randomNumber(5),
            ];
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}
