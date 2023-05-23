<?php

echo "<select>";

for ($i=date("Y"); $i > date("Y") - 100 ; $i--){ //processa enquanto o i for menor que o ano atual - 100 { 
	echo '<option value="'.$i.'">'.$i.'</option>';
}

echo "</select>"

?>