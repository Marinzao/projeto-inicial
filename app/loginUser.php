<?php

if (isset($_POST) && $_SERVER['REQUEST_METHOD'] == "POST") {

    $params = $_POST;

    $user = db_query("SELECT * FROM `users` WHERE `email`='$params[email]' && `password`='$params[password]'");
    if ($user === false) {
        echo "Erro ao logar";
    } else {
       foreach($user as $data){
        echo "olá user";
       }
    }
}
