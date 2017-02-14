angular.module("angularJS").factory("contatosAPI", function($http){

	// Chama a função de conexão com o banco para listar os contatos.
	var _listContatos = function(){
		return $http.get("../services/connections/contatos/list.php");
	};

	// Chama a função de conexão com o banco para salvar um novo contato.
	var _saveContatos = function(contato){
		return $http.post("../services/connections/contatos/save.php", contato);
	};

	// Chama a função de conexão com o banco para deletar um contato.
	var _deleteContatos = function(contato){
		return $http.post("../services/connections/contatos/delete.php", contato);
	};

	// Chama a função de conexão com o banco para atualizar um contato já criado.
	var _updateContatos = function(contato){
		return $http.post("../services/connections/contatos/update.php", contato);
	};
	return{
		listContatos: _listContatos,
		saveContatos: _saveContatos,
		deleteContatos: _deleteContatos,
		updateContatos: _updateContatos
	}
});