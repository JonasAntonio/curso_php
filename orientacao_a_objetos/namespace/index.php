<?php 

	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Jonas");
	$cad->setEmail("Email");
	$cad->setSenha("123456");

	$cad->registrarVenda();

	//echo $cad;

 ?>