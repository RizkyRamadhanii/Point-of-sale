<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [
                'kode' => 'SUP001',
                'nama' => 'PT. Apotek Sejahtera',
                'alamat' => 'Jl. Raya No. 1',
                'kota' => 'Jakarta',
                'telpon' => '021-12345678'
            ],
            [
                'kode' => 'SUP002',
                'nama' => 'CV. Farmasi Utama',
                'alamat' => 'Jl. Merdeka No. 10',
                'kota' => 'Bandung',
                'telpon' => '022-87654321'
            ],
            [
                'kode' => 'SUP003',
                'nama' => 'UD. Sumber Sehat',
                'alamat' => 'Jl. Sudirman No. 15',
                'kota' => 'Surabaya',
                'telpon' => '031-12398765'
            ]
        ]);
    }
}
