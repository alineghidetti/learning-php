<?php

$conn = new mysqli("localhost","root","", "dbphp7"); //parâmetros = (IP) servidor, usuario, senha

if ($conn->connect_error)
{
	echo "Error: ". $conn->connect_error;
}

//sem prepare

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY idusuarios");

// criei variavel data para converter em json
$data = array();

while ($row = $result->fetch_assoc())
{
	array_push($data, $row);
}

echo json_encode($data);

?>