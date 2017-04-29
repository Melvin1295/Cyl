<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Postulacion;

class PostulacionRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Postulacion;
    }

    public function search($q)
    {
        $postulacion =Postulacion::where('fecha_postula','like', $q.'%')
                    ->paginate(15);
        return $postulacion;
    }
    public function allPostulacion($q)
    { 
              if($q == 10){
                  $postulacion =Postulacion::join('anuncios','anuncios.id','=','postulaciones.id')
                                 ->join('departamentos','departamentos.id','=','anuncios.departamento_id')
                                 ->select('postulaciones.*','anuncios.titulo','departamentos.nombre')
                                 ->where('postulantes.usuario_id','=',Auth()->user()->id)
                                 ->paginate(15);
              }else{
                  $postulacion =Postulacion::join('anuncios','anuncios.id','=','postulaciones.id')
                                 ->join('departamentos','departamentos.id','=','anuncios.departamento_id')
                                 ->select('postulaciones.*','anuncios.titulo','departamentos.nombre')
                                  ->where('postulantes.usuario_id','=',Auth()->user()->id)
                                ->where('postulaciones.estado','=', $q)
                               ->paginate(15);
              }
        
        return $postulacion;
    }
    
} 