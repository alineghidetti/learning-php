<?php

//variaveis locais x seção

//seção = são enxergadas em todo código enquanto o usuário está online

//a partir do momento que um usuário entra num site online, uma seção é gerada entre o usuário e o servidor

//cria um arquivo de texto temporário na minha máquina e um arquivo de texto temporário no servidor e amarra essas informações - dura geralmente 20 min

//para falar que usarei session no meu site, utilizo a função:

//session_start();

//defini no config, logo:

require_once("config.php");

$_SESSION["nome"] = "Hcode"; //session é como um array superglobal

//toda pagina que vou usar session precisa do session_start
//posso mudar no servidor? pode. parâmetro session_auto_start mas não é padrão
//*aqruivo configuration

?>