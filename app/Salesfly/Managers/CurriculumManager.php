<?php
namespace Salesfly\Salesfly\Managers;
class CurriculumManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
                    'defecto'=>'',
                    'nombre'=>'',
                    'estado'=>'',
                    'usuario_id'=>''
                  ];
        return $rules;
    }}