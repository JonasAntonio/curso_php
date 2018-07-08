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

	echo json_encode($pessoas);
 ?>