<div class="jumbotron">
	<div class="container">
		<h3>{{app}}</h3>
		<input type="text" placeholder="O que você está buscando?" ng-model="criterioDeBusca" ng-model-options="{updateOn: 'default blur',debounce:{default: 500, blur: 0}}" class="form-control" >
		<table class="table table-striped" ng-init="carregarContatos()">
			<tr>
				<td></td>
				<td><a href="" ng-click="ordenarPor('nome')"><h3>Nome</h3></a></td>
				<td><a href="" ng-click="ordenarPor('telefone')"><h3>Telefone</h3></a></td>
				<td><a href="" ng-click="ordenarPor('aniversario')"><h3>Anivesário</h3></a></td>
				<td><a href="" ng-click="ordenarPor('operadora')"><h3>Operadora</h3></a></td>
			</tr>
			<tr ng-class="{selecionado: contato.selecionado} " ng-repeat="contato in contatos | filter: criterioDeBusca | orderBy:criterioDeOrdenacao:direcaoDaOrdenacao">
				<td><input ng-click="verificarContatoSelecionado(contatos)" class="form-control" type="checkbox" ng-model="contato.selecionado"></td>
				<td><p>{{::contato.nome}}</p></td>
				<td><p>{{::contato.telefone}}</p></td>
				<td><p>{{::contato.data}}</p></td>
				<td><p>{{::contato.operadora.nome}}</p></td>
			</tr>
		</table>
		<h3>Entre com um usuário</h3>
		<form action="" name="contatoForm">
			<div ng-class="{'has-error': contatoForm.nome.$error.required && contatoForm.nome.$dirty, 'has-success': !contatoForm.nome.$error.required}">
				<input placeholder="Digite o nome" name="nome" class="form-control" type="text" ng-model="contato.nome" ng-required="true">
			</div>
			<div ng-class="{'has-error': contatoForm.telefone.$error.required && contatoForm.telefone.$dirty, 'has-success': !contatoForm.telefone.$error.required}">
				<input placeholder="Digite o telefone" ui-mask="(99) 9?9999-9999" model-view-value="true" ui-mask-placeholder ui-mask-placeholder-char="_" name="telefone" class="form-control" type="text" ng-model="contato.telefone" ng-required="true">
			</div>
			<div ng-class="{'has-error': contatoForm.data.$error.required && contatoForm.data.$dirty, 'has-success': !contatoForm.data.$error.required}"">
				<input placeholder="Digite a data" ui-mask="99/99/9999" model-view-value="true" ui-mask-placeholder ui-mask-placeholder-char="_" name="data" class="form-control" type="text" ng-model="contato.data" ng-required="true">
			</div>
			<div ng-class="{'has-success': !contatoForm.operadora.$error.required}">
				<select class="form-control" name="operadora" id="" ng-model="contato.operadora" ng-options="operadora.nome for operadora in operadoras | orderBy: 'nome'" ng-required="true">
					<option value="" selected="" disabled="">Selecione uma operadora</option>
				</select>
			</div>
			<button class="btn btn-info btn-block" ng-click="adicionarContato(contato)" ng-disabled="contatoForm.$invalid">Adicionar Contato</button>
			<button class="btn btn-warning btn-block" ng-click="apagarContatos(contatos)" ng-if="hasContatoSelecionado">Apagar Contato</button>

			<a href="/" class="btn btn-success btn-block">Voltar para a home</a>
		</form>
	</div>
</div>

