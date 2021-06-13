<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAslabPraktikumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aslab_praktikum', function (Blueprint $table) {
            $table->string('npm', 13)->constrained('aslab', 'npm');
            $table->foreignId('id_praktikum')->constrained('praktikum', 'id');
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
        Schema::dropIfExists('aslab_praktikum');
    }
}
