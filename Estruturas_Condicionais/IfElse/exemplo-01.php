<?php 

	$qualASuaIdade = 30;

	$idadeCrianca = 12;
	$idadeMaior = 18;
	$idadeIdoso = 65;

	if($qualASuaIdade < $idadeCrianca){
		echo "Criança";
	} else if($qualASuaIdade < $idadeMaior){
		echo "Adolescente";
	} else if($qualASuaIdade < $idadeIdoso){
		echo "Adulto";
	} else {
		echo "Idoso";
	}
	//Operador Ternário
	echo "<br>";

	echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

 ?>