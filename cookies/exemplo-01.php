<?php 

	$data = array(
		"Nome"=>"Jonas Vicente"
	);

	setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

	echo "Cookie criado!";


 ?>