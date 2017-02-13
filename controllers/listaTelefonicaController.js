angular.module("angularJS").controller("listaTelefonicaController",function($scope, $http, contatosAPI){
	$scope.app = "Lista Telefonica";
	$scope.contatos = [];
	$scope.operadoras=["Vivo","Tim","Claro","Oi"];
	$scope.data = [];
	$scope.editar = false;
	var carregarContatos = function(){
	    contatosAPI.listContatos().then(function(data) {
	      $scope.contatos = data.data;
	    });
	};
	$scope.adicionarContato = function(contato){
	    contatosAPI.saveContatos(contato).then(function() {
			delete $scope.contato;
			$scope.contatoForm.$setPristine();
			carregarContatos();
	    });
	};
	$scope.deletarContato=function(contato){
	    contatosAPI.deleteContatos(contato).then(function() {
	    	carregarContatos();
	    });
	};
	$scope.atualizarContato=function(contato){
	    contatosAPI.updateContatos(contato).then(function() {
			carregarContatos();
	    });
	};
	$scope.editarContato=function(contato){
	    $scope.contato = contato;
	    $scope.editar = true;
	};
	$scope.cancelarEdicao=function(contato){
	    delete $scope.contato;
	    $scope.editar = false;
 	};
	$scope.ordenarPor = function(campo){
		$scope.criterioDeOrdenacao = campo;
		$scope.direcaoDaOrdenacao = !$scope.direcaoDaOrdenacao;
	}
	carregarContatos();
});
