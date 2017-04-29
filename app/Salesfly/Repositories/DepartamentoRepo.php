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
        $depart=[];
        $profe=[];
        $index=0;
        $index2=0;
        foreach ($item as $object) {
            if($item['tipo']=2){
                 $depart[$index]=$item['id'];
                 $index=$index+1;
            }
            if($item['tipo']=3){
                 $depart[$index2]=$item['id'];
                 $index2=$index2+1;
            }

        }
        $postulante =Departamento::join('anuncios','anuncios.departamento_id','=','departamentos.id')
                                 ->join('profesiones','profesiones.id','=','anuncios.profesion_id')
                                 ->select('anuncios.*','departamentos.*','profesiones.*')
                                 ->whereIn ('departamentos.id',[1,2])
                                 ->whereIn ('profesiones.id',[1,2])
                                 ->where ('anuncios.titulo','like','%contratacion%')
                    ->paginate(15);
        return $postulante;
    }
    
} 