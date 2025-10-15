<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produkTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert(values:[
            'nama_produk' => 'Indomie kuah',
            'kategori' => 'Makanan',
            'harga_satuan' => 3500.00,
            'stok' => 100,
            'satuan' => 'Pcs',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
