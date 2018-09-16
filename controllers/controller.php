<?php

    function home(){
        require('views/homeView.php');
    }

    function inscription(){
        require('views/pages/inscription.php');
    }

    function new_inscription(){
        if($_POST['pseudo'] != null && $_POST['password'] != null && $_POST['confirmPassword'] && $_POST['email'] != null){
                $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
                $user = new User([
                    'pseudo' => $_POST['pseudo'],
                    'password' => $pass_hash,
                    'email' => $_POST['email']
                ]);
                
                $bdd = dbConnect();
        
                $manager = new UsersManager($bdd);
        
                if(!$user->nomValide()){
                    echo 'Le nom choisi est invalide.';
                    unset($user);
                }
                elseif($manager->exists($user->pseudo())){
                    echo 'Ce nom est déjà pris.';
                    unset($user);
                }
                elseif(!$user->emailValide()){
                    echo 'Cet email est invalide.';
                    unset($user);
                }
                elseif($manager->exists($user->email())){
                    echo 'Cet email est déjà utilisé.';
                    unset($user);
                }
                else{
                    $manager->add($user);
                }
            }
            else{
                echo 'Un des champs est mal rempli / les mots de passes ne correspondent pas.';
            }
        
        
        header('Location:'.connexion());
    }

    function connexion(){
        require('views/pages/connexion.php');
    }

    function connect(){
        $pseudo = $_POST['pseudo'];
        $bdd = dbConnect();
        $req = $bdd->prepare('SELECT id,password FROM users WHERE pseudo = :pseudo');
        $req->execute(array(
            'pseudo' => $pseudo));
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
        $req->closeCursor();
        $group_id = $bdd->prepare('SELECT id_group FROM users WHERE pseudo = :pseudo');
        $group_id->execute(array(
            'pseudo' => $pseudo));
        $id_group = $group_id->fetch(PDO::FETCH_ASSOC);
        $group_id->closeCursor();
        $group_name = $bdd->prepare('SELECT group_name FROM users WHERE pseudo = :pseudo');
        $group_name->execute(array(
            'pseudo' => $pseudo));
        $name_group = $group_name->fetch(PDO::FETCH_ASSOC);
        $group_name->closeCursor();

        $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

        if(!$resultat){
            echo 'Mauvais identifiant ou mot de passe.';
        }
        else{
            if($isPasswordCorrect){
                session_start();
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['id_group'] = $id_group['id_group'];
                $_SESSION['group_name'] = $name_group['name'];
                echo 'Vous êtes connecté !';
            }
            else{
                echo 'Mauvais identifiant ou mot de passe.';
            }
        }

        header('Location:index.php');
    }

    function deconnexion(){
        session_start();

        $_SESSION = array();
        session_destroy();

        echo 'Vous êtes déconnectés !';

        header('Location:index.php');
    }

    function portfolio(){
        require('views/pages/portfolio.php');
    }

    function profil(){
        require('views/pages/profil.php');
    }

    function profilInfos(){
        $bdd = dbConnect();

        $manager = new UsersManager($bdd);
        $infos = $manager->get($_SESSION['pseudo']);
        $pseudo = $infos->pseudo();
        $email = $infos->email();
        $id_group = $infos->id_group();
        $group_name = $infos->group_name();
    }

    function bonus(){
        require('views/pages/bonus/bonus.php');
    }

    function shifumi(){
        require('views/pages/bonus/shifumi.php');
    }

    function dbConnect(){
        $database = parse_ini_file('config/bdd.ini');
        $host = $database['host'];
        $dbname = $database['dbname'];
        $username = $database['username'];
        $password = $database['password'];
        try{
            $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $bdd;
        }
        catch(Exception $e){
            die('Erreur : ' .$e->getMessage());
        }
    }

?>