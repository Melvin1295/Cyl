<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estado')->default(0);
            $table->integer('anuncio_id');
            $table->String('usuario_id');
            $table->Date('fecha_postula');
            $table->Date('fecha_visto');
            $table->Date('fecha_proceso');
            $table->Date('fecha_finalista');
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
        Schema::drop('postulaciones');
    }
}
