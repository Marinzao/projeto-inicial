<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="background">
        <img src="assets/img/R.jpg" alt="background" height="100%" width="100%">
    </div>
    <div class="container">
        <div class="item">
            <?php

            //mensagem de erro login existente
            if (isset($_GET['erro']) && $_GET['erro'] === "loginexistente") {
                echo '<span class="erro">Esse Usuário ou email ja foi utilizado! Tente novamente.</span>';
            }

            //mensagem de sucesso
            if (isset($_GET['sucess']) && $_GET['sucess'] === "logincriado") {
                echo '<span class="sucess">Login criado com sucesso!</span>';
            }
            ?>
            <div class="Formulário">
                <form action="includes/formhandler.php" method="post">
                    <div class="titulo">
                        <h1><u>Cadastre-se</u></h1>
                    </div>
                    <div class="input-group">
                        <div class="input-box">
                            <label for="nome"><u>Nome Completo:</u></label>
                            <input id="nome" type="text" name="nome" placeholder="digite seu nome aqui" required>
                        </div>
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
                    <button type="submit" class="botao-login"><a href="login.php">já possui login? clique
                            aqui</a></button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>