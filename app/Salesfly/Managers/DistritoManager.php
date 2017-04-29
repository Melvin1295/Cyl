<?php
namespace Salesfly\Salesfly\Managers;
class DistritoManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
                    'departamento_id'=>'',
                    'provincia_id'=>'',
                    'nombre'=>'',
                    'nombre_corto'=>''
                  ];
        return $rules;
    }}