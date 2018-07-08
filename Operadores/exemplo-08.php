<?php 

	//Prioridade
	$resultado = 10 + 3 / 2;
	echo $resultado;
	echo "<br>";
	$resultado1 = (10 + 3) / 2;
	echo $resultado1;
	echo "<br>";

	$resultado2 = (10 + 3) / 2 > 5 && 10 + 5 < 3;
	var_dump($resultado2);
	echo "<br>";

	$resultado3 = (10 + 3) / 2 > 5 || 10 + 5 < 3;
	var_dump($resultado3);

 ?>