<?php

require_once 'Pessoa.php';

$pessoa1 = new Pessoa("João", 30, "00435635486");

echo $pessoa1->saudacao();
