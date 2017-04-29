<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Perfil;

class PerfilRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Perfil;
    }

    public function search($q)
    {
        $anio =Perfil::where('cargo','like', $q.'%')
                    ->paginate(15);
        return $anio;
    }
    public function perfilAll()
    {
        $anio =Perfil::get();
        return $anio;
    }
    
} 