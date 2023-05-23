<?php

class Pessoa {

	public $nome; //atributo fora do método

	public function falar(){ //método

		return "O meu nome é ".$this->nome; //atributo dentro do método

	}

}

//criar uma pessoa
$aline = new Pessoa();
$aline->nome = "Aline Ghidetti";
echo $aline->falar();

?>