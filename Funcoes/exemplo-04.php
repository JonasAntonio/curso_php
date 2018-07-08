<?php 

	function ola(){

		$argumentos = func_get_args();

		return $argumentos;
	}

	var_dump(ola("Bom dia", "Boa tarde", "Boa noite", 1, 1.1));

 ?>