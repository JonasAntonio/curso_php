<?php 

	class Pessoa {
		public $nome;
		
		public function falar(){
			return "O meu nome é " . $this->nome;//Usar $this apenas dentro de métodos
		}
	}

	$pessoa = new Pessoa();
	$pessoa->nome = "Jonas";
	echo $pessoa->falar();

 ?>