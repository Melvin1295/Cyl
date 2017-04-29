<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Idioma extends \Eloquent {

    protected $table = 'idiomas';
    
    protected $fillable = [ 
                    'idioma',
                    'nivel_idioma',
                    'perfil_id'
                    ];
}