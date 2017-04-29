<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Conocimiento extends \Eloquent {

    protected $table = 'conocimientos';
    
    protected $fillable = [ 
                    'nombre',
                    'perfil_id'
                    ];
}