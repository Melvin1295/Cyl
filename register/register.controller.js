(function () {
    'use strict';

    angular
        .module('app')
        .controller('RegisterController', RegisterController);

    RegisterController.$inject = ['UserService', '$location', '$rootScope', 'FlashService','$log'];
    function RegisterController(UserService, $location, $rootScope, FlashService,$log) {
        var vm = this;

        vm.register = register;

        function register() {
            vm.dataLoading = true;
            vm.user.nombre_completo=vm.user.apellidos+" "+vm.user.nombres;            
            UserService.Create(vm.user)
                .then(function (response) {
                    if (response.success) {
                        FlashService.Success('Registration successful', true);
                        $location.path('/login');
                    } else {
                        FlashService.Error(response.message);
                        vm.dataLoading = false;
                    }
                });
        }

    }

})();
