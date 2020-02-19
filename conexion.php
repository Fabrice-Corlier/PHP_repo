<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>| Connection</title>
</head>

<body>
    <?php include_once 'templates/header.php' ?>
    <main id="main-co">
        <form action="./controllers/log.php" method="POST">
            <label for="name">votre pseudo</label>
            <input type="text" name="name" value="Pseudo">
            <label for="password">Votre mot de passe</label>
            <input type="text" name="password" value="Mot de passe"> -->
            <input id="submit" type="submit" value="Valider">
        </form>
    </main>
    <?php include_once 'templates/footer.php' ?>
</body>

</html>