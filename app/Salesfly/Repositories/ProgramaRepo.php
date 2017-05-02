<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Programa;

class ProgramaRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Programa;
    }

    public function search($q)
    {
        $programa =Programa::where('programa','like', $q.'%')
                    ->paginate(15);
        return $programa;
    }
    public function programaAll()
    {
        $programa =Programa::get();
        return $programa;
    }
    public function programapostulante($id_perfil)
    {
        $conocimiento =Programa::where('perfil_id', $id_perfil)
                    ->get();
        return $conocimiento;
    }
    
} 