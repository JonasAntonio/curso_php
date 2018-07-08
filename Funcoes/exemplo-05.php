<?php 
	/*
	$a = 10;

	function trocaValor($a){//O que acontece na funcao fica na função

		$a += 50;

		return $a;

	}

	echo trocaValor($a);
	echo "<br>";
	echo $a;//O que acontece na funcao fica na função
	*/

	$a = 10;

	function trocaValor(&$a){//Passagem de parametro por referencia de memoria

		$a += 50;

		return $a;

	}

	echo trocaValor($a);
	echo "<br>";
	echo $a;//O que acontece na funcao fica na função



 ?>