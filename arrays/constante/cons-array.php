<?php

define("BANCO_DE_DADOS", [
	'127.0.0.1',
	'root',
	'password',
	'test'
	]);

print_r(BANCO_DE_DADOS); 

//se eu quiser que a constante seja case insensitive eu coloco true após o colchete e antes do parenteses no definee

//output:
//Array
//(
//    [0] => 127.0.0.1
//    [1] => root
//    [2] => password
//    [3] => test
//)

?>