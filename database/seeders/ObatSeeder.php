<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('obats')->insert([
            [
                'kode' => 'OBT001',
                'nama' => 'Paracetamol',
                'jenis' => 'Tablet',
                'satuan' => 'Butir',
                'harga_jual' => 5000,
                'harga_beli' => 4000,
                'stok' => 100,
                'kode_supplier' => '1'
            ],
            [
                'kode' => 'OBT002',
                'nama' => 'Aspirin',
                'jenis' => 'Tablet',
                'satuan' => 'Butir',
                'harga_jual' => 7000,
                'harga_beli' => 5500,
                'stok' => 150,
                'kode_supplier' => '2'
            ],
            [
                'kode' => 'OBT003',
                'nama' => 'Amoxicillin',
                'jenis' => 'Kapsul',
                'satuan' => 'Kapsul',
                'harga_jual' => 8000,
                'harga_beli' => 6000,
                'stok' => 200,
                'kode_supplier' => '3'
            ],
            [
                'kode' => 'OBT004',
                'nama' => 'Ibuprofen',
                'jenis' => 'Tablet',
                'satuan' => 'Butir',
                'harga_jual' => 6000,
                'harga_beli' => 4500,
                'stok' => 120,
                'kode_supplier' => '1'
            ],
            [
                'kode' => 'OBT005',
                'nama' => 'Cetirizine',
                'jenis' => 'Tablet',
                'satuan' => 'Butir',
                'harga_jual' => 3000,
                'harga_beli' => 2500,
                'stok' => 180,
                'kode_supplier' => '2'
            ]
        ]);
    }
}
