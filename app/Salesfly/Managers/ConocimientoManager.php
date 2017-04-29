<?php
namespace Salesfly\Salesfly\Managers;
class ConocimientoManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
                    'nombre'=>'',
                    'perfil_id'=>''
                  ];
        return $rules;
    }}