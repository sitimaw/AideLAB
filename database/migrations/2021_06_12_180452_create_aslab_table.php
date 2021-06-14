<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAslabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aslab', function (Blueprint $table) {
            $table->string('npm', 13)->primary(); //primary key
            $table->string('nama');
            $table->string('no_hp', 15);
            $table->string('email');
            $table->string('password');
            $table->string('path_foto')->nullable();
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
        Schema::dropIfExists('aslab');
    }
}
