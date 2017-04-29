<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Sector;

class SectorRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Sector;
    }

    public function search($q)
    {
        $distrito =Sector::where('nombre','like', $q.'%')
                    ->paginate(15);
        return $distrito;
    }
    public function sectorAll()
    {
        $sector =Sector::get();
        return $sector;
    }
    
} 