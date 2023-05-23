<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

//consulta simples

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuarios");

$stmt->execute();
 
$results = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchall já fatia todas as linhas

echo json_encode($results);

?>