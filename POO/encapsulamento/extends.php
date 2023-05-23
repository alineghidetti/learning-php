<?php

class Pessoa
{

	public $nome = "Ian Mckenzie";
	protected $idade = 48; //acessar um protected apenas quem está na classe ou herda dela
	private $senha = "1234";

	public function verDados()
	{

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}
}

class Programador extends Pessoa //a classe programador extende tudo da classe pessoa, menos o privado 
{
		public function verDados()
	{
		echo get_class($this) . "<br/>";;

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>"; //não funciona
	}

}

$objeto = new Programador();

//echo $objeto->senha . "<br/>";

$objeto->verDados(); //mesmo privado e protegido, dentro da própria classe temos acesso

?>