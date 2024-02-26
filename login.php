<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="background">
        <img src="assets/img/R.jpg" alt="background" height="100%" width="100%">
    </div>
    <div class="container">
        <div class="item item-1">
            <div class="Formulário">
                <?php

                //mensagem de erro caso email/senha incorreto
                if (isset($_GET['erro']) && $_GET['erro'] === "senhaincorreta") {
                    echo '<span class="erro">Senha incorreta! Tente novamente.</span>';
                }
                if (isset($_GET['erro']) && $_GET['erro'] === "emailinexistente") {
                    echo '<span class="erro">Email inexistente! Tente novamente.</span>';
                }
                ?>
            </div>
            <!-- Formulario de login -->
            <form action="includes/formhandler2.php" method="post">
                <div class="titulo">
                    <h1><u>Logar</u></h1>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="email"><u>Email:</u></label>
                        <input id="email" type="text" name="email" placeholder="digite seu email aqui" required>
                    </div>
                    <div class="input-box">
                        <label for="senha"><u>Senha:</u></label>
                        <input id="senha" type="password" name="senha" placeholder="digite sua senha aqui" required>
                    </div>
                </div>
                <div class="botao-continuar">
                    <button type="submit">continuar</button>
                </div>
            </form>
            <div class="botao-login">
                <button type="submit"><a href="index.php">não tem login? cadastre-se</a></button>
            </div>
        </div>
    </div>
    </div>
</body>

</html>