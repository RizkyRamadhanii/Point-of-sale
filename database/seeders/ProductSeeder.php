<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'nama' => 'Mie Goreng',
                'foto' => 'mie-goreng.jpg',
                'harga' => 10000,
                'status' => 'Tersedia'
            ],
            [
                'nama' => 'Nasi Goreng',
                'foto' => 'nasi-goreng.jpg',
                'harga' => 12000,
                'status' => 'Tersedia'
            ],
            [
                'nama' => 'Ayam Goreng',
                'foto' => 'ayam-goreng.jpg',
                'harga' => 15000,
                'status' => 'Tersedia'
            ],
            [
                'nama' => 'Sate Ayam',
                'foto' => 'sate-ayam.jpg',
                'harga' => 18000,
                'status' => 'Tersedia'
            ],
            [
                'nama' => 'Bakso',
                'foto' => 'bakso.jpg',
                'harga' => 12000,
                'status' => 'Tersedia'
            ]
        ]);
    }
}
