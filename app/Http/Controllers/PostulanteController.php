<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\PostulanteRepo;
use Salesfly\Salesfly\Managers\PostulanteManager;
use Salesfly\Salesfly\Entities\User;

use Salesfly\Salesfly\Repositories\PerfilRepo;
use Salesfly\Salesfly\Managers\PerfilManager;

use Salesfly\Salesfly\Repositories\ConocimientoRepo;
use Salesfly\Salesfly\Managers\ConocimientoManager;

use Salesfly\Salesfly\Repositories\ProgramaRepo;
use Salesfly\Salesfly\Managers\ProgramaManager;

use Salesfly\Salesfly\Repositories\ExperienciaRepo;
use Salesfly\Salesfly\Managers\ExperienciaManager;

use Salesfly\Salesfly\Repositories\FormacionRepo;
use Salesfly\Salesfly\Managers\FormacionManager;

use Salesfly\Salesfly\Repositories\IdiomaRepo;
use Salesfly\Salesfly\Managers\IdiomaManager;

use Salesfly\Salesfly\Repositories\UserRepo;
use Salesfly\Salesfly\Managers\UserManager;


class PostulanteController extends Controller {

    protected $postulanteRepo;

    public function __construct(PostulanteRepo $postulanteRepo,PerfilRepo $perfilRepo,ConocimientoRepo $conocimientoRepo,
        ProgramaRepo $programaRepo,ExperienciaRepo $experienciaRepo,FormacionRepo $formacionRepo,IdiomaRepo $idiomaRepo
        ,UserRepo $userRepo)
    {
        $this->postulanteRepo = $postulanteRepo;
        $this->perfilRepo = $perfilRepo;
        $this->conocimientoRepo = $conocimientoRepo;
        $this->programaRepo = $programaRepo;
        $this->experienciaRepo = $experienciaRepo;
        $this->formacionRepo = $formacionRepo;
        $this->idiomaRepo = $idiomaRepo;
        $this->userRepo = $userRepo;
    }

     public function allPostulante(){
        $post = $this->postulanteRepo->postulanteAll();
        return response()->json($post);
    }
     public function all2(){
        $post = $this->perfilRepo->perfilAll();
        return response()->json($post);
    }

 public function all3(){
        $post = $this->conocimientoRepo->conocimientoAll();
        return response()->json($post);
    }

 public function all4(){
        $post = $this->programaRepo->programaAll();
        return response()->json($post);
    }

 public function all5(){
        $post = $this->experienciaRepo->experienciaAll();
        return response()->json($post);
    }

 public function all6(){
    $post = $this->formacionRepo->formacionAll();
        return response()->json($post);
    }
public function findPostulante($id){    
        $post = $this->postulanteRepo->findPostulante(Auth()->user()->id);
        return response()->json($post);
} 


    public function create(Request $request)
    {
        //$user = \Auth::user();
        //$request->merge(array('usuario_id' => $user->id));
        //var_dump($request->postulante);die();
      
    $postulante = $request["postulante"];
    $postulante["apellidos_nombres"] = $postulante["apellido_paterno"] . " " . $postulante["apellido_materno"] . " " . $postulante["nombres"];
    //$postulante["link_foto"] = $_SESSION['nombreArchivo'];
   // var_dump($postulante);
    /*if ($_SESSION['nombreArchivo'] == null || $_SESSION['nombreArchivo'] == '') {
        $postulante["link_foto"] = "default.jpg";
    } else {
        $postulante["link_foto"] = $_SESSION['nombreArchivo'];
    }*/
    $postulante["usuario_id"] = Auth()->user()->id;
    $perfil = $request["perfil"];
    $experiencia = $request["experiencia"];
    $estudio = $request["estudio"];
    $idioma = $request["idioma"];
    $programa = $request["programa"];
    $conocimiento = $request["conocimiento"];
    
        $postulante1 = $this->postulanteRepo->getModel();
        $manager = new PostulanteManager($postulante1,$postulante);
        $manager->save();
    /*$fluent->insertInto('postulante', $postulante)
            ->execute();*/
    //$idPostulante = getid($fluent);
         //   var_dump($postulante1->id);
    $perfil["postulante_id"] = $postulante1->id;
    $perfil["estado"] = 1;
   // var_dump($perfil);
    $perfil1 = $this->perfilRepo->getModel();
    $manager = new PerfilManager($perfil1,$perfil);
    $manager->save();
    
    
    foreach ($experiencia as $item) {
        
        $item["perfil_id"] = $perfil1->id;
        $experiencia1 = $this->experienciaRepo->getModel();
        $manager = new ExperienciaManager($experiencia1,$item);
        $manager->save();
    }

    foreach ($estudio as $item) {
        $item["perfil_id"] = $perfil1->id;
        $formacion1 = $this->formacionRepo->getModel();
        $manager = new FormacionManager($formacion1,$item);
        $manager->save();
    }
    foreach ($programa as $item) {
        $item["perfil_id"] = $perfil1->id;
        $programa1 = $this->programaRepo->getModel();
        $manager = new ProgramaManager($programa1,$item);
        $manager->save();
    }
    foreach ($conocimiento as $item) {
        $item["perfil_id"] = $perfil1->id;
        $conocimiento1 = $this->conocimientoRepo->getModel();
        $manager = new ConocimientoManager($conocimiento1,$item);
        $manager->save();
    }

    foreach ($idioma as $item) {
        //var_dump($item);
        $item["perfil_id"] = $perfil1->id;
        $idioma1 = $this->idiomaRepo->getModel();
        $manager = new IdiomaManager($idioma1,$item);
        $manager->save();
    }


        /*$usuario1=$this->userRepo->find(Auth()->user()->id);
        $costoCotizacion = new User() ;
        $usuario1->name=$usuario1['name'];
        $usuario1->email=$usuario1['email'];
        $usuario1->password=$usuario1['password'];
        $usuario1->image=$usuario1['image'];
        $usuario1->role_id=$usuario1['role_id'];
        $usuario1->estado=$usuario1['estado'];
        $usuario1->nuevo=2;
        $costoCotizacion->save();*/

        User::
            where('id',Auth()->user()->id)
            ->update(['nuevo'=>2]);

        //$manager = new UserManager($usuario1,$usuario1);
        //$manager->save();


        return response()->json(['estado'=>true, 'nombre'=>'echo']);
    }
   
    public function uploadFile(){
        $file = $_FILES["file"]["name"];
        $time=time();
        if(!is_dir("images/postulante/"))
            mkdir("images/postulante/", 0777);
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "images/postulante/".$time."_".$file))
        {
             
        }
        return "/images/postulante/".$time."_".$file;      
    }
   
    public function edit(Request $request)
    {
            //$postulante["usuario_id"] = 1;
            //$postulanteRequest = $request["postulante"];
            $perfil = $request["perfil"];
            $experiencia = $request["experiencia"];
            $estudio = $request["estudio"];
            $idioma = $request["idioma"];
            $programa = $request["programa"];
            $conocimiento = $request["conocimiento"];
    
        $postulante = $this->postulanteRepo->find($request->id);

        if($request->link_foto!=$postulante->link_foto){
            if ($postulante->link_foto!="") {
                $rest = substr(__DIR__, 0, -21);
                unlink($rest."/public".$postulante->link_foto);
            }            
        }
        $manager = new PostulanteManager($postulante,$request->all());
        $manager->save();

        //================================
            $perfiledit = $this->perfilRepo->find($perfil["id"]);
            $manager = new PerfilManager($perfiledit,$perfil);
            $manager->save();
        //===============================
            $conosimientoDeleteAll= $this->conocimientoRepo->conocimientospostulante($perfil["id"]);
            foreach ($conosimientoDeleteAll as $row) {
                $conosimientoDelete= $this->conocimientoRepo->find($row["id"]);
                $conosimientoDelete->delete();
            }
            foreach ($conocimiento as $item) {
                $item["perfil_id"] = $perfil["id"];
                $conocimiento1 = $this->conocimientoRepo->getModel();
                $manager = new ConocimientoManager($conocimiento1,$item);
                $manager->save();
            }
        //================================
            $experienciaDeteAll= $this->experienciaRepo->experienciapostulante($perfil["id"]);
            foreach ($experienciaDeteAll as $row) {
                $experienciaDete= $this->experienciaRepo->find($row["id"]);
                $experienciaDete->delete();
            }
            foreach ($experiencia as $item) {
                $item["perfil_id"] = $perfil["id"];
                $experiencia1 = $this->experienciaRepo->getModel();
                $manager = new ExperienciaManager($experiencia1,$item);
                $manager->save();
            }
        //===============================  
        $estudioDeleteAll= $this->formacionRepo->formacionpostulante($perfil["id"]);
            foreach ($estudioDeleteAll as $row) {
                $formacionDelete= $this->formacionRepo->find($row["id"]);
                $formacionDelete->delete();
            }      
            foreach ($estudio as $item) {
                $item["perfil_id"] = $perfil["id"];
                $formacion1 = $this->formacionRepo->getModel();
                $manager = new FormacionManager($formacion1,$item);
                $manager->save();
            }
        //================================
            $programasDeleteAll= $this->programaRepo->programapostulante($perfil["id"]);
            foreach ($programasDeleteAll as $row) {
                $programaDelete= $this->programaRepo->find($row["id"]);
                $programaDelete->delete();
            }   
            foreach ($programa as $item) {
                $item["perfil_id"] = $perfil["id"];
                $programa1 = $this->programaRepo->getModel();
                $manager = new ProgramaManager($programa1,$item);
                $manager->save();
            }

        return response()->json(['estado'=>true, 'nombre'=>$postulante->nombreTienda]);
    }
    public function traerpostulante()
    {
        $user = \Auth::user();
        $user_id=$user->id;
        $menus = $this->postulanteRepo->traerpostulante($user_id);
        return response()->json($menus);
    }

    public function perfilpostulante($id_postulante){    
        $post = $this->perfilRepo->perfilpostulante($id_postulante);
        return response()->json($post);
    }
    public function experienciapostulante($perfil_id){    
        $post = $this->experienciaRepo->experienciapostulante($perfil_id);
        return response()->json($post);
    }  
    public function formacionpostulante($perfil_id){    
        $post = $this->formacionRepo->formacionpostulante($perfil_id);
        return response()->json($post);
    }
    public function idiomaspostulante($perfil_id){    
        $post = $this->idiomaRepo->idiomaspostulante($perfil_id);
        return response()->json($post);
    } 
    public function programapostulante($perfil_id){    
        $post = $this->programaRepo->programapostulante($perfil_id);
        return response()->json($post);
    }
    public function conocimientospostulante($perfil_id){    
        $post = $this->conocimientoRepo->conocimientospostulante($perfil_id);
        return response()->json($post);
    }       
          
    
    
}