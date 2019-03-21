<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCubesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cubes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('T'); // 1 <= T <= 50 TESTCASE
            $table->integer('N')->required(); // 1 <= N <= 100 TAMAÑO MAX DE LA MATRIZ
            $table->integer('M')->required(); // 1 <= M <= 1000 QUERIS
            $table->unsignedInteger('W')->required(); //  1 <= x,y,z <= N Valor a ingresar
            $table->integer('V1')->required(); // ubicacion 1 PARA QUERY
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
        Schema::dropIfExists('cubes');
    }
}
