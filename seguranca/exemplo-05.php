<!--XSS-->
<form method="POST">
	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>

<?php 

	if(isset($_POST['busca'])){
		echo strip_tags($_POST['busca']);//impede as tags de serem interpretadas
		echo htmlentities($_POST['busca']);
	}

 ?>