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


use Salesfly\Salesfly\Repositories\PostulacionRepo;
use Salesfly\Salesfly\Managers\PostulacionManager;

use Salesfly\Salesfly\Repositories\CurriculumRepo;
use Salesfly\Salesfly\Managers\CurriculumManager;

use Salesfly\Salesfly\Repositories\UserRepo;
use Salesfly\Salesfly\Managers\UserManager;


class PageController extends Controller {

    protected $anioRepo;
    protected $mesRepo;

    public function __construct(AnioRepo $anioRepo,MesRepo $mesRepo,DiaRepo $diaRepo,AreaRepo $areaRepo,
        DepartamentoRepo $departamentoRepo,DistritoRepo $distritoRepo,ProvinceRepo $provinceRepo,
        ProfesionRepo $profesionRepo,
        SectorRepo $sectorRepo,PostulacionRepo $postulacionRepo,CurriculumRepo $curriculumRepo,UserRepo $userRepo)
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
        $this->postulacionRepo = $postulacionRepo;
        $this->curriculumRepo = $curriculumRepo;
         $this->userRepo = $userRepo;
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
    public function anuncio(Request $request){
        //var_dump($request->all());die();
       $departamento = $this->departamentoRepo->anuncios($request->all());       
       return response()->json($departamento);
   }
   public function curriculums(){
        //var_dump($request->all());die();
       $curri = $this->curriculumRepo->paginate2(15);       
       return response()->json($curri);
   }


   public function findAnuncio($id){
      $departamento = $this->departamentoRepo->findAnuncio($id);       
       return response()->json($departamento);
   }
   public function allPostulacion ($q){
      $postulacion = $this->postulacionRepo->allPostulacion($q);       
       return response()->json($postulacion);
   }
   public function create(Request $request)
    {
//user = \Auth::user();
        $object['estado']=1;
        $object['anuncio_id']=$request->input('idAnun');
        $object['usuario_id']=Auth()->user()->id;
        $object['fecha_postula']=date("Y-m-d");
        $postulacion = $this->postulacionRepo->getModel();
        $manager = new PostulacionManager($postulacion,$object);
        $manager->save();

        return response()->json(['estado'=>true]);
    }
     public function createCurriculum(Request $request)
    {
//user = \Auth::user();
        $object['defecto']=1;
        $object['nombre']=$request->input('nombre');
        $object['estado']=1;
        $object['usuario_id']=Auth()->user()->id;
        $curriculum = $this->curriculumRepo->getModel();
        $manager = new CurriculumManager($curriculum,$object);
        $manager->save();

        return response()->json(['estado'=>true]);
    }
     public function uploadFile(){
        $file = $_FILES["file"]["name"];
        $time=time();
        if(!is_dir("images/curriculums/"))
            mkdir("images/curriculums/", 0777);
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "images/curriculums/".$time."_".$file))
        {
             
        }
        return "/images/curriculum/".$time."_".$file;      
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
    public function form_verAnuncio(){
        return View('pages.form_verAnuncio');
   }

   public function form_curriculum(){
       return View('pages.form_curriculum');
   }
   public function createUser(Request $request){
       $request->merge(['role_id'=>1]);
       $request->merge(['name'=>$request->input('apellido').' '.$request->input('name')]);
       $request->merge(['password'=>bcrypt($request->input('password'))]);
       $request->merge(['image'=>'/images/users/default.png']);
       $request->merge(['estado'=>1]);
       $request->merge(['nuevo'=>1]);
       $user = $this->userRepo->getModel();
        $manager = new UserManager($user,$request->all());
        $manager->save();

        return response()->json(['estado'=>true]);

    
   }
   public function destroyCurriculum(Request $request)
    {
        $curriculum= $this->curriculumRepo->find($request->id);
        $curriculum->delete();
        return response()->json(['estado'=>true]);
    }
    
}