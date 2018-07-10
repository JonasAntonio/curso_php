<?php 

	class endereco{
		private $logradouro;
		private $numero;
		private $cidade;

		public function __construct($a, $b, $c){//método mágico implementando um método construtor
			$this->logradouro = $a;
			$this->numero = $b;
			$this->cidade = $c;
		}

		public function __destruct(){//executa quando termina a execução de um código. Remove da memória 
			var_dump("DESTRUIR");
		}

		public function __toString(){
			return $this->logradouro.", ".$this->numero.", ".$this->cidade;
		}
	}

	$endereco = new Endereco("Rua A", "01", "Cidade");//executa o construtor
	var_dump($endereco);
	echo "<br>";
	echo $endereco;//executa o toString 
	echo "<br>";
	unset($endereco);//executa o destruct

 ?>