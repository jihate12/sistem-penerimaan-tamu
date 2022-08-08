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
        Schema::create('tb_kegiatan', function (Blueprint $table) {
            $table->id('id_kegiatan');
            $table->string('nik', 16);
            $table->foreign('nik')->references('nik')->on('tb_user');
            $table->string('nip', 12);            
            $table->time('jam_datang');
            $table->time('jam_pulang');
            $table->date('tanggal')->nullable();
            $table->string('departemen');
            $table->string('lokasi');
            $table->string('keterangan');            
            $table->string('plat');
            $table->string('Status');
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
        Schema::dropIfExists('tb_kegiatan');
    }
};
