(function () {
    'use strict';

    angular
        .module('app')
        .controller('PostulanteController', PostulanteController);

    PostulanteController.$inject = ['UserService', '$rootScope','$scope','FlashService','$routeParams','$log'];
    function PostulanteController(UserService, $rootScope,$scope,FlashService,$routeParams,$log) {
        var vm = this;

        $scope.user = null;
        $scope.anuncios =[];
        $scope.tipodoc=[];
        $scope.depart=[];
        $scope.prov=[];
        $scope.dist=[];
        $scope.profesiones=[];
        $scope.filtros=[];
        $scope.empresa={};
        $scope.anuncio={};
        vm.allUsers = [];
        $scope.tipodoc={};
        $scope.depart={};
        $scope.prov={};
        $scope.dist={};
        vm.deleteUser = deleteUser;
        vm.registerEmpresa=registerEmpresa;
        vm.registerAnuncio=registerAnuncio;
        $scope.mostraVentanaExperiencia=false;
        $scope.estudioVentana=false;
        $scope.programa={};
        $scope.programas=[];
        $scope.conocimiento={};
        $scope.conocimientos=[];
        $scope.idioma={};
        $scope.idiomas=[];
        $scope.estudio={};
        $scope.estudios=[];
        $scope.experiencia={};
        $scope.experiencias=[];

        //alert($routeParams.id);

        initController();

        function initController() {
            loadCurrentUser();
            loadAllUsers();
           // listarAnuncios();
            tipo_documento();
            departamento();
            provincia();
            distrito();
        }
        $scope.experieciaActive=function(){
               $scope.mostraVentanaExperiencia=true;
        }
        $scope.experieciaDesactive=function(){
               $scope.mostraVentanaExperiencia=false;
        }
        $scope.estudioActive=function(){
              $scope.estudioVentana=true;
        }
        $scope.estudioDesactive=function(){
              $scope.estudioVentana=false;
        }
        $scope.agregaExperiencia=function(){
            $scope.experiencias.push($scope.experiencia);
            $scope.experiencia={};
            $scope.mostraVentanaExperiencia=false;
        }
        $scope.deleteExperiencia=function(index){
            $scope.experiencias.splice(index,1);
        }
        $scope.agregaEstudio=function(){
             $scope.estudios.push($scope.estudio);
             $scope.estudio={};
             $scope.estudioVentana=false;
        }
        $scope.deleteEstudio=function(index){
             $scope.estudios.splice(index,1);
        }
        $scope.agregarIdioma=function(){
            if($scope.idioma.idioma.length > 2 && $scope.idioma.nivel_idioma.length > 2 ){
              $scope.idiomas.push($scope.idioma); 
              $scope.idioma={};
              $scope.idioma.idioma='';
              $scope.idioma.nivel_idioma='';    
              }   
        }
        $scope.removeIdioma=function(index){
            $scope.idiomas.splice(index,1);
        }
        $scope.addPrograma=function(){
           //alert()
            $scope.programas.push($scope.programa);
            $scope.programa={};
            $scope.programa.nombre='';
        }
        $scope.quitarPrograma=function(index){
            $scope.programas.splice(index,1);
        }
         $scope.addConocimiento=function(){
           //alert()
            $scope.conocimientos.push($scope.conocimiento);
            $scope.conocimiento={};
            $scope.conocimiento.nombre='';
        }
        $scope.quitarConocimiento=function(index){
            $scope.conocimientos.splice(index,1);
        }
        function tipo_documento(){
            UserService.tipo_documento()
                .then(function (tip) {
                   $log.log(tip);
                    $scope.tipodoc = tip;
                });
        }
        function departamento(){
            UserService.departamento()
                .then(function (dep) {
                   $log.log(dep);
                    $scope.depart = dep;
                });
        }
        function provincia(){
            UserService.provincia()
                .then(function (pro) {
                   $log.log(pro);
                    $scope.prov = pro;
                });
        }
        function distrito(){
            UserService.distrito()
                .then(function (dis) {
                   $log.log(dis);
                    $scope.dist = dis;
                });
        }
        function loadCurrentUser() {
            UserService.GetByUsername($rootScope.globals.currentUser.username)
                .then(function (user) {
                  // $log.log(user);
                  // alert("hola"+user.nombres);
                    $scope.user = user;
                });
        }
        function registerEmpresa() {
            vm.dataLoading = true;
            UserService.registrarEmpresa($scope.empresa).then(function (response) {
                    if (response.success) {
                        FlashService.Success('Registration successful', true);
                        //$location.path('/login');
                    } else {
                        FlashService.Error(response.message);
                        vm.dataLoading = false;
                    }
                });
        }
        function registerAnuncio() {
            vm.dataLoading = true;
            UserService.registrarAnuncio($scope.anuncio).then(function (response) {
                    if (response.success) {
                        FlashService.Success('Registration successful', true);
                        $location.path('#!/empresa/list');
                    } else {
                        FlashService.Error(response.message);
                        vm.dataLoading = false;
                    }
                });
        }
        function listarAnuncios() {
            UserService.listarAnuncios()
                .then(function (anuncio) {
                   $log.log(anuncio);
                  //alert("hola"+user.nombres);
                    $scope.anuncios = anuncio;
                    $scope.viewby = 10;
                    $scope.totalItems =   $scope.anuncios.length;
                    $scope.currentPage = 20;
                    $scope.itemsPerPage = 10;
                    $scope.maxSize = 15; 
                    $scope.setItemsPerPage(10);
                });
        }
        $scope.setPage = function (pageNo) {
           
            $scope.currentPage = pageNo;
          };

          $scope.pageChanged = function() {
            console.log('Page changed to: ' + $scope.currentPage);
          };
  
        $scope.setItemsPerPage = function(num) {
          
          $scope.itemsPerPage = num;
          $scope.currentPage = 1; //reset to first paghe
        }
        $scope.filtrar=function(row,index){           
            $scope.filtros.push(row);
            $scope.depart.splice(index,1);
        }
        $scope.quitar=function(row,index){         
            $scope.depart.push(row);
            $scope.filtros.splice(index,1);
        }
        function tipo_documento(){
            UserService.tipo_documento()
                .then(function (tip) {
                   $log.log(tip);
                  //alert("hola"+user.nombres);
                    $scope.tipodoc = tip;
                });
        }
        function departamento(){
            UserService.departamento()
                .then(function (dep) {
                   $log.log(dep);
                  //alert("hola"+user.nombres);
                    $scope.depart = dep;
                });
        }
        function provincia(){
            UserService.provincia()
                .then(function (pro) {
                   $log.log(pro);
                  //alert("hola"+user.nombres);
                    $scope.prov = pro;
                });
        }
        function distrito(){
            UserService.distrito()
                .then(function (dis) {
                   $log.log(dis);
                  //alert("hola"+user.nombres);
                    $scope.dist = dis;
                });
        }
        function profesiones(){
            UserService.profesiones()
                .then(function (profesion) {
                   $log.log(profesion);
                  //alert("hola"+user.nombres);
                    $scope.profesiones = profesion;
                });
        }
        function loadAllUsers() {
            UserService.GetAll()
                .then(function (users) {
                    vm.allUsers = users;
                });
        }

        function deleteUser(id) {
            UserService.Delete(id)
            .then(function () {
                loadAllUsers();
            });
        }
    }

})();