<?php 

	//Comparação
	
	$a = 30;
	$b = 55;

	var_dump($a > $b);

	echo "<br>";

	var_dump($a < $b);

	echo "<br>";

	var_dump($a == $b);//compara se os valores sao iguais, mas nao o tipo (int, float, string, etc)

	echo "<br>";

	var_dump($b == $b);

	echo "<br>";

	var_dump($a === $a);//compara os tipos e os valores

	echo "<br>";

	var_dump($a != $b);//compara apenas os valores

	echo "<br>";

	var_dump($a !== $b);//compara os tipos e os valores

?>