<?php
include 'app/cadastraUser.php';
$color = "#bbb";
?>
<div class="d-flex align-items-center justify-content-center" style="min-height: 100vh; background-color:<?= $color ?>">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto card shadow p-4">
                <form method="post">
                    <div class="titulo">
                        <h1>Login</h1>
                    </div>
                    <div>
                        <label class="form-label" for="nome">Usuário:</label>
                        <input class="form-control" id="nome" type="text" name="user" placeholder="Digite seu usuário" required>
                    </div>
                    <div>
                        <label class="form-label" for="senha">Senha:</label>
                        <input class="form-control" id="senha" type="password" name="password" placeholder="Digite sua senha aqui" required>
                    </div>
                    <div class="">
                        <a href="cadastro">Não tem uma conta?</a>
                    </div>
                    <div class="w-100 my-2 d-flex justify-content-end">
                        <button class="btn btn-dark" type="submit">Continuar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>