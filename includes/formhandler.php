<?php
//variaveis conexao server
$servername = "localhost";
$username = "root"; // usuário padrão do XAMPP
$password = ""; // senha vazia por padrão
$database = "login_data";
//variaveis formulario
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
    }else{
        die();
    }
// Criar conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Inserir um novo registro na tabela "datalogin"
$sql = "INSERT INTO datalogin (nome, email, senha) VALUES ($nome, $email, $senha)";

if (mysqli_query($conn, $sql)) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
