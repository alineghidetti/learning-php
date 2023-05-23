<?php

//como recuperar a session?

session_id('g0gai52oq9q0jo6c5b5sul9ik6');

require_once("config.php");

session_regenerate_id(); //gera novamente id de sessão

echo session_id();

echo "<br>";

var_dump($_SESSION);

//na tela de login onde o usuário digita o usuario e senha, chamamos a pgagina de index.php, ela chama o valida.php, NESSE ARQUIVO valida.php ele usa o session_regenerate_id

//gera um novo id mesmo que ja tenha vindo com outro, que mesmo assim ele gera um novo id de seção.

?>