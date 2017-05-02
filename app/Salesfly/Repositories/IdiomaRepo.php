<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Idioma;

class IdiomaRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Idioma;
    }

    public function search($q)
    {
        $idioma =Idioma::where('idioma','like', $q.'%')
                    ->paginate(15);
        return $idioma;
    }
    public function idiomaAll()
    {
        $idioma =Idioma::get();
        return $idioma;
    }
    public function idiomaspostulante($id_perfil)
    {
        $idioma =Idioma::where('perfil_id', $id_perfil)
                    ->get();
        return $idioma;
    }
} 