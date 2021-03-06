<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtemas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre',50);
            $table->date('fecha_programada');
            $table->date('fecha_real');
            $table->string('actividad',300);
            $table->string('recursos',300);
            $table->integer('id_unidad')->unsigned();
            //Relations
            $table->foreign('id_unidad')->references('id')->on('unidades')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

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
        Schema::dropIfExists('subtemas');
    }
}
