<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('jadwa_matakuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mahasiswa_id',false,true);
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
            $table->integer('ruangan_id',false,true);
            $table->foreign('ruangan_id')->references('id')->on('ruangan');
            $table->integer('dosen_matakuliah_id',false,true);
            $table->foreign('dosen_matakuliah_id')->references('id')->on('dosen_matakuliah');
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
        Schema::drop('jadwa_matakuliah');
    }
}
