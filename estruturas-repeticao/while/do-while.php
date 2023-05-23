<?php

$total = 190;
$desconto = 0.9;

do {

	$total *= $desconto;
} while ($total>100); 

//no caso do do while ele executa pelo menos UMA VEZ mesmo a condição sendo falsa

echo $total;



?>