<?php
namespace Salesfly\Salesfly\Managers;
class IdiomaManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'idioma'=>'',
                    'nivel_idioma'=>'',
                    'perfil_id'=>''
                  ];
        return $rules;
    }}