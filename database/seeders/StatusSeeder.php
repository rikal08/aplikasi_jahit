<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'status' => 'Menunggu Pembayaran',
        ]);
        DB::table('status')->insert([
            'status' => 'Pemesanan Berhasil dibuat',
        ]);
        DB::table('status')->insert([
            'status' => 'Pemesanan Dibatalkan',
        ]);
        DB::table('status')->insert([
            'status' => 'Dalam Proses Pengerjaan',
        ]);
        DB::table('status')->insert([
            'status' => 'Pakaian Sudah Selesai',
        ]);
    }
}
