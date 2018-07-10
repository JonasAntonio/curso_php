<?php 

	class Carro{

		private $modelo;
		private $motor;
		private $ano;

		public function getModelo(){
			return $this->modelo;
		}

		public function setModelo($modelo){
			$this->modelo = $modelo;
		}

		public function getMotor():float{
			return $this->motor;
		}

		public function setMotor($motor){
			$this->motor = $motor;
		}
		public function getAno():int{
			return $this->ano;
		}

		public function setAno($ano){
			$this->ano = $ano;
		}

		public function exibe(){
			return array(
				"modelo"=>$this->getModelo(),
				"motor"=>$this->getMotor(),
				"ano"=>$this->getAno()
			);
		}
	}

	$carro = new Carro();
	$carro->setModelo("Gol");
	$carro->setMotor(1.6);
	$carro->setAno(2018);

	print_r($carro->exibe());
	var_dump($carro->exibe());
 ?>