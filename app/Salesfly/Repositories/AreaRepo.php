<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Area;

class AreaRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Area;
    }

    public function search($q)
    {
        $area =Area::where('nombre','like', $q.'%')
                    ->paginate(15);
        return $area;
    }
    public function areaAll()
    {
        $area =Area::get();
        return $area;
    }
    
} 