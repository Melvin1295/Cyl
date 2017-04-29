<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Distrito extends \Eloquent {

    protected $table = 'distritos';
    
    protected $fillable = [ 
                    'departamento_id',
                    'provincia_id',
                    'nombre',
                    'nombre_corto'
                    ];
}