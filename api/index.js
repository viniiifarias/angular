var http = require ('http');

var contatos = [
	{nome: "Vinicius",telefone:"(61) 99885-4357", data:"27/12/1998"},
	{nome: "Vinicius",telefone:"(61) 99885-4357", data:"27/12/1998"},
	{nome: "Vinicius",telefone:"(61) 99885-4357", data:"27/12/1998"},
	{nome: "Vinicius",telefone:"(61) 99885-4357", data:"27/12/1998"},
	{nome: "Vinicius",telefone:"(61) 99885-4357", data:"27/12/1998"}
]

http.createServer(function (req, res){
	res.addHeader("Access-Control-Allow-Origin", "*");
	res.write(JSON.stringify(contatos));
	res.end();
}).listen(3412);