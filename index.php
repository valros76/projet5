<?php
    session_start();
    function loadClass($class){
        require 'models/classes/'.$class.'.php';
    }
    spl_autoload_register('loadClass');
    require('controllers/controller.php');
    if(isset($_GET['action'])){
        if($_GET['action'] === 'home'){
            home();
        }
        if($_GET['action'] === 'inscription'){
            inscription();
        }
        if($_GET['action'] === 'new_inscription'){
            new_inscription();
        }
        if($_GET['action'] === 'connexion'){
            connexion();
        }
        if($_GET['action'] === 'connect'){
            connect();
        }
        if($_GET['action'] === 'deconnexion'){
            deconnexion();
        }
        if($_GET['action'] === 'portfolio'){
            portfolio();
        }
        if($_GET['action'] === 'profil'){
            profil();
        }
        if($_GET['action'] === 'bonus'){
            bonus();
        }
        if($_GET['action'] === 'shifumi'){
            shifumi();
        }
    }
    else{
        home();
    }
?>