<?php
if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario === "usuario" && $senha === 'senha123') {
        setcookie('autenticado', 'true', time() + 3600);
        header("location: conteudo_restriro.php");
        exit;
    } else {
        $mensagem_erro = "Credenciais inválidas. Tente novamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login</title>
</head>

<body>
    <h1>Página de Login</h1>
    <?php if (isset($mensagem_erro)) { ?>
        <p><?php echo $mensagem_erro; ?></php>
        <?php } ?>
        <form method="post">
            <label for="usuario">Usuário:</label>
            <input type="text" name="usuario" id="usuario">
            <br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
            <br>
            <input type="submit" name="login" value="login">
        </form>
</body>

</html>