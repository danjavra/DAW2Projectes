<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="angular.min.js" type="text/javascript"></script>
       <!-- <script> var app = angular.module('myApp', []); </script> -->
        <script src="controlador.js" type="text/javascript"></script>
        <link href="bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        
    </head>
   

<body ng-app="myApp" ng-controller="controlador" >
Al modificar el input, es modifica la variable asociada en el model:
    <b style="color:{{myCol}}"> {{myCol}}</b>
    <br />
    <input style="background-color:{{myCol}}"   
		ng-model="myCol" 
		value="{{myCol}}" />
    <input ng-model="num" value="{{num}}"/>
    <span ng-click="suma();">Calcula Suma</span>
     <br/> 
     <style>.positiu{color:green;}.negatiu{color:red;}</style>
     <div class="{{tipusValor}}">Resultat {{suma()}}</div>
     <h1 ng-repeat="valor in misValores">{{valor}}</h1>
    
    <!-- <br/> Resultat {{parseInt(num+myCol)}} -->
    <!--
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-3 col-md-12">Columna de 3-12</div>
            <div class="col-xs-9">Columna de 9</div>
            <div class="col-xs-5">Columna de 5</div>
            <div class="col-xs-4">Columna de 4</div>
            
            <div class="col-xs-3">Columna de 3</div>
        </div>
    </div>
    -->
    <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
</body>

    
</html>
