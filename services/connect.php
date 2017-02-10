<?
	$con = mysql_connect("localhost","root","")
	or die("Não foi possivel se conectar ao banco");
	$banco = mysql_select_db("angular", $con);
	$data = array();
	$sql = ("SELECT * FROM persons ORDER BY id ASC");

	$resultado = mysql_query($sql);

	if(mysql_num_rows($resultado) > 0){
		while($linha=mysql_fetch_assoc($resultado)){
			$data[] = $linha;
		}		
	}
	else{
		echo "0 resultados";
	}
	return($data)
?>