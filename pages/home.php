<?php
if ((isset($_SESSION['login_status']) && $_SESSION['login_status'] == false) || !isset($_SESSION['login_status'])) {
    header("Location:/projeto-inicial/login");
}
?>

voce está logado