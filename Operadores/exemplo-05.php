<?php 

	//Spaceship
	
	$a = 50;
	$b = 35;

	var_dump($a <=> $b);//recurso do PHP 7
	//se "a" for maior retorna 1
	//se "a" for igual a "b" retorna 0
	//se "b" for maior retorna -1
	var_dump($a <=> $a);
	var_dump($b <=> $a); 

?>