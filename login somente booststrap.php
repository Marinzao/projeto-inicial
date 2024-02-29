<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-info text-dark">
    <section id="intro">
        <form>
            <div class="container-lg">
                <div class="row justify-content-center align-items-center">
                    <div
                        class="col-md-5 text-md-start text-center bg-light mt-5 rounded-5 border border-1 border-secondary shadow-lg">
                        <div class=" ms-3 me-5">
                            <div class=" display-2 mt-3">Cadastre-se</div>
                            <div class=" display-6 mt-5">Nome</div>
                            <div>
                                <input class="border-secondary rounded-pill form-control form-control-lg" text
                                    name="nome" placeholder="Digite seu nome aqui" required>
                            </div>
                            <div class=" display-6">Email</div>
                            <div>
                                <input class="border-secondary rounded-pill form-control form-control-lg" type="text"
                                    placeholder="Digite seu email aqui" name="email" required>
                            </div>
                            <div class=" display-6">Senha</div>
                            <div>
                                <input class="border-secondary rounded-pill form-control form-control-lg"
                                    placeholder="Digite sua senha aqui" type="password" name="senha" required>
                            </div>
                            <button class="rounded-pill text-dark btn btn-lg btn-secondary btn-outline-info mt-5 mb-3"
                                type="submit">Continuar</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>