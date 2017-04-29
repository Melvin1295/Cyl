<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Experiencia;

class ExperienciaRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Experiencia;
    }

    public function search($q)
    {
        $experiencia =Experiencia::where('cargo','like', $q.'%')
                    ->paginate(15);
        return $experiencia;
    }
    public function experienciaAll()
    {
        $experiencia =Experiencia::get();
        return $experiencia;
    }
     public function experienciapostulante($id_perfil)
    {
        $experiencia =Experiencia::where('perfil_id', $id_perfil)
                    ->get();
        return $experiencia;
    }
    
} 