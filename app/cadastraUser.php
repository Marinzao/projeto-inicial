<?php

//variaveis formulario
// $_SERVER['REQUEST_METHOD'] == "POST"
if (!empty($_POST)) {

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    //verificar email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $resultadoemail = mysqli_query($conn, $sql);
    if (mysqli_num_rows($resultadoemail) > 0) {

        //checar senha
        $sql = "SELECT * FROM users WHERE `email`='$email' and `password`='$senha'";
        $resultadosenha = mysqli_query($conn, $sql);
        if (mysqli_num_rows($resultadosenha) > 0) {

            // Tela de boas-vindas
            $sql = "SELECT * FROM users";
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
}
// else {
//     die();
// }
