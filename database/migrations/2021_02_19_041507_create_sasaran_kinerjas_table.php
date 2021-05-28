<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSasaranKinerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sasaran_kinerja', function (Blueprint $table) {
            $table->id();
            $table->string('pegawai_nip')->references('id')->on('pegawai');
            $table->string('kegiatan');
            $table->integer('angka_kredit');
            $table->date('periode');
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
        Schema::dropIfExists('sasaran_kinerja');
    }
}
