<?php

class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c){

		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	public function __destruct(){//usa-se para matar algumas variaveis, se desconectar de um banco de dados ou quando termina um registro
		//var_dump("DESTRUIR");
	}

	//outro método além do __destruct 

	public function __toString(){

		return $this->logradouro.", ".$this->logradouro.", ".$this->cidade;
	}
}

$meuEndereco = new Endereco("Rua Ademar Saraiva Leao","123", "Santos");

//var_dump($meuEndereco);

//unset($meuEndereco);

echo $meuEndereco;

?>