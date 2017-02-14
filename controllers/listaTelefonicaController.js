angular.module("angularJS").controller("listaTelefonicaController",function($scope, $http, contatosAPI){
	$scope.app = "Lista Telefonica";
	$scope.contatos = [];
	$scope.operadoras=["Vivo","Tim","Claro","Oi"];
	$scope.data = [];
	$scope.editar = false;
 	$scope.direcaoDaOrdenacao = true;

 	// TESTE DE PERFORMANCE DA CONTROLLER - VERIFICANDO CASO TENHA QUEDA DE DESEMPENHO EM ALGUMA FUNÇÃO, QUE PODE OU NÃO SER CHAMADA MAIS DE UMA VEZ SEM NECESSIDADE
 	// var counter = 0;
	// counter ++;
	// console.log(counter);

	// Função para carregar os contatos.
	var carregarContatos = function(){
	    contatosAPI.listContatos().then(function(data) {
	      $scope.contatos = data.data;
	    });
	};

	// Função para adicionar novos contatos.
	$scope.adicionarContato = function(contato){
	    contatosAPI.saveContatos(contato).then(function() {
			delete $scope.contato;
			$scope.contatoForm.$setPristine();
			carregarContatos();
	    });
	};

	// Função para criar novos contatos.
	$scope.deletarContato=function(contato){
		var deletar = confirm("Você realmente quer deletar este contato?");

		if (deletar == true){
		    contatosAPI.deleteContatos(contato).then(function() {
		    	carregarContatos();
		    });
			alert("Contato excluído com sucesso!");			
		}
	};

	// Função para salvar edições feitas em algum contato.
	$scope.atualizarContato=function(contato){
		var editar = confirm("Você deseja salvar esta alteração?");

		if (editar == true){
		    contatosAPI.updateContatos(contato).then(function() {
				carregarContatos();
		    });
			alert("Você alterou este contato!");			
		}
		else{
			cancelarEdicao();
		}
	};

	// Função para pegar o contato para a edição.
	// Seta também a variável "editar" para que o botão de salvar alteração possa ser chamado.
	$scope.editarContato=function(contato){
	    $scope.contato = contato;
	    $scope.editar = true;
	};
	// Cancela a edição, limpa a variável contato e também zera a variável editar. Para que volte o botão de novo contato.
	$scope.cancelarEdicao=function(contato){
	    delete $scope.contato;
	    $scope.editar = false;
 	};

 	// Função de ordenação da tabela.
	$scope.ordenarPor = function(campo){
		$scope.criterioDeOrdenacao = campo;
		$scope.direcaoDaOrdenacao = !$scope.direcaoDaOrdenacao;
	}
	carregarContatos();
});
