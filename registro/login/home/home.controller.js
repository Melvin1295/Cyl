(function () {
    'use strict';

    angular
        .module('app')
        .controller('HomeController', HomeController);

    HomeController.$inject = ['UserService', '$rootScope','$scope','$log'];
    function HomeController(UserService, $rootScope,$scope,$log) {
        var vm = this;

        $scope.user = null;
        $scope.anuncios =[];
        $scope.depart=[];
        $scope.profesiones=[];
        $scope.filtros=[];
        vm.allUsers = [];
        vm.deleteUser = deleteUser;

        initController();

        function initController() {
            loadCurrentUser();
            loadAllUsers();
            listarAnuncios();
            departamentos();
            profesiones();
        }

        function loadCurrentUser() {
            UserService.GetByUsername($rootScope.globals.currentUser.username)
                .then(function (user) {
                  // $log.log(user);
                  // alert("hola"+user.nombres);
                    $scope.user = user;
                });
        }
        function listarAnuncios() {
            UserService.listarAnuncios()
                .then(function (anuncio) {
                  // $log.log(anuncio);
                  //alert("hola"+user.nombres);
                    $scope.anuncios = anuncio;
                });
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