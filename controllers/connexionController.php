<?php
    require_once("models/User.php");
    // $DB = new ConnexionDB();
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
            
            $dbUser = new User();
            $user = $dbUser->verify($mail, $mdp);
         
            /* ?><pre><?= print_r($mailFetch,1); ?></pre><?php*/
            // Si on a pas de résultat alors c'est qu'il n'y a pas d'utilisateur correspondant au couple mail / mot de passe
            if (!isset($user["mail"])){
                    $valid = false;
                    $er_mail = "Le mail ou le mot de passe est incorrecte";
                }
            
            // S'il y a un résultat alors on va charger la SESSION de l'utilisateur en utilisateur les variables $_SESSION
            if($valid){
                    $_SESSION['id'] = $user['id']; // id de l'utilisateur unique pour les requêtes futures
                    $_SESSION['nom'] = $user['nom'];
                    $_SESSION['mail'] = $user['mail'];
                    header('Location:?section=accueil');
            
            } exit;
                            
        }
                            
    }
    
    require_once('views/page/connexion.php');
?>