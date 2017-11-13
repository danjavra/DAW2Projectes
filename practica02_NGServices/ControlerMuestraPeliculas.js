app.controller('MuestraPeliculas',['$scope','PeliculasService'
        ,function($scope,PeliculasService){
            $scope.actoresControler = PeliculasService.actores;
            $scope.peliculasControler = PeliculasService.getPeliculas();
            
            console.log($scope.peliculasControler);
            
    }]);
