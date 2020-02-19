<header>
    <div id='menu'>
        <nav>
            <ul>
                <span>Aérodrome Duval</span>
                <img class="logo" src="./img/2379.jpg">
                <?php if (isset($_SESSION['name']) && $_SESSION['password']) : ?>
                    <li><a href='controllers/logout.php'>Deconnection</a>
                    <li><a href='setings.php'>Paramètres</a></li>
                    <li><a href='infos.php'>Infos</a></li>
                <?php else : ?>
                    <li><a href='conexion.php'>Connection</a></li>
                <?php endif ?>
                <li class='profil'><a href='/'>Accueil</a></li>

            </ul>
        </nav>
    </div>
</header>