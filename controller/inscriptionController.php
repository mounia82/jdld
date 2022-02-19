<?php
    include("models/User.php");
    $er_nom = "";
    $er_mail = "";
    $er_mdp = ""; 
    
    // S'il y a une session alors on ne retourne plus sur cette page
    if (isset($_SESSION['id'])){
        header('Location: index.php'); 
        exit;
    }

 
    // Si la variable "$_Post" contient des informations alors on les traitres
    if(!empty($_POST)){
        $userDB = new User();
        extract($_POST);
        $valid =true;
 
        // On se place sur le bon formulaire grâce au "name" de la balise "input"
        if (isset($_POST['inscription'])){
            $nom  = htmlentities(trim($nom)); // On récupère le nom/trim pour enlever les espaces avant et aprés
            $mail = htmlentities(strtolower(trim($mail))); // On récupère le mail et qu'il soit en miniscule
            $mdp = trim($mdp); // On récupère le mot de passe 
            $confmdp = trim($confmdp); //  On récupère la confirmation du mot de passe
 
            //  Vérification du nom
            if(empty($nom)){
                $valid = false;
                $er_nom = "Le nom d' utilisateur ne peut pas être vide";
            }       
 
            // Vérification du mail
            if(empty($mail)){
                $valid = false;
                $er_mail = "Le mail ne peut pas être vide";
 
                // On vérifit que le mail est dans le bon format
            }elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)){
                $valid = false;
                $er_mail = "Le mail n'est pas valide";
 
            } else{
                // On vérifit que le mail est disponible
                
                if ($userDB->exist($mail)){
                    $valid = false;
                    $er_mail = "Ce mail existe déjà";
                }
                else{
                    $valid = true;
                }
            }
 
            // Vérification du mot de passe
            if(empty($mdp)) {
                $valid = false;
                $er_mdp = "Le mot de passe ne peut pas être vide";
 
            }elseif($mdp != $confmdp){
                $valid = false;
                $er_mdp = "La confirmation du mot de passe ne correspond pas";
            }
 
            // Si toutes les conditions sont remplies alors on fait le traitement
            if($valid){
                echo "<h1>Enregistrement</h1>";
                // print_r($nom);
                $id = $userDB->insert($nom, $mail, $mdp);
                if($id != null){
                    header('Location:?section=connexion');
                }
        
                // $mdp = crypt($mdp, '$6$rounds=5000$<fnygje<rwhdfgrfvgqerterfvslooyht$');
                // $date_creation_compte = date('Y-m-d H:i:s');
 
                // // On insert nos données dans la table utilisateur
                // $DB->insert("INSERT INTO utilisateur (nom, mail, mdp, date_creation_compte) VALUES 
                //     (?, ?, ?, ?)", 
                //     array($nom, $mail, $mdp, $date_creation_compte));
 
                //header('Location: index.php');
            }
            // else{
            //     print_r($er_mail);
            //     print_r($er_mdp);
            //     print_r($er_nom);
            // }
        }
    }
 
    include("views/page/inscription.php");
    
?>