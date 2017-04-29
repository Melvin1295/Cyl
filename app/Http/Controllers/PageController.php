<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\AnioRepo;
use Salesfly\Salesfly\Managers\AnioManager;

use Salesfly\Salesfly\Repositories\MesRepo;
use Salesfly\Salesfly\Managers\MesManager;

use Salesfly\Salesfly\Repositories\DiaRepo;
use Salesfly\Salesfly\Managers\DiaManager;

use Salesfly\Salesfly\Repositories\AreaRepo;
use Salesfly\Salesfly\Managers\AreaManager;

use Salesfly\Salesfly\Repositories\DepartamentoRepo;
use Salesfly\Salesfly\Managers\DepartamentoManager;

use Salesfly\Salesfly\Repositories\ProvinceRepo;
use Salesfly\Salesfly\Managers\ProvinceManager;

use Salesfly\Salesfly\Repositories\DistritoRepo;
use Salesfly\Salesfly\Managers\DistritoManager;

use Salesfly\Salesfly\Repositories\SectorRepo;
use Salesfly\Salesfly\Managers\SectorManager;

use Salesfly\Salesfly\Repositories\ProfesionRepo;
use Salesfly\Salesfly\Managers\ProfesionManager;


class PageController extends Controller {

    protected $anioRepo;
    protected $mesRepo;

    public function __construct(AnioRepo $anioRepo,MesRepo $mesRepo,DiaRepo $diaRepo,AreaRepo $areaRepo,
        DepartamentoRepo $departamentoRepo,DistritoRepo $distritoRepo,ProvinceRepo $provinceRepo,
        ProfesionRepo $profesionRepo,
        SectorRepo $sectorRepo)
    {
        $this->anioRepo = $anioRepo;
        $this->mesRepo = $mesRepo;
        $this->diaRepo = $diaRepo;
        $this->areaRepo = $areaRepo;
        $this->departamentoRepo = $departamentoRepo;
        $this->distritoRepo = $distritoRepo;
        $this->provinceRepo = $provinceRepo;
        $this->sectorRepo = $sectorRepo;
        $this->profesionRepo = $profesionRepo;
    }


   /* public function __construct(StoreRepo $storeRepo)
    {
        $this->storeRepo = $storeRepo;
    }*/
    public function allAnio(){
        $anio = $this->anioRepo->anioAll();
        return response()->json($anio);
    }
    public function allMes(){
        $mes = $this->mesRepo->mesAll();
        return response()->json($mes);
    }
    public function allDia(){
        $dia = $this->diaRepo->diaAll();
        return response()->json($dia);
    }
    public function allDepartamento(){
        $departamento = $this->departamentoRepo->departamentoAll();
        return response()->json($departamento);
    }
     public function allDistrito(){
        $distrito = $this->distritoRepo->distritoAll();
        return response()->json($distrito);
    }
      public function allProvince(){
        $province = $this->provinceRepo->provinceAll();
        return response()->json($province);
    }
      public function allArea(){
        $area = $this->areaRepo->areaAll();
        return response()->json($area);
    }
      public function allSector(){
        $sector = $this->sectorRepo->sectorAll();
        return response()->json($sector);
    }
      public function allProfesion(){
        $sector = $this->profesionRepo->profesionAll();
        return response()->json($sector);
    }
    public function anuncio($object){
       $departamento = $this->departamentoRepo->anuncios($object);
        return response()->json($departamento);
   }


    public function index()
    {
        return View('pages.index');
    }
    public function form_blog()
    {
        return View('pages.form_blog');
    }
    public function form_contact(){
    	return View('pages.form_contact');
    }

    public function form_publisherItem(){
        return View('pages.form_publisherItem');
    }
    public function form_editorials(){
        return View('pages.form_editorials');
    }
    public function form_verEditorial(){
        return View('pages.form_verEditorial');
   }
    public function form_indicadores(){
        return View('pages.form_indicadores');
    }
    public function form_reclamo(){
        return View('pages.form_reclamo');
    }
    public function form_ceate(){
        return View('users.form_create');
    }
    
}