<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Postulante;

class PostulanteRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Postulante;
    }

    public function search($q)
    {
        $indicator =Postulante::where('titulo','like', $q.'%')
                    ->with('province')
                    ->paginate(15);
        return $indicator;
    }
    public function paginaterepo($c){
         $indicator =Postulante::with('province')
                    ->paginate($c);
        return $indicator;
    }
    
   public function postulanteAll()
    {
        $postualante =Postulante::get();
        return $postualante;
    }
    public function findPostulante($id){
        $postulante =Postulante::join('perfiles','perfiles.postulante_id','=','postulantes.id')
                                 ->select('postulantes.*','perfiles.cargo')
                    ->where('postulantes.id','=',$id)
                    ->first();
        return $postulante;
    }
} 