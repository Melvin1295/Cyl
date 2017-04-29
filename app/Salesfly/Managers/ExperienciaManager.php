<?php
namespace Salesfly\Salesfly\Managers;
class ExperienciaManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
                    'empresa'=>'',
                    'departamento_id'=>'',
                    'sector_id'=>'',
                    'cargo'=>'',
                    'area_id'=>'',
                    'mes_ini'=>'',
                    'anio_ini'=>'',
                    'mes_fin'=>'',
                    'anio_fin'=>'',
                    'funciones'=>'',
                    'perfil_id'=>''
                  ];
        return $rules;
    }}