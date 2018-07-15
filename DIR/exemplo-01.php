<?php 

	$name = "images";

	if(!is_dir($name)){//verifica se $name não é um diretório
		mkdir($name);//cria o diretorio caso não exista
		echo "Diretório '$name' criado com sucesso!";
	} else {
		rmdir($name);//Remove o diretorio
		echo "Diretório '$name' removido com sucesso!";
	}

 ?>