(function(){
    angular.module('pages.controllers',[])
        .controller('PageController',['$window','$scope', '$interval','$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($window,$scope,$interval, $routeParams,$location,crudService,$filter,$route,$log){
    $scope.mostraVentanaExperienciaEdit = false;
    $scope.estudioVentanaEdit = false;
    $scope.mostraVentanaExperiencia = false;
    $scope.estudioVentana = false;
    $scope.programa = {};
    $scope.programas = [];
    $scope.conocimiento = {};
    $scope.conocimientos = [];
    $scope.idioma = {};
    $scope.idiomas = [];
    $scope.estudio = {};
    $scope.perfilData = {};
    $scope.estudios = [];
    $scope.experiencia = {};
    $scope.experiencias = [];
    $scope.sector = [];
    $scope.area = [];
    $scope.estCivil = [];
    $scope.anio = [];
    $scope.mes = [];
    $scope.dia = [];
    $scope.departamento = [];
    $scope.distrito = [];
    $scope.provincia=[];
    $scope.filtros=[];
    $scope.filtro={};
    $scope.profesiones=[];
    $scope.postulante={};
    $scope.anuncios=[];
    $scope.anuncio={};
    $scope.postulaciones=[];
    $scope.estadoPostulacion=10;
    $scope.curriculum={};
    $scope.curriculums=[];
    $scope.user={};
    $scope.regionSelected='';
    $scope.palabraBuscada='';

    var id = $routeParams.id;
    var id2 = $routeParams.id2;
    var name = $routeParams.name;
    var palabra = $routeParams.palabra;
    var index = $routeParams.index;

                if(id)
                {
                    crudService.byId(id,'anuncio').then(function (data){
                        $scope.anuncio = data;
                       
                     });
                }
    if($location.path() == '/pages/blog') {
         crudService.search('postulacion',$scope.estadoPostulacion,1).then(function (data){
                        $scope.postulaciones = data.data;
                       
          });
    }
    if($location.path() == '/pages/curriculum') {
         crudService.paginate('curriculums',1).then(function (data){
                       $scope.curriculums=data;
                       
          });
    }

     
    $scope.filtroPostulaciones=function(){
         crudService.search('postulacion',$scope.estadoPostulacion,1).then(function (data){
                        $scope.postulaciones = data.data;
                       
          });
    }

    crudService.all('allProfesion').then(function (data){
                        $scope.profesiones = data;
                       
     });

    crudService.all('allYears').then(function (data){
                        $scope.anio = data;
     });
    crudService.all('allMes').then(function (data){
                        $scope.mes = data;
     });
     crudService.all('allDia').then(function (data){
                        $scope.dia = data;
     });
     crudService.all('allDepartamento').then(function (data){
                        $scope.departamento = data;
     });
     crudService.all('allDistrito').then(function (data){
                        $scope.distrito = data;
     });
     crudService.all('allProvince').then(function (data){
                        $scope.provincia = data;
     });
     crudService.all('allArea').then(function (data){
                        $scope.area = data;
     });
     crudService.all('allSector').then(function (data){
                        $scope.sector = data;
     });
      


     crudService.ver('findPostulante',18).then(function (data){
                        $scope.postulante= data;
     });

     $scope.subirCurriculum=function(){
                        var file_archivo = $scope.file_archivo;
                        if (file_archivo!=undefined) {
                            crudService.uploadFile('curriculum',file_archivo, name).then(function(data)
                            {
                                $scope.curriculum.nombre=data.data;
                                crudService.create($scope.curriculum,'curriculum').then(function(data)
                                {
                                       alert("el archivo subio correctamente!!");
                                       $window.location.reload();
                                });
                            });
                        }else{
                            alert("errore el archivo al cargar por favor intentelo nuevamente!!!");
                        }
     }
     $scope.buscarAnuncios=function(){
          crudService.searchAll($scope.filtros,'anuncio',1).then(function (data){
                        $scope.anuncios = data.data;
                        $scope.maxSize = 15;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 15;
                     
           });
     }
     $scope.pageChanged = function() { 
     alert("hola");                  
                    crudService.searchAll($scope.filtros,'anuncio',$scope.currentPage).then(function (data){
                        $scope.anuncios = data.data;
                        $scope.maxSize = 15;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 15;
                     
                     });
                };
     //$scope.buscarAnuncios();
     $scope.postularme=function(){
          crudService.create($scope.anuncio,'postulaciones').then(function (data){
                      alert("Te as postulado Correctamente");
                      $window.location.href='/pages/indicadores/0/x/x/-1';
                     
           });
     }
     $scope.palabraClave=function(palabra){
        
           $scope.filtro.tipo=1;
           $scope.filtro.id=0;
           $scope.filtro.value=palabra;
           $scope.filtro.index=0;
           $scope.filtros.push($scope.filtro);
           $scope.filtro={};
           $scope.buscarAnuncios();
       }
     $scope.quitarFiltro=function(index,item){
           if (item.tipo==1){
                $scope.filtros.splice(index,1);
           }
           if(item.tipo==2){
                 $scope.filtros.splice(index,1);
                 $scope.departamento[item.index].estado=1;
                 //$scope.departamento.splice(item.index,1,$scope.departamento[item.index-1]);
           }else{
                $scope.filtros.splice(index,1);
                $scope.profesiones[item.index].estado=1;
           }
           $scope.buscarAnuncios();  
     }
     $scope.depratamentoFiltro=function(index,item){   
               
           $scope.filtro.tipo=2;
           $scope.filtro.id=item.id;
           $scope.filtro.value=item.nombre;
           $scope.filtro.index=index;
           $scope.filtros.push($scope.filtro);
           $scope.filtro={};
           item.estado=0;           
           $scope.departamento.splice(index,1,item);
           $scope.buscarAnuncios();  
     }
     $scope.profesionFiltro=function(index,item){
           
           $scope.filtro.tipo=3;
           $scope.filtro.id=item.id;
           $scope.filtro.value=item.nombre;
           $scope.filtro.index=index;
           $scope.filtros.push($scope.filtro);
           $scope.filtro={}; 
           item.estado=0;           
           $scope.profesiones.splice(index,1,item);
           $scope.buscarAnuncios();
     }
     if($location.path() == '/pages/indicadores/'+id2+"/"+name+"/"+palabra+"/"+index) {
        crudService.all('allDepartamento').then(function (data){
            
                $scope.departamento = data;
    
                if(id2 != 0 && name != 'x' && palabra != 'x' && index != -1)
                {
                  
                   $scope.departamento[index].estado=0;           
                   //$scope.departamento.splice(index,1,$scope.departamento[0].estado);          
                   $scope.palabraClave(palabra);
                   $scope.depratamentoFiltro(index,$scope.departamento[index]);
                      // $scope.buscarAnuncios();
                }else{
                    $scope.buscarAnuncios();
                }
         });
       
     }
     $scope.agregaExperiencia = function () {
        if ($scope.experiencia.empresa != "" && $scope.experiencia.departamento_id != undefined && $scope.experiencia.sector_id != 
                undefined && $scope.experiencia.cargo != "" && $scope.experiencia.area_id != undefined && $scope.experiencia.mes_ini != undefined && 
                $scope.experiencia.anio_ini != undefined && $scope.experiencia.mes_fin != undefined && $scope.experiencia.anio_fin != undefined && $scope.experiencia.funciones != undefined) {
            $scope.experiencia.opcion = 0;
            $scope.experiencias.push($scope.experiencia);
            $scope.experiencia = {};
            $scope.mostraVentanaExperiencia = false;
        }else{
            alert("Llene todos los campos (*)");
        }
        
    };
    $scope.editExperiencia = function (index) {
        $scope.mostraVentanaExperienciaEdit = true;
        for (var i = 0; i < $scope.experiencias.length; i++) {
            $scope.experiencias[i].opcion == 0;
        }
        $scope.experiencias[index].opcion = 1;
        $scope.experiencia = angular.copy($scope.experiencias[index]);
    };    
    $scope.canceleditExperiencia = function (index) {
        //$scope.mostraVentanaExperienciaEdit = false;
        $scope.experiencias[index].opcion = 0;
        $scope.experiencia = {};
    };
    $scope.experieciaDesactive = function () {
        $scope.mostraVentanaExperiencia = false;
        $scope.mostraVentanaExperienciaEdit = false;
        $scope.experiencia={};
    };
    $scope.actualizarExperiencia = function (index) {
        
        if ($scope.experiencia.empresa != "" && $scope.experiencia.departamento_id != undefined && $scope.experiencia.sector_id != 
                undefined && $scope.experiencia.cargo != "" && $scope.experiencia.area_id != undefined && $scope.experiencia.mes_ini != undefined && 
                $scope.experiencia.anio_ini != undefined && $scope.experiencia.mes_fin != undefined && $scope.experiencia.anio_fin != undefined && $scope.experiencia.funciones != undefined) {
            $scope.experiencia.opcion=0;
            $scope.experiencias.splice(index, 1, $scope.experiencia);
            $scope.mostraVentanaExperienciaEdit = false;
        }else{
            alert("Llene todos los campos (*)");
        }
        
    };
    $scope.experieciaActive = function () {
        $scope.mostraVentanaExperiencia = true;
    };
    $scope.deleteExperiencia = function (index) {
        $scope.experiencias.splice(index, 1);
    };
    //=================
    $scope.agregaEstudio = function () {
        if($scope.estudio.centro_educativo != "" && $scope.estudio.nivel_estudio!="" && $scope.estudio.area_id != undefined && $scope.estudio.estado != undefined 
                && $scope.estudio.mes_ini != undefined && $scope.estudio.anio_ini != undefined && $scope.estudio.mes_fin != undefined
                && $scope.estudio.anio_fin != undefined){
                $scope.estudio.opcion = 0;
                $scope.estudios.push($scope.estudio);
                $scope.estudio = {};
                $scope.estudioVentana = false;
        }else{
            alert("Llene todos los campos (*)");
        }
        
    };
    $scope.estudioVentanaEditf = function (index) {
        $scope.estudioVentanaEdit = true;
        for (var i = 0; i < $scope.estudios.length; i++) {
            $scope.estudios[i].opcion == 0;
        }
        $scope.estudios[index].opcion = 1;
        $scope.estudio = angular.copy($scope.estudios[index]);
        //console.log($scope.estudio);
    };
    $scope.cancelestudioVentanaEdit = function (index) {
        $scope.estudios[index].opcion = 0;
        $scope.estudio = {};
    };
    $scope.estudioActive = function () {
        $scope.estudioVentana = true;
    };
    $scope.estudioDesactive = function () {
        $scope.estudioVentana = false;
        $scope.estudio = {};
    };
    $scope.actualizarEstudios = function (index) {
        if($scope.estudio.centro_educativo != "" && $scope.estudio.nivel_estudio!="" && $scope.estudio.area_id != undefined && $scope.estudio.estado != undefined 
                && $scope.estudio.mes_ini != undefined && $scope.estudio.anio_ini != undefined && $scope.estudio.mes_fin != undefined
                && $scope.estudio.anio_fin != undefined){            
                $scope.estudio.opcion = 0;
                $scope.estudios.splice(index, 1, $scope.estudio);
                $scope.estudio = {};
                $scope.estudioVentana = false;
        }else{
            alert("Llene todos los campos (*)");
        }
    };
    $scope.deleteEstudio = function (index) {
        $scope.estudios.splice(index, 1);
    };
    
    //=================
    $scope.anuncio = {};
    
    $scope.agregarIdioma = function () {
      alert("hola");
        if ($scope.idioma.idioma != undefined  && $scope.idioma.nivel_idioma != undefined) {
            $scope.idiomas.push($scope.idioma);
            $scope.idioma = {};
            $scope.idioma.idioma = '';
            $scope.idioma.nivel_idioma = '';
        }else{
            alert("Elija Idioma y Nivel Correctamente");
        }
    };
    $scope.removeIdioma = function (index) {
        $scope.idiomas.splice(index, 1);
    };
    $scope.addPrograma = function () {
        //alert()
        if ($scope.programa.nombre != undefined) {
             $scope.programas.push($scope.programa);
            $scope.programa = {};
            $scope.programa.nombre = undefined;
        }else{
            alert("Elija algun Programa Informatico");
        }
        
    };
    $scope.quitarPrograma = function (index) {
        $scope.programas.splice(index, 1);
    };
    $scope.addConocimiento = function () {
            //alert()
            if ($scope.conocimiento.nombre != undefined && $scope.conocimiento.nombre != "") {
                $scope.conocimientos.push($scope.conocimiento);
                $scope.conocimiento = {};
                $scope.conocimiento.nombre = undefined;
                $scope.conocimiento.nombre = undefined;
            } else {
                alert("Escriba algun Conosimiento");
            }
            ;

        };
        $scope.quitarConocimiento = function (index) {
            $scope.conocimientos.splice(index, 1);
        };

        $scope.file_archivo;

        $scope.uploadFile = function()
                { 
                   // if ($scope.editorialCreateForm.$valid) {
                       // $scope.bandera = true;
                        var file_archivo = $scope.file_archivo;
                        if (file_archivo!=undefined) {
                            crudService.uploadFile('postulante',file_archivo, name).then(function(data)
                            {
                                $scope.postulante.link_foto=data.data;
                                $scope.registrarPostulante();
                            });
                        }else{
                            $scope.postulante.link_foto="";
                            $scope.registrarPostulante();
                        }
                   // }                       
                }


                //trae todos los registros paginados en 15
                $scope.traerAll= function(){
                    crudService.search('publishers_all',0,$scope.currentPage).then(function (data){
                        $scope.publicaciones = data.data;
                        $scope.maxSize = 10;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 5;
                    });
                }
                $scope.registrarPostulante=function(){
                   $scope.allDatos = {
                        postulante: $scope.postulante,
                        perfil: $scope.perfil,
                        experiencia: $scope.experiencias,
                        estudio: $scope.estudios,
                        idioma: $scope.idiomas,
                        programa: $scope.programas,
                        conocimiento: $scope.conocimientos
                    };
                   // console.log($scope.allDatos);
                    crudService.create($scope.allDatos,'postulante').then(function (data){
                         
                            alert("registrado Correctamente");
                         
                      });
                }
	            
                $scope.registerUser=function(){
                    //console.log($scope.user);
                    crudService.create($scope.user,'userPage').then(function (data){
                         
                            alert("registrado Correctamente");
                            $window.location.href='/auth/login';
                         
                      });
                 }
                $scope.registerUserCaselar=function(){
                    $window.location.href='/auth/login';
                }
                $scope.buscarAnunciosDesdePrincipal=function ()
                  {
                    var array = $scope.regionSelected.split('/');
                     $window.location.href='pages/indicadores/'+array[1]+"/"+array[0]+"/"+$scope.palabraBuscada+"/"+array[2];
                  }


            }]) ;

})();
