<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Departamento extends \Eloquent {

    protected $table = 'departamentos';
    
    protected $fillable = [ 
                    'nombre',
                    'nombre_corto',
                    'codigo',
                    'codigo_postal',
                    'estado'
                    ];
}