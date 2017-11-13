/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


angular.module('myApp',[])
        .controller('controlador',['$scope',
    function($scope){
      $scope.misValores=["primer","segon","tercer"];
      $scope.myCol ="lightblue";
      $scope.num = 2;
      $scope.resul = 0;
      $scope.tipusValor = "positiu";
      $scope.suma = function(){
          $scope.resul=parseInt($scope.myCol)+parseInt($scope.num);
          if($scope.resul<0){
              $scope.tipusValor ="negatiu";
          }else{
              $scope.tipusValor="positiu";
          }
          return $scope.resul;
      };
      
    } ]);