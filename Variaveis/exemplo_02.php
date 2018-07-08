<?php

	$nome1 = "Jonas";

	$sobrenome = "Vicente";

	/*concatenação
	$nomeCompleto = $nome1 . " " . $sobrenome;

	echo $nomeCompleto;

	exit;
	*/
	
	echo $nome1;

	echo "<br/>";

	unset($nome1); // exclui a variavel

	if(isset($nome1)){ // verifica se a variavel existe
		echo $nome1;
	}

	
?>