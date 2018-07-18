<?php 
	//ataques de sessão
	session_start();

	//depois de verificar o login e senha, reinicie o id da sessão

	session_destroy();
	session_start();

	session_regenerate_id();

	echo session_id();

 ?>