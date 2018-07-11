<?php 

	require_once("config.php");
	/*
	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);
	*/

	/* Carrega um usuario
	$usuario = new Usuario();
	$usuario->loadById(3);

	echo $usuario;
	*/
	/*Carrega uma lista de usuarios
	$listaUsuarios = Usuario::getList();

	echo json_encode($listaUsuarios);
	*/
	/*Carrega uma lista de usuarios buscando pelo login
	$search = Usuario::search("r");
	echo json_encode($search);
	*/
	/*Carrega um usuario pelo login e senha
	$usuario = new Usuario();
	$usuario->login("user", "123456");
	echo $usuario;
	*/
	//Inserção
	$usuario = new Usuario("aluno", "123456");
	$usuario->insert();

	echo $usuario;
 ?>