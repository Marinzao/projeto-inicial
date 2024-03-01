<?php
if (isset($_POST) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $params = $_POST;
    $password = password_hash($params['password'], PASSWORD_DEFAULT);
    $insert = db_query("INSERT INTO `users`(`full_name`,`user`,`password`) VALUES('$params[name]','$params[user]','$password')");
    if ($insert === false) {
        echo "Erro ao cadastrar usuário";
    } else {
        echo "Usuário cadastrado com sucesso";
    }
}
