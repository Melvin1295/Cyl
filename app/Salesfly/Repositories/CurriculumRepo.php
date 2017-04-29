<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Curriculum;

class CurriculumRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Curriculum;
    }

    public function search($q)
    {
        $anio =Curriculum::where('anio','like', $q.'%')
                    ->paginate(15);
        return $anio;
    }
    public function anioAll()
    {
        $anio =Curriculum::get();
        return $anio;
    }
    
} 