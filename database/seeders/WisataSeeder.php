<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wisata')->insert([
            'name_wisata' => 'Pantai Kuta',
            'lokasi' => 'Bali',
            'deskripsi' => 'Pantai yang terkenal dengan ombaknya yang cocok untuk berselancar.',
            'harga_tiket' => 50000,
            'jam_buka' => '08:00 - 18:00',
        ]);
        DB::table('wisata')->insert([
            'name_wisata' => 'Gunung Bromo',
            'lokasi' => 'Jawa Timur',
            'deskripsi' => 'Gunung berapi yang terkenal dengan pemandangan matahari terbitnya.',
            'harga_tiket' => 75000,
            'jam_buka' => '04:00 - 18:00',
        ]);
        
    }
}
