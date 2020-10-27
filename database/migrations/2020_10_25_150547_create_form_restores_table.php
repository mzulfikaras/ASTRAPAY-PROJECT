<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormRestoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_restores', function (Blueprint $table) {
            $table->id();
            $table->char('tanggal_permohonan');
            $table->string('nama_pemohon');
            $table->string('dasar_permohonan');
            $table->string('nama_info');
            $table->string('tujuan');
            $table->string('rencana_pemulihan');
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
        Schema::dropIfExists('form_restores');
    }
}
