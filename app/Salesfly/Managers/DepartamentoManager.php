<?php
namespace Salesfly\Salesfly\Managers;
class DepartamentoManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
                    'nombre'=>'',
                    'nombre_corto'=>'',
                    'codigo'=>'',
                    'codigo_postal'=>'',
                    'estado'=>''
                  ];
        return $rules;
    }}