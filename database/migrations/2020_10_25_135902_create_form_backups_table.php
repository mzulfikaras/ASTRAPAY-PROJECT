<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormBackupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_backups', function (Blueprint $table) {
            $table->id();
            $table->string('form_permohonan');
            $table->char('tanggal_permohonan');
            $table->string('nama_pemohon');
            $table->string('nama_informasi');
            $table->string('metode_backup');
            $table->string('periode_backup');
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
        Schema::dropIfExists('form_backups');
    }
}
