<?php

// Conecta ao banco de dados
$mysqli = new mysqli('localhost', 'root', '', 'bdagencia1');

// Verifica se ocorreu algum erro
if (mysqli_connect_errno()) {
    die('NÃ£o foi possÃ­vel conectar-se ao banco de dados: ' . mysqli_connect_error());
    exit();
}
?>