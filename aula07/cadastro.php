<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os valores dos campos do formulário
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $matricula = $_POST['matricula'];
    $curso = $_POST['curso'];
    $email_curso = $_POST['email_curso'];

$conexao = mysqli_connect("local_host", "root", "", "aula_php");

if (!conexao) {
	die("Erro de conexão com o Banco de Dados");
}
	
	$sql = "INSERT INTO alunos (nome, endereço, cidade) VALUES ('$nome', '$endereço', '$cidade')";

	$resultado = mysqli_query($conexao, $sql);

	mysqli_close($conexao);

    if (empty($nome) || empty($email_curso)) {
        header("Location: falha.php");
        exit;
    } else {
        header("Location: sucesso.php");
        exit;
    }
} else {
    header("Location: agradecimento.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro</title>
</head>
<body>
</body>
</html>
