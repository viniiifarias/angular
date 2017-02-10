angular.module("angularJS").controller("listaTelefonicaController",function($scope, $http,contatosAPI){
	$scope.app = "Lista Telefonica";
	$scope.contatos = [];
	$scope.operadoras=[
		{nome: "Oi", codigo:1},
		{nome: "Tim", codigo:2},
		{nome: "Vivo", codigo:3},
		{nome: "Claro", codigo:4},
		{nome: "Algar", codigo:5},
		{nome: "Nextel", codigo:6},
		{nome: "GVT", codigo:7}
	];
	var verContatos = function(){

	};
	$scope.adicionarContato = function(contato){
		$scope.contatos.push(angular.copy(contato));
		delete $scope.contato;
		$scope.contatoForm.$setPristine();
	};
	$scope.apagarContatos=function(contatos){
		$scope.contatos = contatos.filter(function(contato){
			if(!contato.selecionado) return contato;
		});
	};
	$scope.verificarContatoSelecionado=function(contatos){
		$scope.hasContatoSelecionado = contatos.some(function(contato){
			return contato.selecionado;	
		});

	};
	$scope.ordenarPor = function(campo){
		$scope.criterioDeOrdenacao = campo;
		$scope.direcaoDaOrdenacao = !$scope.direcaoDaOrdenacao;
	}

});
