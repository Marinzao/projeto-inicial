<?php
include 'app/cadastraUser.php';
$color = "#bbb";
$url = "assets/img/bg.jpg";
?>

<img src="assets/img/logo.png" style="position: absolute; left:40px; top:40px" width="100vw" alt="Logo" /></div>


<div class="d-flex align-items-center justify-content-center" style="min-height: 100vh; background-image:url('<?= $url ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-8 mx-auto card shadow py-3 px-5">
                <form method="post">
                    <div class="titulo">
                        <h3>Cadastre-se</h3>
                    </div>
                    <div class="form-group mt-3">
                        <label class="form-label" for="name">Nome</label>
                        <input id="name" name="name" class="form-input" type="text" />
                    </div>
                    <div class="form-group mt-3">
                        <label class="form-label" for="email">E-mail</label>
                        <input id="email"  name="email" class="form-input" type="text" />
                    </div>
                    <div class="form-group mt-3">
                        <label class="form-label" for="user">Usuário</label>
                        <input id="user" name="user" class="form-input" type="text" />
                    </div>
                    <div class="form-group mt-3">
                        <div class="input-group mb-3">
                            <label class="form-label" for="password">Senha</label>
                            <input id="password" name="password" class="form-input form-control border-0" type="password" />
                            <div class="input-group-prepend position-absolute" style="z-index: 99; right:0px; top:4px" id="eye_password">
                                <span class="input-group-text bg-white rounded-0 border-0">
                                    <i class="fa fa-eye" id="icon_eye_pass"></i>
                                </span>
                            </div>
                        </div>
                        <div class="w-100">
                            <span>
                                Sua senha deve conter:
                            </span>
                            <ul>
                                <li>No mínimo 8 caracteres</li>
                                <li>No mínimo 1 letra maiúscula</li>
                                <li>No mínimo 1 número</li>
                            </ul>
                        </div>
                    </div>
                    <?= isset($error) ? "<div class='text-danger my-2'>$error</div>" : "" ?>
                    <div class="w-100 text-end">
                    </div>
                    <div class="w-100 my-3 d-flex justify-content-end">
                        <button class="btn btn-dark w-100" type="submit">Continuar</button>
                    </div>
                    <div class="">
                        <a href="login" class="text-black">Já tem uma conta?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>