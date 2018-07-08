<?php
	
	//Tipos basicos
	$nome = "Jonas";
	$site = 'www.jaum.com';
	$ano = 1998;
	$salario = 5500.99;
	$bloqueado = false;
	/////////////////////////////

	//Tipos compostos
	$frutas = array("abacaxi", "laranja", "manga");
	echo $frutas[2];

	echo "<br/>";

	$nascimento = new DateTime();
	var_dump($nascimento);
	echo "<br/>";
	/////////////////////////////

	//Tipos Especiais
	$arquivo = fopen("exemplo_03.php", "r");
	var_dump($arquivo);
	
	echo "<br/>";
	
	$nulo = NULL;
	/////////////////////////////


?>