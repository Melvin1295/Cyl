<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_documento_id');
            $table->string('nro_documento');
            $table->integer('dia');
            $table->integer('mes');
            $table->integer('anio');
            $table->timestamp('fecha_nacimiento')->nullable();
            $table->integer('estado_civil_id');
            $table->integer('tipo_telefono_id');
            $table->integer('cod_telefono');
            $table->string ('telefono');
            $table->integer('tipo_telefono_id2');
            $table->integer('cod_telefono2');
            $table->string('telefono2');
            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('apellidos_nombres');
            $table->integer('pais_id');
            $table->integer('departamento_id');
            $table->integer('provincia_id');
            $table->integer('distrito_id');
            $table->string('direccion');
            $table->string('licencia_conducir');
            $table->string('flag_vehiculo_propio',1);
            $table->string('flag_discapacidad',1);
            $table->string('link_foto');
            $table->integer('estado')->default(1);
            $table->string('cod_postal');
            $table->string('nacionalidad');
            $table->integer('usuario_id');         
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
        Schema::drop('postulantes');
    }
}
