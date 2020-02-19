<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>| Informations</title>
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
                    <?php if (!isset($_SESSION['info'])) : ?>
                        <div>
                            <ul class="tex">
                                <li>
                                    <div class="tex">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iste explicabo consequuntur necessitatibus magnam sit, ea aut aliquam nam voluptatem tempore at obcaecati, voluptatibus pariatur perspiciatis voluptates, sint mollitia dolor?</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="tex">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iste explicabo consequuntur necessitatibus magnam sit, ea aut aliquam nam voluptatem tempore at obcaecati, voluptatibus pariatur perspiciatis voluptates, sint mollitia dolor?</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="tex">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iste explicabo consequuntur necessitatibus magnam sit, ea aut aliquam nam voluptatem tempore at obcaecati, voluptatibus pariatur perspiciatis voluptates, sint mollitia dolor?</p>
                                    </div>
                                </li>
                            </ul>


                            <div class="tex">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iste explicabo consequuntur necessitatibus magnam sit, ea aut aliquam nam voluptatem tempore at obcaecati, voluptatibus pariatur perspiciatis voluptates, sint mollitia dolor?</p>
                            </div>

                            <div class="tex">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iste explicabo consequuntur necessitatibus magnam sit, ea aut aliquam nam voluptatem tempore at obcaecati, voluptatibus pariatur perspiciatis voluptates, sint mollitia dolor?</p>
                            </div>

                            <div class="img2">
                                <img class="img2" src=" img/cole-robinson-nAfUmqCnnsU-unsplash.jpg">

                            </div>
                        </div>
                    <?php endif ?>
                <?php endif ?>
            </div>
        </div>
    </main>
    <?php include_once 'templates/footer.php' ?>
</body>

</html>