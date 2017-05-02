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
        $curriculum =Curriculum::where('curriculum','like', $q.'%')
                    ->paginate(15);
        return $curriculum;
    }
    public function anioAll()
    {
        $curriculum =Curriculum::get();
        return $curriculum;
    }

    public function paginate2()
    {
        $curriculum =Curriculum::where('usuario_id','=',  Auth()->user()->id)
           ->paginate(15);
        return $curriculum;
    }
    
} 