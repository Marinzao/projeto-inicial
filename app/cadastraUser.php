<?php
if (isset($_POST) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $params = $_POST;
    $password = password_hash($params['password'], PASSWORD_DEFAULT);
    $insert = db_query("INSERT INTO `users`(`full_name`,`user`,`email`,`password`) VALUES('$params[name]','$params[user]','$password','$params[email]')");
    if ($insert === false) {
        echo "Erro ao cadastrar usuário";
    } else {
        echo "Usuário cadastrado com sucesso";
    }
}
