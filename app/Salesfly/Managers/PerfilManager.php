<?php
namespace Salesfly\Salesfly\Managers;
class PerfilManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
                     'cargo'=>'',
                     'descripcion'=>'',
                     'estado'=>'',
                     'postulante_id'=>''
                  ];
        return $rules;
    }}