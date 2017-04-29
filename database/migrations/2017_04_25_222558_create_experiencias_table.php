<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencias', function (Blueprint $table) {
            $table->increments('id');
            $table->String('empresa');
            $table->integer('departamento_id');
            $table->integer('sector_id');
            $table->String('cargo');
            $table->integer('area_id');
            $table->integer('mes_ini');
            $table->integer('anio_ini');
            $table->integer('mes_fin');
            $table->integer('anio_fin');
            $table->String('funciones');
            $table->integer('perfil_id');
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
        Schema::drop('experiencias');
    }
}
