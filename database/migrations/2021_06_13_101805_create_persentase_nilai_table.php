<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersentaseNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persentase_nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_praktikum')->constrained('praktikum');
            $table->integer('absen');
            $table->integer('tugas');
            $table->integer('uts');
            $table->integer('uas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persentase_nilai');
    }
}
