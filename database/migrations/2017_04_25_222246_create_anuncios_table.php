<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descripcion_corta');
            $table->string('descripcion',max);
            $table->string('estado');
            $table->integer('num_puestos');
            $table->string('empresa_id');
            $table->Date('fecha_inicio');
            $table->Date('fecha_fin');
            $table->decimal('salario',10,2);
            $table->String('localizacion');
            $table->integer('departamento_id');
            $table->integer('profesion_id');
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
        Schema::drop('anuncios');
    }
}
