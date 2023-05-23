<?php

function test($callback){ //callback nonrmalmente é usado em processos lentos

	//processo lento

	$callback();

}

test(function(){

	echo "Terminou!";
});


?>