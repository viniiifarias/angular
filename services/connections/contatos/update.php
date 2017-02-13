<?
	$sucesso = 0;
	$con = mysql_connect("localhost","root","")
	or die("Não foi possivel se conectar ao banco");
	$banco = mysql_select_db("angular", $con);

	header('Content-Type: application/json');

    $data 	            = json_decode(file_get_contents("php://input")); 
    $operadora          = $data->operadora;
    $id                 = $data->id; 
    $nome               = $data->nome; 
    $telefone           = $data->telefone; 
    $data               = $data->data; 

    $sql = "UPDATE persons SET nome='$nome', telefone='$telefone', operadora='$operadora', data='$data' WHERE id='$id'";
    $resultado = mysql_query($sql);

?>