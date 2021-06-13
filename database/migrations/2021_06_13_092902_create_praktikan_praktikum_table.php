<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePraktikanPraktikumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('praktikan_praktikum', function (Blueprint $table) {
            $table->string('npm', 18)->constrained('praktikan', 'npm');
            $table->foreignId('id_praktikum')->constrained('praktikum', 'id');
            $table->json('nilai_absen');
            $table->json('nilai_tugas');
            $table->integer('nilai_uts');
            $table->integer('nilai_uas');
            $table->primary(['npm', 'id_praktikum']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('praktikan_praktikum');
    }
}
