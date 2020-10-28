<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormAksesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_akses', function (Blueprint $table) {
            $table->id();
            $table->string('form_permohonan');
            $table->char('tanggal_permohonan');
            $table->string('nama_pemohon');
            $table->string('nip');
            $table->string('bagian');
            $table->bigInteger('kategori_akses_id')->unsigned();
            $table->text('alasan_akses');
            $table->string('tingkat_akses');
            $table->string('status');
            $table->timestamps();

            $table->foreign('kategori_akses_id')->references('id')->on('kategori_akses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_akses');
    }
}
