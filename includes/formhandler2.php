<?php 
//variaveis conexao server
$servername = "localhost";
$username = "root"; // usuário padrão do XAMPP
$password = ""; // senha vazia por padrão
$database = "login_data";

//variaveis formulario
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];
} else {
    die();
}

// Criar conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

//verificar email
$sql = "SELECT * FROM datalogin WHERE email='$email'";
$resultadoemail = mysqli_query($conn, $sql);
if (mysqli_num_rows($resultadoemail) > 0) {

    //checar senha
    $sql = "SELECT * FROM datalogin WHERE email='$email' and senha='$senha'";
    $resultadosenha = mysqli_query($conn, $sql);
    if (mysqli_num_rows($resultadosenha) > 0) {

        // Tela de boas-vindas
        $sql = "SELECT * FROM datalogin";
        $dados = mysqli_query($conn, $sql);
        while ($aux = $dados->fetch_assoc()) {
            echo "Bem vindo ";
            echo $aux['nome'] . "<br />";
        }
    } else {
        die("senha incorreta");
    }
} else { 
    die("login inexistente");
    }
?>