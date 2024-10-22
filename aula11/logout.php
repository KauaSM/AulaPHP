<?php
setcookie("autenticado","", time() - 3600);
header("location: login.php");
exit;
