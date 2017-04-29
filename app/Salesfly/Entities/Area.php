<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Area extends \Eloquent {

    protected $table = 'areas';
    
    protected $fillable = [ 
                    'nombre'
                    ];
}