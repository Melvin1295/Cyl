(function(){
    angular.module('index.controllers',[])
        .controller('indexController',['$scope', '$routeParams','$location','crudService' ,'$filter','$route','$log',
            function($scope, $routeParams,$location,crudService,$filter,$route,$log){
                alert('Entre Carajo');
            }]);
})();