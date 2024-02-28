<?php

//variaveis conexao server
$servername = "localhost";
$username = "root";
$password = "";
$database = "login_data";

// Criar conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>