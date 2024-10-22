<?php
$nome_cookie = "usuario";
$valor_cookie = "Aluno";

setcookie($nome_cookie, $valor_cookie, time() + 3600);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies$Sessions</title>

</head>

<body>
    <?php
    if (!isset($_COOKIE[$nome_cookie])) {
        echo "Cookie " . $nome_cookie . " não estava atribuido!";
    } else {
        echo "Cookie " . $nome_cookie . " está atribuído!<br>";

        echo "Valor: " . $_COOKIE[$nome_cookie];
    }
    ?>
</body>

</html>