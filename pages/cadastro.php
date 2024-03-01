<?php

include 'app/cadastraUser.php';
?>
<form method="post">
    <div class="titulo">
        <h1><b>Cadastre-se</b></h1>
    </div>
    <div class="item inputs">
        <label for="nome">Nome:</label>
        <div class="item caixas">
            <input id="nome" type="text" name="nome" placeholder="Digite seu nome aqui" required>
        </div>
    </div>
    <div class="item inputs">
        <label for="email">Email:</label>
        <div class="item caixas">
            <input id="email" type="text" name="email" placeholder="Digite seu email aqui" required>
        </div>
    </div>
    <div class="item inputs">
        <label for="senha">Senha:</label>
        <div class="item caixas">
            <input id="senha" type="password" name="senha" placeholder="Digite sua senha aqui" required>
        </div>
    </div>
    <div class="item botaologin">
        <button type="submit">Continuar</button>
    </div>
</form>
<div class="botaocontinuar">
    <button><a href="login">Já possui um cadastro? Logue na sua conta</a></button>
</div>