<?php
namespace Salesfly\Salesfly\Managers;
class FormacionManager extends BaseManager {

    public function getRules()
    {
        $rules = [              
                    'centro_educativo'=>'',
                    'nivel_estudios'=>'',
                    'area_id'=>'',
                    'estado'=>'',
                    'mes_ini'=>'',
                    'anio_ini'=>'',
                    'mes_fin'=>'',
                    'anio_fin'=>'',
                    'funciones'=>'',
                    'perfil_id'=>''
                  ];
        return $rules;
    }}