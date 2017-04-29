<?php
namespace Salesfly\Salesfly\Managers;
class ProgramaManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
                    'nombre'=>'',
                    'perfil_id'=>''
                  ];
        return $rules;
    }}