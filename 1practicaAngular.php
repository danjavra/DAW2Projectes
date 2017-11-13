<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="angular.min.js" type="text/javascript"></script>
        <script src="controladorPractica1.js" type="text/javascript"></script>
        <link href="practica01.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <body ng-app="myApp" ng-controller="controladorPractica1">
            <article id="exercici01" ng-if="crearCombinacion">
                <h1>CREA LA COMBINACION</h1>
                <div class="combinacion">
                    <div class="valor{{opcio1}}" ng-click="clicaOpcio(1)"></div>
                    <div class="valor{{opcio2}}" ng-click="clicaOpcio(2)"></div>
                    <div class="valor{{opcio3}}" ng-click="clicaOpcio(3)"></div>
                    <button ng-click="aceptaCombinacion();">ACEPTA</button>
                </div>
            </article>    
            <article id="exercici01" ng-if="validarCombinacion">
                <h1>VALIDA LA COMBINACION</h1>
                <div class="combinacion">
                    <div class="valor{{opcio1}}" ng-click="clicaOpcio(1)"></div>
                    <div class="valor{{opcio2}}" ng-click="clicaOpcio(2)"></div>
                    <div class="valor{{opcio3}}" ng-click="clicaOpcio(3)"></div>
                    <button ng-click="validaCombinacion();">ACEPTA</button>
                </div>
            </article> 
            <article>
                <h1>COMBINACIONES</h1>
                <section ng-repeat="combinacion in combinaciones track by $index">
                    <div class="combinacion">
                        <div class="valor{{combinacion[0][0]}} {{combinacion[0][1]}}"></div>
                        <div class="valor{{combinacion[1][0]}} {{combinacion[1][1]}}"></div>
                        <div class="valor{{combinacion[2][0]}} {{combinacion[2][1]}}"></div>
                    </div>
                </section>
            </article>
        <?php
        // put your code here
        ?>
    </body>
</html>
