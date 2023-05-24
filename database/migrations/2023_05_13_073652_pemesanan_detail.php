<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan_detail', function (Blueprint $table) {
            $table->id('id_pemesanan_detail');
            $table->string('no_transaksi');
            $table->string('id_pakaian');
            $table->string('id_ukuran');
            $table->string('jumlah');
            $table->string('harga_jual');
            $table->string('harga_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan_detail');
    }
};
