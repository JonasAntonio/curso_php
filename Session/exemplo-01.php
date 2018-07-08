<?php 

	//session_start();
	//criando a sessao
	require_once("config.php");

	$_SESSION["nome"] = "Jaum";

	echo "A sessão foi iniciada";
 ?>

 <a href="exemplo-02.php"> Clique aqui para a próxima página</a>