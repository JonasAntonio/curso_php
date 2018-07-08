<?php

	session_id('03cd368ae50d6326ac43e199b947fddc');

	require_once("config.php");

	session_regenerate_id();//gera novo id

	echo session_id();

	var_dump($_SESSION);
?>