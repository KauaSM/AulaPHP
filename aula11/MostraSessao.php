<?php
session_start();

echo "<h2> Dados de Sessão: </h2>";

echo $_SESSION['nome'] . "<br>";
echo $_SESSION['sobrenome'] . "<br>";
echo $_SESSION['data'] . "<br>";

echo "<br><a href='DestroiSessao.php'> Sair</a>";
