<?php 
	/*
	function ola($texto = "Mundo"){
		return "Olá $texto!<br>";
	}

	echo ola("Mundo");
	echo ola("Jonas");
	*/
	function ola($texto = "Mundo", $periodo = "Bom Dia!"){
		return "Olá $texto! $periodo <br> ";
	}

	echo ola();
	echo ola("Jonas", "Boa Noite!");
 ?>