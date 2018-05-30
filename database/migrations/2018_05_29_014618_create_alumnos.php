<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',30);
            $table->string('apellidoP',30);
            $table->string('apellidoM',30);
            $table->enum('estatus',['activo','inactivo'])->default('activo');
            $table->integer('id_carrera')->unsigned();
            $table->timestamps();

            //Relations
            $table->foreign('id_carrera')->references('id')->on('carreras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
