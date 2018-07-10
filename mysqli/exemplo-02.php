<?php 

	$conn = new mysqli("localhost", "root", "", "dbphp7");
						//servidor, usuario, senha, banco
	if($conn->connect_error){
		echo "Erro: ".$conn->connect_error();
		exit;
	}

	$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$data = array();

	while($row = $result->fetch_array(MYSQLI_ASSOC)){
		array_push($data, $row);
		//var_dump($row);
	}

	echo json_encode($data);

 ?>