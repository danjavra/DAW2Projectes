angular.module('myApp',[])
        .controller('controladorPractica1',['$scope',
    function($scope){
        $scope.opcio1 = 1;
        $scope.opcio2 = 2;
        $scope.opcio3 = 3;
        $scope.crearCombinacion=true;
        $scope.validarCombinacion=false;
        $scope.password=[];
        $scope.clicaOpcio=function(numero){
        
        if(numero == 1){
            $scope.opcio1+=1;
            if($scope.opcio1>4){$scope.opcio1=1;}
        }
        if(numero == 2){
            $scope.opcio2+=1;
            if($scope.opcio2>4){$scope.opcio2=1;}
        }
        if (numero == 3){
            $scope.opcio3+=1;
            if($scope.opcio3>4){$scope.opcio3=1;}
        }
    };
      $scope.aceptaCombinacion=function(){
          $scope.crearCombinacion=false;
          $scope.validarCombinacion=true;
          $scope.password=[$scope.opcio1,$scope.opcio2,$scope.opcio3];
          $scope.opcio1=1;$scope.opcio2=1;$scope.opcio3=1;
      };
      $scope.combinaciones=[];
      
      $scope.validaCombinacion=function(){
          var op1check="diferent", op2check="diferent", op3check="diferent";
          if($scope.opcio1===$scope.password[0]){
              op1check="igual";
          } else if ($scope.opcio1===$scope.password[1] || $scope.opcio1 === $scope.password[2]){
              op1check="difpos";
          }
          if($scope.opcio2===$scope.password[1]){
              op2check="igual";
          } else if ($scope.opcio2===$scope.password[0] || $scope.opcio2 === $scope.password[2]){
              op2check="difpos";
          }
          if($scope.opcio3===$scope.password[2]){
              op3check="igual";
          } else if ($scope.opcio3===$scope.password[0] || $scope.opcio3 === $scope.password[1]){
              op3check="difpos";
          }
          var combi = [[$scope.opcio1,op1check],
                       [$scope.opcio2,op2check],
                       [$scope.opcio3,op3check]
          ];
          $scope.combinaciones.push(combi);
          
      };
     } ]);
