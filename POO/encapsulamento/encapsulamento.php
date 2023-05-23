<?php

class Pessoa{

	public $nome = "Ian Mckenzie";
	protected $idade = 48; //acessar um protected apenas quem está na classe ou herda dela
	private $senha = "1234";

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}
}

$objeto = new Pessoa();

//echo $objeto->senha . "<br/>";

$objeto->verDados();

?>