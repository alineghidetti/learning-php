<?php

for ($i = 0; $i<= 100; $i+=5){ //inicial, até, incremento

	if ($i >= 50 && $i <= 70) continue; // nao imprime do 50 ao 70

	if ($i == 85) break;

	echo $i . "<br>";
}

?>