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
        Schema::create('pakaian', function (Blueprint $table) {
            $table->id('id_pakaian');
            $table->string('nama_pakaian');
            $table->string('deskripsi');
            $table->string('estimasi_selesai');
            $table->text('foto_path');
            $table->integer('harga');
            $table->integer('id_type');
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
        Schema::dropIfExists('pakaian');
    }
};
