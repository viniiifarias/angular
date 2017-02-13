angular.module("angularJS").factory("contatosAPI", function($http){
	var _listContatos = function(){
		return $http.get("../services/connections/contatos/list.php");
	};
	var _saveContatos = function(contato){
		return $http.post("../services/connections/contatos/save.php", contato);
	};
	var _deleteContatos = function(contato){
		return $http.post("../services/connections/contatos/delete.php", contato);
	};
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