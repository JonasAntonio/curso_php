<?php 

	$frase = "A repetição é a mãe da retenção";

	$palavra = "mãe";

	$q = strpos($frase, $palavra);//posição da string

	$texto = substr($frase, 0,$q);//corta a string

	var_dump($q,$texto);

	$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
	echo "<br>";

	var_dump($texto2);



 ?>