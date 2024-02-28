<form action="app/cadastraUser.php" method="post">
    <div class="titulo">
        <h1><b>Logar</b></h1>
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
    <button><a href="cadastro">Não tem login? Cadastre-se</a></button>
</div>