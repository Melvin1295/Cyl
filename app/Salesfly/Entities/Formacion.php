<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Formacion extends \Eloquent {

    protected $table = 'formaciones';
    
    protected $fillable = [ 
                    'centro_educativo',
                    'nivel_estudios',
                    'area_id',
                    'estado',
                    'mes_ini',
                    'anio_ini',
                    'mes_fin',
                    'anio_fin',
                    'funciones',
                    'perfil_id'
                    ];
}