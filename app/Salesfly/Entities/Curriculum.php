<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends \Eloquent {

    protected $table = 'curriculums';
    
    protected $fillable = [ 
                    'defecto',
                    'nombre',
                    'estado',
                    'usuario_id'
                    ];
}