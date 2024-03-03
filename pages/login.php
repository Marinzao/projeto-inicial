<?php
include 'app/loginUser.php';
$color = "#bbb";
?>

<img src="assets/img/logo.png" style="position: absolute; left:40px; top:40px" width="200px" alt="Logo" /></div>


<div class="d-flex align-items-center justify-content-center" style="min-height: 100vh; background-color:<?= $color ?>">
    <div class="container">

        <div class="row">
            <div class="col-4 mx-auto card shadow py-3 px-5">
                <form method="post">
                    <div class="titulo">
                        <h3>Entrar</h3>
                    </div>
                    <div class="form-group mt-4">
                        <label class="form-label" for="email">E-mail</label>
                        <input id="email" name="email" class="form-input" type="text" />
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Senha</label>
                        <input id="password" name="password" class="form-input" type="password" />
                    </div>
                    <?= isset($incorrect) && $incorrect === true ? "<div class='text-danger my-2'>Usuário ou senha incorretos</div>" : "" ?>
                    <div class="form-check my-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Lembre-se de mim
                        </label>
                    </div>
                    <div class="w-100 my-2 d-flex justify-content-end">
                        <button class="btn btn-dark w-100" type="submit">Continuar</button>
                    </div>
                    <div class="">
                        <a href="cadastro" class="text-black">Não tem uma conta?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>