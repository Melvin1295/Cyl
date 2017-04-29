<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Sector extends \Eloquent {

    protected $table = 'sectores';
    
    protected $fillable = [ 
                    'nombre'
                    ];
}