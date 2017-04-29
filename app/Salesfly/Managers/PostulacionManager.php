<?php
namespace Salesfly\Salesfly\Managers;
class PostulacionManager extends BaseManager {

    public function getRules()
    {
        $rules = [ 
            'estado'=>'',
            'anuncio_id'=>'',
            'usuario_id'=>'',
            'fecha_postula'=>'',
            'fecha_visto'=>'',
            'fecha_proceso'=>'',
            'fecha_finalista'=>''
                    ];
        return $rules;
    }
    
}