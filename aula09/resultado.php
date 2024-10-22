<!DOCTYPE html>
<html>
	<head>Resultado da conta</head>

<body>
<h1>Resultado da soma</h1>

	<?php
include 'funções.php';

if (isset($_POST('enviar'))) {
	$numero1 = $_POST['numero1'];
	$numero2 = $_POST['numero2'];

 $resultado = somar($numero1, $numero2);

	echo "A soma de $numero1 e $numero2 é igual a: $resultado";
} else {
	echo "Por favor, preencha o formulário e envie os valores.";
}

	?>
</body>
</html>