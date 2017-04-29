<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Departamento;

class DepartamentoRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Departamento;
    }

    public function search($q)
    {
        $departamento =Departamento::where('nombre','like', $q.'%')
                    ->paginate(15);
        return $departamento;
    }
    public function departamentoAll()
    {
        $departamento =Departamento::get();
        return $departamento;
    }
    public function anuncios($object){
        
        $depart[0]=0;
        $profe[0]=0;
        $index=0;
        $index2=0;
        $valorBuscado='';
        foreach ($object as $item) {
            if($item['tipo']==2){
                 $depart[$index]=intval($item['id']);
                 $index=$index+1;
            }
            if($item['tipo']==3){
                 $profe[$index2]=intval($item['id']);
                 $index2=$index2+1;
            }
            if($item['tipo']==1){
                 $valorBuscado=$item['value'];
            }

        }
        $departBus=0;
        $departBus2=0;
       
                if($index > 0){
                   $departBus=0;
                }else{
                    $departBus=99999999;
                }
                if($index2 > 0){
                   $departBus2=0;
                }else{
                    $departBus2=99999999;
                }
      
       if($valorBuscado == ''){
                  $postulante =Departamento::join('anuncios','anuncios.departamento_id','=','departamentos.id')
                                 ->join('profesiones','profesiones.id','=','anuncios.profesion_id')
                                 ->select('anuncios.*','departamentos.*','profesiones.*','anuncios.id as idAnun')
                                 ->where(function($query) use ($depart,$departBus){
                                      $query->whereIn ('departamentos.id',$depart)
                                            ->orWhere ('departamentos.id','<=',$departBus);
                                 })
                                ->where(function($query) use ($profe,$departBus2){
                                      $query->whereIn ('profesiones.id',$profe)
                                            ->orWhere ('profesiones.id','<=',$departBus2);
                                  })
                                 
                                 
                    ->paginate(15);
      
        }else{
                $postulante =Departamento::join('anuncios','anuncios.departamento_id','=','departamentos.id')
                                 ->join('profesiones','profesiones.id','=','anuncios.profesion_id')
                                 ->select('anuncios.*','departamentos.*','profesiones.*','anuncios.id as idAnun')
                                 ->where(function($query) use ($depart,$departBus){
                                      $query->whereIn ('departamentos.id',$depart)
                                            ->orWhere ('departamentos.id','<=',$departBus);
                                 })
                                ->where(function($query) use ($profe,$departBus2){
                                      $query->whereIn ('profesiones.id',$profe)
                                            ->orWhere ('profesiones.id','<=',$departBus2);
                                  })
                                 ->where('anuncios.titulo','like','%'.$valorBuscado.'%')
                    ->paginate(15);

        }
        
        return $postulante;
    }
    public function findAnuncio($id){
        $postulante =Departamento::join('anuncios','anuncios.departamento_id','=','departamentos.id')
                                 ->join('profesiones','profesiones.id','=','anuncios.profesion_id')
                                 ->select('anuncios.*','departamentos.*','profesiones.*','departamentos.nombre as departNombre','anuncios.id as idAnun')
                                 ->where('anuncios.id','=',$id)                                 
                                 
                    ->first();
        return  $postulante;
    }
    
} 