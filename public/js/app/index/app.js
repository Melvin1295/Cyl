(function(){
    var app = angular.module('index',[
        'ngRoute',
        //'btford.socket-io',
        'ngSanitize',
        'index.controllers',
        'crud.services',
        'routes',
        'ui.bootstrap'
    ]);
})();