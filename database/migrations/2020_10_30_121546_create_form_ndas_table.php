<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormNdasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_ndas', function (Blueprint $table) {
            $table->id();
            $table->string('form_permohonan');
            $table->char('tanggal_permohonan');
            $table->string('nama_pemohon');
            $table->string('bagian');
            $table->string('nama_identitas');
            $table->string('no_identitas');
            $table->string('instansi');
            $table->string('nama_kegiatan');
            $table->string('periode_kegiatan');
            $table->string('status');
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
        Schema::dropIfExists('form_ndas');
    }
}
