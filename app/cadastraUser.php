<?php
if (isset($_POST) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $params = $_POST;
    if (empty($params['name']) || empty($params['user']) || empty($params['email']) || empty($params['password'])) {
        $error = "Preencha todos os campos";
        return;
    }
    $password = password_hash($params['password'], PASSWORD_DEFAULT);
    $insert = db_query("INSERT INTO `users`(`full_name`,`user`,`email`,`password`) VALUES('$params[name]','$params[user]','$params[email]','$password')");
    if ($insert === false) {
        echo "Erro ao cadastrar usuário";
    } else {
        $_SESSION['login_status'] = true;
        header("Location:/projeto-inicial/");
    }
}
