<?php

//javascript object notation


$pessoas = array ();
//array push --> função de array que adiciona itens depois que um array já está criado
array_push($pessoas, array(
	'nome'=>'Aline',
	'idade'=>19
));

array_push($pessoas, array(
	'nome'=>'Talles',
	'idade'=>20
));

echo json_encode($pessoas);

//padrao JSON 
//[{"nome":"Aline","idade":19},{"nome":"Talles","idade":20}]
?>