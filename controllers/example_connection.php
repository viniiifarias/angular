<?
	$con = mysql_connect("localhost","root","")
	or die("Não foi possivel se conectar ao banco");
	$banco = mysql_select_db("angular", $con);
	$data = array();
	$sql = ("SELECT * FROM persons");

	$resultado = mysql_query($sql);

	while($linha=mysql_fetch_assoc($resultado)){
		$data[] = $linha;
	}
	return($data)
?>