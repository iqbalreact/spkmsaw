<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealisasiSasaranKinerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realisasi_sasaran_kinerja', function (Blueprint $table) {
            $table->id();
            $table->string('skp_id')->references('id')->on('sasaran_kinerja');
            $table->integer('kuantitas');
            $table->integer('kualitas');
            $table->date('waktu');
            $table->integer('biaya');
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
        Schema::dropIfExists('realisasi_sasaran_kinerja');
    }
}
