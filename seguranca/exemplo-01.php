<?php 
	//command injection
	if($_SERVER["REQUEST_METHOD"] === 'POST'){
		$cmd = escapeshellcmd($_POST["cmd"]);//impede comandos externos de executarem
		var_dump($cmd);
		echo "<pre>";
		$comando = system($cmd, $retorno);
		echo "</pre>";
	}
 ?>

 <form method="POST">
 	
 	<input type="text" name="cmd">
 	<button type="submit">Enviar</button>
 </form>