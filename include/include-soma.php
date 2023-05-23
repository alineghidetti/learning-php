<?php
 
//include "inc/funcao-soma.php"; //copia o arquivo inteiro e coloca nesta linha

require_once "inc/funcao-soma.php"; //copia o arquivo inteiro e coloca nesta linha
require_once "inc/funcao-soma.php"; //fatal error chamando duas vezes, usamos require_once

//include x require

//require obriga que o arquivo incluso exista e funcione corretamente, senão ele gera um erro fatal

//o include tenta funcionar mesmo que o arquivo não exista ou esteja com algum problema. além de possuir mais recursos como o diretório include path que permite que o include traga arquivos direto de lá.

//include path por padrão é configurado no php no arquivo de configuração pgp ine. se eu colocar include funções.php ele procura na pasta se tem. se não tiver ele procura no diretório padrão do php e procura a função.

$resultado = somar(10, 20);

echo $resultado;

//include remoto: permite trazer recurso de um site mas é perigoso

//a partir do php7 error fatais não interrompem mais a execução da pagina, eles geram uma exceção
?>


