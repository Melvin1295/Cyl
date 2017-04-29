<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Perfil extends \Eloquent {

    protected $table = 'perfiles';
    
    protected $fillable = [ 
                     'cargo',
                     'descripcion',
                     'estado',
                     'postulante_id'
                    ];
}