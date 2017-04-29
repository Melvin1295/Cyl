<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Dia;

class DiaRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Dia;
    }

    public function search($q)
    {
        $anio =Dia::where('dia','like', $q.'%')
                    ->paginate(15);
        return $anio;
    }
    public function diaAll()
    {
        $anio =Dia::get();
        return $anio;
    }
    
} 