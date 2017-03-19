﻿(function () {
    'use strict';

    angular
        .module('app')
        .factory('UserService', UserService);

    UserService.$inject = ['$http','$timeout', '$filter', '$q','$log'];
    function UserService($http,$timeout, $filter, $q,$log) {

        var service = {};

        service.GetAll = GetAll;
        service.GetById = GetById;
        service.GetByUsername = GetByUsername;
        service.Create = Create;
        service.Update = Update;
        service.Delete = Delete;
        service.listarAnuncios=listarAnuncios;
        service.tipo_documento=tipo_documento;
        service.departamento=departamento;
        service.provincia=provincia;
        service.distrito=distrito;
        service.profesiones=profesiones;
        service.registrarEmpresa=registrarEmpresa;
        service.registrarAnuncio=registrarAnuncio;

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
        function tipo_documento() {
            var deferred = $q.defer();
                        
            $http.get('http://localhost/cyl/registro/login/php/empresa.php/?a=tipo_documento' ).then(function(r){
                    
                  deferred.resolve(r.data);
                  //$log.log(r.data);
               });
            return deferred.promise;
        }
        function departamento() {
            var deferred = $q.defer();
                        
            $http.get('http://localhost/cyl/registro/login/php/anuncio.php/?a=departamento' ).then(function(r){
                    
                  deferred.resolve(r.data);
                  //$log.log(r.data);
               });
            return deferred.promise;
        }
        function provincia() {
            var deferred = $q.defer();
                        
            $http.get('http://localhost/cyl/registro/login/php/empresa.php/?a=provincia' ).then(function(r){
                    
                  deferred.resolve(r.data);
                  //$log.log(r.data);
               });
            return deferred.promise;
        }
        function distrito() {
            var deferred = $q.defer();
                        
            $http.get('http://localhost/cyl/registro/login/php/empresa.php/?a=distrito' ).then(function(r){
                    
                  deferred.resolve(r.data);
                  //$log.log(r.data);
               });
            return deferred.promise;
        }
        function profesiones() {
            var deferred = $q.defer();
            
            
            $http.get('http://localhost/cyl/registro/login/php/anuncio.php/?a=profesion' ).then(function(r){
                    
                  deferred.resolve(r.data);
                  //$log.log(r.data);
               });
            return deferred.promise;
        }
        function registrarEmpresa(model){     
                var deferred = $q.defer();
                $http.post('http://localhost/cyl/registro/login/php/empresa.php/?a=registrarEmpresa', model).then(function(r){            
                         deferred.resolve({ success: true });        
                });
                return deferred.promise;
        }
        function registrarAnuncio(model){     
                var deferred = $q.defer();
                $http.post('http://localhost/cyl/registro/login/php/empresa.php/?a=registrarAnuncio', model).then(function(r){            
                         deferred.resolve({ success: true });        
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

        function Update(user) {
            var deferred = $q.defer();

            var users = getUsers();
            for (var i = 0; i < users.length; i++) {
                if (users[i].id === user.id) {
                    users[i] = user;
                    break;
                }
            }
            setUsers(users);
            deferred.resolve();

            return deferred.promise;
        }

        function Delete(id) {
            var deferred = $q.defer();

            var users = getUsers();
            for (var i = 0; i < users.length; i++) {
                var user = users[i];
                if (user.id === id) {
                    users.splice(i, 1);
                    break;
                }
            }
            setUsers(users);
            deferred.resolve();

            return deferred.promise;
        }

        // private functions

        function getUsers() {
            if(!localStorage.users){
                localStorage.users = JSON.stringify([]);
            }

            return JSON.parse(localStorage.users);
        }

        function setUsers(users) {
            localStorage.users = JSON.stringify(users);
        }
    }
})();