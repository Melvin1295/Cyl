<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Postulante extends \Eloquent {

    protected $table = 'postulantes';
    
    protected $fillable = [ 
            'tipo_documento_id',
            'nro_documento',
            'dia',
            'mes',
            'anio',
            'fecha_nacimiento',
            'estado_civil_id',
            'tipo_telefono_id',
            'cod_telefono',
            'telefono',
            'tipo_telefono_id2',
            'cod_telefono2',
            'telefono2',
            'nombres',
            'apellido_paterno',
            'apellido_materno',
            'apellidos_nombres',
            'pais_id',
            'departamento_id',
            'provincia_id',
            'distrito_id',
            'direccion',
            'licencia_conducir',
            'flag_vehiculo_propio',1,
            'flag_discapacidad',1,
            'link_foto',
            'estado',
            'cod_postal',
            'nacionalidad',
            'usuario_id'
                    ];
        }
       