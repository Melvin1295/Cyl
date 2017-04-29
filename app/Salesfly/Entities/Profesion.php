<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Profesion extends \Eloquent {

    protected $table = 'profesiones';
    
    protected $fillable = [ 
                    'nombre',
                    'nombre_corto',
                    'estado'
                    ];
}