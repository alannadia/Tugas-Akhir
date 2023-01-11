<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPelanggaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pelanggaran', function (Blueprint $table) {
            $table->id('nisn');
            $table->foreign('nisn')->references('nisn')->on('siswa')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->BigInteger('pelanggaran_id')->unsigned();
            $table->foreign('pelanggaran_id')->references('id')->on('pelanggaran')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->date('tanggal');
            $table->BigInteger('remain_score');
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
        Schema::dropIfExists('detail_pelanggaran');
    }
}
