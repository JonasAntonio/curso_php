<?php 

	$pessoas = array();
	array_push($pessoas, array(
		'Nome'=>'Jaum',
		'Idade'=>20
	));

	array_push($pessoas, array(
		'Nome'=>'Tião',
		'Idade'=>25
	));

	print_r($pessoas);

	echo "<br>";

	print_r($pessoas[0]['Nome']);
 ?>