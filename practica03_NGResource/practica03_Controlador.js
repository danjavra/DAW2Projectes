app.controller('PokemonController'
, ['$scope','PokemonService'
, function ($scope,PokemonService){
    PokemonService
            .getSaludo().get().$promise.then(
              function(resposta){
                  $scope.saludo=resposta.players[0].texto;
                  $scope.edad=resposta.players[0].edad;
                  $scope.players = resposta.players;
              },function(resposta){
                  
              });
              $scope.addNewPoke = function(){
                  var info={"texto":"Saludo3","edad":"48"};
                  PokemonService.getSaludo().put({},info).$promise.then(
                          function(response){},
                          function(response){}
                          );
              };
}]);


/* app.controller('MyCtrl', ['$scope', 'MyServ',
 function ($scope, MyServ) {
 //consultaAjax() crea la consulta, i .get() genera la consulta canviant :id per Bulbasur
 MyServ.consultaAjax().get({id: "Bulbasaur"}); //consulta a: resp.php/pokem/Bulbasur
 //les dades les enviem en jSON com segon parametre de la accio
 var newPoke = {nombre: 'Pikachu', tipo: ["electrico"], evolucion: 'Raichu'};
MyServ.consultaAjax().update({id: 2}, newPoke).$promise.then(
 function (response) { //$promis.then() permet executar un codi al rebre la resposta
 console.log(response);
 $scope.pokemons=response;
 },
 function (response) {
 $scope.messError= "Error: " + response.status + " " + response.statusText;
 });
 }]); */