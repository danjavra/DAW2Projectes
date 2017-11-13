app.controller('ContactosController',
        ['$scope', 'ContactosService',
function ($scope, ContactosService) {
    $scope.nom = ContactosService.elNom;
    ContactosService.ajaxContacto().get().$promise.then(
            function (response) {
                $scope.contactos = response;
            }, function (response) {
                console.log(response.response.status);
            }
    );

        $scope.addContacto = function () {
            var cont = new Contacto();
            cont.nom = $scope.nomNouContacte;
            cont.email = $scope.emailNouContacte;
            //ContactosService.contactos.push(cont);
        };

            }]);