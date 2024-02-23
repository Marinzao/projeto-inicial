<?php
$servername = "localhost";
$username = "root"; // usuário padrão do XAMPP
$password = ""; // senha vazia por padrão
$database = "seu_banco_de_dados";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
echo "Conexão bem sucedida";

// Fechar conexão
$conn->close();
?>