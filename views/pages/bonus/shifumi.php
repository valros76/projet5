
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="templates/css/shifumiStyle.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini-jeu Shifumi</title>
</head>
<body>
    <header id="homeHead">
        <h1>Home</h1>
        <nav id="homeMenuContainer">
            <ul id="homeMenu">
                <li class="homeLinks"><a href="?action=home">Acceuil</a></li>
                <li class="homeLinks"><a href="?action=portfolio">Portfolio</a></li>
                <li class="homeLinks"><a href="?action=profil">Profil</a></li>
                <li class="homeLinks"><a href="?action=bonus">Bonus</a></li>
            </ul>
        </nav>
    </header>

    <section id="homeContent">
        <h2>Mini-jeu : Shifumi</h2>
        <article class="art">
            <h3>Shifumi</h3>
            <div class="textArticleHome">
                <button id="buttoniser">Pierre</button>
                <button id="buttoniser">Feuille</button>
                <button id="buttoniser">Ciseaux</button>
                <hr/>
                <div id="resultatJoueur" style="display:inline-block;">
                    <?php echo ucfirst($_SESSION['pseudo']);?> : X
                </div>
                <hr width="50px"/>
                <div>
                    VS
                </div>
                <hr width="50px"/>
                <div id="resultatRobot" style="display:inline-block;">
                    Robot : X
                </div>
                <br/>
                <br/>
                <hr/>
                <div class="resultat">
                </div>
                <hr/>
            </div>
        </article>
    </section>

    <footer id="homeFoot">
        <p>Site développé par Valérian Dufrène. -2018</p>
    </footer>

    <script>
		const buttons = document.querySelectorAll("button");
		
		for(let i = 0; i < buttons.length; i++){
			buttons[i].addEventListener("click", function() {
				const joueur = buttons[i].innerHTML;
				const robot = buttons[Math.floor(Math.random() * buttons.length)].innerHTML;

				let resultat = "";

				if(joueur === robot){
					resultat = "Egalité !";
				}
				else if ((joueur === "Pierre" && robot === "Ciseaux") || (joueur === "Feuille" && robot === "Pierre") || (joueur === "Ciseaux" && robot === "Feuille")){
					resultat = "Gagné !";
				}
				else{
					resultat = "Perdu !";
				}

				document.querySelector(".resultat").innerHTML = `${resultat}`;

				document.getElementById("resultatJoueur").innerHTML = `<?php echo ucfirst($_SESSION['pseudo']); ?> : ${joueur}`;
				document.getElementById("resultatRobot").innerHTML = `Robot : ${robot}`;
			});
		}
	</script>
</body>
</html>