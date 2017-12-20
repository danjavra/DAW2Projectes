var app=angular.module('myApp', ['ui.router']);
app.config(function($stateProvider, $urlRouterProvider){
   $stateProvider.state('app',{
       url:'/', 
       views:{'top':{templateUrl:'top.html', controller: 'topController'},
              'mid':{templateUrl:'mid.html', controller: 'midController'},
              'bot':{templateUrl:'bot.html', controller: 'botController'}
        }
   }).state('app.suscritas',{
       url:'suscritas', 
       views:{
           'mid@':{templateUrl:"listasSuscritas.html", controller:"topController"},
           'bot@':{templateUrl:"botListasSuscritas.html", controller:"topController"}
       }
   });
   $urlRouterProvider.otherwise("/");
});


