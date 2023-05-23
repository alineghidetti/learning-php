<?php

class Carro{

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){

		return $this->modelo;

	}

	public function setModelo($modelo){ //parâmetro = quem eu quero mudar
		
		$this->modelo = $modelo; //atributo recebe o valor o parâmetro
		//$this é a representção do objeto

	}

	function getMotor():float{

		return $this->motor;

	}

	public function setMotor($motor){

		$this->motor = $motor;
	}

		function getAno():int{

		return $this->ano;

	}

	public function setAno($ano){

		$this->ano = $ano;
	}

	//método para exibir informações do veículo

	public function exibir(){

		return array(
			'modelo'=>$this->getModelo(),
			'motor'=>$this->getMotor(),
			'ano'=>$this->getAno()
		);
	}

}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

var_dump($gol->exibir());

?>