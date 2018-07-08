<?php 

	//Comparação de NULL
	$a = NULL;
	$b = NULL;
	$c = 10;

	echo $a ?? $b ?? $c;
	//se "a" for nulo mostre "b", se "b" for nulo mostre "c"
	// ?? é um operador do PHP 7

 ?>