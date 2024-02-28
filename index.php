<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$_GET['url']?></title>
    <link rel="stylesheet" href="assets/css/styleR.css">
</head>

<body>
    <div class="background">
        <img src="assets/img/R.jpg" alt="background" height="100%" width="100%">
    </div>
    <div class="container">
        <div class="item item-1">
            <div class="Formulário">
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