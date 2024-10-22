<?php

$variavelGlobal = 100;

function exibirVariavelGlobal() {
	global $variavelGlobal;
	echo "Variavel Global: " . $variavelGlobal;
}

exibirVariavelGlobal();
?>