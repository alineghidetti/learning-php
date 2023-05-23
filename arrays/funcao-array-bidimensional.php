<?php

$pessoas = array ();

//função que adiciona um item no array depois que ele ja está criado
array_push($pessoas, array(
	'nome'=>'Aline',
	'idade'=>19
)); //array alvo, outro array

array_push($pessoas, array(
	'nome'=>'Talles',
	'idade'=>20
)); //array alvo, outro array

print_r($pessoas[0]['nome']);

?>