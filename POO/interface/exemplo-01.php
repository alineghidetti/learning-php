<?php

interface Veiculo
{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocaMarcha($marcha);

}

//class Civic implements Veiculo {} #pro caso de rodarmos assim, ocorre um fatal erro porque a classe civic tem 3 métodos e não declaramos nenhum.

class Civic implements Veiculo 
{
	public function acelerar($velocidade)
	{

		echo "O veículo acelerou até". $velocidade. "km/h";

	}

	public function frenar($velocidade)
	{

		echo "O veículo frenou até". $velocidade. "km/h";

	}

	public function trocaMarcha($marcha)
	{

		echo "O veículo engatou a marcha ". $marcha;

	}
}

$carro = new Civic();

$carro->trocaMarcha(1);

?>