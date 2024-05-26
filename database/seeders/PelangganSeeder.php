<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelanggans')->insert([
            [
                'kode' => 'PLG001',
                'nama' => 'Budi',
                'alamat' => 'Jl. Raya No. 1',
                'kota' => 'Jakarta',
                'telpon' => '021-12345678'
            ],
            [
                'kode' => 'PLG002',
                'nama' => 'Siti',
                'alamat' => 'Jl. Merdeka No. 10',
                'kota' => 'Bandung',
                'telpon' => '022-87654321'
            ],
            [
                'kode' => 'PLG003',
                'nama' => 'Andi',
                'alamat' => 'Jl. Sudirman No. 15',
                'kota' => 'Surabaya',
                'telpon' => '031-12398765'
            ],
            [
                'kode' => 'PLG004',
                'nama' => 'Dewi',
                'alamat' => 'Jl. Pahlawan No. 20',
                'kota' => 'Yogyakarta',
                'telpon' => '0274-23456789'
            ],
            [
                'kode' => 'PLG005',
                'nama' => 'Rudi',
                'alamat' => 'Jl. Diponegoro No. 25',
                'kota' => 'Semarang',
                'telpon' => '024-45678912'
            ],
            [
                'kode' => 'PLG006',
                'nama' => 'Ani',
                'alamat' => 'Jl. Gajah Mada No. 30',
                'kota' => 'Malang',
                'telpon' => '0341-67891234'
            ],
            [
                'kode' => 'PLG007',
                'nama' => 'Hendra',
                'alamat' => 'Jl. Sultan Agung No. 35',
                'kota' => 'Medan',
                'telpon' => '061-78912345'
            ],
            [
                'kode' => 'PLG008',
                'nama' => 'Nina',
                'alamat' => 'Jl. Kartini No. 40',
                'kota' => 'Denpasar',
                'telpon' => '0361-4567890'
            ],
            [
                'kode' => 'PLG009',
                'nama' => 'Tono',
                'alamat' => 'Jl. Pattimura No. 45',
                'kota' => 'Makassar',
                'telpon' => '0411-2345678'
            ],
            [
                'kode' => 'PLG010',
                'nama' => 'Rina',
                'alamat' => 'Jl. Teuku Umar No. 50',
                'kota' => 'Banda Aceh',
                'telpon' => '0651-3456789'
            ]
        ]);
    }
}
