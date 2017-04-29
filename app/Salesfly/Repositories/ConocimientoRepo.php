<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Conocimiento;

class ConocimientoRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Conocimiento;
    }

    public function search($q)
    {
        $conocimiento =Conocimiento::where('conocimiento','like', $q.'%')
                    ->paginate(15);
        return $conocimiento;
    }
    public function conocimientoAll()
    {
        $conocimiento =Conocimiento::get();
        return $conocimiento;
    }
    
} 