<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Programa extends \Eloquent {

    protected $table = 'programas';
    
    protected $fillable = [ 
                    'nombre',
                    'perfil_id'
                    ];
}