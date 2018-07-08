<?php 

	function soma(int ...$valores){//não é necessário passar o tipo

		return array_sum($valores);

	}

	echo soma(2,2);
	echo "<br>";

	echo soma(25,33);
	echo "<br>";

	echo soma(100.1,1.5);//ignora depois do ponto pois o tipo é int
	echo "<br>";
 ?>