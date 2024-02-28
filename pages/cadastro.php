<form method="post" action="app/cadastrauser.php">
    <div class="titulo">
        <h1><b>Cadastre-se</b></h1>
    </div>
    <div class="input-group">
        <div class="input-box">
            <label for="nome">Nome Completo:</label>
            <input id="nome" type="text" name="nome" placeholder="digite seu nome aqui" required>
        </div>
        <div class="input-box">
            <label for="email">Email:</label>
            <input id="email" type="text" name="email" placeholder="digite seu email aqui" required>
        </div>
        <div class="input-box">
            <label for="senha">Senha:</label>
            <input id="senha" type="password" name="senha" placeholder="digite sua senha aqui" required>
        </div>
    </div>
    <div class="botao-continuar">
        <button type="submit">continuar</button>
    </div>
</form>
<div class="botao-login">
    <a href="login">já possui login? clique aqui</a>
</div>