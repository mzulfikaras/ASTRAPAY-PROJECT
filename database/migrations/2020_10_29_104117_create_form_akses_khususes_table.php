<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormAksesKhususesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_akses_khususes', function (Blueprint $table) {
            $table->id();
            $table->string('form_permohonan');
            $table->string('tanggal_permohonan');
            $table->string('nama_pemohon');
            $table->string('nama_kegiatan');
            $table->date('waktu_awal');
            $table->date('waktu_akhir');
            $table->string('rincian');
            $table->string('sistem')->nullable();
            $table->string('tingkat_akses')->nullable();
            $table->string('nama_personil_1');
            $table->string('nama_personil_2')->nullable();
            $table->string('nama_personil_3')->nullable();
            $table->string('nama_personil_4')->nullable();
            $table->string('nama_personil_5')->nullable();
            $table->string('nama_perangkat_1');
            $table->string('nama_perangkat_2')->nullable();
            $table->string('nama_perangkat_3')->nullable();
            $table->string('nama_perangkat_4')->nullable();
            $table->string('nama_perangkat_5')->nullable();
            $table->string('mac_address_1')->nullable();
            $table->string('mac_address_2')->nullable();
            $table->string('mac_address_3')->nullable();
            $table->string('mac_address_4')->nullable();
            $table->string('mac_address_5')->nullable();
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
        Schema::dropIfExists('form_akses_khususes');
    }
}
