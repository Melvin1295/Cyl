<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Mes;

class MesRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Mes;
    }

    public function search($q)
    {
        $mes =Mes::where('anio','like', $q.'%')
                    ->paginate(15);
        return $mes;
    }
    public function mesAll()
    {
        $mes =Mes::get();
        return $mes;
    }
    
} 