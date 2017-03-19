(function () {
    'use strict';

    angular
        .module('app')
        .factory('PrincipalService', UserService);

    UserService.$inject = ['$http','$timeout', '$filter', '$q','$log'];
    function PrincipalService($http,$timeout, $filter, $q,$log) {

        var service = {};

        service.GetAll = GetAll;
        service.GetById = GetById;
        service.GetByUsername = GetByUsername;
        service.Create = Create;
        service.Update = Update;
        service.Delete = Delete;
        service.listarAnuncios=listarAnuncios;
        service.departamentos=departamentos;

        return service;

        function GetAll() {
            var deferred = $q.defer();
            deferred.resolve(getUsers());
            return deferred.promise;
        }

        function GetById(id) {
            var deferred = $q.defer();
            var filtered = $filter('filter')(getUsers(), { id: id });
            var user = filtered.length ? filtered[0] : null;
            deferred.resolve(user);
            return deferred.promise;
        }

        function GetByUsername(username) {
            var deferred = $q.defer();
            
            
            $http.get('http://localhost/cyl/registro/login/php/login.php/?a=userByname&username=' + username).then(function(r){
                    
                  deferred.resolve(r.data);
               });
            return deferred.promise;
        }
        function listarAnuncios() {
            var deferred = $q.defer();
            //alert("hola");
            
            $http.get('http://localhost/cyl/registro/login/php/anuncio.php/?a=listar' ).then(function(r){
                    
                  deferred.resolve(r.data);
                  //$log.log(r.data);
               });
            return deferred.promise;
        }
        function departamentos() {
            var deferred = $q.defer();
            
            
            $http.get('http://localhost/cyl/registro/login/php/anuncio.php/?a=departamentos' ).then(function(r){
                    
                  deferred.resolve(r.data);
                  //$log.log(r.data);
               });
            return deferred.promise;
        }
        function Create(user) {
            var deferred = $q.defer();
            //alert("hola");
            // simulate api call with $timeout
             $http.post('http://localhost/cyl/registro/login/php/login.php/?a=registrar', user).then(function(r){            
                //alert("registrado Correctamente!!");  
                deferred.resolve({ success: true });         
           
            });

            return deferred.promise;
        }

       

        // private functions

        

    }
})();