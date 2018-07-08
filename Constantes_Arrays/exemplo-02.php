<?php

	//Array constante é um recurso do PHP 7

	define("BANCO_DE_DADOS",[
		'127.0.0.1',
		'root',
		'password',
		'test'
		],true);//esse true deixa o nome da constante incensitivel, ou seja, tanto faz se chama-la com letras maiusculas ou minusculas. Não é muito usado.

	print_r(BANCO_DE_DADOS);
	echo "<br>";
	print_r(banco_de_dados);
 ?>