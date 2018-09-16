<?php
$bdd = dbConnect();

$manager = new UsersManager($bdd);
$infos = $manager->get($_SESSION['pseudo']);
$pseudo = $infos->pseudo();
$email = $infos->email();
$id_group = $infos->id_group();
$group_name = $infos->group_name();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="templates/css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon profil</title>
</head>
<body>
    <header id="homeHead">
        <h1>Profil</h1>
        <nav id="homeMenuContainer">
            <ul id="homeMenu">
                <li class="homeLinks"><a href="?action=home">Acceuil</a></li>
                <li class="homeLinks"><a href="?action=portfolio">Portfolio</a></li>
                <li class="homeLinks"><a href="?action=bonus">Bonus</a></li>
                <li class="homeLinks"><a href="?action=deconnexion">Se déconnecter</a></li>
            </ul>
        </nav>
    </header>

    <section id="homeContent">
        <h2>Mon profil</h2>
        <article class="art">
            <h3>Mes informations</h3>
            <div class="textArticleHome">
                <?php 
                    echo '
                    <p>Mon pseudo : '.htmlspecialchars($pseudo) .'</p>
                    <p>Mon email : '. htmlspecialchars($email) .'</p>
                    <p>Mon ID_GROUP : '. htmlspecialchars($id_group) .'</p>
                    <p>Nom du groupe : '. htmlspecialchars($group_name) .'</p>
                    ';
                ?>
            </div>
        </article>
    </section>

    <footer id="homeFoot">
        <p>Site développé par Valérian Dufrène. -2018</p>
    </footer>
</body>
</html>