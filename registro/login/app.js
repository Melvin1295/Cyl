(function () {
    'use strict';

    angular
        .module('app', ['ngRoute', 'ngCookies','ngAnimate','ui.bootstrap'])
        .config(config)
        .run(run);

    config.$inject = ['$routeProvider', '$locationProvider'];
    function config($routeProvider, $locationProvider) {
        $routeProvider
            .when('/', {
                controller: 'HomeController',
                templateUrl: 'home/buscar.view.html',
                controllerAs: 'vm'
            })
             .when('/buscar', {
                controller: 'HomeController',
                templateUrl: 'home/index.view.html',
                controllerAs: 'vm'
            })
            .when('/empresa/registro', {
                controller: 'EmpresaController',
                templateUrl: 'empresa/registro.view.html',
                controllerAs: 'vm'
            })
            .when('/empresa/list', {
                controller: 'EmpresaController',
                templateUrl: 'empresa/lista.view.html',
                controllerAs: 'vm'
            })
            .when('/postulante/create', {
                controller: 'PostulanteController',
                templateUrl: 'postulante/registro.view.html',
                controllerAs: 'vm'
            })
            .when('/listaPostulantes/:id', {
                controller: 'EmpresaController',
                templateUrl: 'empresa/listPostulante.view.html',
                controllerAs: 'vm'
              })
            .when('/empresa/registro/anuncio', {
                controller: 'EmpresaController',
                templateUrl: 'empresa/registroAnuncio.view.html',
                controllerAs: 'vm'
            })
            .when('/login', {
                controller: 'LoginController',
                templateUrl: 'login/login.view.html',
                controllerAs: 'vm'
            })

            .when('/register', {
                controller: 'RegisterController',
                templateUrl: 'register/register.view.html',
                controllerAs: 'vm'
            })

            .otherwise({ redirectTo: '/login' });
    }

    run.$inject = ['$rootScope', '$location', '$cookies', '$http'];
    function run($rootScope, $location, $cookies, $http) {
        // keep user logged in after page refresh
        $rootScope.globals = $cookies.getObject('globals') || {};
        if ($rootScope.globals.currentUser) {
            $http.defaults.headers.common['Authorization'] = 'Basic ' + $rootScope.globals.currentUser.authdata;
        }

        $rootScope.$on('$locationChangeStart', function (event, next, current) {
            // redirect to login page if not logged in and trying to access a restricted page
            var restrictedPage = $.inArray($location.path(), ['/login', '/register']) === -1;
            var loggedIn = $rootScope.globals.currentUser;
            if (restrictedPage && !loggedIn) {
                $location.path('/login');
            }
        });
    }

})();