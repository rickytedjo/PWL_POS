<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $userIds = DB::table('m_user')->pluck('user_id');
        $barangIds = DB::table('m_barang')->pluck('barang_id');
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'barang_id' => $barangIds[$i-1],
                'user_id' => $userIds->random(), //Dientrikan oleh
                'stok_tanggal' => now(),
                'stok_jumlah' => random_int(5, 50),
            ];
        }
        DB::table('t_stok')->insert($data);
    }
}
