<?php

$json = '[{"nome":"Aline","idade":19},{"nome":"Talles","idade":20}]';

$data = json_decode($json, true); //para fazer array adidionamos o parâmetro true, se não ele joga como objeto

var_dump($data);

?>