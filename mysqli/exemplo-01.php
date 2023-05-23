<?php

$conn = new mysqli("localhost","root","", "dbphp7"); //parâmetros = (IP) servidor, usuario, senha

if ($conn->connect_error)
{
	echo "Error: ". $conn->connect_error;
}

$stmt = $conn-> prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)"); //dentro das aspas inserir comando sql que quero aplicar

$stmt-> bind_param("ss", $login, $pass); //ainda não foi pro sql, precisa ser executado

//os dois parametros precisam ser passados por referencia

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "luna";
$pass = "210120";

$stmt->execute();


?>