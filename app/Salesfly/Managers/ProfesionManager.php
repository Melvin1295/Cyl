<?php
namespace Salesfly\Salesfly\Managers;
class ProfesionManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
            'nombres'=> '',
            'nombre_corto'=> '',
            'estado'=> ''
                  ];
        return $rules;
    }}