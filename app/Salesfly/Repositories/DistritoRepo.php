<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Distrito;

class DistritoRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Distrito;
    }

    public function search($q)
    {
        $distrito =Distrito::where('nombre','like', $q.'%')
                    ->paginate(15);
        return $distrito;
    }
    public function distritoAll()
    {
        $distrito =Distrito::get();
        return $distrito;
    }
    
} 