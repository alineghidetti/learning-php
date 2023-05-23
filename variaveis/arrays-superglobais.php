<?php

//variaveis pre definidas - arrays super globais
//sao variaveis internas do php que ja vem com alguns recursos

$nome = (int)$_GET["a"];

//var_dump($nome);

//como pegar o IP do usuario

$ip = $_SERVER["REMOTE_ADDR"]; //pega informações do ambiente

$nomeArquivo = $_SERVER["SCRIPT_NAME"]; //pega informações do arquivo

echo $nomeArquivo;

?>