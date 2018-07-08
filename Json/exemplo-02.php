<?php 

	$json = '[{"Nome":"Jaum","Idade":20},{"Nome":"Ti\u00e3o","Idade":25}]';

	$data = json_decode($json,true);//sem o true, o array torna-se objeto

	var_dump($data);

 ?>