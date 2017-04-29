<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->String('centro_educativo');
            $table->String('nivel_estudios');
            $table->integer('area_id');
            $table->integer('estado')->default(1);
            $table->integer('mes_ini');
            $table->integer('anio_ini');
            $table->integer('mes_fin');
            $table->integer('anio_fin');
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
        Schema::drop('formaciones');
    }
}
