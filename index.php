<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>| Accueil</title>
</head>

<body>
    <header>
        <?php include_once 'templates/header.php' ?>
    </header>
    <main>
        <div class="backg-img">
            <h2><?= $_SESSION['name'] ?></h2>
            <div>
                <?php if (!isset($_SESSION['img'])) : ?>
                    <img src="/img/hogarth-de-la-plante-FhzsnfrqRjM-unsplash.jpg">
                <?php endif ?>
            </div>
        </div>
    </main>
    <?php include_once 'templates/footer.php' ?>
</body>

</html>