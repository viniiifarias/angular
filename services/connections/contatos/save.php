<?
	$sucesso = 0;
	$con = mysql_connect("localhost","root","")
	or die("Não foi possivel se conectar ao banco");
	$banco = mysql_select_db("angular", $con);

	header('Content-Type: application/json');

    $data 				= json_decode(file_get_contents("php://input")); 
    $cliente_novo      	= $data->nome;    
    $telefone_novo     	= $data->telefone;
    $data_novo     		= $data->data;
    $operadora_novo     = $data->operadora;
    log($cliente_novo);
    if($cliente_novo ==""){
    }
    else{
		$sql = ("INSERT INTO persons (nome,telefone,data,operadora) VALUES ('$cliente_novo','$telefone_novo','$data_novo','$operadora_novo')");
    }

	$resultado = mysql_query($sql);
	if(mysql_affected_rows($resultado) > 0){
		$sucesso = $sucesso + 1;

		echo "<script type='text/javascript'>";
			echo "alert('O cliente foi cadastrado com sucesso');";
			echo "location.href('localhost/lista');";
		echo "</script>";
	}
	else{
		echo "<script type='text/javascript'>";
			echo "alert('O cliente não pode ser cadastrado');";
			echo "location.href('localhost/lista');";
		echo "</script>";
	}
?>