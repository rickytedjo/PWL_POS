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
        $itemNames = [
            'Levis', 'Emba',
            'V-Neck Tee', 'Pocket Shirt',
            'Pullover',  'Sleeveless',
            'Woolen Hat', 'Wallet',
            'Silk Boxer', 'Loose Boxer'
        ];
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'kategori_id' => (($i + 1 <= 5) ? $i + 1 : $i - 4),
                'barang_kode' => 'BRG' . $i,
                'barang_nama' => $itemNames[$i],
                'harga_beli' => random_int(500, 1000),
                'harga_jual' => random_int(500, 1000)
            ];
        }
        DB::table('m_barang')->insert($data);
    }
}
