<?php

interface Veiculo
{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocaMarcha($marcha);

}

abstract class Automovel implements Veiculo
{
	public function acelerar($velocidade)
	{

		echo "O veículo acelerou até ". $velocidade. "km/h";

	}

	public function frenar($velocidade)
	{

		echo "O veículo frenou até ". $velocidade. "km/h";

	}

	public function trocaMarcha($marcha)
	{

		echo "O veículo engatou a marcha ". $marcha;

	}
}

?>