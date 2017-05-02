<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Formacion;

class FormacionRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Formacion;
    }

    public function search($q)
    {
        $formacion =Formacion::where('formacion','like', $q.'%')
                    ->paginate(15);
        return $formacion;
    }
    public function formacionAll()
    {
        $formacion =Formacion::get();
        return $formacion;
    }
    public function formacionpostulante($id_perfil)
    {
        $formacion =Formacion::where('perfil_id', $id_perfil)
                    ->get();
        return $formacion;
    }
    
} 