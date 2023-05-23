<?php

//polimorfismo, muito utilizado quando trabalhamos com herança. Imagine um método na classe pai com nome x e um método na classe filho com nome x, que faz outra coisa. Logo, polimorfismo é quando métodos com nomes iguais em classes diferentes(herdadas) com comportamentos diferentes.

class Animal
{
	public function falar()
	{
		return "Som";
	}

	public function mover()
	{
		return "Anda";
	}
}

class Cachorro extends Animal
{
	public function falar()
	{
		return "Late";
	}
}

class Gato extends Animal
{
	public function falar()
	{
		return "Mia";
	}
}

class Passaro extends Animal
{
	public function falar()
	{
		return "Canta";
	}

	public function Mover()
	{
		return "Voa e ". parent::mover();
	}
}

$pluto = new Cachorro();

echo $pluto->falar();
echo "<br/>";
echo $pluto->mover();
echo "<br/>";

echo "-----------------------";
echo "<br/>";

$garfield = new Gato();

echo $garfield->falar();
echo "<br/>";
echo $garfield->mover();
echo "<br/>";

echo "-----------------------";
echo "<br/>";

$piupiu = new Passaro();

echo $piupiu->falar();
echo "<br/>";
echo $piupiu->mover();
echo "<br/>";



?>