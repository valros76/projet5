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
    <header id="homeHead">
        <h1>Home</h1>
        <nav id="homeMenuContainer">
            <ul id="homeMenu">
                <li class="homeLinks"><a href="?action=home">Acceuil</a></li>
                <li><a href="?action=connexion">Se connecter</a></li>
            </ul>
        </nav>
    </header>

    <section id="homeContent">
        <h2>Inscription</h2>
        <article class="art">
            <h3>Formulaire d'inscription</h3>
            <div class="textArticleHome">
                <form action="?action=new_inscription" method="post">
                    <p>
                        <label for="pseudo">Pseudo</label>
                        <input type="text" name="pseudo"/>
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password"/>
                        <label for="confirmPassword">Confirmer le mot de passe</label>
                        <input type="password" name="confirmPassword"/>
                        <label for="email">Email</label>
                        <input type="email" name="email"/>
                        <br/><br/>
                        <input type="submit" value="S'inscrire" name="inscription"/>
                    </p>
                </form>
            </div>
        </article>
    </section>

    <footer id="homeFoot">
        <p>Site développé par Valérian Dufrène. -2018</p>
    </footer>
</body>
</html>