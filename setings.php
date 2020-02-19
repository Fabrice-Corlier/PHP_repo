<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/png" href="img/game.png" />
    <title>| Settings</title>
</head>

<body>
    <?php include_once 'templates/header.php' ?>
    <main>
        <form action="./controllers/param.php" method="POST" class="flex">
            <input type="checkbox" id="display-param1" name="info" value="on">
            <label for="display-param1">Souhaitez-vous vous masquer les informations ?</label> -->
            <input type="checkbox" id="display-param2" name="img" value="on">
            <label for="display-param2">Souhaitez-vous masquer l'image de fond ?</label>
            <input type="submit" value="valider">
        </form>

    </main>
    <footer>
        <?php include_once 'templates/footer.php' ?>
    </footer>