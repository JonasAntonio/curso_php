<?php 

	spl_autoload_register(function($nameClass){

		var_dump($nameClass);

		$dirClass = "class";
		$filename = $dirClass.DIRECTORY_SEPARATOR.$nameClass.".php";//caminho até o arquivo

		if(file_exists($filename)){//===true
			require_once($filename);
		} 

	});

 ?>