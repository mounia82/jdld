<?php
    require_once("models/ConnexionDB.php");
    $DB = new ConnexionDB();
    // S'il y a une session alors on ne retourne plus sur cette page
    if(!empty($_POST)){
    extract($_POST); // Si la variable  contient des informations alors on les traitres
    $valid = true;
            if (isset($_POST['connexion'])){
                    $mail = htmlentities(strtolower(trim($mail)));
                    $mdp = trim($mdp);
                    if(empty($mail)){ // Vérification qu'il y est bien un mail de renseigné
                        $valid = false;
                            $er_mail = "Il faut mettre un mail";
                    }
                    if(empty($mdp)){ // Vérification qu'il y est bien un mot de passe de renseigné
                        $valid = false;
                            $er_mdp = "Il faut mettre un mot de passe";
                        }
                    // On fait une requête pour savoir si le couple mail / mot de passe existe bien car le mail est unique !
                    $motDePasseHashed = crypt($mdp, '$6$rounds=5000$<fnygje<rwhdfgrfvgqerterfvslooyht$');
                    $req = $DB->query('SELECT * FROM utilisateur WHERE mail = ? AND mdp = ?', array($mail, $motDePasseHashed));
                    $mailFetch = $req->fetch();
                    /* ?><pre><?= print_r($mailFetch,1); ?></pre><?php*/
                    // Si on a pas de résultat alors c'est qu'il n'y a pas d'utilisateur correspondant au couple mail / mot de passe
                    if (isset($mailFetch["mail"])){
                            $valid = false;
                            $er_mail = "Le mail ou le mot de passe est incorrecte";
                        }
                    // Si le token n'est pas vide alors on ne l'autorise pas à accéder au site
                    if($mailFetch['token'] <> NULL){
                            $valid = false;
                            $er_mail = "Le compte n'a pas été validé";
                    }
                    // S'il y a un résultat alors on va charger la SESSION de l'utilisateur en utilisateur les variables $_SESSION
                    if($valid){
                            $_SESSION['id'] = $mailFetch['id']; // id de l'utilisateur unique pour les requêtes futures
                            $_SESSION['nom'] = $mailFetch['nom'];
                            $_SESSION['mail'] = $mailFetch['mail'];
                            //header('Location:?section=accueil');
                    } exit;
            }
    }
    require_once('views/page/connexion.php');
