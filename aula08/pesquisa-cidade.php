<?php
include_once("conectar.php");
$pesquisa = $_POST['cidade'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<table border='1' style='widht:50%'>
		<tr>
			<th>NOME</th>
			<th>CIDADE</th>
			<th>ENDEREÇO</th>
		</tr>

	<?php
			$sql ="SELECT * FROM alunos WHERE cidade = '$pesquisa'";
			$resultado = myslqi_query($strcon, $sql);
		

		while ($registro = mysqli_fetch_array($resultado));

	 	{
		$nome = $registro["cidade"];
		$endereco = ['endereço'];
		$cidade = ['cidade'];
			echo "<tr>";
			echo "<td>" . $nome . "<td>";
			echo "<td>" . $endereco . "<td>";
			echo "<td>" . $cidade . "<td>";
			echo "</tr>";
		}

		mysqli_close($strcon);
		echo '</table>';
	?>
</body>
</html>