var app=angular.module('myApp', ['ui.router']);
app.config(function($stateProvider, $urlRouterProvider){
   $stateProvider.state('app',{
       url:'/', 
       views:{'top':{templateUrl:'top.html', controller: 'capController'},
              'mid':{templateUrl:'mid.html', controller: 'midController'},
              'bot':{templateUrl:'bot.html', controller: 'botController'}
        }
   });
   $urlRouterProvider.otherwise("/");
});


