<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Postulacion extends \Eloquent {

    protected $table = 'postulaciones';
    
    protected $fillable = [ 
                      'estado',
                      'anuncio_id',
                      'usuario_id',
                      'fecha_postula',
                      'fecha_visto',
                      'fecha_proceso',
                      'fecha_finalista'
                    ];
}