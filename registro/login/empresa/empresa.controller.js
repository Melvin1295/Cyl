(function () {
    'use strict';

    angular
        .module('app')
        .controller('EmpresaController', EmpresaController);

    EmpresaController.$inject = ['UserService', '$rootScope','$scope','FlashService','$routeParams','$log'];
    function EmpresaController(UserService, $rootScope,$scope,FlashService,$routeParams,$log) {
        var vm = this;

        $scope.user = null;
        $scope.anuncios =[];
        $scope.depart=[];
        $scope.profesiones=[];
        $scope.filtros=[];
        $scope.empresa={};
        $scope.anuncio={};
        vm.allUsers = [];
        vm.deleteUser = deleteUser;
        vm.registerEmpresa=registerEmpresa;
        vm.registerAnuncio=registerAnuncio;

        //alert($routeParams.id);

        initController();

        function initController() {
            loadCurrentUser();
            loadAllUsers();
            listarAnuncios();
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
        function departamentos(){
            UserService.departamentos()
                .then(function (dep) {
                   $log.log(dep);
                  //alert("hola"+user.nombres);
                    $scope.depart = dep;
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