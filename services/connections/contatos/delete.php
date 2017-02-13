<?
	$sucesso = 0;
	$con = mysql_connect("localhost","root","")
	or die("Não foi possivel se conectar ao banco");
	$banco = mysql_select_db("angular", $con);

	header('Content-Type: application/json');

    $data 	= json_decode(file_get_contents("php://input")); 
    $id     = $data->id; 

    $sql = "DELETE FROM persons WHERE id='$id'";
    $resultado = mysql_query($sql);

?>