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

	class Programador extends Pessoa{
		public function verDados(){
			echo get_class($this)."<br>";

			echo $this->nome."<br>";
			echo $this->idade."<br>";
			echo $this->senha."<br>";//não pode ser acessado
		}
	}

	$programador = new Programador();

	$programador->verDados();
 ?>