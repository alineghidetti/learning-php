<?php

interface Veiculo
{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocaMarcha($marcha);

}


abstract class Automovel implements Veiculo //não pode instanciar apenas um automovel, uma classe abstrata

//mais uma forma de organização é definir na classe abstrata alguns requisitos que alguns métodos precisam ter

//uma classe vai herdar só de UMA classe abstrata 
//uma classe pode implementar várias interfaces

//a interface só declara que precisa por na classe
//a classe abstrata não, uma vez que defini e extendi da abstrata, não preciso mais chamar os métodos. eles já podem ser utilizados da maneira como foram definidos na classe abstrata.

//por estender a classe abstrata e a classe abstrata e a classe abstrata implementar a interface, a sua classe também está implementando.

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

class DelRey extends Automovel
{
	public function empurrar()
	{}
}

$carro = new Automovel();

$carro->acelerar(200);

?>