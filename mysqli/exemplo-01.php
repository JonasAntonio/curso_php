<?php 

	$conn = new mysqli("localhost", "root", "", "dbphp7");
						//servidor, usuario, senha, banco
	if($conn->connect_error){
		echo "Erro: ".$conn->connect_error();
		exit;
	}

	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

	$stmt->bind_param("ss", $login, $pass);//define os tipos de dados dos VALUES
	$login = "user";
	$pass = "123456";

	$stmt->execute();

	$login = "root";
	$pass = "654321";

	$stmt->execute();

 ?>