<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Profesion;

class ProfesionRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Profesion;
    }

    public function search($q)
    {
        $anio =Profesion::where('nombre','like', $q.'%')
                    ->paginate(15);
        return $anio;
    }
    public function profesionAll()
    {
        $anio =Profesion::get();
        return $anio;
    }
    
} 