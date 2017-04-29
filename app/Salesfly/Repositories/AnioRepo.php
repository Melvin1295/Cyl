<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Anio;

class AnioRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Anio;
    }

    public function search($q)
    {
        $anio =Anio::where('anio','like', $q.'%')
                    ->paginate(15);
        return $anio;
    }
    public function anioAll()
    {
        $anio =Anio::get();
        return $anio;
    }
    
} 