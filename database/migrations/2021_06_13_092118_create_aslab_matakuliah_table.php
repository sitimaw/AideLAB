<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAslabMatakuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aslab_matakuliah', function (Blueprint $table) {
            $table->string('npm', 13)->constrained('aslab', 'npm');
            $table->foreignId('id_matakuliah')->constrained('matakuliah', 'id');
            $table->boolean('status');
            $table->primary(['npm', 'id_matakuliah']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aslab_matakuliah');
    }
}
