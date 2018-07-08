<?php 

	//include "inc/exemplo-01.php";//possui mais recursos e tenta funcionar mesmo que o arquivo nao exista nesse caminho informado, assim, ele busca no diretorio padrao definido pelo arquivo - include path é usado para projetos de intranet. o include permite trazer arquivos de outro domínio, o que não é tão seguro
	require_once "inc/exemplo-01.php";//obriga que o arquivo exista e que esteja funcionando corretamente
	require_once "inc/exemplo-01.php";//require_once ignora a segunda chamada o arquivo

	$resultado = somar(10,20);

	echo $resultado;


 ?>