<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UkuranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ukuran')->insert([
            'ukuran' => 'M',
            'deskripsi_ukuran' => 'Lingkar dada 45, panjang 50',
            'id_type' => 1
        ]);
        DB::table('ukuran')->insert([
            'ukuran' => 'L',
            'deskripsi_ukuran' => 'Lingkar dada 50, panjang 55',
            'id_type' => 1
        ]);
    }
}
