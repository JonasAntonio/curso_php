<?php 
	//sql injection
/*
	$id = (isset($_GET["id"]))?$_GET["id"]:3;
	$conn = mysqli_connect("localhost", "root", "", "dbphp7");

	$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

	$exec = mysqli_query($conn, $sql);

	while($resultado = mysqli_fetch_object($exec)){
		echo $resultado->deslogin."<br>";
		var_dump($resultado);
	}
	//url: http://localhost/php/seguranca/exemplo-02.php?id=4 OR 1 = 1 --
	*/
	$id = (isset($_GET["id"]))?$_GET["id"]:3;

	if(!is_numeric($id) || strlen($id) > 5) exit("Pegamos você!");

	$conn = mysqli_connect("localhost", "root", "", "dbphp7");

	$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

	$exec = mysqli_query($conn, $sql);

	while($resultado = mysqli_fetch_object($exec)){
		//echo $resultado->deslogin."<br>";
		var_dump($resultado);
	}
 ?>