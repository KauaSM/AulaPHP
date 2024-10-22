<?php
session_start();

$_SESSION['nome'] = "Aluno";
$_SESSION["sobrenome"] = "Dois";
$_SESSION["data"] = date('d/m/y', time());

echo "<h2> As variáveis de sessão foram definidas.</h2>";
echo "<a href='MostraSessao.php'> Dados da Sessão </a>";
