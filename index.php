<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $_GET['url'] ?>
    </title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="item item1">
            <div class="formulario">
                <?php
                if (isset($_GET['url'])) {
                    if (file_exists('pages/' . $_GET['url'] . '.php')) {
                        include 'pages/' . $_GET['url'] . '.php';
                    } else {
                        include 'pages/404.php';
                    }
                } else {
                    include 'pages/home.php';
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>