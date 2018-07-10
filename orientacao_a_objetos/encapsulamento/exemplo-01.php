<?php 
//encapsulamento
	class Pessoa{
		public $nome = "Jonas";
		protected $idade = 20;
		private $senha = "123456";

		public function verDados(){
			echo $this->nome."<br>";
			echo $this->idade."<br>";
			echo $this->senha."<br>";
		}

	}	

	$pessoa = new Pessoa();

	$pessoa->verDados();//métodos da classe conseguem visualizar atributos protegidos e privados
	/*
	echo $pessoa->nome."<br>";//publico
	echo $pessoa->idade."<br>";//protegido
	echo $pessoa->senha."<br>";//privado
	*/
 ?>