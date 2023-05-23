<?php

class Documento{

	private $numero;

	public function getNumero()
	{
		return $this->numero;
	}

	public function setNumero($n)
	{
		$this->numero = $n;
	}

}

class CPF extends Documento {

	public function validar():bool
	{
		$numeroCPF = $this->getNumero();

		//validação CPF

		return true; //só pra simular


	}
}

$doc = new CPF();

$doc->setnumero("11122233344");

var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero();

?>