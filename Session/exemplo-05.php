<?php
	//Funções de sessão
	
	require_once("config.php");

	echo session_save_path();//mostra o caminho que a sessão fica salva
	echo "<br>";
	var_dump(session_status());
	echo "<br>";

	switch(session_status()){
		case PHP_SESSION_DISABLED:
			echo "As sessões estão desabilitadas";
		case PHP_SESSION_NONE:
			echo "As sessões estão habilitadas, mas nenhuma existe";
		case PHP_SESSION_ACTIVE:
			echo "As sessões estão habilitadas";
	}
?>