var timeout;
document.onmousemove = function(){
  clearTimeout(timeout);
  timeout = setTimeout(function(){$('.move-mouse').addClass('ativo');}, 60000);
}
var app = angular.module("angularJS", ['ngRoute', 'ui.mask','duScroll']);

app.config(function($routeProvider, $locationProvider){
	$routeProvider.when('/',{
		controller: "inicioController",
		templateUrl: 'views/inicio.php'
	})
	.when('/lista',{
		controller: "listaTelefonicaController",
		templateUrl: 'views/lista.php'
	})
	.otherwise({redirectTo:'/'})  
	$locationProvider.html5Mode(true);
});