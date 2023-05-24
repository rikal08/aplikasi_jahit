<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypePakaian extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_pakaian')->insert([
            'nama_type' => 'Baju Batik Pria',
        ]);
        DB::table('type_pakaian')->insert([
            'nama_type' => 'Celana Kantor Pria',
        ]);
        DB::table('type_pakaian')->insert([
            'nama_type' => 'Baju Batik Wanita',
        ]);
    }
}
