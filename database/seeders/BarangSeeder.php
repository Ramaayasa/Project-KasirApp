<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'kode_barang' => 'BRG001',
                'nama' => 'Keyboard Mechanical',
                'kategori_id' => null,
                'harga' => 350000,
                'harga_modal' => 250000,
                'stok' => 10,
                'satuan' => 'pcs',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'BRG002',
                'nama' => 'Mouse Wireless',
                'kategori_id' => null,
                'harga' => 150000,
                'harga_modal' => 100000,
                'stok' => 20,
                'satuan' => 'pcs',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
