<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Experiencia extends \Eloquent {

    protected $table = 'experiencias';
    
    protected $fillable = [ 
                    'empresa',
                    'departamento_id',
                    'sector_id',
                    'cargo',
                    'area_id',
                    'mes_ini',
                    'anio_ini',
                    'mes_fin',
                    'anio_fin',
                    'funciones',
                    'perfil_id'
                    ];
}