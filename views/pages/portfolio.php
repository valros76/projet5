<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="templates/css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon portfolio</title>
</head>
<body>
    <header id="homeHead">
        <h1>Portfolio</h1>
        <nav id="homeMenuContainer">
            <ul id="homeMenu">
                <li class="homeLinks"><a href="?action=home">Acceuil</a></li>
                <li class="homeLinks"><a href="?action=profil">Profil</a></li>
                <li class="homeLinks"><a href="?action=bonus">Bonus</a></li>
                <li class="homeLinks"><a href="?action=deconnexion">Se déconnecter</a></li>
            </ul>
        </nav>
    </header>

    <section id="homeContent">
        <h2>Mon portfolio</h2>
        <article class="art">
            <h3>Mes projets</h3>
            <div class="textArticleHome">
                Tous mes projets seront affichés sur cette page.<br/>
                Si vous cliquez sur l'image de présentation du projet,<br/>
                vous serez redirigés vers le site où ils sont hébergés.
            </div>
        </article>
        <article class="art">
            <h3>Projet 1 - WebAgency</h3>
            <div class="textArticleHome">
                J'ai travaillé sur ce projet lors de ma formation Développeur Web Junior.<br/>
                C'est le premier projet que j'ai présenté lors d'une soutenance.<br/>
                Un cahier des charges à suivre avec pour particularité le développement du site en HTML/CSS pur.<br/><br/>
                <p class="imgs_projets"><a href="https://valerian-dufrene.000webhostapp.com/" target="_blank"><img src="assets/img/projet1_mini.png" alt="projet1_mini" name="projet1_mini"/></a></p>
            </div>
        </article>

        <article class="art">
            <h3>Projet 2 - Wordpress</h3>
            <div class="textArticleHome">
                J'ai travaillé sur ce projet lors de ma formation Développeur Web Junior.<br/>
                C'est le deuxième projet que j'ai présenté lors d'une soutenance.<br/>
                Un cahier des charges à suivre avec pour particulatité le développement du site avec le CMS Wordpress et possibilité de modifier le css manuellement.<br/><br/>
                <p class="imgs_projets"><a href="http://dev-openstrasbourg.pantheonsite.io/" target="_blank"><img src="assets/img/projet2_mini.png" alt="projet2_mini" name="projet2_mini"/></a></p>
            </div>
        </article>

        <article class="art">
            <h3>Projet 3 - Velo'V Lyon</h3>
            <div class="textArticleHome">
                J'ai travaillé sur ce projet lors de ma formation Développeur Web Junior.<br/>
                C'est le troisième projet que j'ai présenté lors d'une soutenance.<br/>
                Un cahier des charges à suivre avec pour particulatité le développement du site en HTML/CSS et ajout de Javascript pur (orienté objet).<br/><br/>
                <p class="imgs_projets"><a href="https://velo-v-valros.000webhostapp.com/" target="_blank"><img src="assets/img/projet3_mini.png" alt="projet3_mini" name="projet3_mini"/></a></p>
            </div>
        </article>

        <article class="art">
            <h3>Projet 4 - Créer un blog pour un écrivain</h3>
            <div class="textArticleHome">
                J'ai travaillé sur ce projet lors de ma formation Développeur Web Junior.<br/>
                C'est le quatrième projet que j'ai présenté lors d'une soutenance.<br/>
                Un cahier des charges à suivre avec pour particulatité le développement du site en HTML/CSS et ajout de PHP pur (orienté objet).<br/><br/>
                <p class="imgs_projets"><a href="" target="" onclick="javascript:alert('Le projet n\'est pas encore présenté. Il sera accessible une fois validé.')"><img src="assets/img/projet4_mini.png" alt="projet4_mini" name="projet4_mini"/></a></p>
            </div>
        </article>

        <br/><br/>
        <h2>Autres projets</h2>
        <article class="art">
            <h3>Shifumi - Ref : Page des bonus.</h3>
            <div class="textArticleHome">
                J'ai réalisé une page permettant de jouer au Shifumi.<br/>
                Ce jeu est présent sur la page bonus de ce site.<br/>
                <p class="imgs_projets"><a href="?action=shifumi" target="_blank"><img src="assets/img/shifumi01.png" alt="Shifumi01" name=""/></a></p>
            </div>
        </article>
        
        <article class="art">
            <h3></h3>
            <div class="textArticleHome">
                <p class="imgs_projets"><a href="bonus/" target="_blank" ><img src="assets/img/" alt="imgProjet*" name=""/></a></p>
            </div>
        </article>
    </section>

    <footer id="homeFoot">
        <p>Site développé par Valérian Dufrène. -2018</p>
    </footer>
</body>
</html>