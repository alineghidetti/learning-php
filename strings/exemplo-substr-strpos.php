<?php

$name = "Hcode Treinamentos";

$replace = 'Cursos';

$new_name = substr($name, 0, strpos($name, "T")) . $replace;

echo $new_name;

?>