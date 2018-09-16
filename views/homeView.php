<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="templates/css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <header id="homeHead">
            <h1>Home</h1>
            <nav id="homeMenuContainer">
                <ul id="homeMenu">
                    <?php 
                        if(!isset($_SESSION['pseudo'])){
                            echo '<li class="homeLinks"><a href="?action=inscription">S\'inscrire</a></li>';
                            echo '<li class="homeLinks"><a href="?action=connexion">Se connecter</a></li>';
                        }
                        else{
                            echo '<li class="homeLinks"><a href="?action=portfolio">Portfolio</a></li>';
                            echo '<li class="homeLinks"><a href="?action=bonus">Bonus</a></li>';
                            echo '<li class="homeLinks"><a href="?action=profil">Profil</a></li>';
                            echo '<li class="homeLinks"><a href="?action=deconnexion">Se déconnecter</a></li>';
                        }
                    ?>
                </ul>
            </nav>
        </header>

        <section id="homeContent">
            <h2>Message de bienvenue</h2>
            <article class="art">
                <h3>Bienvenue <?php if(isset($_SESSION['pseudo'])){echo $_SESSION['pseudo'];} else{ echo '';} ;?></h3>
                <div class="textArticleHome">
                    <p>
                        Bonjour,<br/>
                        vous êtes sur le site de Valérian Dufrène.
                    </p>
                    <p>
                        Ce site est une vitrine visant à présenter les projets que j'ai réalisé.
                    </p>
                </div>
            </article>
        </section>

        <footer id="homeFoot">
            <p>Site développé par Valérian Dufrène - 2018</p>
        </footer>
    </div>
</body>
</html>