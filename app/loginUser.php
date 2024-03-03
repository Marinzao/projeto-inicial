<?php

if (isset($_POST) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $params = $_POST;
    $user = db_query("SELECT * FROM `users` WHERE `email`='$params[email]'");
    $user = mysqli_fetch_all($user, MYSQLI_ASSOC);

    if ($user === false || empty($user) || is_null($user)) {
        $incorrect = true;
    } else {
        if (!empty($user) || !is_null($user)) {
            foreach ($user as $data) {
                if (password_verify($params['password'], $data['password'])) {
                    $_SESSION['login_status'] = true;
                    header("Location:/projeto-inicial/");
                } else {
                    $incorrect = true;
                }
            }
        }
    }
}
